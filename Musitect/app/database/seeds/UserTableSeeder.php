<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('user')->truncate();

		User::create([
			'username' => 'Jasper'
			'email' => 'jasper@jboyd.co'
			'password' => '1234'
			]);
			
		User::create([
			'username' => 'Hannah'
			'email' => 'hannah@jboyd.co'
			'password' => '1234'
			]);
		
	}

}
