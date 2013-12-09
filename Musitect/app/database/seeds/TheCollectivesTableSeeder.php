<?php

class TheCollectivesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collectives')->truncate();

		Collective::create(array('name' => 'The Purest Cacophony', 'founder' => 'Jasper Boyd', 'member_number' => '1')); 
		Collective::create(array('name' => 'The Halfs', 'founder' => 'Jasper Boyd & Nina Petropolous', 'member_number' => '2'));
		Collective::create(array('name' => 'Hannah & The Pussycats', 'founder' => 'Hannah Snow', 'member_number' => '1')); 
	}
}