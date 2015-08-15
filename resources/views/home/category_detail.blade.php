<!-- resources/views/home/category_detail.blade.php -->
@extends('home.template_home')
@section('contents')
<div class="col-xs-12 col-sm-9">
    @foreach ($cat_detail as $new)
    <div class="row">
        <div class="col-xs-12 col-sm-2">
            <img width="150px" height="150px" src="{{ URL::asset('uploads') }}/{{$new->news_image}}" class="img-rounded" alt="{{$new->news_image}}" tittle="{{$new->news_image}}"/>
        </div><!--/.col-xs-12.col-sm-2-->
        <div class="col-xs-12 col-sm-10">
            <div class="col-xs-12 col-lg-12">
                <h2><a href="{{url('news')}}/{{ $new->news_url }}">{{ $new->news_tittle }}</a></h2>
                <p>{!! str_limit($new->news_detail, 200) !!}</p>
                <p><a class="btn btn-default pull-right" href="{{url('news')}}/{{ $new->news_url }}" role="button">Chi tiết &raquo;</a></p>
            </div><!--/.col-xs-12 col-lg-12-->
        </div><!--/.col-xs-12.col-sm-10-->
    </div><!-- End .row-->
    <hr/>
    @endforeach
    <div class="pull-right">
        {!! $cat_detail->render() !!}
    </div>
</div><!--/.col-xs-12.col-sm-9-->

@stop