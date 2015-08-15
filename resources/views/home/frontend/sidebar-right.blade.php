<!-- resources/views/home/sidebar-right.blade.php -->
<div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
        <a href="#" class="list-group-item active">Bài viết mới</a>
        @foreach ($lastest as $last)
        <a href="{{ url('news') }}/{{$last->news_url}}" class="list-group-item">{{ $last->news_tittle }}</a>
        @endforeach
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item active">Bài viết nổi bật</a>
        @foreach ($most as $most)
        <a href="{{ url('news') }}/{{$most->news_url}}" class="list-group-item">{{ $most->news_tittle }}</a>
        @endforeach
    </div>
</div><!--/.sidebar-offcanvas-->