<?php
error_reporting(0);
session_start();
include "koneksi.php";
?>
<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">


		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <br><br> <br><br> <br><br>
            <h3 align="center">Welcome to Website : <?= $_SESSION['nm'] ?></h3>

         </div>
		<!-- //contact form -->
	</div>
</section>