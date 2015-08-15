<!-- resources/views/auth/template_admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>{{ $page_title}}</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap-theme.min.css') }}" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('summernote-master/dist/summernote.css') }}" />
<style type="text/css">
        .container{
            margin: 20px auto;
        }
</style>
</head>
<body>
    <div class="container">

        <!-- Static navbar -->
        @include('auth.backend.navbar')
        <!-- End navbar -->

        <!-- Content -->
        @yield('contents')
        <!-- End Content -->

        <!-- Footer -->
        @include('auth.backend.footer')
        <!-- End Footer -->

    </div><!-- End .container -->

<script type="text/javascript" src="{{ URL::asset('admins/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admins/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('summernote-master/dist/summernote.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admins/js/admin.js') }}"></script>
</body>
</html>