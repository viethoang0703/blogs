<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;

class SidebarrightServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		try {
			$lastest = DB::table('news')
				->select('*')
				->orderBy('id')
				->take(5)
				->get();

			$most = DB::table('news')
				->select('*')
				->where('news_status', '=', 1)
				->orderBy('id')
				->take(5)
				->get();

			$category_dropdown = DB::table('categories')
				->select('*')
				->get();

			view()->share('lastest', $lastest);
			view()->share('most', $most);
			view()->share('category_dropdown', $category_dropdown);
		} catch (Exception $e) {

		}

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
