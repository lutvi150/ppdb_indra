<style>
	.aktif{
		background-color: green;
		color: white;
	}
	.nonaktif{
		background-color: red;
		color: white;
	}
</style>
<body class="wide comments example dt-example-bootstrap">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-header">
			<div class="nav-search">
				<div class="nav-item i-user">
					<div class="account"></div>
				</div>
			</div>
		</div>
		<div class="fw-body">
			<div class="content">
<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<strong>success</strong>
				<p><?=$this->session->flashdata('success');?></p>
			</div>
			<?php endif;?>
			<?php if ($this->session->userdata('error')): ?>
			<div class="alert alert-danger" role="alert">
				<strong>Gagal</strong>
				<p><?=$this->session->flashdata('error');
?></p>
			</div>
			<?php endif;?>

				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>NISN</th>
							<th>Nama Admin </th>
							<th>Username</th>
							<th>Status Akun</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach ($user as $key => $value): ?>
					<tr>

						<td><?=$key + 1?></td>
						<td><?=$value->nisn?></td>
						<td><?=$value->nama;?></td>
						<td><?=$value->username;?></td>
						<td>
							<?php if ($value->verifikasi_email == 1): ?>
							<button type="button" class="badge badge-info" style="">Aktif</button>
							<?php else: ?>
							<button type="button" class="badge badge-danger">Tidak Aktif</button>
							<?php endif;?>
						</td>
						<td>
							<?php if ($value->verifikasi_email == 1): ?>
								<button type="button" onclick="verifikasiAccount(0,'<?=$value->id_register?>')" class="btn btn-info btn-xs">Batalkan Verifikasi</button>
								<?php else: ?>
									<button type="button" onclick="verifikasiAccount(1,'<?=$value->id_register?>')" class="btn btn-warning btn-xs">Verifikasi Account</button>
									<?php endif;?>
								</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
		</table>
</body>
<!-- modal -->
<div class="modal modal-success fade" id="modal-success">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal btn-warning" method="POST" action="aksi_simpan_admin.php"
					enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="">
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="username" name="username" placeholder="">
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="password" name="password" placeholder="">
									</div>
								</div>
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Level </label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="level" name="level">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
								<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
							</div>
<script>
	function verifikasiAccount(status,id_user) {
		localStorage.setItem('status',status);
		localStorage.setItem('id_user',id_user);
		swal({
			title: "Apakah anda yakin?",
			text: "Setelah di verifikasi, anda tidak dapat mengubah data!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				prosesVerifikasiAccount(localStorage.getItem('status'),localStorage.getItem('id_user'));
			} else {
				swal("Data tidak di verifikasi!");
			}
		});
	 }
	function prosesVerifikasiAccount(status,id_user) {
		$.ajax({
			type: "POST",
			url: "<?=base_url('ApiAdmin/verifikasiAccount')?>",
			data: {
				status:status,
				id_user:id_user
			},
			dataType: "JSON",
			success: function (response) {
				if (response.status=='success') {
					swal({
						title: "Berhasil!",
						text: "Data berhasil di verifikasi!",
						icon: "success",
						button: "Ok!",
					}).then(function() {
						location.reload();
					});
				}
			},error:function(){
				swal({
					title:"Gagal",
					text:"Verifikasi Gagal,silahkan check server",
					icon:"error",
					button:"Ok",
				})
			}
		});
	 }
</script>
