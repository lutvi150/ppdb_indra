<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>

<head>
	<title>Administrator PSB SMP PNIEL MEDAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url();?>assets/admin/user/css/bootstrap.min.css" rel='stylesheet' />
	<!-- Custom CSS -->
	<link href="<?=base_url();?>assets/admin/user/css/style.css" rel='stylesheet' />
	<!-- Graph CSS -->
	<link href="<?=base_url();?>assets/admin/user/css/lines.css" rel='stylesheet' />
	<link href="<?=base_url();?>assets/admin/user/css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="<?=base_url();?>assets/admin/user/js/jquery.min.js"></script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet'>
	<!---//webfonts--->
	<!-- Nav CSS -->
	<link href="<?=base_url();?>assets/admin/user/css/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?=base_url();?>assets/admin/user/js/metisMenu.min.js"></script>
	<script src="<?=base_url();?>assets/admin/user/js/custom.js"></script>
	<!-- Graph JavaScript -->
	<script src="<?=base_url();?>assets/admin/user/js/d3.v3.js"></script>
	<script src="<?=base_url();?>assets/admin/user/js/rickshaw.js"></script>

	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/user/DataTables/datatables.min.css" />
	<script type="text/javascript" src="<?=base_url();?>assets/admin/user/DataTables/datatables.min.js"></script>
	<script src="<?=base_url();?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#table_id').DataTable();
		});

	</script>
	<style>
		.text-error{
			color: red !important;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<li class="fa fa-user">Admin</li>
				</a>
			</div>
			<!-- /.navbar-header -->

			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" value="Search..." onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = 'Search...';}">
			</form>
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?=base_url('controllerAdmin')?>"><i
									class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>

							<?php if ($this->session->userdata('role') == 'admin'): ?>
						<li>
							<a href="<?=base_url('controllerAdmin/dataAdmin')?>"><i class="fa fa-user nav_icon"></i>Data
								Admin</a>
						</li>

						<!-- <li>
							<a href="<?=base_url('ControllerAdmin/data_member')?>"><i class="fa fa-users nav_icon"></i>Data Member</a>
						</li> -->

						<li>
							<a href="<?=base_url('ControllerAdmin/data_pendaftar')?>"><i
									class="fa fa-file-text nav_icon"></i>Data Pendaftar</a>
						</li>
						<li>
							<a href="<?=base_url('ControllerAdmin/data_galeri')?>"><i
									class="glyphicon glyphicon-expand nav_icon"></i>Data
								Galeri</a>
						</li>

						<li>
							<a href="<?=base_url('ControllerAdmin/data_pengumuman')?>"><i
									class="fa fa-bell-o nav_icon"></i>Data Pengumuman</a>
						</li>

						<li>
							<a href="<?=base_url('ControllerAdmin/data_kelulusan/lulus')?>"><i
									class="glyphicon glyphicon-list-alt nav_icon"></i>Data Siswa
								Yang Lulus</a>
						</li>

						<li>
							<a href="<?=base_url('ControllerAdmin/data_kelulusan/tidak_lulus')?>"><i
									class="glyphicon glyphicon-list-alt nav_icon"></i>Data Yang
								Tidak Lulus</a>
						</li>
						<li>
							<a href="<?=base_url('ControllerAdmin/setting')?>"><i
									class="glyphicon glyphicon-wrench nav_icon"></i> Setting</a>
						</li>
						<!-- /.nav-second-level -->
						<?php endif;?>

						<?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'pimpinan'): ?>
						<li>
							<a href="#"><i class="fa fa-file-o nav_icon"></i>Laporan<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?=base_url('ControllerAdmin/laporan_periode')?>"><i
											class="fa fa-file-o nav_icon"></i> Siswa Di
										Terima </a>
								</li>
								<li>
									<a href="<?=base_url('ControllerAdmin/laporan_tidak_lulus')?>"><i
											class="fa fa-file-o nav_icon"></i> Siswa Di
										Tolak</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>

						<?php endif;?>

						<li>
							<a href="<?=base_url('ControllerAdmin/laporanGrafik')?>" ><i
									class="glyphicon glyphicon-book nav_icon"></i> Laporan Grafik</a>
						</li>
						<li>
							<a href="<?=base_url('ControllerAdmin/menuInformasi')?>" ><i
									class="glyphicon glyphicon-book nav_icon"></i> Menu Informasi</a>
						</li>
						<li>
							<a href="#" class="#" onclick="showModalUpdatePassword()"><i
									class="glyphicon glyphicon-cog nav_icon"></i> Ganti Password</a>
						</li>
						<li>
							<a class="fa fa-sign-out" href="<?=base_url('controller/logout')?>">LogOut</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
					</li>

					</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
		<div id="page-wrapper">
			<div class="graphs">
				<?php $this->load->view($content);?>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Bootstrap Core JavaScript -->

	<!-- Modal -->
	<div class="modal fade" id="modal-update-password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Update Password</h5>
				</div>
				<div class="modal-body">
					<div class="">
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" name="" value="<?=$this->session->userdata('username')?>" id="username" class="form-control" placeholder=""
								aria-describedby="helpId">
							<small id="helpId" class="text-error eusername"></small>
						</div>
						<div class="form-group">
							<label for="">Password Lama</label>
							<input type="password" name="" id="password_lama" class="form-control" placeholder=""
								aria-describedby="helpId">
							<small id="helpId" class="text-error epassword-lama"></small>
						</div>
						<div class="form-group">
							<label for="">Password Baru</label>
							<input type="password" name="" id="password_baru" class="form-control" placeholder=""
								aria-describedby="helpId">
							<small id="helpId" class="text-error epassword-baru"></small>
						</div>
						<div class="form-group">
							<label for="">Ulangi Password</label>
							<input type="password" name="" id="ulangi_password" class="form-control" placeholder=""
								aria-describedby="helpId">
							<small id="helpId" class="text-error eulangi-password-baru"></small>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="button" onclick="updatePassword()" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</div>
	<script src="<?=base_url();?>assets/admin/user/js/bootstrap.min.js"></script>
	<script>

		function showModalUpdatePassword() {
			$('#modal-update-password').modal('show');
		}

		function updatePassword() {
			$(".text-error").text("");
			let username = $('#username').val();
			let password_lama = $('#password_lama').val();
			let password_baru = $('#password_baru').val();
			let ulangi_password = $('#ulangi_password').val();
			if (password_baru != ulangi_password) {
				$('#eulangi-password-baru').html('Password tidak sama');
			} else {
				$.ajax({
					type: "POST",
					url: "<?=base_url();?>ApiAdmin/updatePassword",
					data: {
						password_lama: password_lama,
						password_baru: password_baru,
						username: username,
					ulangi_password: ulangi_password,
						id_user:"<?=$this->session->userdata('id_user')?>"
					},
					dataType: "JSON",
					success: function (response) {
						if (response.status == 'success') {
							$('#modal-update-password').modal('hide');
							swal({
								title: "Berhasil!",
								text: "Password berhasil diubah",
								icon: "success",
								button: "Tutup",
							});
						} else if(response.status=='validation_failed'){
							$(".eusername").text(response.message.username);
							$(".epassword-lama").text(response.message.password_lama);
							$(".epassword-baru").text(response.message.password_baru);
							$(".eulangi-password-baru").text(response.message.ulangi_password);
						} else {
							swal({
								title: "Gagal",
								text: `${response.message}`,
								icon: "error",
								button: "Ok",
							});
						}
					},
					error: function () {
						swal({
							title: "Gagal",
							text: "Gagal Update Password",
							icon: "error",
							button: "Ok",
						});
					}
				});
			}
		}

	</script>
</body>

</html>
