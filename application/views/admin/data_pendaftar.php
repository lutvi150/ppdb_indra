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

				<tr>
					<h3>Data Siswa Pendaftar<br><br></h3>
				</tr>
				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>NISN </th>
							<th>Nama </th>
							<th>Tanggal Lahir</th>
							<th>Asal Sekolah</th>
							<th>Pas Foto</th>
							<th>Lihat Data</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php foreach ($pendaftar as $key => $value): ?>
					<tr>
						<td><?=$key + 1?></td>
						<td><?=$value->nisn;?></td>
						<td><?=$value->nama;?></td>
						<td><?=$value->tgl_lahir;?></td>
						<td><?=$value->asal_sekolah;?></td>
						<td>
							<?php foreach ($value->dokumen as $key2 => $value2): ?>
								<?php if ($value2->id_attachment == 1): ?>
							<button type="button" onclick="showFoto('<?=$value2->lampiran?>')" class="btn btn-info btn-xs"><i class="fa fa-image"></i> Foto</button>
							<?php endif;?>
							<?php endforeach;?>
						</td>
						<td><a href="<?=base_url('ControllerAdmin/data_lengkap_pendaftar/' . $value->id_user);?>">Lihat Data
								Pendaftar</a></td>
						<td>
							<?php if ($value->kelulusan == null): ?>
							<label for="" class="badge badge-warning">Proses</label>
							<?php elseif ($value->kelulusan == 'tidak lulus'): ?>
							<label for="" class="badge badge-danger">Tidak Lulus</label>
							<?php elseif ($value->kelulusan == 'lulus'): ?>
							<label for="" class="badge badge-info">Lulus</label>
							<?php endif;?>
						</td>
						<td>
								<a href="<?=base_url('ControllerAdmin/hapus_data_pendaftar/' . $value->id_user)?>" name="hapus_pendaftaran" class=" btn btn-danger"><i
										class=" fa fa-trash-o"></i></a>
										<a href="<?=base_url('ControllerAdmin/edit_data_pendaftar/' . $value->id_user)?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
						</td>
					</tr>
					<?php endforeach;?>

				</table>
</body>

<!-- Modal -->
<div class="modal fade" id="modal-show-foto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Foto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body show-foto">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
	function showFoto(foto) {
		$(".show-foto").html("<img width='100%' height='500px' src='<?=base_url();?>uploads/"+foto+"' alt=''>");
		$('#modal-show-foto').modal('show');
	 }
</script>
