

<!-- contact -->

<section class="contact pb-5" id="contact">
	<div class="container pb-xl-5 pb-lg-3">


		<!-- //map -->
		<!-- contact form -->
                
            <?php 
            include "koneksi.php";
            $id = $_GET['id'];
                $pilih = mysqli_query($koneksi,"select * from tbl_pendaftar where id_pendaftaran='$id'");
                while($data = mysqli_fetch_array($pilih)){ 
            // SELECT * FROM `tbl_pendaftaran` WHERE konfirmasi = 'lulus | tidak lulus | proses'
            ?>
            

                    <form action="proses.php" method="POST" enctype="multipart/form-data" >
                    <div class="container">
                    <h2>Data Pendaftar</h2>
                    <h2><?= $data['no_pendaftaran']?></h2>  
                    <table class="table table-bordered" >
                        <thead>
                        <tr>
                            <td><b>NISN</b></td>
                            <td><?= $data['NISN']?></td>
                        </tr>
    
                        <tr>
                            <td><b>Nama Lengkap</b></td>
                            <td><?= $data['nama']?></td>
                        </tr>

                        <tr>
                            <td><b>Tempat</b></td>
                            <td ><?= $data['tempat_lahir']?></th>
                        
                        </tr>

                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td><?= $data['tgl_lahir']?></td>
                            
                        </tr>
    
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td><?= $data['jenis_kelamin']?></td>
                        </tr>

                        <tr>
                            <td><b>Agama</b></td>
                            <td><?= $data['agama']?></td>
                        </tr>

                        <tr>
                            <td><b>Asal Sekolah</b></td>
                            <td><?= $data['asal_sekolah']?></td>
                        </tr>
    
                        <tr>
                            <td><b>Nama Ayah</b></td>
                            <td><?= $data['nm_ayah']?></td>
                        </tr>
                        <tr>
                            <td><b>Pekerjaan Ayah</b></td>
                            <td><?= $data['kerja_ayah']?></td>
                        </tr>
                        <tr>
                            <td><b>Penghasilan Ayah</b></td>
                            <td><?= $data['hasil_ayah']?></td>
                        </tr>

                        <tr>
                            <td><b>Nama Ibu</b></td>
                            <td><?= $data['nm_ibu']?></td>
                        </tr>
    
                        <tr>
                            <td><b>Pekerjaan Orang Tua</b></td>
                            <td><?= $data['kerja_ibu']?></td>
                        </tr>
                        <tr>
                            <td><b>Penghasilan Ibu</b></td>
                            <td><?= $data['hasil_ibu']?></td>
                        </tr>

                        <tr>
                            <td><b><i>Nilai UN</i></b></td>
                            <td><b></b></td>
                        </tr>

                        <tr>
                            <td><b>Bhasa Indoenesia</b></td>
                            <td><?= $data['bahasa_indonesia']?></td>
                        </tr>

                        <tr>
                            <td><b>Ipa</b></td>
                            <td><?= $data['ipa']?></td>
                        </tr>

                        <tr>
                            <td><b>Matematika</b></td>
                            <td><?= $data['matematika']?></td>
                        </tr>

                        
                        <tr>
                            <td><b>Bahasa Inggris</b></td>
                            <td><?= $data['bahasa_inggris']?></td>
                        </tr>
    
                        <tr>
                            <td><b>Pas Foto</b></td>
                            <td><img src="../../member/images/<?php echo $data['pas_foto'] ;?>" alt="tidak muncul " width="120px"></td> 
                        </tr>

                        <tr>
                            <td><b>Foto SKHU</b></td>
                            <td><?php echo $data['foto_skhu']; ?><br><a href="../../member/images/<?=$data['foto_skhu']?>" Download>download</a></td>


                        <tr>
                            <td><b>Alamat</b></td>
                            <td><?= $data['alamat']?></td>
                        </tr>

                        <tr>
                            <td><b>No Tlp</b></td>
                            <td><?= $data['no_tlp']?></td>
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
                <?php } ?>
