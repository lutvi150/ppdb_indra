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
					<h3>Daftar Menu<br><br></h3>
				</tr>
				<table class="table">
					<thead>
						<th style="width: 10px;" >No</th>
						<th>Nama Menu</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php foreach ($data_informasi as $key => $value): ?>
						<tr>
							<td><?=$key + 1?></td>
							<td><?=$value->judul?></td>
							<td>
								<a class="btn btn-info btn-xs" href="<?=base_url('controllerAdmin/editInformasi/' . $value->id_informasi)?>"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
</body>


