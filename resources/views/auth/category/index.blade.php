<div class="row" ng-controller="CategoryController" ng-init="find()">
    <h4><a ng-href="#/category/create">Thêm mới danh mục</a></h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="category in categories">
                    <td>@{{category.id}}</td>
                    <td>@{{category.cat_name}}</td>
                    <td ng-if="category.cat_status ==1">New</td>
                    <td ng-if="category.cat_status ==0">Old</td>
                    <td><a ng-href="#/category/edit/@{{category.id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
                    <td><button ng-click="destroy(category)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button></td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right">
        </div>
    </div>
</div>
