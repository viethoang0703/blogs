<!-- resources/views/home/frontend/navbar.blade.php -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach ($category_dropdown as $cat_dropdown)
                        <li><a href="{{ url('category') }}/{{ $cat_dropdown->cat_url }}">{{$cat_dropdown->cat_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#About">About</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="get" action="{{ url('news') }}" enctype="multipart/form-data">
                <input type="text" class="form-control" name="keyword" value="" placeholder="Search...">
                <button class="btn btn-default" type="submit">Search</button>
            </form>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->