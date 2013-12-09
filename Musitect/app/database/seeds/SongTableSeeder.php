<?php

class SongTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('songs')->truncate();

		Song::create(array( 'title' => 'Test Song', 'user_id' => '1'));
		Song::create(array( 'title' => 'Test Song with Key', 'key' => 'C major', 'user_id' => '1'));
		Song::create(array( 'title' => 'Test Song with Tempo', 'tempo' => 120, 'user_id' => '1'));
		//User::create(array( 'username' => 'hannahsnow', 'email' => 'hsnow@clarku.edu', 'password' => '1asdfzxcv', 'password_confirmation' => '1asdfzxcv'));
	}
}
