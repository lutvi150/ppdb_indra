<?php
error_reporting(0);
session_start();
include "koneksi.php";
$id_member = $_SESSION['idregis'];
$cek_data = mysqli_query($koneksi, "SELECT * FROM `tbl_register` WHERE id_register = '$id_member'");
$data = mysqli_fetch_array($cek_data);

// SELECT * FROM `tbl_pendaftaran` WHERE konfirmasi = 'lulus | tidak lulus | proses'
?>
<!-- contact -->

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

				<form action="proses.php" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
					<label for="">NISN</label>
						<input class="form-control" type="text" name="nisn" placeholder="" value="<?=$data['NISN']?>" readonly >
						<input type="hidden" value="<?=$id_member?>" name="id_register">
					</div>

					<div class="form-group">
					<label for="">Nama Lengkap</label>
						<input class="form-control" type="text" name="nm_lengkap" placeholder=""    value="<?=$data['nama']?>" readonly >
					</div>

					<div class="form-group">
					<label for="">Tempat Lahir</label>
						<input class="form-control" type="text" name="tmpt_lahir" placeholder=""  >
					</div>


					<div class="form-group">
					<label for="">Tanggal Lahir</label>
						<input class="form-control" type="date" name="tgl_lahir" placeholder="" >
					</div>

					<div class="form-group">
							<label  for="inputError1">Jenis Kelamin </label>
							<select  name="jenis" class="form-control" required>
							<option value=""> ----PILIH----</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan"> Perempuan</option>
							</select>
					</div>

					<div class="form-group">
							<label  for="inputError1">Agama </label>
							<select  name="agama" class="form-control" required>
							<option value=""> ----PILIH----</option>
								<option value="Islam">Islam</option>
								<option value="Kristen"> Kristen</option>
								<option value="Hindu"> Hindu</option>
								<option value="Budha"> Budha</option>
								<option value="Khong Wu Chu"> Khong Wu Chu</option>
							</select>
					</div>

					<div class="form-group">
					<label for="">Anak Ke</label>
						<input class="form-control" type="text" name="anakke" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Dari ... Bersaudara</label>
						<input class="form-control" type="text" name="jmlsaudara" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Asal Sekolah</label>
						<input class="form-control" type="text" name="asl_sk" placeholder=""   >
					</div>

	<center>
		<h4 class="mb-4 sec-title-w3 let-spa text-bl">II. Data Orang Tua<br></h4>
	</center>

					<div class="form-group">
					<label for="">Nama Ayah</label>
						<input class="form-control" type="text" name="nm_ayah" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Pekerjaan Ayah</label>
						<input class="form-control" type="text" name="kerja_ayah" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Penghasilan Ayah</label>
						<input class="form-control" type="text" name="hasil_ayah" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Nama Ibu</label>
						<input class="form-control" type="text" name="nm_ibu" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Pekerjaan Ibu</label>
						<input class="form-control" type="text" name="kerja_ibu" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Penghasilan Ibu</label>
						<input class="form-control" type="text" name="hasil_ibu" placeholder=""  >
					</div>


					<div class="form-group">
					<label for="">Nilai UN :</label>
					</div>

					<div class="col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="">Bahasa Indonsia</label>
						<input class="form-control" type="text" name="bi" placeholder=""  >
					</div>

					<div class="form-group">
						<label for="">Ipa</label>
						<input class="form-control" type="text" name="ipa" placeholder=""  >
					</div>
					<div class="form-group">
						<label for="">Matematika</label>
						<input class="form-control" type="text" name="mtk" placeholder=""  >
					</div>
					<div class="form-group">
						<label for="">Bahasa Inggris</label>
						<input class="form-control" type="text" name="bhs_inggris" placeholder=""  >
					</div>
					</div>

					<div class="form-group">
					<label for="">Pas Photo</label>
						<input class="form-control" type="file" name="foto" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Bukti Transfer</label>
						<input class="form-control" type="file" name="foto" placeholder=""  >
					</div>

					<div class="form-group">
					<label for="">Scan SKHU</label>
						<input class="form-control" type="file" name="foto_skhu" placeholder=""  >
					</div>


					<div class="form-group">
					<label for="">Alamat Lengkap</label>
						<textarea id="input" class="form-control" rows="3" name="almt_lkp"  required="required"></textarea>
					</div>

					<div class="form-group">
					<label for="">No Tlp</label>
						<input class="form-control" type="text" name="no_tlp" placeholder=""  >
					</div>


					<div class="input-group1 text-right">
						<button class="btn btn-primary"  name="simpan" type="submit" id="simpan">Daftar</button>
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
<!-- //contact -->
