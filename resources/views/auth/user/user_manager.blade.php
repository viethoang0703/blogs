<!-- resources/views/auth/user_manager.blade.php -->
@extends('auth.template_admin')
@section('contents')

<div class="row">
    <h4>Quản lý thành viên</h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    @if (Auth::user()->role == 1)
                    <th>Role</th>
                    @endif
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="#">{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    @if (Auth::user()->role == 1)
                        @if ($user->role == 1)
                            <td><a class="text-danger" href="{{ url('admin/user/change-role', $user->id) }}">Admin</a></td>
                        @else
                            <td><a class="text-success" href="{{ url('admin/user/change-role', $user->id) }}">User</a></td>
                        @endif
                    @endif
                    <td><a href="{{ url('admin/user/edit', $user->id) }}">Edit</a></td>
                    <td><a href="{{ url('admin/user/delete', $user->id) }}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {!! $users->render() !!}
        </div>
    </div><!-- End .table-responsive -->
</div><!-- End .row -->
@stop