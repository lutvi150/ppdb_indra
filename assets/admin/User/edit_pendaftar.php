<?php 
     include "koneksi.php";
     $id = $_GET['id'];
         $pilih = mysqli_query($koneksi,"SELECT * FROM `tbl_pendaftar` WHERE id_pendaftaran='$id'");
         while($data = mysqli_fetch_array($pilih)){ 
 ?>

					<form action="update_semua.php" method="POST" enctype="multipart/form-data" >
					<div class="box-body">
					<div class="form-group">
					<label for="">Nama Lengkap</label>
					<input type="hidden" name="id" class="form-control" value="<?= $data['id_pendaftaran']; ?>">
						<input class="form-control" type="text" name="nm_lengkap" placeholder=""    value="<?= $data['nama']?>"  >
					</div>

					
					<div class="form-group">
					<label for="">Tempat Lahir</label>
						<input class="form-control" type="text" name="tmpt_lahir" placeholder=""  value="<?= $data['tempat_lahir']?>"  >
					</div>
					
					
					<div class="form-group">
					<label for="">Tanggal Lahir</label>
						<input class="form-control" type="date" name="tgl_lahir" placeholder=""    value="<?= $data['tgl_lahir']?>">
					</div>

					<div class="form-group">
					<label for="">Jenis Kelamin</label>
						<input class="form-control" type="text" name="jk" placeholder=""  value="<?= $data['jenis_kelamin']?>"  >
					</div>

					<div class="form-group">
					<label for="">Agama</label>
						<input class="form-control" type="text" name="agama" placeholder=""  value="<?= $data['agama']?>"  >
					</div>
					
	
					<div class="form-group">
					<label for="">Asal Sekolah</label>
						<input class="form-control" type="text" name="asl_sk" placeholder=""  value="<?= $data['asal_sekolah']?>"  >
					</div>

					<div class="form-group">
					<label for="">Nama Ayah</label>
						<input class="form-control" type="text" name="nm_ayah" placeholder="" value="<?= $data['nm_ayah']?>"  >
					</div>

					<div class="form-group">
					<label for="">Nama Ibu</label>
						<input class="form-control" type="text" name="nm_ibu" placeholder="" value="<?= $data['nm_ibu']?>" >
					</div>

					<div class="form-group">
					<label for="">Pekerjaan Orang Tua</label>
						<input class="form-control" type="text" name="kerja" placeholder="" value="<?= $data['pekerjaan']?>"  >
					</div>

					<div class="form-group">
					<label for="">Nilai UN :</label>
					</div>

					<div class="col-xs-12 col-sm-12">
					<div class="form-group">
						<label for="">Bahasa Indonsia</label>
						<input class="form-control" type="text" name="bi" placeholder="" value="<?= $data['bahasa_indonesia']?>"  >
					</div>

					<div class="form-group">
						<label for="">Ipa</label>
						<input class="form-control" type="text" name="ipa" placeholder="" value="<?= $data['ipa']?>"  >
					</div>
					<div class="form-group">
						<label for="">Matematika</label>
						<input class="form-control" type="text" name="mtk" placeholder="" value="<?= $data['matematika']?>" >
					</div>
					<div class="form-group">
						<label for="">Bahasa Inggris</label>
						<input class="form-control" type="text" name="bhs_inggris" placeholder="" value="<?= $data['bahasa_inggris']?>" >
					</div>
					</div>
					

					<div class="form-group">
					<label for="">Pas Photo</label>
						<input class="form-control" type="file" name="foto" placeholder="" value="<?= $data['pas_foto']?>" >
					</div>

					<div class="form-group">
					<label for="">Foto SKHU</label>
						<input class="form-control" type="file" name="foto_skhu" placeholder="" value="<?= $data['foto_skhu']?>" >
					</div>


					<div class="form-group">
					<label for="">Alamat Lengkap</label>
						<textarea id="input" class="form-control" rows="3" name="almt_lkp"  required="required" value="<?= $data['alamat']?>"></textarea>
					</div>

					<div class="form-group">
					<label for="">No Tlp</label>
						<input class="form-control" type="text" name="no_tlp" placeholder=""  value="<?= $data['no_tlp']?>"  >
					</div>
        <div class="modal-footer">
            <button name="edit_pendaftar" class="btn-primary btn col-sm-1">Edit </button>
            <a href="?page=data_pendaftar" class="btn-primary btn col-sm-1">Batal</a>
      </div>

         <?php } ?>