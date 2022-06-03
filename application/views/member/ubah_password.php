<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">
		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
			data-aos-duration="2000">

			<body>
				<div class="container">
					<div align="center">
						<h4>Ubah Username dan password</h4>

					</div>
					<div>
						<table class="table">
							<tr>
								<td>Username</td>
								<td><input type="text" class="form-control username" value="<?=$member->username?>"> <span class="text-error eusername"></span></td>
							</tr>
							<tr>
								<td>Password Lama</td>
								<td> <input type="text" class="form-control password-lama" ><span class="text-error eusername"></span></td>
							</tr>
							<tr>
								<td>Password baru</td>
								<td> <input type="text" class="form-control password-baru"><span class="text-error epassword-baru"></span></td>
							</tr>
							<tr>
								<td>Ulangi Password Baru</td>
								<td> <input type="text" class="form-control ulangi-password baru"><span class="text-error eulangi-password baru"></span></td>
							</tr>
							<tr>
								<td colspan="2" class="text-center" >
									<button type="button" class="btn btn-success btn-xs" ><i class="fa fa-save"></i> Update Data</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</body>

			</body>
		</div>
		<!-- //contact form -->
	</div>
</section>
<script>
	function updateUsernamePassword() {
		$(".text-error").text("");
		let username=$(".username").val();
		let password_lama=$(".password-lama").val();
		let password_baru=$(".password-baru").val();
		let ulangi_password_baru=$(".ulangi-password").val();
		if (username=="") {
			$(".eusername").text("Username tidak boleh kosong");
		} else{
			if (password_baru!= ulangi_password_baru) {
				$(".eulangi-password").text("Password tidak sama");
			} else{
				$.ajax({
					url: "<?=base_url('member/update_username_password')?>",
					type: "POST",
					data: {
						username: username,
						password_lama: password_lama,
						password_baru: password_baru
					},
					success: function(data) {
						if (data=="berhasil") {
							alert("Berhasil update data");
							window.location.href="<?=base_url('member/profile')?>";
						} else{
							alert("Gagal update data");
						}
					}
				});
			}

			}
		}
</script>
