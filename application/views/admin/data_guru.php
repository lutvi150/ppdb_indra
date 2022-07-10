<style>
	.aktif{
		background-color: green;
		color: white;
	}
	.nonaktif{
		background-color: red;
		color: white;
	}
	.form-control {
    background: none !important;
    border: 1px solid rgb(0, 0, 0) !important;
    border-radius: 20px !important;
    box-shadow: none !important;
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
				<button type="button" onclick="tambahGuru('add')" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Guru</button>
				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>NIP</th>
							<th>NAMA GURU</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach ($guru as $key => $value): ?>
					<tr>

						<td><?=$key + 1?></td>
						<td><?=$value->nip_guru?></td>
						<td><?=$value->nama_guru;?></td>
						<td>
							<button type="button" onclick="deleteData(<?=$value->id_guru?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
							<button type="button" onclick="editData('<?=$value->nip_guru?>','<?=$value->nama_guru?>',<?=$value->id_guru?>)" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
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
<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="" id="form-modal" method="post">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title modal-add">Tambah Guru</h5>

			</div>
			<div class="modal-body">
				<input type="text" name="id_guru" hidden id="id_guru">
				<div class="form-group">
				  <label for="">NIP</label>
				  <input type="text" name="nip" id="nip" class="form-control" placeholder="" aria-describedby="helpId">
				  <small id="helpId" class="text-error enip"></small>
				</div>
				<div class="form-group">
				  <label for="">Nama</label>
				  <input type="text" name="nama" id="nama" class="form-control" placeholder="" aria-describedby="helpId">
				  <small id="helpId" class="text-error enama"></small>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" onclick="storeData()" class="btn btn-primary">Simpan</button>
			</div>
		</div>
		</form>
	</div>
</div>
<script src="<?=base_url();?>assets/form-master/dist/jquery.form.min.js"></script>
<script>
	function deleteData(id) {
		swal({
			title: "Apakah anda yakin?",
			text: "Data akan dihapus!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: '<?=base_url();?>ApiAdmin/delete_guru/'+id,
					type: 'GET',
					success: function(data) {
						swal("Data berhasil dihapus!", {
							icon: "success",
						});
						location.reload();
					}
				});
			} else {
				swal("Data tidak dihapus!");
			}
		});
	}
	function tambahGuru (status) {
		$(".modal-add").text("Tambah Guru");
		$("#form-modal").attr("action", "<?=base_url('ApiAdmin/storeGuru/add')?>");
		$("#modal-success").modal("show");
	 }
	 function editData(nip,nama,id) {
		$("#id_guru").val(id);
		$("#nip").val(nip);
		$("#nama").val(nama);
		$(".modal-add").text("Edit Guru");
		$("#form-modal").attr("action", "<?=base_url('ApiAdmin/storeGuru/update')?>");
		$("#modal-success").modal("show");
	  }
	 function storeData() {
		$("#form-modal").ajaxForm({
			type: "POST",
			url: $("#form-modal").attr("action"),
			dataType: "JSON",
			success: function (response) {
				if (response.status=='validation_failed') {
					$.each(response.message, function(key, value){
						$(".e"+key).text(value);
					})
				} else if (response.status=='success') {
					$("#modal-success").modal("hide");
					swal({
						title: "Success",
						text: `${response.message}`,
						type: "success",
						confirmButtonText: "Ok",
					}).then(function() {
						location.reload();
					});
				}

				}
			,error: function (response) {
				swal({
					title: "Gagal",
					text: "Data Gagal Disimpan",
					icon: "error",
					button: "Ok",
				});
			}
		}).submit();
	  }
</script>
