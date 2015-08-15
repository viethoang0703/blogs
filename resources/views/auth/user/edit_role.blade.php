@extends('auth.template_admin')
@section('contents')

<form class="form-horizontal" method="post" action="{{ url('admin/user/change-role', $user->id) }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <fieldset>

    <!-- Form Name -->
    <legend>Quyền User</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tên</label>
        <div class="col-md-6">
        <input id="inputName" name="name" value="{{ $user->name }}" class="form-control input-md" type="text" readonly>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>
        <div class="col-md-6">
        <input id="inputMail" name="email" value="{{ $user->email }}" class="form-control input-md" type="text" readonly>
        </div>
    </div>

    <!-- Radio -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Role</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
                <input name="role" id="radios-0" value="1" type="radio" @if ($user->role == 1) checked = "checked" @endif>
                Admin
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="role" id="radios-1" value="2" type="radio" @if ($user->role == 2) checked = "checked" @endif>
                User
            </label>
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
