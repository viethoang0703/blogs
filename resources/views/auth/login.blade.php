<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title>BootStrap</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admins/css/bootstrap-theme.min.css') }}" />
<style type="text/css">
        .container{
            margin: 20px auto;
        }
</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-push-4">
		  <form class="form-signin"  method="post" action="{{ url('auth/login') }}">
		  {!! csrf_field() !!}
			<h2 class="form-signin-heading">Đăng nhập hệ thống</h2>
			<div class="form-group">
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control"  name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control"  name="password" placeholder="Password" required>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
		  </form>
		</div>
	</div>
</div> <!-- /container -->

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


