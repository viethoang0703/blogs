<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	protected $table = 'comments';
	protected $fillable = [
		'text',
		'user',
		'email',
		'news_id',
		'created_at',
	];

	public $timestamps = false;

	public function news() {
		return $this->belongsTo('App\Model\News', 'news_id');
	}
}
