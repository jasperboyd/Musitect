<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhrasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phrases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('song_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('lyric')->nullable(); 
			$table->string('chord')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phrases');
	}

}
