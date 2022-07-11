<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">


		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
			data-aos-duration="2000">
			<br>
			<br>
			<div class="col-md-12 show-status-success">

			</div>
			<br><br>
			<h3 align="center">Welcome to Website : <?=$this->session->userdata('nama')?></h3>

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
				let now = new Date().getTime();
				let timeFromServer= new Date(response.data).getTime();
				let distance= timeFromServer - now;
				if (distance<0) {
					checkKelulusan(distance)
				}
			},
			error: function () {
				swal("Gagal", "Gagal Mengambil Data", "error");
			}
		});
	}
	function checkKelulusan(distance) {
		$.ajax({
			type: "POST",
			url: url + "ApiMember/checkKelulusan",
			data: {
				id_user:"<?=$this->session->userdata('id_user')?>",
				distance:distance
			},
			dataType: "json",
			success: function (response) {
				if (response.data=="lulus") {
					$(".show-status-success").html(`<div class="alert alert-success text-center" role="alert">
					<strong>Siswa Yang lulus harap segera mendaftar ulang</strong>
				</div>`)
				}
			},
			error: function () {
				swal("Gagal", "Gagal Mengambil Data", "error");
			}
		});
	 }



</script>
