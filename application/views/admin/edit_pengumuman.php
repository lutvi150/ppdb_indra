

<div class="bs-example" data-example-id="form-validation-states">
    <form action="<?=base_url('ControllerAdmin/update_pengumuman')?>"  method="POST" enctype="multipart/form-data">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Tanggal Pendaftaran</label>
        <input type="hidden" name="idp" class="form-control" value="<?=$pengumuman->id_pengumuman;?>" id="inputSuccess1">
        <input type="date" name="tgl" class="form-control1" id="tgl" value="<?=$pengumuman->tgl_pengumuman;?>" id="inputSuccess1">
      </div>

      <div class="form-group has-success">
        <label for="inputEmail3" class="col-sm-2 control-label">Judul Pengumuman</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?=$pengumuman->judul_pengumuman;?>" placeholder="">
        </div>


      <div class="form-group has-success">
        <label for="inputEmail3" class="col-sm-2 control-label">Isi Pengumuman</label>
          <textarea class="form-control" rows="3" required="required"  name="isi" id="isi"  ><?=$pengumuman->isi_pengumuman;?></textarea>
        </div>
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Foto</label>
        <img style="width:50px" src="<?=base_url('uploads/' . $pengumuman->foto_pengumuman);?>">
        <input type="file" class="form-control1" id="foto" name="foto">
      </div>
      <div class="row">
			<div>
				<button name="ubahpengumuman" class="btn-primary btn col-sm-1">Edit </button>
				<a href="?page=data_pengumuman" class="btn-primary btn col-sm-1">Batal</a>
			</div>
		</div>
    </form>
</div>
