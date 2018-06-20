
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/fonts'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/fonts'); ?>/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/fonts'); ?>/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/vendor'); ?>/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('temp_register/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<div class="limiter">

		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url('temp_register/'); ?>images/bg-02.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/Daftar/daftar_komunitas') ?>">
					<span class="login100-form-title p-b-59">
						<h1>KOMUNITED - Komunitas</h1>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Kolom Nama Harus diIsi!">
						<span class="label-input100">Nama Komunitas</span>
						<input class="input100" type="text" name="namakomunitas" placeholder="Nama Komunitas...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Alamat Email Anda...">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Number is required">
						<span class="label-input100">Nomor Hp</span>
						<input class="input100" type="tel" name="kontak" placeholder="+628123456789">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Kategori</span>
						<select class="input100" name="selectbox">
							<option value="01">Bisnis & UKM</option>
							<option value="02">Fashion</option>
							<option value="03">Gaya Hidup</option>
							<option value="04">Keagamaan</option>
							<option value="05">Kepemudaan</option>
							<option value="06">Kesehatan</option>
							<option value="07">Lingkungan Hidup</option>
							<option value="08">Olahraga</option>
							<option value="09">Pendidikan</option>
							<option value="10">Perempuan</option>
							<option value="11">Politik</option>
							<option value="12">Profesi & Alumni</option>
							<option value="13">Sains & Teknologi</option>
							<option value="14">Sejarah</option>
							<option value="15">Selebriti & Hiburan</option>
							<option value="16">Seni & Budaya</option>
							<option value="17">Sosial</option>
							<option value="18">Wisata & Kuliner</option>

						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Number is required">
						<span class="label-input100">Biodata Komunitas</span>
						<textarea name="biodata" rows="5" cols="80" placeholder="Deskripsikan Komunitas Anda"></textarea>
						<span class="focus-input100"></span>
					</div>


					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Saya Setuju dengan
									<a href="#" class="txt2 hov1">
										Kebijakan Pengguna Kami
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>

						<a href="<?php echo base_url('index.php/Anggota'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Beranda
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>


				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('temp_register/vendor'); ?>/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url('temp_register/vendor'); ?>/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('temp_register/vendor'); ?>/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
