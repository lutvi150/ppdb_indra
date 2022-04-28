<?php
    include "koneksi.php";

    //menangkap data
	$nisn = $_POST['masukan_nisn'];
    $nm = $_POST['nama_lengkap'];                           //[id_kategori = name pada form]
    $user = $_POST['user']; 
    $pass = $_POST['pass'];
 


    //input datanya

    mysqli_query($koneksi,"INSERT INTO `tbl_register`(`NISN`, `nama`, `username`, `password`) values ('$nisn','$nm','$user','$pass')");
    echo "<script>alert('Data Udah Di Simpan');
    window.location ='index.php';
    </script>";
    ?>