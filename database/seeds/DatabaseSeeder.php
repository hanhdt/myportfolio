<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
//		$this->call('SkillInformationTableSeeder');
        $this->call('ProjectTableSeeder');
		//this message shown in your terminal after running db:seed command
        $this->command->info("Projects table seeded :)");
		// $this->call('UserTableSeeder');
	}

}
