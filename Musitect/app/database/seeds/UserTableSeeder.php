<?php

class UserTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('users')->truncate();

		User::create(array( 'username' => 'jasperboyd', 'email' => 'jboyd@clarku.edu', 'first_name' => 'jasper', 'last_name' => 'boyd', 'password' => '1asdfzxcv', 'password_confirmation' => '1asdfzxcv'));
		//User::create(array( 'username' => 'hannahsnow', 'email' => 'hsnow@clarku.edu', 'password' => '1asdfzxcv', 'password_confirmation' => '1asdfzxcv'));
	}
}
