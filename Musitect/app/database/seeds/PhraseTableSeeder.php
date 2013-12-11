<?php

class PhraseTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('phrases')->truncate();

		Phrase::create(array( 'lyric' => 'This is a test phrase', 'chord' => 'Cmaj7', 'song_id' => '1')); 
	}
}