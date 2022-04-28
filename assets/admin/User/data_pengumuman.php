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
      <?php
      $sqlt = mysqli_query($koneksi, "select * from tbl_pengumuman");
      $no=1;
      ?>
				<table  id="table_id"  class="display table table-bordered">
					<thead>
          <tr>
           <th colspan="6"><button type="button" class="btn  btn-success col-md-2" data-toggle="modal" data-target="#modal-success">Tambah Data</button></th><br><br>
        </tr>
						<tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul Pengumuman</th>
            <th>Isi Pengumuman</th>
            <th>Foto</th>
            <th>Aksi</th>
						</tr>
					</thead>

          <?php
       
       while($dat = mysqli_fetch_array($sqlt)){

           ?>
           <tr>
           <td><?= $no++ ?></td>
           <td><?= $dat['tgl_pengumuman']; ?></td>
           <td><?= $dat['judul_pengumuman']; ?></td>
           <td><?=  $dat['isi_pengumuman']; ?></td>
           <td><img src="images/<?php echo $dat['foto_pengumuman'] ;?>" alt="tidak muncul " width="50px"></td>
     <td>
        <form action="hapus.php?id=<?= $dat['id_pengumuman']; ?>" method='post'>
        <a href="index.php?page=edit_pengumuman&id=<?= $dat['id_pengumuman']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
        <button type="submit" name="hapus_pengumuman" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
         </form>
      </td>
      </tr>
      <?php } ?>
				
			</table>
</body>
<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah  Data</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal btn-warning" method="POST" action="aksi_simpan_pengumuman.php" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Tanggal </label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Judul Pengumuman</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_pengumuman" name="judul_pengumuman" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Isi Pengumuman</label>
              <div class="col-sm-10">
                <textarea name="isi" id="isi" class="form-control" rows="3" required="required"></textarea>
              </div>
            </div>
			<div class="box-body">
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Foto </label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="foto" name="foto">
              </div>
            </div>
		</div>
	</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
      </div>