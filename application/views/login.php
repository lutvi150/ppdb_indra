<div class="inner_page_agile"></div>
        <div class="title-div">
				<h3 class="tittle">
					Login
				</h3>
				<div class="tittle-style">
				</div>
			</div>
        <div class="login-form">
				<form method="POST" action="<?=base_url('controller/login')?>" enctype="multipart/form-data">
					<div class="">
						<p>Username </p>
                        <input type="text" class="form-control" id="nama" name="username" placeholder="">
					</div>
					<div class="">
						<p>Password</p>
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
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
					<input type="submit"  type="submit" name="btnlogin" value="Login">
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
