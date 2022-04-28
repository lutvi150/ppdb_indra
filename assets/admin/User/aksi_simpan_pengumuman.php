<?php
    include "koneksi.php";

    //menangkap data
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];
    move_uploaded_file($lokasi_foto,"images_pengumuman/$nama_foto");
    $tgl = $_POST['tanggal'];
    $jdl = $_POST['judul_pengumuman'];
    $isi = $_POST['isi'];


    //input datanya

  
   
    mysqli_query($koneksi,"INSERT INTO `tbl_pengumuman`(`tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`) VALUES ('$tgl','$jdl','$isi','$nama_foto')");
    echo "<script>alert('Data Udah Di Simpan');
    window.location ='index.php?page=data_pengumuman';
    </script>";
    ?>


</>
    