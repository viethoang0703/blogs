<!-- resources/views/home/news_search.blade.php -->
@extends('home.template_home')
@section('contents')
<div class="col-xs-12 col-sm-9">
    @foreach ($results as $result)
    <div class="row">
        <div class="col-xs-12 col-sm-2">
            <img width="150px" height="150px" src="{{ URL::asset('uploads') }}/{{$result->news_image}}" class="img-rounded" alt="{{$result->news_image}}" tittle="{{$result->news_image}}"/>
        </div><!--/.col-xs-12.col-sm-2-->
        <div class="col-xs-12 col-sm-10">
            <div class="col-xs-12 col-lg-12">
                <h2><a href="{{url('news')}}/{{ $result->news_url }}">{{ $result->news_tittle }}</a></h2>
                <p>{!! str_limit($result->news_detail, 200) !!}</p>
                <p><a class="btn btn-default" href="{{url('news')}}/{{ $result->news_url }}" role="button">Chi tiết &raquo;</a></p>
            </div><!--/.col-xs-12 col-lg-12-->
        </div><!--/.col-xs-12.col-sm-10-->
    </div><!-- End .row -->
    <hr/>
    @endforeach
    <div class="pull-right">
        {!! $results->appends(['keyword'=> $keyword])->render() !!}
    </div>
</div><!--/.col-xs-12.col-sm-9-->
@stop