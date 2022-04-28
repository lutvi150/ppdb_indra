<section class="contact pb-5" id="contact">
  <div class="container pb-xl-5 pb-lg-3">
    <!-- //map -->
    <!-- contact form -->
    <div class="col-lg-12 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
      data-aos-duration="2000">
<body>
      <div class="container">
              <div align="center">
                  <h4>Hasil Penerimaan Siswa Baru Online</h4>
                  <h3>SMP PNIEL MEDAN</h3>       
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

        <?php
          if($data["konfirmasi"]=="LULUS"){

        ?>
              <div>
                  <a href="cetak_bukti.php?id=<?= $idpen ?>"  class="btn btn-danger"><i  class="btn fa fa-print fa-1x ">Cetak</i></a>  
              </div>

              <?php }
          elseif ($data['konfirmasi']=="TIDAK LULUS") { ?>
           
          <?php   } ?>
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
                      <th>Tanggal Lahir</th>
                      <th><?= TanggalIndo($data['tgl_lahir']);?></th>
                    </tr>
                  </thead>
                </table>
              <div align="center">
                  <h3>Anda Dinyatakan: <?= $data['konfirmasi']?></h3>
              </div>
                    <?php } ?>
          </div>
          </body>
            <br><br>
                <div align="center">
                   <td >Informasi Selengkapnya Silahkan Cetak Bukti Kelulusan Untuk Melakukan Pendaftaran Ulang <br> 
                    Untuk Jadwal Pendaftaran Ulang Bisa Di lihat Pada Halaman Utama Website Ini.</td>      
            </div>
        </body>
    </div>
    <!-- //contact form -->
  </div>
</section>