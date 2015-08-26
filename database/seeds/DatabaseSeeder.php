<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		$this->call(UserTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(NewsTableSeeder::class);
		$this->call(CommentsTableSeeder::class);
		Model::reguard();
	}
}
