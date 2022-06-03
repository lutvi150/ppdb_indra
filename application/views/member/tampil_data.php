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
									<img style="width: 150px;height: 150px;" src="<?=base_url();?>uploads/042042.jpg"
										alt="">
										<hr>
									<button type="button" class="btn btn-success btn-xs"> <i class="fa fa-refresh"></i> Update Foto</button></div>
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
