
<?php 
     include "koneksi.php";
     $id = $_GET['id'];
         $pilih = mysqli_query($koneksi,"select * from tbl_pengumuman where id_pengumuman='$id'");
         while($data = mysqli_fetch_array($pilih)){ 
 ?>

<div class="bs-example" data-example-id="form-validation-states">      
    <form action="update_semua.php"  method="POST" enctype="multipart/form-data">
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Tanggal Pendaftaran</label>
        <input type="hidden" name="idp" class="form-control" value="<?= $data['id_pengumuman']; ?>" id="inputSuccess1">
        <input type="date" name="tgl" class="form-control1" id="tgl" value="<?php echo $data['tgl_pengumuman']; ?>" id="inputSuccess1"> 
      </div>

      <div class="form-group has-success">
        <label for="inputEmail3" class="col-sm-2 control-label">Judul Pengumuman</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul_pengumuman']; ?>" placeholder="">
        </div>


      <div class="form-group has-success">
        <label for="inputEmail3" class="col-sm-2 control-label">Isi Pengumuman</label>
          <textarea class="form-control" rows="3" required="required"  name="isi" id="isi"  value="<?= $data['isi_pengumuman']; ?>"></textarea>
        </div>
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Foto</label>
        <img style="width:50px" src="images/<?php echo $data['foto_pengumuman'];?>">
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
<?php } ?>
