<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('halaman_auth/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/main.css') }}">
<!--===============================================================================================-->

<style>
	/* Custom button colors */
	.btn-register {
		background-color: #007bb5; /* Blue background */
		border-color: #007bb5;    /* Blue border */
		color: white;             /* White text */
	}

	.btn-register:hover {
		background-color: #008CBA; /* Darker blue on hover */
		border-color: #008CBA;    /* Darker blue border on hover */
	}

	.nav-pills .nav-link {
		background-color: #f8f9fa; /* Inactive tab background */
		color: #495057;            /* Inactive tab text color */
		border: 1px solid #dee2e6; /* Border for tabs */
		margin: 0 5px;             /* Space between tabs */
	}

	.nav-pills .nav-link.active {
		background-color: #008CBA; /* Active tab background */
		color: white;              /* Active tab text color */
	}
</style>

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{ route('registrasi') }}" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
					@csrf
                    <span class="login100-form-title p-b-43">
						Register to continue
					</span>
					
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $item)
									<li>{{ $item }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if (Session::get('success'))
						<div class="alert alert-success alert-dismissible fade show">
							<ul>
								<li>{{ Session::get('success') }}</li>
							</ul>
						</div>
					@endif
					
					<div class="wrap-input100 validate-input" data-validate = "Valid full name email is required: ex@abc.xyz">
						<input class="input100" type="text" name="full_name">
						<span class="focus-input100"></span>
						<span class="label-input100">Full name</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div style="margin: 20px 20px 40px 20px;">
						<label for="picture" style="margin-bottom: 10px; font-size: 16pt; color: #666666;">Picture</label>
						<input class="input100" type="file" name="picture" id="picture" style="margin-left: -40px;">
					</div>

					{{-- <div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> --}}
			

					<div class="container-login100-form-btn">
						<button class="btn btn-register login100-form-btn" type="submit">
							Register
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Account Already? <a href="{{ route('auth') }}" class="text-primary">Login</a>
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('{{ asset('assets/logo/Artboard9.png') }}');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('halaman_auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.js') }}vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/js/main.js') }}"></script>

</body>
</html>