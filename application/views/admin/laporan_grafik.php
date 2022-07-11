<script src="<?=base_url()?>node_modules/chart.js/dist/chart.js"></script>
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
			<div class="container">
			<tr  align="center">
  <table style="width:98%" border="0">
  <!-- <th><img src="<?=base_url('assets/member/images/logo7.jpg')?>" width="150px" height="150px" align="left"> </th> -->
  <th><img width="150px" height="150px" src="<?=base_url('assets/member/images/303.jpg');?>" align="right"></th>
            <td align="center" colspan="3"><h3>PEMERINTAH KOTA MEDAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br> SMP Swasta PNIEL MEDAN<br>
            </h3>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe
            </td>
            <th><img width="150px" height="150px" src="<?=base_url('assets/member/images/303.jpg');?>" align="right"></th>
  </table>

    <hr>
				<div class="col-md-12 filter">
					<div class="form-group">
					  <label for="">Pilih Jenis Laporan</label>
					  <select name="jenis_laporan" onchange="jenis_laporan()" class="form-control" id="jenis_laporan">
						  <option value="">Pilih Jenis Laporan</option>
						  <!-- <option value="harian">Harian</option> -->
						  <option value="mingguan">Mingguan</option>
						  <option value="bulan">Bulanan</option>
						  <option value="tahun">Tahunan</option>
					  </select>
					  <small id="helpId" class="text-error ejenis_laporan"></small>
					</div>
					<div class="form-group tag-select select-bulan" hidden>
					  <label for="">Pilih Bulan</label>
					  <select name="bulan" class="form-control" id="bulan">
						  <option value="">Pilih Bulan</option>
						  <option value="01">Januari</option>
						  <option value="02">Februari</option>
						  <option value="03">Maret</option>
						  <option value="04">April</option>
						  <option value="05">Mei</option>
						  <option value="06">Juni</option>
						  <option value="07">Juli</option>
						  <option value="08">Agustus</option>
						  <option value="09">September</option>
						  <option value="10">Oktober</option>
						  <option value="11">November</option>
						  <option value="12">Desember</option>
					  </select>
					  <small id="helpId" class="text-error ebulan"></small>
					</div>
					<div class="form-group tag-select select-tahun" hidden>
					  <label for="">Pilih Tahun</label>
					  <select name="tahun" class="form-control" id="tahun">
						  <option value="">Pilih Tahun</option>
						  <option value="2019">2019</option>
						  <option value="2020">2020</option>
						  <option value="2021">2021</option>
						  <option value="2022">2022</option>
						  <option value="2023">2023</option>
						  <option value="2024">2024</option>
						  <option value="2025">2025</option>
						  <option value="2026">2026</option>
						  <option value="2027">2027</option>
						  <option value="2028">2028</option>
						  <option value="2029">2029</option>
						  <option value="2030">2030</option>
					  </select>
					  <small id="helpId" class="text-error etahun"></small>
					</div>
					<div class="form-group tag-select select-mulai" hidden>
					  <label for="">Tanggal Awal</label>
					  <input type="date" name="" id="tanggal_mulai" class="form-control" placeholder="" aria-describedby="helpId">
					  <small id="helpId" class="text-error emulai"></small>
					</div>
					<div class="form-group tag-select select-selesai" hidden>
					  <label for="">Tanggal Akhir</label>
					  <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" placeholder="" aria-describedby="helpId">
					  <small id="helpId" class="text-error eselesai"></small>
					</div>
					<button type="button" onclick="searchData()" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> Buat</button>
					<button type="button" onclick="cetakData()" class="btn btn-success btn-xs"> <i class="fa fa-print"></i> Cetak</button>
				</div>
				<div class="col-md-12 show-chart">
				<canvas id="chart-data"></canvas>
				</div>
				<div class="col-md-12 show-table-data">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Nama</th>
							<th>Asal Sekolah</th>
							<th>Keterangan</th>
							<th>Tanggal Register</th>
						</thead>
						<tbody class="body-data-siswa">
							<tr hidden>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</table>
</body>
<script>
	let url="<?=base_url()?>";
	$(document).ready(function () {
		makeChart(1);
	});
	function cetakData() {
		$(".filter").hide();
		window.print();
	}
	function jenis_laporan() {
		let jenis_laporan = $('#jenis_laporan').children("option:selected").val();
		if (jenis_laporan=='bulan') {
			$('.select-bulan').show();
			$('.select-tahun').show();
		} else if (jenis_laporan=='tahun') {
			$(".tag-select").hide();
			$('.select-tahun').show();
		} else if(jenis_laporan=='mingguan'){
			$(".tag-select").hide();
			$('.select-mulai').show();
			$('.select-selesai').show();
		} else {
			$(".tag-select").hide();
		}
	 }
	 function searchData() {
		 let jenis_laporan = $('#jenis_laporan').children("option:selected").val();
		 let bulan = $('#bulan').children("option:selected").val();
		 let tahun = $('#tahun').children("option:selected").val();
		 let tanggal_mulai = $('#tanggal_mulai').val();
		 let tanggal_selesai = $('#tanggal_selesai').val();
		 if (jenis_laporan=="") {
			swal({
				title: "Pilih Jenis Laporan",
				text: "Pilih Jenis Laporan Terlebih Dahulu",
				icon: "error",
				button: "Ok",
			});
		 } else{

			$.ajax({
			 type: "POST",
			 url: url+"ApiAdmin/makeChart",
			 data: {
				 jenis_laporan:jenis_laporan,
				 bulan:bulan,
				 tahun:tahun,
				 tanggal_mulai:tanggal_mulai,
				 tanggal_selesai:tanggal_selesai
			 },
			 dataType: "JSON",
			 success: function (response) {
				 if (response.status=='success') {
		 $(".show-chart").html('');
		 $(".show-chart").html('<canvas id="chart-data"></canvas>');
					 makeChart(response);
					 showTableDataSiswa(response.data.data_siswa);

				 }
			 },error:function(){
				 swal({
					 title: "Gagal",
					 text: "Data Gagal Ditampilkan",
					 icon: "error",
					 button: "Ok",
				 });
			 }
		 });
		 }
	 }
	 function showTableDataSiswa(response) {
		 $(".body-data-siswa").html('');
		 let html="";
		 $.each(response, function (indexInArray, valueOfElement) {
			 html+=`<tr >
								<td>${indexInArray+1}</td>
								<td>${valueOfElement.nama}</td>
								<td>${valueOfElement.alamat}</td>
								<td>${valueOfElement.kelulusan}</td>
								<td>${valueOfElement.tgl_daftar}</td>
							</tr>`;
		 });
		 $(".body-data-siswa").html(html);
	  }
function makeChart(response) {
	const labels = response.data.label;

  const data = {
    labels: labels,
    datasets: [{
      label: 'Peserta Lulus',
      backgroundColor: 'rgb(80, 130, 191)',
      borderColor: 'rgb(80, 130, 191)',
      data: response.data.lulus,
    },{
		label: 'Peserta Tidak Lulus',
      backgroundColor: 'rgb(193, 80, 76)',
      borderColor: 'rgb(193, 80, 76)',
      data: response.data.tidak_lulus,
	},{
		label: 'Total Peserta',
      backgroundColor: 'rgb(154, 188, 91)',
      borderColor: 'rgb(154, 188, 91)',
      data: response.data.peserta,
	}]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('chart-data'),
    config
  );
  }
</script>
