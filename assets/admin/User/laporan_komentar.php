<?php
    include "koneksi.php";
?>
<div>
    <img src="images/logo4.jpg" width="150" height="100" >
    <img src="images/logo5.jpg" width="150" height="100" align="right">
</div>
<div col-sm-6 row-sm-4 align="center">
    <h3>PEMERINTAH KOTA MEDAN</h3>
    <h3>Dinas Pendidikan Dan Kebudayaan</h3>
    <h3>SMP SWASTA PNIEL MEDAN</h3>
    <h5>Jl. Perjuangan Gg. Pisang No. 1 Pasar IV, Deli Tua, Kec. Namo Rambe</h5>
</div>
<hr>

    <div>
        <a href="cetak.php"  class="btn btn-danger"><i  class="btn fa fa-print fa-1x ">Cetak</i></a>  
    </div>
    <div class="panel panel-warning">
    <div class="panel-heading" >
        <h2 align="center">Laporan Data Pendaftar</h2>
    </div>     

<?php
    $sqlt = mysqli_query($koneksi, "select * from tbl_pendaftaran");
    $no=1;
?>
<table class="table table-bordered  " > 
        <div class="panel-body no-padding" >
                    <tr align="center" class="warning" >
                        <td><b>No</b></td>
                        <td><b>Nama</b></td>
                        <td><b>Pekerjaan</b></td>
                        <td><b>Komentar</b></td>
                    </tr>
        <?php
            while($dat = mysqli_fetch_array($sqlt)){

        ?>
 <tr align="center">
        <td><?php echo $no++ ?></td>
        <td><?php echo $dat['nama']; ?></td>
        <td><?php echo $dat['pekerjaan']; ?></td>
        <td><?php echo $dat['komentar']; ?></td>

        <?php } ?>
</tr>
            </table>
        </div>

<div align="right"><td>Padang,<?php echo date('d-M-Y'); ?></td><br><br></div> 
<div align="right">Kepala Sekolah</div><br><br><br>
            <b><u>Kristiani Septa Br Ginting, S.Pd.</u></b>
