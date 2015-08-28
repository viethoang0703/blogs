<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Route::get('/', function () {
// 	return view('auth.login');
// });

//Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Backend Admin
/*Kiểm tra điều kiện trước khi thực hiện Route tiếp theo */
Route::group(['middleware' => 'auth'], function () {
	Route::get('admin', 'Admin\AdminController@index');
	Route::get('admin/news', 'Admin\NewsController@index');

	Route::get('admin/news/add', 'Admin\NewsController@create');
	//Route::post('admin/news/add', ['middleware' => 'testmidd', 'uses' => 'Admin\NewsController@store']);
	Route::post('admin/news/add', 'Admin\NewsController@store');
	Route::get('admin/news/edit/{id}', 'Admin\NewsController@edit');
	Route::post('admin/news/edit/{id}', 'Admin\NewsController@update');
	Route::get('admin/news/delete/{id}', 'Admin\NewsController@destroy');

	Route::get('admin/category', 'Admin\CategoryController@index');
	Route::get('admin/category/add', 'Admin\CategoryController@create');
	Route::post('admin/category/add', 'Admin\CategoryController@store');
	Route::get('admin/category/edit/{id}', 'Admin\CategoryController@edit');
	Route::post('admin/category/edit/{id}', 'Admin\CategoryController@update');
	Route::get('admin/category/delete/{id}', 'Admin\CategoryController@destroy');

	Route::get('admin/user-manager', 'Admin\AdminController@users');
	Route::get('admin/user/edit/{id}', 'Admin\AdminController@edit');
	Route::post('admin/user/edit/{id}', 'Admin\AdminController@update');
	Route::get('admin/user/delete/{id}', 'Admin\AdminController@destroy');
	Route::get('admin/user/change-role/{id}', 'Admin\AdminController@editRole');
	Route::post('admin/user/change-role/{id}', 'Admin\AdminController@updateRole');
});

// //Home Laravel
// Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'home\HomeController@index']);
// Route::get('news/{news_url}', ['as' => 'news', 'uses' => 'home\HomeController@show']);
// Route::get('category/{cat_url}', ['as' => 'category', 'uses' => 'home\HomeController@category']);
// Route::get('news/{key?}', ['as' => 'search', 'uses' => 'home\HomeController@search']);

//AngularJS

Route::get('/', function () {
	return view('template_home');
});
Route::get('/news/index', function () {
	return view('home.index');
});
Route::get('home/{category}/{action?}', function ($category, $action = 'index') {
	return view(join('.', ['home', $category, $action]));
});
Route::get('home/{category}/{action}/{id}', function ($category, $action = 'index', $id) {
	return view(join('.', ['home', $category, $action]));
});

//Trả về API
Route::group(['prefix' => 'api'], function () {
	Route::resource('news', 'Home\HomeController');
	Route::resource('prd', 'Home\HomeController@prd',
		array('only' => array('index')));
	Route::resource('cat_dropdown', 'Home\HomeController@cat_dropdown',
		array('only' => array('index')));
	Route::resource('category', 'Home\HomeController@category',
		array('only' => array('show')));
	Route::resource('comments', 'Home\CommentController',
		array('only' => array('index', 'show', 'store', 'destroy')));
});

Route::any('{undefinedRoute}', function ($undefinedRoute) {
	return view('template_home');
})->where('undefinedRoute', '([A-z\d-\/_.]+)?');
