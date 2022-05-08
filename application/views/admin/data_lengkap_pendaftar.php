

<!-- contact -->

<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">


		<!-- //map -->
		<!-- contact form -->




                    <form action="proses.php" method="POST" enctype="multipart/form-data" >
                    <div class="container">
                    <h2>Data Pendaftar</h2>
                    <h2><?=$data->no_pendaftaran?></h2>
                    <table class="table table-bordered" >
                        <thead>
                        <tr>
                            <td><b>NISN</b></td>
                            <td><?=$data->nisn?></td>
                        </tr>

                        <tr>
                            <td><b>Nama Lengkap</b></td>
                            <td><?=$data->nama?></td>
                        </tr>

                        <tr>
                            <td><b>Tempat</b></td>
                            <td ><?=$data->tempat_lahir?></th>

                        </tr>

                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td><?=$data->tgl_lahir?></td>

                        </tr>

                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?=$data->jenis_kelamin?></td>
                        </tr>

                        <tr>
                            <td><b>Agama</b></td>
                            <td><?=$data->agama?></td>
                        </tr>

                        <tr>
                            <td><b>Asal Sekolah</b></td>
                            <td><?=$data->asal_sekolah?></td>
                        </tr>

                        <tr>
                            <td><b>Nama Ayah</b></td>
                            <td><?=$data->nm_ayah?></td>
                        </tr>
                        <tr>
                            <td><b>Pekerjaan Ayah</b></td>
                            <td><?=$data->pekerjaan_ayah?></td>
                        </tr>
                        <tr>
                            <td><b>Penghasilan Ayah</b></td>
                            <td><?=$data->penghasilan_ayah?></td>
                        </tr>

                        <tr>
                            <td><b>Nama Ibu</b></td>
                            <td><?=$data->nm_ibu?></td>
                        </tr>

                        <tr>
                            <td><b>Pekerjaan Orang Tua</b></td>
                            <td><?=$data->pekerjaan_ibu?></td>
                        </tr>
                        <tr>
                            <td><b>Penghasilan Ibu</b></td>
                            <td><?=$data->penghasilan_ibu?></td>
                        </tr>

                        <tr>
                            <td><b><i>Nilai UN</i></b></td>
                            <td><b></b></td>
                        </tr>
						<?php foreach ($nilai as $key => $value): ?>
								<tr>
									<th>Nilai <?=$value->nama_nilai?></th>
									<th><?=$value->nilai?></th>
								</tr>
								<?php endforeach;?>

								<tr>
									<th>Nilai Rata Rata</th>
									<th><?=$data->nilai_rata_rata?></th>
								</tr>

                        <tr>
                            <td><b>Pas Foto</b></td>
                            <td><img src="<?=base_url('uploads/' . $foto->lampiran)?>" alt="tidak muncul " width="120px"></td>
                        </tr>

                        <tr>
                            <td><b>Foto SKHU</b></td>
                            <td><br><a href="<?=base_url('uploads/' . $skhu->lampiran)?>" Download>download</a></td>


                        <tr>
                            <td><b>Alamat</b></td>
                            <td><?=$data->alamat?></td>
                        </tr>

                        <tr>
                            <td><b>No Tlp</b></td>
                            <td><?=$data->no_tlp?></td>
                        </tr>
                        </thead>
                    </table>


              </div>
			</div>
		</div>
		<!-- //contact form -->
	</div>
	</div>
</section>
<!-- //contact -->
