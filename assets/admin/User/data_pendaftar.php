
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
				include "koneksi.php";
				$sqlt = mysqli_query($koneksi, "select * from tbl_pendaftar");
				$no=1;
			?>
			<tr>
				<h3>Data Siswa Pendaftar<br><br></h3> 
			</tr>
				<table  id="table_id"  class="display table table-bordered">
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

					<?php

					while($dat = mysqli_fetch_array($sqlt)){

					?>
					<tr>
					<td><?= $no++ ?></td>
					<td><?= $dat['NISN']; ?></td>
					<td><?= $dat['nama']; ?></td>
					<td><?=  $dat['tgl_lahir']; ?></td>
					<td><?=  $dat['asal_sekolah']; ?></td>
					<td><img src="../../member/images/<?php echo $dat['pas_foto'] ;?>" alt="tidak muncul " width="50px"></td>
					<td><a href="index.php?page=data_lengkap_pendaftar&id=<?= $dat['id_pendaftaran']; ?>">Lihat Data Pendaftar</a></td>
					<td>
						<form method="POST" action="update_status_lulus.php">
						<input type="hidden" name="id_pendaftaran" value="<?= $dat['id_pendaftaran']?>">
							<select type="from-control" name="status" >
								<option value="LULUS">LULUS</option>
								<option value="TIDAK LULUS">TIDAK LULUS</option>
							</select>
							<button type="submit" name="update_stattus" class="btn btn-danger fa fa-pencil-square">Ubah</button> 
						</form>   
					<td>  
					<form action="hapus.php?id=<?= $dat['id_pendaftaran']; ?>" method='post'>
					<a href="index.php?page=edit_pendaftar&id=<?= $dat['id_pendaftaran']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
					<button type="submit" name="hapus_pendaftaran" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
					</form>
					</td>
					</tr>
					<?php } ?>
				
				</table>
		</body>
