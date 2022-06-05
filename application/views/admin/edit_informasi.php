

<div class="bs-example" data-example-id="form-validation-states">
	<h1><?=$title?></h1>
    <form action="<?=base_url('ControllerAdmin/update_pengumuman')?>"  method="POST" enctype="multipart/form-data">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Terakhir Di Ubah</label>
        <input type="date" name="tgl" class="form-control1" id="tgl" value="<?=$informasi->last_update?>" disabled id="inputSuccess1">
      </div>



      <div class="form-group has-success">
        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Isi Pengumuman</label> -->
          <textarea class="form-control" rows="3" required="required"  name="isi" id="isi"  ><?=$informasi->isi?></textarea>
        <!-- </div> -->
      </div>

      <div class="row">
			<div>
				<button type="button" name="ubahpengumuman" class="btn-primary btn col-sm-1" onclick="storeData()">Edit </button>
				<a href="<?=base_url('controllerAdmin/menuInformasi')?>" class="btn-primary btn col-sm-1">Batal</a>
			</div>
		</div>
    </form>
</div>
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('isi');
	let url = '<?=base_url()?>';
	function storeData() {
		var isi = CKEDITOR.instances.isi.getData();
		$.ajax({
			type: "POST",
			url: url+"ApiAdmin/storeDataInformasi",
			data: {
				isi: isi,
				id_informasi:"<?=$informasi->id_informasi?>"
			},
			dataType: "JSON",
			success: function (response) {
				if (response.status=='success') {
					swal({
						title: "Berhasil",
						text: "Data Berhasil Di Ubah",
						icon: "success",
						button: "Ok",
					});
				} else{
					swal({
						title: "Gagal",
						text: "Data Gagal Di Ubah",
						icon: "error",
						button: "Ok",
					});
				}

			},error:function(){
				swal({
					title: "Gagal",
					text: "Gagal Mengubah Data",
					icon: "error",
					button: "Ok",
				});
			}
		});
	 }
</script>
