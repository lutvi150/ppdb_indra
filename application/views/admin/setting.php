<link rel="stylesheet" href="<?=base_url();?>assets/datetimepicker-master/jquery.datetimepicker.css">
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
					<h3>Data Member<br><br></h3>
				</tr>
				<table id="table_id" class="display table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Setting </th>
							<th>Setting</th>
						</tr>
					</thead>


					<tbody>

						<tr>
							<td>1</td>
							<td> Tanggal Pengumuman
							</td>
							<td>
								<input type="text" value="<?=$settingPengumuman->setting?>" class="form-control" onchange="updateTanggalPengumuman(<?=$settingPengumuman->id_setting?>,'<?=$settingPengumuman->jenis_setting?>')" id="tgl_pengumuman">
							</td>
						</tr>
						<!-- kuata -->
						<tr>
							<td>2</td>
							<td>Kuata Pendaftaran</td>
							<td>
								<input type="text" value="<?=$settingKuata->setting?>" class="form-control" onkeyup="updateKuata(<?=$settingKuata->id_setting?>,'<?=$settingKuata->jenis_setting?>')" id="kuata_register">
							</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
		</table>

</body>
<script src="<?=base_url();?>assets/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<script>
	$("#tgl_pengumuman").datetimepicker(
		{
			format:"Y-m-d H:i:s",
		}
	);
	let url="<?=base_url()?>";
	function updateTanggalPengumuman(id,jenis) {
		var tgl_pengumuman = $('#tgl_pengumuman').val();
		$.ajax({
			type: "POST",
			url: url+"ApiAdmin/updateSetting",
			data:{
				id:id,
				tgl_pengumuman:tgl_pengumuman,
				jenis:jenis
			},
			dataType: "JSON",
			success: function (response) {

			},error:function(){
				swal("Gagal","Gagal Mengupdate","error");
			}
		});
	}
	function updateKuata(id,jenis) {
		let kuata_register = $('#kuata_register').val();
		$.ajax({
			type: "POST",
			url: url+"ApiAdmin/updateSetting",
			data: {
				id:id,
				tgl_pengumuman:kuata_register,
				jenis:jenis
			},
			dataType: "JSON",
			success: function (response) {

			},error:function(){
				swal("Gagal","Gagal Mengupdate","error");
			}
		});
	 }
</script>
