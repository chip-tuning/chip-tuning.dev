<?php

use App\Album;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AlbumsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Album::insert([
			['title' => 'Automobili',
			 'created_at' => Carbon::now(),
			 'updated_at' => Carbon::now(),
			],
			['title' => 'Kamioni',
			 'created_at' => Carbon::now(),
			 'updated_at' => Carbon::now(),
			],
			['title' => 'Oprema',
			 'created_at' => Carbon::now(),
			 'updated_at' => Carbon::now(),
			],
		]);
	}
}
