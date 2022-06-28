<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">
		<!-- //map -->
		<!-- contact form -->
		<div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
			data-aos-duration="2000">

			<body>
				<div class="container">
					<div align="center">
						<h4>Data Diri</h4>

					</div>

					<body>


						<br>
						<div class="row">
							<div class="col-md-9">
								<a href="<?=base_url('member/ubahPassword')?>" class="btn btn-info btn-xs"><i
										class="fa fa-key"></i> Ubah Password</a>
							</div>
							<div class="col-md-3" style="text-align: center;">
								<div class="col-md-12">
									<div class="show-image"><img style="width: 150px;height: 150px;border-radius: 10px;" src='<?=$foto_profil == "" ? "https://howfix.net/wp-content/uploads/2018/02/sIaRmaFSMfrw8QJIBAa8mA-article.png" : base_url('uploads/' . $foto_profil);?>'
										alt=""></div>

										<hr>
									<button type="button" onclick="modalUpdateFoto()" class="btn btn-success btn-xs"> <i class="fa fa-refresh"></i> Update Foto</button></div>
							</div>
						</div>
						<hr>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No Pendaftaran</th>
									<th><?=$data_member->no_pendaftaran?></th>
								</tr>
								<tr>
									<th>Nama Peserta</th>
									<th><?=$data_member->nama?></th>
								</tr>
								<tr>
									<th>Tempat Lahir Lahir</th>
									<th><?=$data_member->tempat_lahir?></th>
								</tr>
								<tr>
									<th>Tanggal Lahir</th>
									<th><?=($data_member->tgl_lahir);?></th>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<th><?=$data_member->jenis_kelamin?></th>
								</tr>
								<tr>
									<th>Agama</th>
									<th><?=$data_member->agama?></th>
								</tr>
								<tr>
									<th>Anak Ke-</th>
									<th><?=$data_member->anak_ke?></th>
								</tr>
								<tr>
									<th>Dari ... Bersaudara</th>
									<th><?=$data_member->jumlah_saudara?></th>
								</tr>
								<tr>
									<th>Asal Sekolah</th>
									<th><?=$data_member->asal_sekolah?></th>
								</tr>

								<tr>
									<th>Nama Ayah</th>
									<th><?=$data_member->nm_ayah?></th>
								</tr>
								<tr>
									<th>Pekerjaan</th>
									<th><?=$data_member->pekerjaan_ayah?></th>
								</tr>
								<tr>
									<th>Penghasilan Ayah</th>
									<th><?=$data_member->penghasilan_ayah?></th>
								</tr>

								<tr>
									<th>Nama Ibu</th>
									<th><?=$data_member->nm_ibu?></th>
								</tr>
								<tr>
									<th>Pekerjaan</th>
									<th><?=$data_member->pekerjaan_ibu?></th>
								</tr>
								<tr>
									<th>Penghasilan Ibu</th>
									<th><?=$data_member->penghasilan_ibu?></th>
								</tr>
								<?php foreach ($nilai as $key => $value): ?>
								<tr>
									<th>Nilai <?=$value->nama_nilai?></th>
									<th><?=$value->nilai?></th>
								</tr>
								<?php endforeach;?>
								<tr>
									<th>Nilai Rata Rata</th>
									<th><?=$data_member->nilai_rata_rata?></th>
								</tr>
								<tr>
									<th>No HP</th>
									<th><?=$data_member->no_tlp?></th>
								</tr>




							</thead>
						</table>

				</div>
			</body>

			</body>
		</div>
		<!-- //contact form -->
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="modal-ubah-foto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="#" id="form-upload-foto" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Upload Foto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
				  <label for="">Upload Foto</label>
				  <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
				  <small id="helpId" class="text-error efile"></small>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" onclick="uploadFoto()" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script>
	function modalUpdateFoto() {
		$('#modal-ubah-foto').modal('show');
	 }
	function uploadFoto() {
		$("#form-upload-foto").ajaxForm({
			type: "POST",
			url: "<?=base_url('ApiMember/updateFoto')?>",
			data: {id_user:"<?=$this->session->userdata('id_user')?>"},
			dataType: "JSON",
			success: function (response) {
				if (response.status == 'success') {
					swal({
						title: "Berhasil",
						text: "Foto berhasil diupload",
						icon: "success",
						button: "Tutup",
					});
					$("#modal-ubah-foto").modal('hide');
					$(".show-image").html(`<img style="width: 150px;height: 150px;border-radius: 10px;" src='<?=base_url('uploads/')?>${response.data}'
										alt="">`);
				} else{
					$(".efile").text(response.message);
				}

			},error:function(){
				swal({
					title: "Gagal",
					text: "Gagal Upload Foto",
					icon: "error",
					button: "Ok",
				});
			}
		}).submit();
	 }
</script>
