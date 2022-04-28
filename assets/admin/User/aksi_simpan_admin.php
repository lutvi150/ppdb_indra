<?php
    include "koneksi.php";

    //menangkap data
    $nama_admin = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $lev = $_POST['level'];


    //input datanya

    mysqli_query($koneksi,"INSERT INTO `tbl_admin`(`nama_admin`, `username`, `password`, `level`) values ('$nama_admin','$user','$pass','$lev')");
    echo "<script>alert('Data Udah Di Simpan');
    window.location ='index.php?page=data_admin';
    </script>";
    ?>