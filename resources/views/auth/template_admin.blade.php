<!-- resources/views/auth/template_admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap-theme.min.css') }}" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('summernote-master/dist/summernote.css') }}" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.4.4/angular-sanitize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-route.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-resource.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/restangular/latest/restangular.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/lodash/2.1.0/lodash.compat.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('admins/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admins/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="/js/admin.js"></script>
<script type="text/javascript" src="{{ URL::asset('angular-utils-pagination/dirPagination.js') }}"></script>
<style type="text/css">
        .container{
            margin: 20px auto;
        }
</style>
</head>
<body ng-app="AdminApp">
    <div class="container">

        <!-- Static navbar -->
        @include('auth.backend.navbar')
        <!-- End navbar -->

        <!-- Content -->
        <div class="content" ng-view>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        @include('auth.backend.footer')
        <!-- End Footer -->

    </div><!-- End .container -->
<!-- AngularJS -->
<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-route.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-resource.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/restangular/1.3.1/restangular.min.js"></script>
<script type="text/javascript" src="/js/admin.js"></script> -->
<!-- JS -->
<script type="text/javascript" src="{{ URL::asset('admins/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admins/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('summernote-master/dist/summernote.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ URL::asset('admins/js/admin.js') }}"></script> -->

</body>
</html>