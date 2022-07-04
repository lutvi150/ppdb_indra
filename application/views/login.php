<div class="inner_page_agile"></div>
        <div class="title-div">
				<h3 class="tittle">
					Login
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<style>
				.text-error{
					color: red;
				}
			</style>
        <div class="login-form">
				<form method="POST" action="#" enctype="multipart/form-data">
					<div class="">
						<p>Username</p>
                        <input type="username"  class="form-control" id="username" name="username" placeholder="">
						<span class="text-error eusername"></span>
					</div>
					<div class="">
						<p>Password</p>
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
						<span class="text-errpr epassword"></span>
					</div>
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span> Remember me ?</span>
					</label>
					<div class="login-agileits-bottom wthree">
						<h6>
							<a href="#">Ingat Sandi?</a>
						</h6>
					</div>
					<button type="button"  onclick="loginProcess()"  name="btnlogin" class="btn btn-success" value="Login"> Login</button>
					<div class="register-forming">
						<p>Belum Mendaftar? --
							<a href="<?=base_url('controller/routePage/register')?>">Klik Disini</a>
						</p>
					</div>
				</form>
            </div>
         <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script>
	function loginProcess() {
		$(".text-error").text("");
		let username=$('#username').val();
		let password=$('#password').val();
		$.ajax({
			type: "POST",
			url: "<?=base_url('controller/login')?>",
			data: {
				username: username,
				password: password
			},
			dataType: "JSON",
			success: function (response) {
				if (response.status=='validation_failed') {
					$(".eusername").text(response.errors.username);
					$(".epassword").text(response.errors.password);
				} else if (response.status=='username not found') {
					$(".eusername").text(response.errors.username);
				} else if(response.status=='email not verified'){
					swal({
						title: "Akun Belum Diverifikasi",
						text: "Silahkan Lapor Admin",
						icon: "warning",
						button: "Ok",
					});
				} else if (response.status=='success') {
					window.location.href="<?=base_url('member')?>";
				}

			},error:function(){
				swal("Gagal", "Username atau Password Salah", "error");
			}
		});
	 }
</script>
<?php if ($this->session->flashdata('success')) {
    echo '<script>swal({
		title: "Succeed!",
		text: "Register Berhasil",
		type: "success",
		confirmButtonText: "Ok"
	});</script>';
}?>
<?php if ($this->session->flashdata('error')) {
    echo '<script>swal({
		title: "Gagal!",
		text: "Username atau Password Salah",
		type: "error",
		confirmButtonText: "Ok"
	});</script>';
}?>
