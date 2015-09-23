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
		$categories = Category::all();
		return response()->json($categories);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		// $category = Category::all();
		// return response()->json($category);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		$cat_name = $request->cat_name;

		/* Xử lý chuỗi (bỏ dấu, thêm "-") */
		$cat_url = str_slug($cat_name);
		/* Thêm data vào CSDL */

		$category = Category::create([
			'cat_name' => $request->cat_name,
			'cat_status' => $request->cat_status,
			'cat_url' => $cat_url,
		]);
		return $category;

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$category = Category::find($id);
		return response()->json($category);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		/* Truyền data sang view theo biến $id nhận được */
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
		try {
			$category = Category::findOrfail($id);
			$category->cat_name = $request->cat_name;
			$category->cat_status = $request->cat_status;
			$category->cat_url = $cat_url;
			$category->push();
			return $category;
		} catch (\Illuminate\Database\QueryException $e) {
			return '';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		// try {
		// 	$category = Category::findOrFail($id)->delete();
		// 	return redirect('admin/category');
		// } catch (Exception $e) {
		// 	return abort(404);
		// }
		$category = Category::find($id);
		$category->delete();
	}
}
