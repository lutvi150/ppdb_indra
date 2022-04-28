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
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?=base_url();?>assets/jquery/jquery-3.6.0.min.js"></script>
</head>

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe
				</p>
			</div>
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<a class="facebook" href="#">
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
					</a>
				</div>

				<div class="clearfix"> </div>
					<!-- modal -->

		<!-- modal -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header" >
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

							<h3><img src="<?=base_url();?>assets/images/10.png" witdh="40px" alt="" >
								<span class="" aria-hidden="true"> </span>
							</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--/.navbar-header-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active" >
							<a href="?page=home" class="effect-2">Home</a>
						</li>
						<li>
							<a href="#visi" class="effect-1 ">Visi&amp;Misi</a>
						</li>
						<li>
							<a href="#informasi" class="effect-3">Informasi</a>
						</li>
						<li>
							<a href="<?=base_url('controller/routePage/panduan')?>"  class="effect-3">Panduan</a>
						</li>
						<li>
							<a href="<?=base_url('controller/galeri')?>"  class="effect-3">Galeri</a>
						</li>
						<li>
							<a href="<?=base_url('controller/routePage/register')?>" class="effect-3">Register</a>
						</li>
						<li>
							<a href="<?=base_url('controller/routePage/login')?>" class="effect-3">Login</a>
						</li>
					</ul>
				</nav>
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
