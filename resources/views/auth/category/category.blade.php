<!-- resources/views/auth/category/category.blade.php -->
@extends('auth.template_admin')
@section('contents')

<div class="row">
    <h4><a href="{{ url('admin/category/add') }}">Thêm mới danh mục</a></h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->cat_name }}</td>
                    <td>@if ($category->cat_status == 1) New @else Old @endif</td>
                    <td><a href="{{ url('admin/category/edit',$category->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
                    <td><a href="{{ url('admin/category/delete',$category->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {!! $categories->render() !!}
        </div>
    </div>
</div>

@stop