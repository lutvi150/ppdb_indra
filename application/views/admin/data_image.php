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
			<?=$this->session->flashdata('message')?>
			<div class="content">
				<button type="button" onclick="showModal();" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Asset</button>
				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama File</th>
							<th>Priview</th>
							<th>Link</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach ($image as $key => $value): ?>
					<tr>

						<td><?=$key + 1?></td>
						<td><?=$value->assets?></td>
						<td><img style="width: 100px;" src="<?=($value->link)?>" alt=""></td>
						<td> <button onclick="copyLink('<?=$value->link?>')" type="button" class="btn btn-primary">Copy</button></td>

						<td>
							<button onclick="hapusImage(<?=$value->id_assets?>)" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
						</td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
		</table>
</body>

	<!-- Modal -->
	<div class="modal fade" id="modal-upload-image" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?=base_url('ControllerAdmin/uploadDataImage')?>" enctype="multipart/form-data" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Upload Image</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
					  <label for="">Upload Assets</label>
					  <input type="file" name="assets" id="" class="form-control" placeholder="" aria-describedby="helpId">
					  <small id="helpId" class="text-muted"></small>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function showModal() {
			$("#modal-upload-image").modal("show");
		  }
		  function hapusImage(id) {
			localStorage.setItem('id', id);
			swal({
				title: "Apakah anda yakin?",
				text: "Anda tidak akan dapat mengembalikan data yang telah dihapus!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			}).then(
				function(willDelete) {
					if (willDelete) {
						$.ajax({
							url: "<?=base_url('ControllerAdmin/deleteDataImage')?>",
							type: "POST",
							data: {
								id: localStorage.getItem('id'),
							},
							success: function(response) {
								swal("Data Berhasil dihapus!", {
									icon: "success",
								});
								// window.location.reload();
							}
						});
					} else {
						swal("Data tidak dihapus!");
					}
				}
			);
		  }
		  function copyLink(link) {
			console.log(link);
			navigator.clipboard.writeText(link);
			swal(
				'Copied!',
				'Link has been copied to your clipboard.',
				'info'
			  );
			  }
	</script>
