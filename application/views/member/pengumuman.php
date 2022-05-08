<link rel="stylesheet" href="<?=base_url()?>assets/css/countdown.css">
<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">
		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
			data-aos-duration="2000">

			<body>
				<div class="container">
					<div align="center">
						<h4>Hasil Penerimaan Siswa Baru Online</h4>
						<h3>SMP PNIEL MEDAN</h3>
					</div>

					<body>

						<div id="btn-cetak" >
						</div>

						<br>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No Pendaftaran</th>
									<th><?=$data_member->no_pendaftaran?></th>
								</tr>
								<tr>
									<th>Nama Peserta</th>
									<th><?=$data_member->nama?></th>
								</tr>
								<tr>
									<th>Tanggal Lahir</th>
									<th><?=$data_member->tgl_lahir;?></th>
								</tr>
							</thead>
						</table>
						<!-- <div align="center">
							<h3>Anda Dinyatakan: <?=$data_member->konfirmasi?></h3>
						</div> -->
						<div id="countdown-1">
							<div class="box">
								<h1 id="text-head-notif"></h1>
								<div class="allTime">
									<div class="wp days"></div>
									<div class="wp hrs"></div>
									<div class="wp min"></div>
									<div class="wp sec"></div>
								</div>
							</div>
						</div>
				</div>
			</body>
			<br><br>
			<div align="center">
				<td>Informasi Selengkapnya Silahkan Cetak Bukti Kelulusan Untuk Melakukan Pendaftaran Ulang <br>
					Untuk Jadwal Pendaftaran Ulang Bisa Di lihat Pada Halaman Utama Website Ini.</td>
			</div>
			</body>
		</div>
		<!-- //contact form -->
	</div>
</section>
<script>
	let url = "<?=base_url()?>";
	$(document).ready(function () {
		getTime();
	});





	function getTime() {
		$.ajax({
			type: "POST",
			url: url + "ApiMember/checkDate",
			data: "data",
			dataType: "json",
			success: function (response) {
				makeTimer(response.data);
			},
			error: function () {
				swal("Gagal", "Gagal Mengambil Data", "error");
			}
		});
	}

	function makeTimer(time) {
	let countDownBox	= document.querySelector(".allTime");
		let daysBox			= document.querySelector(".days");
		let hrsBox			= document.querySelector(".hrs");
		let minBox			= document.querySelector(".min");
		let secBox			= document.querySelector(".sec");
		let countDownDate	= new Date(time).getTime();

		// COUNT DOWN FUNCTION
		let x = setInterval(function() {

			// GET DATE
			let now = new Date().getTime();

			// TIME BETWEEN NOW AND DATE
			let distance = countDownDate - now;

			// CALCULATION TIME
			let days 	= Math.floor(distance / (1000 * 60 * 60 * 24));
			let hours 	= Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes	= Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			let seconds	= Math.floor((distance % (1000 * 60)) / 1000);

			daysBox.innerHTML	= days + "<span>Hari</span>";
			hrsBox.innerHTML 	= hours + "<span>Jam</span>";
			minBox.innerHTML 	= minutes + "<span>Menit</span>";
			secBox.innerHTML 	= seconds + "<span>Detik</span>";
			$("#text-head-notif").html("Hasil seleksi akan di umumkan dalam");
			// IF FINISH
			if (distance < 0) {
				clearInterval(x);
				$("#text-head-notif").html("Berdasar Hasil Seleksi anda dinyatakan");
				checkKelulusan(distance);
			}
		}, 1000); }
		function checkKelulusan(distance) {
			let countDownBox	= document.querySelector(".allTime");
			$.ajax({
				type: "POST",
				url: url+"ApiMember/checkKelulusan",
				data: {
					id_user: "<?=$data_member->id_user?>",
					distance: distance
				},
				dataType: "JSON",
				success: function (response) {
					if (response.status == 'success') {
						if (response.data == 'lulus') {
							countDownBox.innerHTML = "Lulus";
							$("#btn-cetak").html("<a href='<?=base_url()?>ApiMember/cetakKelulusan/<?=$data_member->id_user?>' class='btn btn-primary'>Cetak Bukti Kelulusan</a>");
						} else{
							countDownBox.innerHTML = "Tidak Lulus";

						}
					}

				},error:function(){
					swal("Gagal", "Gagal Mengambil Data", "error");
				}
			});
		 }
</script>
