<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckNewsRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'news_tittle' => 'required|max:255',
			'news_category' => 'required',
			'news_image' => 'mimes:jpg,jpeg,bmp,png',
			'news_detail' => 'required',
		];
	}
}
