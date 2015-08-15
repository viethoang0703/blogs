<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\News;
use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$news = News::orderBy('id')->paginate(5);
		return view('home.dashboard', ['news' => $news]);
	}

	/**
	 * Hiển thị danh sách các bài viết thuộc category đã chọn
	 *
	 * @return Response
	 */
	public function category($cat_url) {
		/* Tìm bản ghi trong bảng Categories có điều kiện thỏa mãn */
		$cat_id = Category::where('cat_url', '=', $cat_url)->first();

		/* Tìm các bản ghi trong bảng News có điều kiện thỏa mãn */
		$cat_detail = News::where('news_category', '=', $cat_id->id)
			->orderBy('news.id', 'desc')
			->paginate(5);

		/* Truyền biến sang view */
		return view('home.category_detail', ['cat_detail' => $cat_detail]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($news_url) {
		$news_detail = News::where('news_url', '=', $news_url)->first();
		return view('home.news_detail', ['news_detail' => $news_detail]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

	/**
	 * Hiển thị danh sách các bài viết có từ khóa được truyền vào.
	 *
	 *@return Response
	 */
	public function search(Request $request) {
		$keyword = $request->get('keyword');
		/* Xử lý keyword nhận được */
		$keyword = str_slug($keyword, '%');

		if ($keyword) {
			$results = News::where('news_tittle', 'LIKE', '%' . $keyword . '%')->paginate(2);
			return view('home.news_search', ['results' => $results, 'keyword' => $keyword]);
		} else {
			return redirect('dashboard');
		}
	}
}
