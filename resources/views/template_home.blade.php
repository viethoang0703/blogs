<!-- resources/views/home/template_home.blade.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Tittle -->
        @include('home.frontend.tittle')
        <!-- End Tittle -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap-theme.min.css') }}" />

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.4.4/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.4/angular-route.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('admins/js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admins/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('angular-utils-pagination/dirPagination.js') }}"></script>
    </head>

    <body ng-app="HomeApp">
        <!-- Navbar -->
        @include('home.frontend.navbar')
        <!-- End Navbar -->
        <div></div>

        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">

                <!-- content -->
                <div ng-view></div>
                <!-- End /.content -->

                <!-- Sidebar-right -->
                @include('home.frontend.sidebar-right')
                <!-- End Sidebar-right -->

            </div><!--/row row-offcanvas-right-->
            <!-- Footer -->
            @include('home.frontend.footer')
            <!-- End Footer -->
        </div><!--/.container-->



    </body>
</html>