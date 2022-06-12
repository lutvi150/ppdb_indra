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
							<th colspan="6"><button type="button" class="btn  btn-success col-md-2" onclick="tambah_data()" >Tambah Data</button></th><br><br>
						</tr>
						<tr>
							<th>No</th>
							<th>Nama Admin </th>
							<th>Username</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<?php foreach ($admin as $key => $value): ?>
					<tr>

						<td><?=$key + 1?></td>
						<td><?=$value->nama;?></td>
						<td><?=$value->username;?></td>
						<td><?=$value->role?></td>
						<td>

							<a href="#" onclick="deleteData(<?=$value->id_register?>)" class="btn btn-danger btn-xs"><i
									class="fa fa-trash-o	"></i></a>
							<a href="#" class="btn btn-info btn-xs" onclick="editData(<?=$value->id_register?>,`<?=$value->username?>`,`<?=$value->nama?>`,`<?=$value->role?>`)"><i
									class="fa fa-pencil-square"></i></a>
						</td>
					</tr>
					<?php endforeach;?>
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
				<form class="form-horizontal btn-warning" id="form-crud" method="POST" action="<?=base_url('ControllerAdmin/addAdmin')?>"
					enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<input type="text" style="display:none ;" id="id_data_edit" class="form-control" name="id_register">
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
								function tambah_data() {
									$("#form-crud").attr("action", "<?=base_url('ControllerAdmin/addAdmin')?>");
									$("#modal-success").modal('show');
								 }
								 function editData(id,username,name,role) {
									$("#form-crud").attr("action", "<?=base_url('ControllerAdmin/editAdmin')?>");
									console.log(id);
									$("#id_data_edit").val(id);
									$("#username").val(username);
									$("#nama").val(name);
									$("#level").val(role);
									$("#modal-success").modal('show');
								  }
								function deleteData(id) {
									swal({
										title: "Apakah anda yakin?",
										text: "Data akan dihapus!",
										icon: "warning",
										buttons: true,
										dangerMode: true,
									}).then(
										function(isConfirm) {
											if (isConfirm) {
												window.location.href = "<?=base_url('ControllerAdmin/deleteAdmin/')?>" + id;
											} else {
												swal("Data tidak dihapus!");
											}
										}
									)
								 }
							</script>
