<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('comments')->delete();

		DB::table('comments')->insert([
			'user' => 'User 1',
			'text' => 'Look I am a test commen',
			'email' => 'user1@gmail.com',
			'news_id' => 1,
		]);

		DB::table('comments')->insert([
			'user' => 'User 2',
			'text' => 'Look I am a test commen',
			'email' => 'user2@gmail.com',
			'news_id' => 1,
		]);

		DB::table('comments')->insert([
			'user' => 'User 3',
			'text' => 'Look I am a test commen',
			'email' => 'user3@gmail.com',
			'news_id' => 1,
		]);

		DB::table('comments')->insert([
			'user' => 'User 4',
			'text' => 'Look I am a test commen',
			'email' => 'user4@gmail.com',
			'news_id' => 1,
		]);

	}
}
