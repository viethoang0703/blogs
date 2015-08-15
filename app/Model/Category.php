<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	//
	protected $table = 'categories';
	protected $fillable = [
		'cat_name',
		'cat_status',
		'cat_url',
	];

	public $timestamps = false;

	public function news() {
		return $this->hasMany('App\Model\News', 'news_category');
	}
}
