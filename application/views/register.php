<style>
	.text-error{
		color: red;
	}
	.image-background{
		text-align: center;
	}
</style>
<div style="height: 20px;"></div>
<div
		class="image-background">

		<img class="" style="width:1035px;height: 250px;" src="<?=base_url();?>assets/images/03.jpg" alt="" srcset="">
	</div>
	<div style="height: 20px;"></div>
<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					Form Register
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
			<form action="#" method="POST">
					<div class="">
						<p>NISN </p>
						<input class="form-control" type="text" name="nisn" id="nisn" placeholder="Masukkan NISN" required="">
						<span class="text-error enisn"></span>
					</div>
					<div class="">
						<p>Nama Lengkap</p>
						<input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nama Lengkap" required="">
						<span class="text-error enama_lengkap"></span>
					</div>
					<div class="">
						<p>Username</p>
						<input class="form-control" type="username" name="user" id="user" placeholder="Masukan Username" required="">
						<span class="text-error euser"></span>
					</div>
					<div class="">
						<p>Password</p>
						<input class="form-control" type="password" name="pass" id="pass" placeholder="Masukan Password" required="">
						<span class="text-error epass"></span>
					</div>
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span>I Accept Terms &amp; Conditions</span>
					</label>
					<button type="button" id="btn-simpan-data" class="btn btn-danger" onclick="registerData()" name="simpan" >Daftar</button>
				</form>
			</div>
		</div>
	<section class="contact pb-8" id="contact">
				<!-- //contact form -->
			</div>
				<!-- map -->
				<div class="col-lg-12 map" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<!-- //map -->
		</div>
	</section>
	<script>
		let url="<?=base_url()?>";
		function registerData() {
			$(".btn-simpan-data").attr('disabled',true);
			$(".text-error").text("");
			let data= {
				nisn: $('#nisn').val(),
				nama_lengkap: $('#nama_lengkap').val(),
				user: $('#user').val(),
				pass: $('#pass').val(),
			}
			$.ajax({
				type: "POST",
				url: url+"controller/register_v2",
				data: data,
				dataType: "JSON",
				success: function (response) {
					if (response.status=='success') {
						$(".btn-simpan-data").removeAttr("disabled");
						$("input").val("");
						swal({
							title: "Berhasil",
							text: "Anda Berhasil Register, silahkan check email untuk verifikasi akun anda",
							icon: "success",
							button: "OK",
						});
					} else if(response.status=='validation_failed'){
						$(".btn-simpan-data").removeAttr("disabled");
						$(".euser").text(response.errors.user);
						$(".enama_lengkap").text(response.errors.nama_lengkap);
						$(".enisn").text(response.errors.nisn);
						$(".epass").text(response.errors.pass);
					}
				},error:function(){
					$(".btn-simpan-data").removeAttr("disabled");
					swal({
						title: "Gagal",
						text: "Data Gagal Di Simpan",
						icon: "error",
						button: "Ok",
					});
				}
			});
		 }
	</script>
