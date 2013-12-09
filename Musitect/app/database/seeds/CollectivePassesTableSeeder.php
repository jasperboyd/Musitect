<?php

class CollectivePassesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collective_passes')->truncate();

		CollectivePass::create(array('user_id' => '1', 'collective_id' => '1', 'role' => '1')); 
	}
}