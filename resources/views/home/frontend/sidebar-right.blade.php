 <!-- resources/views/home/sidebar-right.blade.php -->
<div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" ng-controller="SidebarController" ng-init="getLastest()">
    <div class="list-group" >
        <a href="#" class="list-group-item active" >Bài viết mới</a>
        <a ng-repeat="last in lastest | limitTo: 5" href="/news/@{{last.news_url}}" class="list-group-item">@{{last.news_tittle }}</a>
    </div>

    <div class="list-group" >
        <a href="#" class="list-group-item active" >Bài viết đặc biệt</a>
        <a ng-repeat="prd in prds | limitTo: 5" href="/news/@{{prd.news_url}}" class="list-group-item">@{{prd.news_tittle }}</a>
    </div>
</div>