<div class="row" ng-controller="NewsController" ng-init="find()">
    <h4><a ng-href="#/news/create">Thêm mới bài viết</a></h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tittle</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr dir-paginate="new in news | itemsPerPage:5 as results">
                    <td>@{{new.id}}</td>
                    <td>@{{new.news_tittle}}</td>
                    <td>@{{new.category.cat_name}}</td>
                    <td ng-if="new.news_status ==1">New</td>
                    <td ng-if="new.news_status ==0">Old</td>
                    <td><a ng-href="#/news/edit/@{{new.id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
                    <td><button ng-click="destroy(new)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right">
            <dir-pagination-controls></dir-pagination-controls>
        </div>
    </div>
</div>