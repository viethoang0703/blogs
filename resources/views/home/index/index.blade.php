<div class="col-xs-12 col-sm-9" ng-controller="NewsController" ng-init="getList()">
	<div dir-paginate='new in news | filter:keyword | itemsPerPage:5 as results'>
		<div class="row">
		    <div class="col-xs-12 col-sm-2">
		        <img width="150px" height="150px" ng-src="uploads/@{{new.news_image}}" class="img-rounded" alt="@{{new.news_image}}" tittle="@{{new.news_image}}"/>
		    </div>
		    <div class="col-xs-12 col-sm-10">
		        <div class="col-xs-12 col-lg-12">
		            <h2><a ng-href="/news/@{{ new.news_url }}">@{{ new.news_tittle}}</a></h2>
		            <p ng-bind-html="new.news_detail | limitTo: 300"></p>
		            <p><a class="btn btn-default pull-right" ng-href="/news/@{{ new.news_url }}" role="button">Chi tiết &raquo;</a></p>
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