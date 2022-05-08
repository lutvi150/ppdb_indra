<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 session_start();
include "../koneksi.php";
$sqlm = mysqli_query($koneksi,"SELECT * From tbl_register")

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMP PNIEL MEDAN</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Studies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="" rel="shortcut icon" type="image/x-icon"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 bg-li">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-5 top-social-w3pvt-am mt-lg-1 mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-4 col-6 header-top_w3layouts border-right">
								<p class="text-bl">
									<span class="fa  mr-2"></span>
								</p>
							</div>
							<div class="col-xl-8 col-10 header-top_w3layouts text-md-right">
								<p class="text-bl">
									<span style="font-family:Times New Roman">Selamat Datang pada PSB Online SMP PNIEL MEDAN: <?= $_SESSION['nm'] ?></span> <!-- nm dalam ['nm'] adalah nama variabel dari proseslogin -->
								</p>
							</div>
							<div class="col-xl-4"></div>
						</div>
					</div>
				
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top">
		<div class="container d-lg-flex">
			<!-- logo -->
			<h1 class="logo-style-res float-left">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.jpg" alt="" class="img-fluid " style="width:300px;">
				</a>
			</h1>
			<!-- //logo -->
			<!-- nav -->
			<div class="nav_w3ls mx-lg-auto">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mx-lg-auto">
						<li><a href="?page=halaman_home" class="active fa fa-home">Home</a></li>
						<li><a href="#" class=""></a></li>
						<li><a href="index.php" class="fa fa-list-alt">Data Pendaftaran</a></li>
						<?php if($data_member->status=='draft'): ?>
						<li><a href="#" onclick="showModalAlertData()" class="fa fa-user">Profil</a></li>
						<?php else: ?>
							<li><a href="<?=base_url('Member/tampil_data/'.$data_member->id_user)?>" class="fa fa-user">Profil</a></li>
							<?php  ?>
						<li><a href="?page=pengumuman_lulus&id=<?= $_SESSION['idregis'] ?>" class="fa fa-bullhorn">Pengumuman</a></li>
						<li><a href="logout.php" class="fa fa-sign-out">Keluar</a></li>
					
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->


<?php

include "content.php";
?>

	
	<!-- copyright -->
	<div class="copyright-w3ls py-4">
		<div class="container">
			<div class="row">
				<!-- copyright -->
				<p class="col-lg-8 copy-right-grids text-bl text-lg-left text-center mt-lg-2">© 2021 | IT DEV 
					
				</p>
				<!-- //copyright -->
				<!-- social icons -->
				<div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
					<ul>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-facebook-f"></span>
							</a>
						</li>
						<li class="px-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li>
							<a href="#" class="rounded-circle">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li class="pl-2">
							<a href="#" class="rounded-circle">
								<span class="fa fa-dribbble"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>
<!-- Modal -->
<div class="modal fade" id="alertDataKosong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Maaf </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<p>Data Anda Belum Lengkap</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
	function showModalAlertData() {
		$('#alertDataKosong').modal('show');
	}
</script>
</html>
