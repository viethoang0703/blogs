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
                <li><a ng-href="#">Trang chủ</a></li>
                <li><a ng-href="#/user">Quản lý thành viên</a></li>
                <li><a ng-href="#/category">Quản lý danh mục</a></li>
                <li><a ng-href="#/news">Quản lý bài viết</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a ng-href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a></li>
                <li><a ng-href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
        </div><!--End .nav-collapse -->
    </div><!--End .container-fluid -->
</nav><!-- End nav -->