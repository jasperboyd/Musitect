<?php

class ChordTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('chords')->truncate();

		Chord::create(array( 'chord' => 'Cmaj7', 'phrase_id' => '1')); 
	}
}