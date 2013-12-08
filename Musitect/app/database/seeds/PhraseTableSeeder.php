<?php

class PhraseTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('phrases')->truncate();

		Phrase::create(array( 'phrase' => 'This is a test phrase', 'song_id' => '1')); 
	}
}