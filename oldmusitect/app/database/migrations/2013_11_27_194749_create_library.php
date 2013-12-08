<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrary extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libraries', function(Blueprint $table){
			$table->increments('id'); 
			$table->string('title', 128);
			$table->integer('author_id');//evenutally plural
			$table->timestamps(); 
			//also contains songs
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('libraries');
	}

}