<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('categories')->insert([
			'cat_name' => 'Codeigiter',
			'cat_status' => 0,
			'cat_url' => 'codeigniter',
		]);

		DB::table('categories')->insert([
			'cat_name' => 'Đồ họa',
			'cat_status' => 1,
			'cat_url' => 'codeigniter',
		]);

		DB::table('categories')->insert([
			'cat_name' => 'Laravel',
			'cat_status' => 1,
			'cat_url' => 'laravel',
		]);

		DB::table('categories')->insert([
			'cat_name' => 'Thiết kế Website',
			'cat_status' => 1,
			'cat_url' => 'thiet-ke-website',
		]);

		DB::table('categories')->insert([
			'cat_name' => 'Yii',
			'cat_status' => 1,
			'cat_url' => 'yii',
		]);

		DB::table('categories')->insert([
			'cat_name' => 'Yii2',
			'cat_status' => 1,
			'cat_url' => 'yii2',
		]);
	}
}
