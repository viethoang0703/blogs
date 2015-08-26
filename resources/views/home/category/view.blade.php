<div class="col-xs-12 col-sm-9" ng-controller="NewsController" ng-init="find_cat()">
    <div dir-paginate ="category in categories | filter:keyword | itemsPerPage:5 as results">
        <div class="row">
            <div class="col-xs-12 col-sm-2">
                <img width="150px" height="150px" ng-src="/uploads/@{{category.news_image}}" class="img-rounded" alt="@{{category.news_image}}" tittle="@{{category.news_image}}"/>
            </div><!--/.col-xs-12.col-sm-2-->
            <div class="col-xs-12 col-sm-10">
                <div class="col-xs-12 col-lg-12">
                    <h2><a href="/news/@{{ category.news_url }}">@{{ category.news_tittle }}</a></h2>
                    <p ng-bind-html="category.news_detail"></p>
                    <p><a class="btn btn-default pull-right" href="/news/@{{ category.news_url }}" role="button">Chi tiết &raquo;</a></p>
                </div>
            </div>
        </div>
        <hr/>
    </div>
    <div ng-if="results.length == 0">
        <strong>No results found...</strong>
    </div>
    <div class="pull-right">
        <dir-pagination-controls></dir-pagination-controls>
    </div>
</div>