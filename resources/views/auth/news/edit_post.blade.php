<!-- resources/views/auth/news/edit_post.blade.php -->
@extends('auth.template_admin')
@section('contents')

@if ( $errors->any() )
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form class="form-horizontal" method="post" action="{{ url('admin/news/edit',$news->id) }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <fieldset>

    <!-- Form Name -->
    <legend>Sửa bài viết</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tiêu đề bài viết</label>
        <div class="col-md-6">
            <input id="textinput" name="news_tittle" value="{{ $news->news_tittle }}" class="form-control input-md" type="text">
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Chuyên mục</label>
        <div class="col-md-6">
            <select id="selectbasic" name = "news_category" class="form-control">
            @foreach ($category as $category)
                @if ($news->news_category == $category->id)
                   <option selected="selected" value={{$category->id}}>{{ $category->cat_name }}</option>
                @else
                    <option value={{$category->id}}>{{ $category->cat_name }}</option>
                @endif
            @endforeach
            </select>
        </div>
    </div>

    <!-- File Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">Ảnh mô tả</label>
        <div class="col-md-4">
            <input id="filebutton" name="news_image" class="input-file" type="file">
            @if ($news->news_image !='')
               <img width="150px" src="{{ URL::asset('uploads') }}/{{$news->news_image}}" value="{{$news->news_image}}" alt="{{$news->news_image}}" tittle="{{$news->news_image}}"/>
            @endif
            <input type="hidden" name="news_image_temp" value="{{$news->news_image}}">
        </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Status</label>
        <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
                <input name="news_status" id="radios-0" value="1" type="radio" @if ($news->news_status == 1) checked = "checked" @endif>
                New
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="news_status" id="radios-1" value="0" type="radio" @if ($news->news_status == 0) checked = "checked" @endif>
                Old
            </label>
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textarea">Nội dung chi tiết</label>
        <div class="col-md-6">
            <textarea class="form-control" id="summernote" name="news_detail" rows="8">{{ $news->news_detail }}</textarea>
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
            <button id="button1id" type="submit" name="submit" class="btn btn-success">Đồng ý</button>
            <button id="button2id" type="reset" name="reset" value="Làm mới" class="btn btn-danger">Làm mới</button>
        </div>
    </div>
    </fieldset>
</form>

@stop
