<?php
    include "koneksi.php";

    //menangkap data
    $nama_foto = $_FILES['foto_galeri']['name'];
    $lokasi_foto = $_FILES['foto_galeri']['tmp_name'];
    $tipe_foto = $_FILES['foto_galeri']['type'];
    move_uploaded_file($lokasi_foto,"images/$nama_foto");
    $nm = $_POST['nama_foto'];


    //input datanya

  
   
    mysqli_query($koneksi,"INSERT INTO `tbl_galeri`(`nama_foto`, `foto_galeri`) VALUES ('$nm','$nama_foto')");
    echo "<script>alert('Data Udah Di Simpan');
    window.location ='index.php?page=data_galeri';
    </script>";
    ?>


</>
    