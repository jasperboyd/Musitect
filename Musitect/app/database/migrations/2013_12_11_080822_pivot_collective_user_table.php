<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotCollectiveUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collective_user', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('collective_id')->unsigned()->index();
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('collective_id')->references('id')->on('collectives')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collective_user');
	}

}
