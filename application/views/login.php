<!DOCTYPE html>
<html lang="en">
<head>
	<title>KOMUNITED - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/vendor'); ?>/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/fonts'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/fonts'); ?>/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/vendor'); ?>/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/vendor'); ?>/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/vendor'); ?>/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/css'); ?>/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_login/css'); ?>/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('temp_login/'); ?>images/img-02.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/Login/input_login'); ?>">


					<span class="login100-form-title p-t-20 p-b-45">
						<h1>KOMUNITED</h1>
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							<h4>Login</h4>
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="<?php echo base_url('index.php/Daftar'); ?>" class="login100" id="daftar">
							<h5>Buat Akun</h5>
						</a>
					</div>

					<div class="text-center w-full">
						<a class="login100-form-btn" href="<?php echo base_url() ?>">
							Home
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_login/vendor'); ?>/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_login/vendor'); ?>/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('temp_login/vendor'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_login/vendor'); ?>/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_login/'); ?>js/main.js"></script>

</body>
</html>
