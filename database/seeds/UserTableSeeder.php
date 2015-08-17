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
			'name' => 'vietlh18',
			'email' => 'vietlh18@gmail.com',
			'role' => 1,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh19',
			'email' => 'vietlh19@gmail.com',
			'role' => 1,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh20',
			'email' => 'vietlh20@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh21',
			'email' => 'vietlh21@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh22',
			'email' => 'vietlh2@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);

		DB::table('users')->insert([
			'name' => 'vietlh23',
			'email' => 'vietlh23@gmail.com',
			'role' => 2,
			'password' => bcrypt('123456'),
		]);
	}
}
