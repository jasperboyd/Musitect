<?php

class SongTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('songs')->truncate();

		Song::create(array( 'title' => 'Test Song', 'user_id' => '1', 'body' => 'Lorem Epsum'));
		Song::create(array( 'title' => 'Test Song 2', 'user_id' => '1', 'body' => 'Lorem Epsum'));
		//User::create(array( 'username' => 'hannahsnow', 'email' => 'hsnow@clarku.edu', 'password' => '1asdfzxcv', 'password_confirmation' => '1asdfzxcv'));
	}
}