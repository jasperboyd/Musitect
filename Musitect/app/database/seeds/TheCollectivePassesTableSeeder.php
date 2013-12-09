<?php

class TheCollectivePassesTableSeeder extends Seeder { 

	public function run() 
	{ 
		DB::table('collective_passes')->truncate();

		CollectivePass::create(array('user_id' => '1', 'collective_id' => '1', 'role' => '1'));
		CollectivePass::create(array('user_id' => '1', 'collective_id' => '2', 'role' => '1'));
		CollectivePass::create(array('user_id' => '3', 'collective_id' => '2', 'role' => '1'));
		CollectivePass::create(array('user_id' => '2', 'collective_id' => '3', 'role' => '1')); 
	}
}