<?php 
     include "koneksi.php";
     $id = $_GET['id'];
         $pilih = mysqli_query($koneksi,"select * from tbl_admin where id_admin='$id'");
         while($data = mysqli_fetch_array($pilih)){ 
 ?>

<form class="form-horizontal btn-warning" method="POST" action="update_semua.php" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
              <div class="col-sm-10">
              <input type="hidden" name="ida" class="form-control" value="<?= $data['id_admin']; ?>">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_admin']; ?>" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="user" name="user" value="<?= $data['username']; ?>" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pass" name="pass" value="<?= $data['password']; ?>" placeholder="">
              </div>
            </div>
			<div class="box-body">
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Level </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="level" name="level" value="<?= $data['level']; ?>" >
              </div>
            </div>
		</div>
	</div>
	<div class="modal-footer">
        <button name="editadmin" class="btn-primary btn col-sm-1">Edit </button>
        <a href="?page=data_admin" class="btn-primary btn col-sm-1">Batal</a>
      </div>

         <?php } ?>
