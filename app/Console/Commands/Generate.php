<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

class Generate extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'db:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		$this->info('Refresh DB');
		Artisan::call('migrate:refresh');
		$this->info('Create sample Seed');
		Artisan::call('migrate --seed');
	}
}
