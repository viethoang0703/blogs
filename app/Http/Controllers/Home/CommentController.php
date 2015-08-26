<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use Illuminate\Http\Request;
use Response;

class CommentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * Trả về list các comments
	 */
	public function index() {
		return Response::json(Comment::orderBy('id', 'desc')->get());
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
	 * Lưu comment mới vào CSDL
	 */
	public function store(Request $request) {
		Comment::create(array(
			'user' => $request->user,
			'text' => $request->text,
			'email' => $request->email,
			'news_id' => $request->newsId,
			'created_at' => date('Y-m-d H:i:s'),
		));

		return Response::json(array('success' => true));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 * Trả về list các comments có id thuộc id của bài viết
	 */
	public function show($id) {
		return Response::json(Comment::where('news_id', $id)->orderBy('id', 'desc')->get());
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
	 * Xóa một comment
	 */
	public function destroy($id) {
		Comment::destroy($id);

		return Response::json(array('success' => true));
	}
}
