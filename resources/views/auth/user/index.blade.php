<div class="row" ng-controller="UserController" ng-init="find()">
    <h4>Quản lý thành viên</h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="user in users">
                    <td>@{{user.id}}</td>
                    <td><a href="#">@{{user.email}}</td>
                    <td>@{{user.name}}</td>
                    <td ng-if="user.role==1"><a class="text-danger" href="#">Admin</a></td>
                    <td ng-if="user.role==2"><a class="text-success" href="#">User</a></td>
                    <td><a href="#">Edit</a></td>
                    <td><button ng-click="destroy(user)">Delete</button></td>
                </tr>
            </tbody>
        </table>
        <div class="pull-right">
        </div>
    </div><!-- End .table-responsive -->
</div><!-- End .row -->