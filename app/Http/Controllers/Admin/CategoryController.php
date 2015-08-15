<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index() {
		/* Thực hiện query data và phân trang  */
		$page_title = 'Quản lý danh mục';
		$categories = Category::orderBy('id')->paginate(5);
		return view('auth.category.category', ['categories' => $categories, 'page_title' => $page_title]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		$page_title = 'Quản lý danh mục';
		return view('auth.category.add_cat', ['page_title' => $page_title]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		$cat_name = $request->cat_name;
		$cat_status = $request->cat_status;

		/* Xử lý chuỗi (bỏ dấu, thêm "-") */
		$cat_url = str_slug($cat_name);
		/* Thêm data vào CSDL */
		Category::insert(
			[
				'cat_name' => $cat_name,
				'cat_status' => $cat_status,
				'cat_url' => $cat_url,
			]);
		return redirect('admin/category');

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
		/* Truyền data sang view theo biến $id nhận được */

		$category = Category::where('id', '=', $id)->first();
		if ($category) {
			$page_title = 'Quản lý danh mục';
			return view('auth.category.edit_cat', ['category' => $category, 'page_title' => $page_title]);
		} else {
			return redirect('admin/category');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$cat_url = str_slug($request->cat_name);
		Category::updateOrCreate(['id' => $id],
			[
				'cat_name' => $request->cat_name,
				'cat_status' => $request->cat_status,
				'cat_url' => $cat_url,
			]);
		return redirect('admin/category');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		try {
			$category = Category::findOrFail($id)->delete();
			return redirect('admin/category');
		} catch (Exception $e) {
			return abort(404);
		}
	}
}
