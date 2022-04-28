<?php
include "koneksi.php";
if (isset($_POST['update_stattus'])) {
      $idpen = $_POST['id_pendaftaran'];
      $sqlupdate = mysqli_query($koneksi,"UPDATE `tbl_pendaftar` SET  `konfirmasi`='$_POST[status]' WHERE `id_pendaftaran`='$idpen'");
      if ($sqlupdate) {
      	echo "<script>alert('Konfirmasi Diubah');</script>";
          echo "<script>location ='index.php?page=data_pendaftar';</script>";
      }
      else {
      	echo "<script>alert('Konfirmasi Tidak Bisa Diubah');</script>";
          echo "<script>location ='index.php?page=home';</script>";
      }
  }  
?>