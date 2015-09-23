var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix
		.sass('app.scss')
		.scripts(
			[
				'home/app.js',
				'home/appRoute.js',
				'home/controllers/**/*.js',
				'home/services/**/*.js',
			], 'public/js/home.js')
		.scripts(
			[
				'admin/app.js',
				'admin/appRoute.js',
				'admin/controllers/**/*.js',
				'admin/services/**/*.js',
				// 'admin/ng-file-upload.min.js',
				// 'admin/ng-file-upload-shim.min.js',
			], 'public/js/admin.js');

});