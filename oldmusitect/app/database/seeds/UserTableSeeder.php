<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = [
			[
				'username' => 'Jasper',
				'password' => Hash::make('aPassword'), 
				'email' => 'jboyd@clarku.edu'
			]
		];

		foreach ($users as $user)
        {
            User::create($user);
        }

		// Uncomment the below to run the seeder
		DB::table('users')->insert($user);
	}

}
