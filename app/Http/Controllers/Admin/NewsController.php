<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$news = News::with(['category'])->get();
		return response()->json($news);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$category = Category::all();
		return response()->json($category);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		$cat_url = str_slug($request->news_tittle);
		$news = News::create([
			'news_tittle' => $request->news_tittle,
			'news_category' => $request->news_category,
			'news_image' => "anh.jpg",
			'news_status' => $request->news_status,
			'news_detail' => $request->news_detail,
			'news_url' => $cat_url,
		]);
		return $news;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$news = News::with(['category'])->find($id);
		return response()->json($news);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		// $news = News::with(['category'])->find($id);
		// return response()->json($news);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		// /* Kiểm tra file ảnh có thay đổi không nếu không đổi lấy tên file cũ */
		// if ($request->hasFile('news_image')) {
		// 	$img_name = Input::file('news_image')->getClientOriginalName();
		// 	Input::file('news_image')->move(public_path('uploads'), $img_name);
		// } else {
		// 	$img_name = $request->news_image_temp;
		// }

		/* Xử lý chuỗi nhập vào (Bỏ dấu, thêm '-' giữa các từ) */
		$news_url = str_slug($request->news_tittle);
		try {
			$news = News::findOrfail($id);
			$news->news_tittle = $request->news_tittle;
			$news->news_category = $request->news_category;
			$news->news_image = "Koala.jpg";
			$news->news_status = $request->news_status;
			$news->news_detail = $request->news_detail;
			$news->news_url = $request->news_tittle;
			$news->push();
			return $news;
		} catch (\Illuminate\Database\QueryException $e) {
			return '';
		}
		// News::updateOrCreate(['id' => $id],
		// 	[
		// 		'news_tittle' => $request->news_tittle,
		// 		'news_category' => $request->news_category,
		// 		'news_image' => $img_name,
		// 		'news_status' => $request->news_status,
		// 		'news_detail' => $request->news_detail,
		// 		'news_url' => $news_url,
		// 	]);
		// return redirect('admin/news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		// $news = News::find($id);
		// if ($news) {
		// 	$news->delete();
		// } else {
		// 	return abort(404);
		// }
		// return redirect('admin/news');
		$news = News::find($id);
		$news->delete();
	}

}
