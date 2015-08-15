<!-- resources/views/auth/news/post_manager.blade.php -->
@extends('auth.template_admin')
@section('contents')

<div class="row">
    <h4><a href="{{ url('admin/news/add') }}">Thêm mới bài viết</a></h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tittle</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($news as $new)
                <tr>
                    <td>{{ $new->id }}</td>
                    <td>{{ $new->news_tittle }}</td>
                    <td>{{ $new->category->cat_name }}</td>
                    <td>@if ($new->news_status == 1) New @else Old @endif</td>
                    <td><a href="{{ url('admin/news/edit',$new->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
                    <td><a href="{{ url('admin/news/delete',$new->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {!! $news->render() !!}
        </div>
    </div>
</div>

@stop
