
<?php 
     include "koneksi.php";
     $id = $_GET['id'];
         $pilih = mysqli_query($koneksi,"select * from tbl_galeri where id_foto='$id'");
         while($data = mysqli_fetch_array($pilih)){ 
 ?>

<div class="bs-example" data-example-id="form-validation-states">      
    <form action="update_semua.php"  method="POST" enctype="multipart/form-data">
      <div class="form-group has-success">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Foto</label>
        <input type="hidden" name="idg" class="form-control" value="<?= $data['id_foto']; ?>" id="inputSuccess1">
          <input type="text" class="form-control" id="nama_f" name="nama_f" value="<?= $data['nama_foto']; ?>" placeholder="">
        </div>
      </div>

      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Foto</label>
        <img style="width:50px" src="images/<?php echo $data['foto_galeri'];?>">
        <input type="file" class="form-control1" id="foto_g" name="foto_g">
      </div>
      <div class="row">
			<div>
				<button name="edit_galeri" class="btn-primary btn col-sm-1">Edit </button>
				<a href="?page=data_galeri" class="btn-primary btn col-sm-1">Batal</a>
			</div>
		</div>
    </form>
  </div>
         <?php } ?>
