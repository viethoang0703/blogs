<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->insert([
			'name' => 'vietlh10',
			'email' => 'vietlh10@gmail.com',
			'role' => 1,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh11',
			'email' => 'vietlh11@gmail.com',
			'role' => 1,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh12',
			'email' => 'vietlh12@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh13',
			'email' => 'vietlh13@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh14',
			'email' => 'vietlh14@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh15',
			'email' => 'vietlh15@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);
	}
}
