<?php
include "koneksi.php";
?>



<?php

if (isset($_POST['btnlogin'])){ //btnlogin di ambil dari name name button login

$us = $_POST['username'];
$ps = $_POST['password'];

    $sqllogin = mysqli_query ($koneksi,"SELECT * FROM tbl_register WHERE `username` ='$us' AND `password`='$ps'");
    $data     = mysqli_fetch_array($sqllogin);
    $cek      = mysqli_num_rows($sqllogin);


	if ($cek >=1){
        session_start();
        $_SESSION['idregis'] = $data['id_register']; // id_register ['id_register'] adalah file didata base
        $_SESSION['nm'] = $data['nama'];
      
        
        echo "<script>alert('Anda berhasil Login');</script>";
        echo "<script>window.location='member';</script>";
    }else{

        echo "<script>alert('Username dan password salah');</script>";
        echo "<script>window.location='index.php?page=login1';</script>";
    }
        
    }

        
    







?>