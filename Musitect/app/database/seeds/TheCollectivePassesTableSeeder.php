<?php

class TheCollectivePassesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collective_passes')->truncate();

		CollectivePass::create(['user_id' => 1, 'collective_id' => 2, 'role' => 1]);
	}
}