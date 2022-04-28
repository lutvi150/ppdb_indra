
<script>
    window.print();
</script>
<?php
        include "tglindo.php";
        include "koneksi.php";

        $month = $_GET['month'];
        $year  = $_GET['year'];

        if ($month == '01'){

            $bln="Januari";
        }else if($month == '02'){

            $bln="Februari";
        }else if($month == '03'){

            $bln="Maret";
        }else if($month == '04'){

            $bln="April";
        }else if($month == '05'){

            $bln="Mei";
        }else if($month == '06'){

            $bln="Juni";
        }else if($month == '07'){

            $bln="Juli";
        }else if($month == '08'){

            $bln="Agustus";
        }else if($month == '09'){

            $bln="September";
        }else if($month == '10'){

            $bln="Oktober";
        }else if($month == '11'){

            $bln="November";
        }else if($month == '12'){

            $bln="Desemeber";
        }

        $sql = mysqli_query ($koneksi,"SELECT * FROM tbl_berita a left join tbl_kategori b on a.id_kategori=b.id_kategori left join tbl_penulis c on a.id_penulis=c.id_penulis WHERE DATE_FORMAT(tgl,'%m')='$month' and DATE_FORMAT(tgl,'%Y')='$year'");
        $no =1;
?>

<div>
    <img src="images/cv.jpg" width="150" height="50" >
    <img src="images/cv.jpg" width="150" height="50" align="right">
</div>
<div col-sm-6 row-sm-4 align="center">
    <h2>CV.MEDIATAMA WEB INDONESIA</h2>
    <h4>Training and IT Consultan</h4>
    <h5>Jl. Namorambe No. 106 Ke. Namorambe</h5>
</div>
<hr>
    <div class="panel-heading" >
        <h2 align="center">Laporan Data Komentar</h2>
    </div>     

<table align="center" border="2" cellpadding="0" cellspacing="0" witdh="100%" >
    <thead>
    <tr >
        <td><b>No</b></td>
        <td><b>Judul Kategori</b></td>
        <td><b>Nama Penulis</b></td>
        <td><b>Judul Berita</b></td>
        <td><b>Isi Berita</b></td>
        <td><b>Tanggal</b></td>
    </tr>
    </thead>
</body>
        <?php
            while($dat = mysqli_fetch_array($sql)){

        ?>
 <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $dat['judul_kategori']; ?></td>
        <td><?php echo $dat['nama_penulis']; ?></td>
        <td><?php echo $dat['judul_berita']; ?></td>
        <td><?php echo $dat['isi_berita']; ?></td>
        <td><?php echo TanggalIndo($dat['tgl']); ?></td>


    
</tr>
        <?php } ?>
</tbody>
</table>
<br>
<br>

<table border="0" align="right">
        <tr>
                <td colspan="2" align="center"><b>Medan
                 <?php echo TanggalIndo (date('Y-m-d')); ?></b><br><b>Direktur</b><br><br><br><hr><b></b>Ester, S.Kom</br></td>
                
                </td>
        
        </tr>
</table>
