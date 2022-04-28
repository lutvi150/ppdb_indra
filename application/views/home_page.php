
					<!--/.navbar-collapse-->
					<!--/.navbar-->
					</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<div >

						</div>
					</div>
				</div>
			</div>

		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->


	<div class="banner-bottom-w3l" id="about" style="background-color:#ddd">
		<div class="container">
			<div class="row">
				<h3 class="tittle">
					<span><li class="fa fa-bullhorm" style="color:black">SMP PNIEL MEDAN</li></span>
				</h3>
				<div class="tittle-style">

				</div>

					<p align="justify" style="font-family: Times New Roman; color:black">SMP NEGERI PNIEL adalah salah satu satuan pendidikan dengan jenjang Sekolah Menengah Pertama di Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe. Dalam menjalankan kegiatannya, SMP PNIEL MEDAN berada di bawah naungan Kementerian Pendidikan dan Kebudayaan
							<br>Kepala Sekolah <br>
							<b>Kristiani Septa Br Ginting, S.Pd</b></p>
			</div>
			<div class="title-div">
			<h2 style="font-size: 30px; font-family: Times New Roman" align="center" > Visi & Misi</h2>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4 style="font-family: Times New Roman">Visi</h4>
					<th>Sekolah Kristen yang unggul dalam menjadikan siswa berilmu, Beriman dan Berkarya</th><br></br>
				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4 style="font-size: 30px; font-family: Times New Roman">Misi</h4>
					<th>1. Melaksanakan Pendidikan yang berkualias sehingga para siswa memiliki kemampuan akademik</th><br></br>
<th>2. Melaksanakan pendidikan karakter terhadap siswa sesuai ajaran Alkitab</th><br></br>
<th>3. Melaksanakan pendidikan agar para siswa memiliki karya</th><br></br>
				</div>
			</div>


<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
				<h4 style="font-size: 30px; font-family: Times New Roman">Tujuan</h4>

					<th>1. Melengkapi siswa agar dapat berkarya dalam hidupnya</th><br></br>
<th>2. Membentuk anak yang berkarakter Kristus</th><br></br>
<th>3. Mengembangkan bakat anak-anak</th><br></br>
<th>4. Membantu orang tua mendidik anak</th><br>
			</div>
				<!-- Stats-->

				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
	<!-- //about -->
	<!-- services -->
   </br>
</br>
<?php $this->load->view('best_study');?>

	<!-- //services -->
	<!-- news -->

	<div class="news " style="background-color:#ddd"  id="news">
		<div class="container">
			<div class="title-div">
			<div class="about-sub">
				<div class="col-md-12 about_bottom_left" align="center">
					<h4 style="Font-Family:Times New Roman">Informasi
						<span style="Font-Family:Times New Roman">Seputar Sekolah</span>
					</h4>
				<div class="tittle-style">
				</div>
			</div>
			 <div class="about">
		<div class="container" id="informasi">
			<div class="about-grids" align="center">
         <?php foreach ($pengumuman as $key => $value): ?>

				<div class="col-md-6 wthree-about-left" style="Font-Family:Times;font-size: 30;" >
					<div class="wthree-about-left-info">
						<a href="<?=base_url('controller/detail_pengumuman/' . $value->id_pengumuman)?>"  data-toggle="modal"><img width="400" height="300" src="<?=base_url('uploads/' . $value->foto_pengumuman);?>" alt="" /></a>
						<p>
						<a href="<?=base_url('controller/detail_pengumuman/' . $value->id_pengumuman)?>"  data-toggle="modal"><?=$value->judul_pengumuman?>.....</a href="#">Selengkapnya..</a>
						</p>

					</div>
				</div>
				<div class="agileits-about-left">
                </div>
				<?php endforeach;?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- modal -->

	<!-- //modal -->

	<!-- //news -->

	<!-- middle section -->


	<!-- //middle section -->

	<!-- testimonials -->

						<div class="clearfix"> </div>
					</div>
				</li>

			</ul>
		</div>
	</div>
