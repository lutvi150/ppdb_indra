    <script>
        window.print();
    </script>


     <?php 
        include "koneksi.php";
        include "tglindo.php";
        $thn = $_GET['year'];
         $laporan= mysqli_query($koneksi,"SELECT * FROM `tbl_pendaftar` WHERE konfirmasi = 'LULUS' AND  Date_format(tgl_daftar,'%Y')='$thn'");
         $no=1;
    ?>

  <div>
  <tr  align="center">
  <table style="width:98%" border="0">
  <th><img src="images/logo7.jpg" width="150px" height="150px" align="left"> </th>
            <td align="center" colspan="3"><h3>PEMERINTAH KOTA MEDAN<br>DINAS PENDIDIKAN DAN KEBUDAYAAN<br> SMP Swasta PNIEL MEDAN<br>
            </h3>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe
            </td>
            <th><img width="150px" height="150px" src="images/303.jpg" align="right"></th>
  </table>
   
    <hr>   
<table class="table-bordered table table-striped " border="1" cellspacing="0"cellpadding="0" align="center" width="100%">
    <tr >
        <th>NO</th>
        <th>NISN </th>
        <th>Nama Siswa</th>
        <th>Tanggal Lahir</th>
        <th>Asal Sekolah</th>
        <th>Nama Orang Tua</th>
        <th>Pas Foto</th>
        <th>Tanggal Pendaftaran</th>

    </div>
    <?php
       
    
       while ($dat = mysqli_fetch_array($laporan)){

       ?>
        <tr align="center">
        <td><?php echo $no++ ?></td>
        <td><?php echo $dat['NISN']; ?></td>
        <td><?php echo $dat['nama']; ?></td>
        <td><?= TanggalIndo($dat['tgl_lahir']);?></td>
        <td><?php echo $dat['asal_sekolah']; ?></td>
        <td><?php echo $dat['nm_ayah']; ?></td>
        <td><img src="../../member/images/<?php echo $dat['pas_foto'] ;?>" alt="tidak muncul " width="50px"></td>
        <td><?= TanggalIndo($dat['tgl_daftar']);?></td>
        </tr>

                <?php } ?>
        </table>

        <br>
        <br>
        <table border="0" align="right">
        <tr>
        <td colspan="2" align="center"><b>Medan
        <?php echo date('d-M-Y');?> </b></br><b>Kepala Sekolah</b></br></br></br></br><hr><b>Kristiani Septa Br Ginting, S.Pd</b></td>

        </tr>




        </table>

        </body>


