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
      <?php 
            include "tglindo.php";
            include "koneksi.php";
            $id = $_GET['id'];
                $pilih = mysqli_query($koneksi,"SELECT * FROM tbl_pendaftar WHERE id_register='$id'");
                while($data = mysqli_fetch_array($pilih)){ 
                $idpen = $data['id_pendaftaran'];
            // SELECT * FROM `tbl_pendaftaran` WHERE konfirmasi = 'lulus | tidak lulus | proses'|
      ?>
          <body>   

        
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No Pendaftaran</th>
                      <th><?= $data['no_pendaftaran']?></th>
                    </tr>
                    <tr>
                      <th>Nama Peserta</th>
                      <th><?= $data['nama']?></th>
                    </tr>
                    <tr>
                      <th>Tempat Lahir Lahir</th>
                      <th><?= $data['tempat_lahir']?></th>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <th><?= TanggalIndo($data['tgl_lahir']);?></th>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th><?= $data['jenis_kelamin']?></th>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <th><?= $data['agama']?></th>
                    </tr>
                    <tr>
                      <th>Anak Ke-</th>
                      <th><?= $data['anakke']?></th>
                    </tr>
                    <tr>
                      <th>Dari ... Bersaudara</th>
                      <th><?= $data['jmlsaudara']?></th>
                    </tr>
                    <tr>
                      <th>Asal Sekolah</th>
                      <th><?= $data['asal_sekolah']?></th>
                    </tr>

                    <tr>
                      <th>Nama Ayah</th>
                      <th><?= $data['nm_ayah']?></th>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th><?= $data['kerja_ayah']?></th>
                    </tr>
                    <tr>
                      <th>Penghasilan Ayah</th>
                      <th><?= $data['hasil_ayah']?></th>
                    </tr>

                     <tr>
                      <th>Nama Ibu</th>
                      <th><?= $data['nm_ibu']?></th>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th><?= $data['kerja_ibu']?></th>
                    </tr>
                    <tr>
                      <th>Penghasilan Ibu</th>
                      <th><?= $data['kerja_ibu']?></th>
                    </tr>
                     <tr>
                      <th>Nilai Bahasa Indonsia</th>
                      <th><?= $data['bahasa_indonesia']?></th>
                    </tr>
                    <tr>
                      <th>Nilai IPA</th>
                      <th><?= $data['ipa']?></th>
                    </tr>
                    <tr>
                      <th>Nilai Matimatika</th>
                      <th><?= $data['matematika']?></th>
                    </tr>
                    <tr>
                      <th>Nilai Bahasa Inggris</th>
                      <th><?= $data['bahasa_inggris']?></th>
                    </tr>
                    <tr>
                      <th>No HP</th>
                      <th><?= $data['no_tlp']?></th>
                    </tr>




                  </thead>
                </table>
              
                    <?php } ?>
          </div>
          </body>
            
        </body>
    </div>
    <!-- //contact form -->
  </div>
</section>
