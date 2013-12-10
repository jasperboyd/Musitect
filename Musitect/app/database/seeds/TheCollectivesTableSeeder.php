<?php

class TheCollectivesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collectives')->truncate();

		Collective::create(array('name' => 'The Purest Cacophony', 'founder' => 'Jasper Boyd', 'founder_id' => 1, 'member_number' => 1)); 
		Collective::create(array('name' => 'The Halfs', 'founder' => 'Jasper Boyd & Nina Petropolous', 'founder_id' => 1, 'member_number' => 2));
		Collective::create(array('name' => 'The Hannah Snow Collective', 'founder' => 'Hannah Snow', 'founder_id' => 3, 'member_number' => 1)); 
	}
}