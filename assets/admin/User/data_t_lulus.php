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
				<h3>Data Siswa Tidak Lulus<br><br></h3> 
			</tr>
				<table  id="table_id"  class="display table table-bordered">
					<thead>
						<tr>
						<th>No</th>
						<th>NISN </th>
						<th>Nama </th>
						<th>Tanggal Lahir</th>
						<th>Asal Sekolah</th>
						<th>Nama Orang Tua</th>
						<th>Pas Foto</th>
						</tr>
					</thead>

				<?php
				include "koneksi.php";
					$sql = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE konfirmasi='TIDAK LULUS' ORDER BY id_pendaftaran");
					$no=1;
				while($dat = mysqli_fetch_array($sql)){
  				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $dat['NISN']; ?></td>
					<td><?php echo $dat['nama']; ?></td>
					<td><?php echo $dat['tgl_lahir']; ?></td>
					<td><?php echo $dat['asal_sekolah']; ?></td>
					<td><?php echo $dat['nm_ayah']; ?></td>
					<td><img src="../../member/images/<?php echo $dat['pas_foto'] ;?>" alt="tidak muncul " width="50px"></td>
				</tr>

				<?php } ?>
				
				</table>
		</body>