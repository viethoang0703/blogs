<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
	protected $fillable = [
		'news_tittle',
		'news_category',
		'news_image',
		'news_status',
		'news_detail',
		'news_url',
	];

	public $timestamps = false;

	public function category() {
		return $this->belongsTo('App\Model\Category', 'news_category');
	}

}
