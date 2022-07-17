<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset ('style/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }} ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('style/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset ('style/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('style/images/profile-bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
                <form action="{{ route('login') }}" class="signin-form" method="post">
					@csrf
		      		<div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
		      		</div>
	            <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                    @if (Route::has('register'))
                    <a class="container-login100-form-btn m-t-32" style="color: white;" href="{{ route('register') }}">
                       {{ __('Create New Account?') }}
                    </a>
                        @endif
                   <!-- @if (Route::has('password.request'))
                <a class="container-login100-form-btn m-t-32" style="color: white;" href="{{ route('password.request') }}">
                   {{ __('Forgot Your Password?') }}
                </a> -->
                    @endif
	            </div>
	          </form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/bootstrap/js/popper.js') }}"></script>
	<script src=" {{asset ('style/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src=" {{asset ('style/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src=" {{asset ('style/js/main.js"></script>

</body>
</html>
