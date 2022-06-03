<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMP PNIEL MEDAN</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Studies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
	<link href="" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?=base_url('assets/member/')?>css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="<?=base_url('assets/member/')?>css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="<?=base_url('assets/member/')?>css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?=base_url('assets/member/')?>css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/costumes.css">
	<script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?=base_url();?>assets/jquery/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
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
									<span style="font-family:Times New Roman">Selamat Datang pada PSB Online SMP PNIEL
										MEDAN: <?=$this->session->userdata('nama')?></span>
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
						<?php if ($data_member->status == 'draft'): ?>
						<li><a href="#" onclick="showModalAlertData()" class="active fa fa-home">Home</a></li>
						<li><a href="#" onclick="showModalAlertData()" class="fa fa-list-alt">Data Pendaftaran</a></li>

						<li><a href="#" onclick="showModalAlertData()" class="fa fa-user">Profil</a></li>
						<li><a href="#" onclick="showModalAlertData()" class="fa fa-bullhorn">Pengumuman</a></li>
						<?php else: ?>
						<li><a href="<?=base_url('member/halaman_home')?>" class="active fa fa-home">Home</a></li>
						<li><a href="<?=base_url('member/data_pendaftaran')?>"  class="fa fa-list-alt">Data Pendaftaran</a></li>

						<li><a href="<?=base_url('member/profil')?>" class="fa fa-user">Profil</a></li>
						<li><a href="<?=base_url('member/pengumuman')?>"  class="fa fa-bullhorn">Pengumuman</a></li>
							<?php endif;?>
						<li><a href="<?=base_url('controller/logout')?>" class="fa fa-sign-out">Keluar</a></li>

					</ul>
				</nav>
			</div>
			<!-- //nav -->

		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->


	<?php $this->load->view($content)?>

	<!-- copyright -->
	<div class="copyright-w3ls py-4">
		<div class="container">
			<div class="row">
				
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

</html>
