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
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!-- //meta-tags -->
	<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url();?>assets/f_css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url();?>assets/f1_css/style3.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?=base_url();?>assets/jquery/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/costumeHome.css">
</head>
<style>
	@import url("https://www.w3cplus.com/demo/css3/base.css");

	@font-face {
		font-family: 'sansationregular';
		src: url('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.eot');
		src: url('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.eot?#iefix') format('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/embedded-opentype'),
			url('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.woff') format('woff'),
			url('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.ttf') format('truetype'),
			url('https://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.svg#sansationregular') format('svg');
		font-weight: normal;
		font-style: normal;
	}

	body {
		background-color: #edecec;
	}

	ul,
	li {
		list-style: none outside none;
	}

	/* basic menu styles */
	.nav-menu {
		display: block;
		background: #74adaa;
		width: 1035px;
		margin: 50px auto 150px;
	}

	.nav-menu>li {
		display: inline;
		float: left;
		border-right: 1px solid #94c0be;
		position: relative;
	}

	.nav-menu>li:last-child {
		border-right: none;
	}

	.nav-menu li a {
		color: #fff;
		display: block;
		text-decoration: none;
		font-family: 'sansationregular';
		-webkit-font-smoothing: antialiased;
		-moz-font-smoothing: antialiased;
		font-smoothing: antialiased;
		text-transform: capitalize;
		overflow: visible;
		line-height: 20px;
		font-size: 20px;
		padding: 15px 30px 15px 31px;
	}

	/* animation domination */
	.three-d {
		-webkit-perspective: 200px;
		-moz-perspective: 200px;
		-ms-perspective: 200px;
		-o-perspective: 200px;
		perspective: 200px;
		-webkit-transition: all .07s linear;
		-moz-transition: all .07s linear;
		-ms-transition: all .07s linear;
		-o-transition: all .07s linear;
		transition: all .07s linear;
		position: relative;
	}

	.three-d:not(.active):hover {
		cursor: pointer;
	}

	.three-d:not(.active):hover .three-d-box,
	.three-d:not(.active):focus .three-d-box {
		-wekbit-transform: translateZ(-25px) rotateX(90deg);
		-moz-transform: translateZ(-25px) rotateX(90deg);
		-o-transform: translateZ(-25px) rotateX(90deg);
		-ms-transform: translateZ(-25px) rotateX(90deg);
		transform: translateZ(-25px) rotateX(90deg);
	}

	.three-d-box {
		-webkit-transition: all .3s ease-out;
		-moz-transition: all .3s ease-out;
		-ms-transition: all .3s ease-out;
		-o-transition: all .3s ease-out;
		transition: all .3s ease-out;
		-webkit-transform: translatez(-25px);
		-moz-transform: translatez(-25px);
		-ms-transform: translatez(-25px);
		-o-transform: translatez(-25px);
		transform: translatez(-25px);
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		-ms-transform-style: preserve-3d;
		-o-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-pointer-events: none;
		-moz-pointer-events: none;
		-ms-pointer-events: none;
		-o-pointer-events: none;
		pointer-events: none;
		position: absolute;
		top: 0;
		left: 0;
		display: block;
		width: 100%;
		height: 100%;
	}

	.front {
		-webkit-transform: rotatex(0deg) translatez(25px);
		-moz-transform: rotatex(0deg) translatez(25px);
		-ms-transform: rotatex(0deg) translatez(25px);
		-o-transform: rotatex(0deg) translatez(25px);
		transform: rotatex(0deg) translatez(25px);
	}

	.back {
		-webkit-transform: rotatex(-90deg) translatez(25px);
		-moz-transform: rotatex(-90deg) translatez(25px);
		-ms-transform: rotatex(-90deg) translatez(25px);
		-o-transform: rotatex(-90deg) translatez(25px);
		transform: rotatex(-90deg) translatez(25px);
		color: #FFE7C4;
	}

	.front,
	.back {
		display: block;
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: #74adaa;
		padding: 15px 30px 15px 31px;
		color: white;
		-webkit-pointer-events: none;
		-moz-pointer-events: none;
		-ms-pointer-events: none;
		-o-pointer-events: none;
		pointer-events: none;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.nav-menu li .active .front,
	.nav-menu li .active .back,
	.nav-menu li a:hover .front,
	.nav-menu li a:hover .back {
		background-color: #51938f;
		-webkit-background-size: 5px 5px;
		background-size: 5px 5px;
		background-position: 0 0, 30px 30px;
		background-image: -webit-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
		background-image: -moz-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
		background-image: -ms-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
		background-image: -o-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
		background-image: linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
	}

	.nav-menu ul {
		position: absolute;
		left: -40px;
		text-align: left;
		line-height: 40px;
		font-size: 14px;
		width: 200px;
		-webkit-transition: all 0.3s ease-in;
		-moz-transition: all 0.3s ease-in;
		-ms-transition: all 0.3s ease-in;
		-o-transition: all 0.3s ease-in;
		transition: all 0.3s ease-in;
		-webkit-transform-origin: 0px 0px;
		-moz-transform-origin: 0px 0px;
		-ms-transform-origin: 0px 0px;
		-o-transform-origin: 0px 0px;
		transform-origin: 0px 0px;
		-webkit-transform: rotateX(-90deg);
		-moz-transform: rotateX(-90deg);
		-ms-transform: rotateX(-90deg);
		-o-transform: rotateX(-90deg);
		transform: rotateX(-90deg);
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	.nav-menu>li:hover ul {
		display: block;
		-webkit-transform: rotateX(0deg);
		-moz-transform: rotateX(0deg);
		-ms-transform: rotateX(0deg);
		-o-transform: rotateX(0deg);
		transform: rotateX(0deg);
	}
</style>

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV,
					Deli Tua, Kec. Namo Rambe
				</p>
			</div>
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<!-- <a class="facebook" href="#">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="twitter" href="#">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="pinterest" href="#">
						<span class="fa fa-pinterest-p"></span>
					</a>
					<a class="linkedin" href="#">
						<span class="fa fa-linkedin"></span>
					</a> -->
				</div>

				<div class="clearfix"> </div>
				<!-- modal -->

				<!-- modal -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<h3><img src="<?=base_url();?>assets/images/10.png" witdh="40px" alt="">
							<span class="" aria-hidden="true"> </span>
						</h3>
						</a>
					</div>
				</div>
		</div>
	</div>
	<!--/.navbar-header-->
	<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<nav class="link-effect-2" id="link-effect-2">
			<ul class="navbar-nav mr-auto" >
				<li class="active">
					<a href="<?=base_url()?>" class="effect-2">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Profil Sekolah
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/visi_misi')?>">Visi Misi</a>
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/ruangan_kelas')?>">Rungan Kelas</a>
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/fasilitas_sekolah')?>">Fasilitas Sekolah</a>
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/extrakurikuler')?>">Extrakurikuler</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/pengumuman')?>">Pengumuman</a>
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/kegiatan')?>">Kegiatan</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pendaftaran
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/syarat')?>">Syarat</a>
						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/biaya')?>">Biaya</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Informasi lainnya
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?=base_url('controller/routePage/panduan')?>">Panduan</a>
						<a class="dropdown-item" href="<?=base_url('controller/galeri')?>">Galeri</a>

						<a class="dropdown-item" href="<?=base_url('controller/menuprofil/beasiswa')?>">Beasiswa</a>
					</div>

				</li>
				<li>
					<a href="<?=base_url('controller/routePage/register')?>" class="effect-3">Register</a>
				</li>
				<li>
					<a href="<?=base_url('controller/routePage/login')?>" class="effect-3">Login</a>
				</li>
			</ul>
		</nav>
	</div> -->
	<div id="nav">
		<ul class="nav-menu clearfix unstyled">
			<li><a href="<?=base_url()?>" class="three-d active">
					Home
					<span class="three-d-box"><span class="front">Home</span><span class="back">Home</span></span>
				</a></li>
			<li><a href="#" class="three-d">
					Profil Sekolah
					<span class="three-d-box"><span class="front">Profil Sekolah</span><span class="back">Profil
							Sekolah</span></span>
				</a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="<?=base_url('controller/menuprofil/visi_misi')?>" class="three-d">
							Visi Misi
							<span class="three-d-box"><span class="front">Visi Misi</span><span class="back">Visi
									Misi</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/ruangan_kelas')?>" class="three-d">
							Ruangan Kelas
							<span class="three-d-box"><span class="front">Ruangan Kelas</span><span class="back">Ruangan
									Kelas</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/fasiliras_sekolah')?>" class="three-d">
							Fasilitas Sekolah
							<span class="three-d-box"><span class="front">Fasilitas Sekolah</span><span
									class="back">Fasilitas Sekolah</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/extrakurikuler')?>" class="three-d">
							Extrakurikuler
							<span class="three-d-box"><span class="front">Extrakurikuler</span><span
									class="back">Extrakurikuler</span></span>
						</a></li>
				</ul>
			</li>

			<li><a href="#" class="three-d">
					Informasi
					<span class="three-d-box"><span class="front">Informasi</span><span
							class="back">Informasi</span></span>
				</a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="<?=base_url('controller/menuprofil/pengumuman')?>" class="three-d">
							Pengumuman
							<span class="three-d-box"><span class="front">Pengumuman</span><span
									class="back">Pengumuman</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/kegiatan')?>" class="three-d">
							Ruangan Kelas
							<span class="three-d-box"><span class="front">Ruangan Kelas</span><span class="back">Ruangan
									Kelas</span></span>
						</a></li>
				</ul>
			</li>
			<li><a href="#" class="three-d">
					Pendaftaran
					<span class="three-d-box"><span class="front">Pendaftaran</span><span
							class="back">Pendaftaran</span></span>
				</a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="<?=base_url('controller/menuprofil/syarat')?>" class="three-d">
							Syarat
							<span class="three-d-box"><span class="front">Syarat</span><span
									class="back">Syarat</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/biaya')?>" class="three-d">
							Biaya
							<span class="three-d-box"><span class="front">Biaya</span><span
									class="back">Biaya</span></span>
						</a></li>
				</ul>
			</li>
			<li><a href="#" class="three-d">
					Informasi Lainnya
					<span class="three-d-box"><span class="front">Informasi Lainnya</span><span class="back">Informasi
							Lainnya</span></span>
				</a>
				<ul class="clearfix unstyled drop-menu">
					<li><a href="<?=base_url('controller/routePage/panduan')?>" class="three-d">
							Panduan
							<span class="three-d-box"><span class="front">Panduan</span><span
									class="back">Panduan</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/galeri')?>" class="three-d">
							Galeri
							<span class="three-d-box"><span class="front">Galeri</span><span
									class="back">Galeri</span></span>
						</a></li>
					<li><a href="<?=base_url('controller/menuprofil/beasiswa')?>" class="three-d">
							Beasiswa
							<span class="three-d-box"><span class="front">Beasiswa</span><span
									class="back">Beasiswa</span></span>
						</a></li>
				</ul>
			</li>
			<li><a href="<?=base_url('controller/routePage/register')?>" class="three-d">
					Register
					<span class="three-d-box"><span class="front">Register</span><span
							class="back">Register</span></span>
				</a></li>

			<li><a href="<?=base_url('controller/routePage/login')?>" class="three-d">
					Login
					<span class="three-d-box"><span class="front">Login</span><span class="back">Login</span></span>
				</a></li>
		</ul>
	</div>
	<!-- Indicators -->
	<!--/.navbar-header-->
	<?php $this->load->view($content);?>



	<!-- //testimonials -->
	<!-- footer -->
	<?php $this->load->view('layout/footer');?>
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="<?=base_url();?>assets/js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
	<!-- stats numscroller-js-file -->
	<script src="<?=base_url();?>assets/js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->

	<!-- Flexslider-js for-testimonials -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 1
					},
					tablet: {
						changePoint: 768,
						visibleItems: 1
					}
				}
			});

		});

	</script>
	<script src="<?=base_url();?>assets/js/jquery.flexisel.js"></script>
	<!-- //Flexslider-js for-testimonials -->
	<!-- smooth scrolling -->
	<script src="<?=base_url();?>assets/js/SmoothScroll.min.js"></script>
	<script src="<?=base_url();?>assets/js/move-top.js"></script>
	<script src="<?=base_url();?>assets/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});

	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>
