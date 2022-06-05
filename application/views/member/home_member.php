
<!-- contact -->
<script src="<?=base_url();?>assets/form-master/dist/jquery.form.min.js"></script>
<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">


		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
			data-aos-duration="2000">
			<div class="form-w3ls p-md-10 p-4">
				<center>
					<h4 class="mb-4 sec-title-w3 let-spa text-bl">I. Data Diri<br><h5>Lengkapi Data Diri Sesungguhnya</h5></h4>
				</center>

				<form action="#" id="form-data-member" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
					<label for="">NISN</label>
						<input class="form-control" readonly type="text" name="nisn" placeholder="" value="<?=$data_member->nisn?>" id="nis" >
						<span class="text-error enis"></span>
					</div>

					<div class="form-group">
					<label for="">Nama Lengkap</label>
						<input class="form-control" type="text" name="nm_lengkap" placeholder=""    value="<?=$data_member->nama?>" id="nama" readonly >
						<span class="text-error enama"></span>
					</div>

					<div class="form-group">
					<label for="">Tempat Lahir</label>
						<input class="form-control" type="text" value="<?=$data_member->tempat_lahir?>" name="tmpt_lahir" placeholder=""  >
						<span class="text-error etmpt_lahir"></span>
					</div>


					<div class="form-group">
					<label for="">Tanggal Lahir</label>
						<input class="form-control" type="date" name="tgl_lahir" value="<?=$data_member->tgl_lahir?>" placeholder="" >
						<span class="text-error etgl_lahir"></span>
					</div>

					<div class="form-group">
							<label  for="inputError1">Jenis Kelamin </label>
							<select  name="jenis" class="form-control" required>
							<option value=""  <?=$data_member->jenis_kelamin == null ? "selected" : ""?> > ----PILIH----</option>
								<option value="L" <?=$data_member->jenis_kelamin == "L" ? "selected" : ""?>>Laki-Laki</option>
								<option value="P" <?=$data_member->jenis_kelamin == ""?>> Perempuan</option>
							</select>
							<span class="text-error ejenis_kelamin"></span>
					</div>

					<div class="form-group">
							<label  for="inputError1">Agama </label>
							<select  name="agama" class="form-control" required>
							<option value="" <?=$data_member == null ? "selected" : ""?>> ----PILIH----</option>
								<option value="Islam" <?=$data_member->agama == "Islam" ? "selected" : ""?>>Islam</option>
								<option value="Kristen" <?=$data_member->agama == "Kristen" ? "selected" : ""?>> Kristen</option>
								<option value="Hindu" <?=$data_member->agama == "Hindu" ? "selected" : ""?>> Hindu</option>
								<option value="Budha" <?=$data_member->agama == "Budha" ? "selected" : ""?> > Budha</option>
								<option value="Khong Wu Chu" <?=$data_member->agama == "Khong Wu Chu" ? "selected" : ""?>> Khong Wu Chu</option>
							</select>
							<span class="text-error eagama"></span>
					</div>

					<div class="form-group">
					<label for="">Anak Ke</label>
						<input class="form-control" type="text" name="anakke" value="<?=$data_member->anak_ke;?>" placeholder=""  >
						<span class="text-error eanakke"></span>
					</div>

					<div class="form-group">
					<label for="">Dari ... Bersaudara</label>
						<input class="form-control" type="text" name="jmlsaudara" value="<?=$data_member->jumlah_saudara;?>" placeholder=""  >
						<span class="text-error ejml_sdr"></span>
					</div>

					<div class="form-group">
					<label for="">Asal Sekolah</label>
						<input class="form-control" type="text" name="asl_sk" value="<?=$data_member->jumlah_saudara?>" placeholder=""   >
						<span class="text-error easl_sk"></span>
					</div>

	<center>
		<h4 class="mb-4 sec-title-w3 let-spa text-bl">II. Data Orang Tua<br></h4>
	</center>

					<div class="form-group">
					<label for="">Nama Ayah</label>
						<input class="form-control" type="text" name="nm_ayah" value="<?=$data_member->nm_ayah?>" placeholder=""  >
						<span class="text-error enm_ayah"></span>
					</div>

					<div class="form-group">
					<label for="">Pekerjaan Ayah</label>
						<input class="form-control" type="text" name="kerja_ayah" value="<?=$data_member->nm_ayah?>" placeholder=""  >
						<span class="text-error ekerja_ayah"></span>
					</div>

					<div class="form-group">
					<label for="">Penghasilan Ayah</label>
						<input class="form-control" value="<?=$data_member->penghasilan_ayah;?>" type="text" name="hasil_ayah" placeholder=""  >
						<span class="text-error ehasil_ayah"></span>
					</div>

					<div class="form-group">
					<label for="">Nama Ibu</label>
						<input class="form-control" type="text" name="nm_ibu" value="<?=$data_member->nm_ibu?>" placeholder=""  >
						<span class="text-error enm_ibu"></span>
					</div>

					<div class="form-group">
					<label for="">Pekerjaan Ibu</label>
						<input class="form-control" type="text" name="kerja_ibu" placeholder="" value="<?=$data_member->pekerjaan_ibu?>"  >
						<span class="text-error ekerja_ibu"></span>
					</div>

					<div class="form-group">
					<label for="">Penghasilan Ibu</label>
						<input class="form-control" value="<?=$data_member->penghasilan_ibu?>" type="text" name="hasil_ibu" placeholder=""  >
						<span class="text-error ehasil_ibu"></span>
					</div>


					<center>
		<h4 class="mb-4 sec-title-w3 let-spa text-bl">III. Nilai<br></h4>
	</center>
	<table class="table">
		<thead>
			<th>No</th>
			<th>Mata Pelajaran</th>
			<th>
				Nilai
			</th>
		</thead>
		<tbody class="score">
		</tbody>
	</table>
					<center>
		<h4 class="mb-4 sec-title-w3 let-spa text-bl">IV. Dokumen Lampiran<br></h4>
	</center>

					<table class="table table-bordere">
						<thead>
							<th>No</th>
							<th>Jenis Dokumen</th>
							<th>Dokumen (Klik untuk View Dokument)</th>
							<th>Upload</th>
						</thead>
						<tbody class="lampiran-data" >
						</tbody>
					</table>
					<div class="form-group">

					<label for="">Alamat Lengkap</label>
						<textarea id="input" class="form-control" rows="3" name="almt_lkp"  required="required"><?=$data_member->alamat?></textarea>
						<span class="text-error ealmt_lkp"></span>
					</div>

					<div class="form-group">
					<label for="">No Tlp</label>
						<input class="form-control" value="<?=$data_member->no_tlp?>" type="text" name="no_tlp" placeholder=""  >
						<span class="text-error eno_tlp"></span>
					</div>


					<div class="input-group1 text-right">
						<button class="btn btn-primary"  name="simpan" onclick="storeData()" type="submit" id="simpan">Daftar</button>
					</div>
				</form>

				<div style="color:red" class="fa fa-bullhorn"><b>Pesan Penting</b></div>
				<div style="text-align: justify; text-indent: 0.2in;">
					<h6><span style="color:red">*</span>Perubahan Data Dapat Dilakukan Sebelum Data Di Verivikasi</h6>
					<h6><span style="color:red">*</span>Pastikan Data Yang Diisi Sesuai Dengan Identitas Anda</h6>
					<h6><span style="color:red">*</span>Sebelum Dikirim Pastikan Data Yang Diisi Sudah Benar</h6>
				</div>
			</div>
		</div>
		<!-- //contact form -->
	</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="show-lampiran" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Lampiran</h5>
			</div>
			<div class="modal-body render-lampiran">
				<embed width="100%" height="500px" src="<?=base_url();?>/uploads/b9d1060d4d13a2deaa1f940f542dcaf4.pdf" type="">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="upload-dokument" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="#" id="form-upload-dokument" enctype="multipart/form-data" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Upload Lampiran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
				  <label for="">Lampiran</label>
				  <input type="file" name="lampiran" id="lampiran" class="form-control" placeholder="" aria-describedby="helpId">
				  <small id="helpId" class="text-error e-lampiran">Lampiran yang di izinkan hanya berupa PDF,JPEG,PNG,JPG</small>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" onclick="processUploadDokument()" class="btn btn-primary">Upload</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- //contact -->
<script src="<?=base_url()?>assets/form-master/dist/jquery.form.min.js"></script>
<script>
	let url="<?=base_url()?>";
	let id_user="<?=$data_member->id_user?>";
	$(document).ready(function () {
		showDataNilai();
		showAttachment();
		checkStatusRegister();
	});
	function checkStatusRegister() {
		let status_pendaftaran='<?=$data_member->status?>';
		if (status_pendaftaran=='process') {
			console.log('matikan');
			$("input").attr("disabled",true);
			$("textarea").attr("disabled",true);
			$("select").attr("disabled",true);
			$("#simpan").attr("disabled",true);
			$("button").attr("disabled",true);
		}
	 }
	// show attachemnt
	function showAttachment() {
		$.ajax({
			type: "POST",
			url: url+"ApiMember/showAttachment",
			data: {
				id_user: id_user
			},
			dataType: "JSON",
			success: function (response) {
				let html="";
				$.each(response.data, function (indexInArray, valueOfElement) {
					let html_lampiran="";
					if (valueOfElement.file===0) {
						html_lampiran=`<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Belum Upload</button>`;
					} else{
						html_lampiran=`<button type="button" onclick="showLampiran('${valueOfElement.file}','${valueOfElement.type}')" class="btn btn-success btn-xs"><i class="fa fa-check"></i> Sudah Upload</button>`;
					}
					 html+=`<tr >
								<td>${indexInArray+1} <span class="text-error "></span></td>
								<td>${valueOfElement.name}</td>
								<td>
${html_lampiran}
								</td>
								<td>
								<button type="button" onclick="showUploadDokument(${valueOfElement.id_attachment})" class="btn btn-info btn-xs"><i class="fa fa-upload"></i></button>
								</td>
							</tr>`;
				});
				$(".lampiran-data").html(html);
			},error:function(response){
				swal("Gagal", "Terjadi Kesalahan", "error");
			}
		});
	 }
	 function showLampiran(lampiran,type) {
		 if (type==".pdf") {
			$(".render-lampiran").html(`<embed width="100%" height="500px" src="<?=base_url();?>/uploads/${lampiran}" type="">`);
		 } else{
		 $(".render-lampiran").html(`<img src="<?=base_url()?>uploads/${lampiran}" height="500px" width="100%" alt="" srcset="">`);}
		 $("#show-lampiran").modal("show");
	  }
	 function showUploadDokument(id_attachment) {
		 localStorage.setItem("id_attachment",id_attachment);
		 $("#upload-dokument").modal("show");
	  }
	  function processUploadDokument() {
		  $(".e-lampiran").text("Lampiran yang di izinkan hanya berupa PDF,JPEG,PNG,JPG");
		  $("#form-upload-dokument").ajaxForm({
			  type: "POST",
			  url: url+"ApiMember/uploadLampiran",
			  data: {
				  id_attachment: localStorage.getItem("id_attachment"),
				  id_user: id_user},
			  dataType: "JSON",
			  success: function (response) {
				  if (response.status==="success") {
					  $("#lampiran").val("");
					  showAttachment();
					  $("#upload-dokument").modal("hide");
					  swal("Berhasil", "Lampiran Berhasil Diupload", "success");
				  } else if(response.status=='validation_failed'){
					  $(".e-lampiran").text(response.message.lampiran);
				  } else if(response.status=='error'){
					  swal("Gagal", response.message, "error");
				  } else{
					  swal("Gagal", "Terjadi Kesalahan", "error");
				  }
			  },error:function(){
				  swal("Gagal", "Terjadi Kesalahan", "error");
			  }
		  }).submit();
	   }
	function showDataNilai() {
		$.ajax({
			type: "POST",
			url: url+"ApiMember/showDataNilai",
			data: {id_user:"<?=$this->session->userdata('id_user')?>"},
			dataType: "JSON",
			success: function (response) {
				let status_pendaftaran='<?=$data_member->status?>';
				let button_score="";
				if (response.status=="success") {
					let html="";
					let average_score=`<tr>
				<td colspan="2">Rata Rata Nilai</td>
				<td>
					<input type="text" id="average_score" value="<?=$data_member->nilai_rata_rata?>" class="form-control col-sm-2 col-md-2" readonly>
				</td>
			</tr>`;
			$.each(response.data, function (indexInArray, valueOfElement) {
				if (status_pendaftaran=='process') {
					button_score=`disabled`;
				}
				 html+=`<tr>
				<td>${indexInArray+1}</td>
				<td>${valueOfElement.nama_nilai}</td>
				<td>
					<input type="text" ${button_score} onkeyup="countScore()" name="" id="${valueOfElement.id_nilai}" value="${valueOfElement.nilai}" class="form-control col-sm-2 col-md-2">
				</td>
			</tr>`;
			});
					$(".score").html(html+average_score);
				} else{
					swal("Gagal", "Data Nilai Belum Ada", "error");
				}
			},error:function(){
				swal("Oops...", "Something went wrong :(", "error");
			}
		});
	 }
	//  use for count score
	function countScore() {
		let ipa=$("#ipa").val();
		let matematika=$("#matematika").val();
		let bahasa_indonesia=$("#bahasa_indonesia").val();
		let bahasa_inggris=$("#bahasa_inggris").val();
		let total=(parseInt(ipa)+parseInt(matematika)+parseInt(bahasa_indonesia)+parseInt(bahasa_inggris))/4;
		$("#average_score").val(total);
		$.ajax({
			type: "POST",
			url: url+"ApiMember/updateNilai",
			data: {
				id_user: id_user,
				ipa: ipa,
				matematika: matematika,
				bahasa_indonesia: bahasa_indonesia,
				bahasa_inggris: bahasa_inggris,
				total: total,
			},
			dataType: "JSON",
			success: function (response) {
				if (response.status=="success") {
				} else{
					swal("Gagal", "Terjadi Kesalahan", "error");
				}
			},error:function(){
				swal("Gagal", "Terjadi Kesalahan", "error");
			}
		});
	 }
	function showModalAlertData() {
		swal({
			title: "Data Tidak Lengkap",
			text: "Silahkan Isi Data Dengan Lengkap",
			type: "warning",
			showCancelButton: false,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "OK",
			closeOnConfirm: false
		},)
	}
	function storeData() {
		$(".text-error").text('');
		$("#form-data-member").ajaxForm({
			type: "POST",
			url: url+"ApiMember/storeDataMember",
			data: {id_user:"<?=$this->session->userdata('id_user')?>"},
			dataType: "JSON",
			success: function (response) {
				if (response.status=='validation_error') {
					$(".enisn").text(response.message.nisn);
					$(".enama").text(response.message.nama);
					$(".etmpt_lahir").text(response.message.tmpt_lahir);
					$(".etgl_lahir").text(response.message.etgl_lahir);
					$(".ejenis_kelamin").text(response.message.jenis_kelamin);
					$(".eagama").text(response.message.agama);
					$(".eanakke").text(response.message.anakke);
					$(".ejml_sdr").text(response.message.jmlsaudara);
					$(".easl_sk").text(response.message.asl_sk);
					$(".enm_ayah").text(response.message.nm_ayah);
					$(".enm_ibu").text(response.message.nm_ibu);
					$(".ekerja_ayah").text(response.message.kerja_ayah);
					$(".ekerja_ibu").text(response.message.kerja_ibu);
					$(".ehasil_ayah").text(response.message.hasil_ayah);
					$(".ehasil_ibu").text(response.message.hasil_ibu);
					$(".ealmt_lkp").text(response.message.alamat);
					$(".eno_tlp").text(response.message.no_tlp);
				} else if (response.status=='success') {
					swal({
						title: "Berhasil",
						text: "Data Berhasil Di Simpan",
						type: "success",
						showCancelButton: false,
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "OK",
						closeOnConfirm: false
					},).then(function () {
						window.location.href=url+"member/profil";
					});
				} else if (response.status=='document_error') {
					swal("Gagal", response.message, "error");
				} else if (response.status=='score_not_enough') {
					swal("Gagal", response.message, "error")
				} else if(response.status=='kuata_full'){
					swal("Gagal", response.message, "error");
				}

			},error:function(){
				swal({
					title: "Gagal",
					text: "Data Gagal Di Simpan",
					type: "error",
					showCancelButton: false,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "OK",
					closeOnConfirm: false
				},)
			}
		}).submit();
	 }
</script>
