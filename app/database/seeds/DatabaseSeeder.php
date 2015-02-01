<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('StatTypeSeeder');
		$this->call('SportSeeder');
		$this->call('CompetitionSeeder');
		$this->call('SeasonSeeder');
		$this->call('TeamSeasonSeeder');
		$this->call('TeamSeeder');
		$this->call('GameSeeder');

	}

}
