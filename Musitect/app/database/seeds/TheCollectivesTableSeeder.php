<?php

class TheCollectivesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collectives')->truncate();

		Collective::create(array('name' => 'The Purest Cacophony', 'founder' => 'Jasper Boyd', 'member_number' => '1')); 
	}
}