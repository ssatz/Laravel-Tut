<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $this->command->info('Starting');
		Eloquent::unguard();
               DB::disableQueryLog();
		// $this->call('UserTableSeeder');
		$this->call('SentryTableSeeder');
                $this->command->info('Sentry tables seeded Successfully!');
	}

}
