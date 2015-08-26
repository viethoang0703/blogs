<!-- resources/views/home/frontend/navbar.blade.php -->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ng-href="#">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav" ng-controller="SidebarController" ng-init="getLastest()">
                <li><a href="/index">Home</a></li>
                <li class="dropdown">
                    <a ng-href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ng-repeat="cat_dropdown in dropdownlist"><a ng-href="/category/@{{ cat_dropdown.cat_url }}">@{{cat_dropdown.cat_name}}</a></li>
                    </ul>
                </li>
                <li><a href="#About">About</a></li>
            </ul>
            <div class="navbar-form navbar-right">
                <input class="form-control" type="search" ng-model="keyword" placeholder="Search..." aria-label="Search">
            </div>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
