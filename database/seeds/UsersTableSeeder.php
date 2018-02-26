<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 User::create([
			'name' => 'Test Account',
			'email' => 'test@chip-tuning.dev',
			'password' => bcrypt('testtest'),
			'is_admin' => true,
		]);
	}
}
