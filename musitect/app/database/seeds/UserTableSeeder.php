<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('user')->truncate();

		$user = array(

			User::create([
				'username' => 'jjbass',
				'email' => 'jjbass1230@gmail.com',
				'password' => '1234'
			]),

			User::create([
				'username' => 'hsnow',
				'email' => 'hsnow@gmail.com',
				'password' => '5678'
			])

		);

		// Uncomment the below to run the seeder
		DB::table('user')->insert($user);
	}

}
