<!-- resources/views/auth/category/edit_cat.blade.php -->
@extends('auth.template_admin')
@section('contents')

<form class="form-horizontal" method="post" action="{{ url('admin/category/edit', $category->id) }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <fieldset>

    <!-- Form Name -->
    <legend>Sửa danh mục</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tên danh mục</label>
        <div class="col-md-6">
        <input id="textinput" name="cat_name" value="{{ $category->cat_name }}" class="form-control input-md" type="text" required>
        </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
                <input name="cat_status" id="radios-0" value="1" type="radio" @if ($category->cat_status == 1) checked = "checked" @endif>
                New
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="cat_status" id="radios-1" value="0" type="radio" @if ($category->cat_status == 0) checked = "checked" @endif>
                Old
            </label>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" type="submit" name="submit" class="btn btn-success">Sửa danh mục</button>
            <button id="button2id" type="reset" name="reset" value="Làm mới" class="btn btn-danger">Làm mới</button>
        </div>
    </div>
    </fieldset>
</form>

@stop
