<?php

// Home
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
	$breadcrumbs->push('Home', route('dashboard'));
});

// Home > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $cat_url) {
	$category = DB::table('categories')
	->where('cat_url', '=', $cat_url)
	->first();
	$breadcrumbs->parent('dashboard');
	$breadcrumbs->push($category->cat_name, route('category', $category->cat_url));
});

Breadcrumbs::register('news', function ($breadcrumbs, $news_url) {
	$news = DB::table('news')
	->where('news_url', '=', $news_url)
	->first();

	$category_id = $news->news_category;
	$category = DB::table('categories')
	->where('id', '=', $category_id)
	->first();

	$breadcrumbs->parent('category', $category->cat_url);
	$breadcrumbs->push($news->news_tittle, route('news', $news->news_url));
});

Breadcrumbs::register('search', function ($breadcrumbs) {
	$keyword = Input::get('keyword');
	$breadcrumbs->parent('dashboard');
	$breadcrumbs->push('Search: ' . $keyword, route('search'));
});