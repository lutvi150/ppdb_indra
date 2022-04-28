<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">


</head>

<body>

<div class="form">
    <div class="info">
        <h2 style="font-family: Times New Roman">Silahkan Login</h2>
      </div>
  <div class=""><img width="100px" height="120" src="<?=base_url();?>assets/admin/avatar.png"/></div>
  <form class="login-form" action="<?=base_url('admin/verifikasiAdmin')?>" method="POST">
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="pass" placeholder="password"/>
    <input type="submit" name="login" value="Login" style="background-color:#2AD050; font-family: Times New Roman"  >
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="<?=base_url()?>assets/admin/js/index.js"></script>
	<script src="<?=base_url();?>assets/jquery/jquery-3.6.0.min.js"></script>
	<?php if ($this->session->flashdata('error')) {
    echo '<script>swal({
		title: "Gagal!",
		text: "Username atau Password Salah",
		type: "error",
		confirmButtonText: "Ok"
	});</script>';
}?>
</body>
</html>
