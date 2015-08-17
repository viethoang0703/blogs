<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Check_valid;
use App\Model\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Hiển thị thông tin trang chủ Admin
	 *
	 * @return Response
	 */
	public function index() {
		$page_title = 'Trang chủ';
		return view('auth.admin', ['page_title' => $page_title]);
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
	public function store(Check_valid $request) {
		//

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
	 * Show the form for editing the password.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//Tìm theo id nhận được và truyền data sang view nếu không thấy chuyển hướng
		$page_title = 'Quản lý thành viên';
		$user = User::where('id', $id)->first();
		if ($user) {
			return view('auth.user.edit_user', ['user' => $user, 'page_title' => $page_title]);
		} else {
			return redirect('admin/user-manager');
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
		/* Kiểm tra nếu là TK admin không cần kiểm tra pass cũ*/
		if (Auth::user()->role == 1) {
			//Kiểm tra 2 pass nhập vào nếu giống nhau thì thực hiện cập nhật vào CSDL pass mới
			if ($request->newPass == $request->comfirmPass) {
				User::updateOrCreate(['id' => $id],
					[
						'password' => bcrypt($request->newPass),
					]);
				return redirect('admin/user-manager');
			} else {
				return abort(404);
			}
		} else {
			/* Đối với TK User cần nhập pass cũ để kiểm tra*/
			/* Lấy pass trong CSDL theo id nhận được */
			$passwordDB = User::where('id', $id)->first()->password;

			/* Gán biến $inputPassword bằng giá trị pass nhập vào (pass cũ) */
			$inputPassword = $request->password;

			/* Kiểm tra xem pass cũ nhập có trùng với pass trong CSDL hay ko */
			if (Hash::check($inputPassword, $passwordDB)) {

				/* Thỏa mãn dk trên -> thực hiện kiểm tra 2 pass mới nhập vào có trùng nhau không */
				if ($request->newPass == $request->comfirmPass) {

					/* Thỏa mãn các đk trên thực thi cập nhật pass */
					User::updateOrCreate(['id' => $id],
						[
							'password' => bcrypt($request->newPass),
						]);
					return redirect('admin/user-manager');
				}
			} else {
				return abort(404);
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		/**
		 * Thực hiện tìm và xóa TK theo id truyền vào
		 * Nếu lỗi chuyển hướng
		 */
		try {
			$user = User::findOrFail($id)->delete();
			return redirect('admin/user-manager');
		} catch (Exception $e) {
			return abort(404);
		}
	}

	/**
	 * Hiển thị danh sách các tài khoản
	 *
	 * @return Response
	 */
	public function users() {
		/**
		 * Kiểm tra TK đăng nhập nếu là Admin show ra tất cả các thành viên
		 * Còn lại chỉ show TT TK đang đăng nhập
		 */
		$page_title = 'Quản lý thành viên';
		if (Auth::user()->role == 1) {
			$users = User::orderBy('id')->paginate(5);
		} else {
			$users = User::where('id', Auth::user()->id)->paginate(5);
		}
		return view('auth.user.user_manager', ['users' => $users, 'page_title' => $page_title]);
	}

	/**
	 * Hiển thị from Thay đổi Role cho User
	 * @param  int  $id
	 * @return Response
	 */
	public function editRole($id) {
		$page_title = 'Quản lý thành viên';
		$user = User::where('id', $id)->first();
		if ($user) {
			return view('auth.user.edit_role', ['user' => $user, 'page_title' => $page_title]);
		} else {
			return abort(404);
		}
	}

	/**
	 * Cập nhật thông tin lưu vào CSDL
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function updateRole(Request $request, $id) {
		try {
			User::updateOrCreate(['id' => $id],
				[
					'role' => $request->role,
				]);
			return redirect('admin/user-manager');
		} catch (Exception $e) {
			return abort(404);
		}

	}
}
