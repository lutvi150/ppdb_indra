
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

			<tr>
				<h3><?=$title?><br><br></h3>
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

	<?php foreach ($kelulusan as $key => $value): ?>
				<tr>
					<td><?=$key + 1?></td>
					<td><?=$value->nisn;?></td>
					<td><?=$value->nama;?></td>
					<td><?=$value->tgl_lahir;?></td>
					<td><?=$value->asal_sekolah;?></td>
					<td><?=$value->nm_ayah;?></td>
					<td><img src="<?=base_url('uploads/' . $value->pas_foto);?>" alt="tidak muncul " width="50px"></td>
				</tr>
				<?php endforeach;?>
		</table>
	</body>
