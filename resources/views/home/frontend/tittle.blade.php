<!-- resources/views/home/frontend/tittle.blade.php -->
<title>
    @if (isset($news_detail))
      {{ $news_detail->news_tittle }}
    @elseif (isset($cat_detail))
      @foreach ($cat_detail as $cat_tittle)
      @endforeach
      {{ $cat_tittle->category->cat_name }}
    @else
      Dashboard
    @endif
</title>