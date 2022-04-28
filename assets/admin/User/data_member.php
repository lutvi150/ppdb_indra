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
				$pilih = mysqli_query($koneksi,"select * from tbl_register");
				$no=1;
				?>
			<tr>
				<h3>Data Member<br><br></h3> 
			</tr>
				<table  id="table_id"  class="display table table-bordered">
					<thead>
						<tr>
						<th>No</th>
						<th>Nama </th>
						<th>Username</th>
						<th>Aksi</th>
						</tr>
					</thead>

					<?php
       
	   while($data = mysqli_fetch_array($pilih)){
        ?>
		<tr  >
			<!-- td atau TABEL DATA, untuk membuat kolom table -->
			<td><?php echo $no++ ?></td>
            <td><?php echo $data ['nama']; ?></td>
            <td><?php echo $data ['username']; ?></td>

		   
			<td>
				<form action="hapus.php?id=<?= $data['id_register']; ?>" method='post'>
				<a href="index.php?page=edit_member&id=<?= $data['id_register']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
				<button type="submit" name="hapus_member" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
			</form>
		</td>
		</tr>
	
        <?php } ?>				
					</table>
				</div>
			</div>
	</table>

</body>

