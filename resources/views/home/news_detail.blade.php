<!-- resources/views/home/news_detail.blade.php -->
@extends('home.template_home')
@section('contents')
<div class="col-xs-12 col-sm-9">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                  <h3 class="panel-title">{{$news_detail->news_tittle}}</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <img width="150px" height="150px" style="margin-right: 10px"src="{{ URL::asset('uploads') }}/{{$news_detail->news_image}}" class="img-thumbnail pull-left" alt="{{$news_detail->news_image}}" tittle="{{$news_detail->news_image}}"/>
                    </div>
                    <div class="row center-block">
                        {!! $news_detail->news_detail !!}
                    </div>
                </div>
            </div><!-- End .panel-primary-->
        </div><!--/.col-xs-12.col-sm-12-->
    </div><!--/row-->
</div><!--/.col-xs-12.col-sm-9-->
@stop