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
					<strong>Berhasil</strong>
					<p>
						<?=$this->session->flashdata('success');?>
					</p>
				</div>
				<?php endif;?>
				<?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger" role="alert">
					<strong>Gagal</strong>
					<p>
						<?=$this->session->flashdata('error');?>
					</p>
				</div>
				<?php endif;?>
				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th colspan="6"><button type="button" class="btn  btn-success col-md-2" data-toggle="modal"
									data-target="#modal-success">Tambah Data</button></th><br><br>
						</tr>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>

				<?php foreach ($galeri as $key => $value): ?>
					<tr>

						<td style="width: ;10px" ><?=$key + 1?></td>
						<td><?=$value->nama_foto;?></td>
						<td><img src="<?=base_url('uploads/' . $value->foto_galeri);?>" alt="tidak muncul " width="50px"></td>


						<td>
								<a href="<?=base_url('ControllerAdmin/edit_galeri/' . $value->id_foto);?>" class="btn btn-info "><i
										class="  fa fa-pencil-square"></i></a>
								<a href="<?=base_url('ControllerAdmin/hapus_galeri/' . $value->id_foto)?>"  name="hapus_galeri" class=" btn btn-danger"><i
										class=" fa fa-trash-o"></i></a>
						</td>
					</tr>
				<?php endforeach;?>

				</table>
</body>
<div class="modal modal-success fade" id="modal-success">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal btn-warning" method="POST" action="<?=base_url('ControllerAdmin/simpanGaleri')?>"
					enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nama Foto</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama_foto" name="nama_foto" placeholder="">
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Foto </label>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="foto_galeri" name="foto_galeri">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
						<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
					</div>
