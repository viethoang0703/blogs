<!-- resources/views/auth/backend/navbar.blade.php -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}">Blog</a>
        </div><!--End .navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @if(url('admin') == Request::url()) class="active" @endif><a href="{{ url('admin') }}">Trang chủ</a></li>
                <li @if(url('admin/user-manager') == Request::url()) class="active" @endif><a href="{{ url('admin/user-manager') }}">Quản lý thành viên</a></li>
                <li @if(url('admin/category') == Request::url()) class="active" @endif><a href="{{ url('admin/category') }}">Quản lý danh mục</a></li>
                <li @if(url('admin/news') == Request::url()) class="active" @endif><a href="{{ url('admin/news') }}">Quản lý bài viết</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('admin/user/edit', Auth::user()->id) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{Auth::user()->name}}</a></li>
                <li><a href="{{ url('auth/logout') }}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
        </div><!--End .nav-collapse -->
    </div><!--End .container-fluid -->
</nav><!-- End nav -->