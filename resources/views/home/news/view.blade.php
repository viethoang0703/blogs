<!-- resources/views/home/news_detail.blade.php -->
<div class="col-xs-12 col-sm-9" ng-controller="NewsController" ng-init="find()">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                  <h3 class="panel-title">@{{news_detail.news_tittle}}</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <img width="150px" height="150px" style="margin-right: 10px" ng-src="/uploads/@{{news_detail.news_image}}" class="img-thumbnail pull-left" alt="" tittle=""/>
                    </div>
                    <div class="row center-block" ng-bind-html="news_detail.news_detail">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.news.comment')
</div>