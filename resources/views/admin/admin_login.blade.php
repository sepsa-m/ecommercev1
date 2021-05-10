<!DOCTYPE html>
<html lang="en">
<head>
	<title>SASHA ADMIN LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('backend/img/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/animate.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/bootstrap/css/main.css')}}">
</head>
<body>
	
	@if (session('login_error'))
        <div class="alert alert-danger" role="alert">{!! session('login_error') !!}</div>        
    @endif

	@if (session('middleware_error'))
        <div class="alert alert-danger" role="alert">{!! session('middleware_error') !!}</div>        
    @endif	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form id="loginForm" class="login100-form validate-form flex-sb flex-w" method="post" action="{{route('adminLogin')}}">
                @csrf
                    <span class="login100-form-title p-b-51">
						Login
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
							<a href="{{route('adminForgotPassword')}}" class="txt1">
								Forgot Your Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{asset('backend/bootstrap/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/animsition.min.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/select2.min.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/moment.min.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/daterangepicker.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/countdowntime.js')}}"></script>
	<script src="{{asset('backend/bootstrap/js/main.js')}}"></script>

</body>
</html>
