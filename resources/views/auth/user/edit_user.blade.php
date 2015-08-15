@extends('auth.template_admin')
@section('contents')

<form class="form-horizontal" method="post" action="{{ url('admin/user/edit', $user->id) }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <fieldset>

    <!-- Form Name -->
    <legend>Đổi mật khẩu</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tên</label>
        <div class="col-md-6">
        <input id="inputName" name="name" value="{{ $user->name }}" class="form-control input-md" type="text" readonly>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>
        <div class="col-md-6">
        <input id="inputMail" name="email" value="{{ $user->email }}" class="form-control input-md" type="text" readonly>
        </div>
    </div>

    @if(Auth::user()->role == 2)
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mật khẩu cũ</label>
        <div class="col-md-6">
        <input id="inputNewPass" name="password" value="" class="form-control input-md" type="password" required>
        </div>
    </div>
    @endif

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Mật khẩu mới</label>
        <div class="col-md-6">
        <input id="inputNewPass" name="newPass" value="" class="form-control input-md" type="password" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Xác nhận mật khẩu</label>
        <div class="col-md-6">
        <input id="inputComfirmPass" name="comfirmPass" value="" class="form-control input-md" type="password" required>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" type="submit" name="submit" class="btn btn-success">Xác nhận</button>
            <button id="button2id" type="reset" name="reset" value="Làm mới" class="btn btn-danger">Làm mới</button>
        </div>
    </div>
    </fieldset>
</form>

@stop
