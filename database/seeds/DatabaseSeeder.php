<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('SettingsTableSeeder');

		//$this->call('DocumentTableSeed');

		$this->call('TypesTableSeed');

		//$this->call('KeywordsTableSeed');

		//$this->call('IconsTableSeeder');
	}

}
