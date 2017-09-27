<?php 
include_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="script/validation.min.js"></script>
	<script type="text/javascript" src="script/register.js"></script>
</head>
<body>
	<div id="error">
	</div>
	<div class="register_container">
		<form method="post" class="form-signin" id="register-form">
		<h2>Form Pendaftaran</h2>
		<br/>
		<div class="form-group">
			<input type="text" class="input-mode" placeholder="Username" name="user_name" id="user_name" />
		</div>
		<div class="form-group">
		<!-- <input type="text" class="input-mode" placeholder="No Telepon"> -->
		</div>
		<div class="form-group">
			<input type="email" class="input-mode" placeholder="Email address" name="user_email" id="user_email" />	
		</div>
		<br/>
		<div class="form-group">
			<input type="password" class="input-mode" placeholder="Password" name="password" id="password" />
		</div>
		<div class="form-group">
			<input type="password" class="input-mode" placeholder="Retype Password" name="cpassword" id="cpassword" />
		</div>
		<!-- <div class="form-group form-cek">
			<input type="radio" name="cek" value="pria" id="cek-pria" class="cek"><label for="cek-pria">Pria</label>
			<input type="radio" name="cek" value="wanita" id="cek-wanita" class="cek"><label for="cek-wanita">Wanita</label>
		</div> -->
		<br/>
		<div class="form-group">
			<button class="btn btn-submit" id="btn-submit" name="btn-save" type="submit">Daftar</button>
		</div>
		<div class="form-group">
			<button class="btn btn-submit">Daftar dengan Facebook</button>
		</div>
			<div class="form-group">
			<button class="btn btn-submit">Tata Cara Pendaftaran </button>
		</div>
		<center><label> Sudah Punya Akun</label></center>
		</div>
			<div class="form-group">
		<button class="btn btn-submit"><a href="login.html">Login</a></button>
		</div>
		<br/>

		</form>
	</div>
</body>
</html>