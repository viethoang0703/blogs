<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckNewsRequest;
use App\Model\Category;
use App\Model\News;
use Illuminate\Http\Request;
use Input;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$page_title = 'Quản lý bài viết';
		$news = News::paginate(5);
		return view('auth.news.post_manager', ['news' => $news, 'page_title' => $page_title]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$page_title = 'Quản lý bài viết';
		$catgory = Category::get();
		return view('auth.news.add_post', ['category' => $catgory, 'page_title' => $page_title]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(CheckNewsRequest $request) {
		/* Lấy tên file ảnh up lên*/
		$img_name = Input::file('news_image')->getClientOriginalName();

		/* Di chuyển file đến thư mục uploads*/
		Input::file('news_image')->move(public_path('uploads'), $img_name);

		/* Xử lý chuỗi nhập vào (Bỏ dấu, thêm '-' giữa các từ) */
		$news_url = str_slug($request->news_tittle);

		$new = new News;
		$new->news_tittle = $request->news_tittle;
		$new->news_category = $request->news_category;
		$new->news_image = $img_name;
		$new->news_status = $request->news_status;
		$new->news_detail = $request->news_detail;
		$new->news_url = $news_url;
		$new->save();
		return redirect('admin/news');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$page_title = 'Quản lý bài viết';
		$news = News::find($id);
		$catgory = Category::get();
		if ($news) {
			return view('auth.news.edit_post', ['news' => $news, 'category' => $catgory, 'page_title' => $page_title]);
		} else {
			return redirect('admin/news');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CheckNewsRequest $request, $id) {
		/* Kiểm tra file ảnh có thay đổi không nếu không đổi lấy tên file cũ */
		if ($request->hasFile('news_image')) {
			$img_name = Input::file('news_image')->getClientOriginalName();
			Input::file('news_image')->move(public_path('uploads'), $img_name);
		} else {
			$img_name = $request->news_image_temp;
		}

		/* Xử lý chuỗi nhập vào (Bỏ dấu, thêm '-' giữa các từ) */
		$news_url = str_slug($request->news_tittle);

		News::updateOrCreate(['id' => $id],
			[
				'news_tittle' => $request->news_tittle,
				'news_category' => $request->news_category,
				'news_image' => $img_name,
				'news_status' => $request->news_status,
				'news_detail' => $request->news_detail,
				'news_url' => $news_url,
			]);
		return redirect('admin/news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$news = News::find($id);
		if ($news) {
			$news->delete();
		} else {
			return abort(404);
		}
		return redirect('admin/news');
	}

}
