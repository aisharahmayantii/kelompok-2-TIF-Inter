<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - SNEAKTION | Sneaker Comparison</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('theme-assets/images/ico/logos.png')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/bootstrap/css/bootstrap.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/animate/animate.css")?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/css-hamburgers/hamburgers.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/animsition/css/animsition.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/select2/select2.min.css")?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/vendor/daterangepicker/daterangepicker.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/css/util.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/alogin/css/main.css")?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(https://www.sneakerhdwallpapers.com/wallpapers/2019/what-the-air-jordan-4-wallpaper-preview.jpg);">
					<span class="login100-form-title-1">
						SNEAKTION
					</span>
					<h5 style="color:white">Admin Login</h5>
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url('Login/aksi_login');?>" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
						<div>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color:red" href="<?php echo base_url('Home/index');?>">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/jquery/jquery-3.2.1.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/animsition/js/animsition.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/bootstrap/js/popper.js")?>"></script>
	<script src="<?php echo base_url("assets/alogin/vendor/bootstrap/js/bootstrap.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/select2/select2.min.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/daterangepicker/moment.min.js")?>"></script>
	<script src="<?php echo base_url("assets/alogin/vendor/daterangepicker/daterangepicker.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/vendor/countdowntime/countdowntime.js")?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/alogin/js/main.js")?>"></script>

</body>
</html>