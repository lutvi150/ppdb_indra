
<?php 
     include "koneksi.php";
     $id = $_GET['id'];
         $pilih = mysqli_query($koneksi,"select * from tbl_register where id_register='$id'");
         while($data = mysqli_fetch_array($pilih)){ 
 ?>
<form class="form-horizontal btn-info" method="POST" action="update_semua.php" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-6">
              <input type="hidden" name="idr" class="form-control" value="<?= $data['id_register']; ?>">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="user" name="user" value="<?= $data['username']; ?>" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="password" name="password" value="<?= $data['password']; ?>" placeholder="">
              </div>
            </div>

    </div>
            <div class="modal-footer">
            <button name="edit_member" class="btn-primary btn col-sm-1">Edit </button>
            <a href="?page=data_member" class="btn-primary btn col-sm-1">Batal</a>
    </div>
    </div>
</div>
</div>
 <?php } ?>