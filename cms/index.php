<?php 
session_start();
if ($_SESSION['logged']) {
	header("Location: edit-projects.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap 3.36 -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Resource style -->
    <script src="../lib/modernizr.js"></script> <!-- Modernizr -->
    <script src="../lib/jquery-2.1.4.js"></script> <!-- Jquery -->
    <title>BTT Marine - Login</title>
</head>
<body>
<section class="cms-login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4 login-logo-col">
				<img class="img-responsive" src="../img/logo.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4 login-title-col">
				<h1>Panel Giriş</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<form action="verify.php" method="post">
					<input type="text" name="username" placeholder="Kullanıcı adı">
					<input type="text" name="password" placeholder="Şifre">
					<input type="submit" name="submit" value="Giriş">
				</form>
			</div>
		</div>
	</div>
</section>
<script src="../js/main.js"></script> <!-- Site Library -->
<script src="../lib/jquery.elevateZoom-3.0.8.min.js"></script> <!-- Eleveate Zoom -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../lib/animate.css">
</body>
</html>