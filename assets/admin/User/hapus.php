<?php
include "koneksi.php";

if (isset($_POST['hapus_pengumuman']))
{
  
  $query=mysqli_query($koneksi,"DELETE  from tbl_pengumuman WHERE id_pengumuman='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_pengumuman';
    </script>";
 }
}
   else if (isset($_POST['hapus_admin']))
{
  
  $query=mysqli_query($koneksi,"DELETE  from tbl_admin WHERE id_admin='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_admin';
    </script>";
 }
}
   elseif (isset ($_POST['hapus_pendaftaran']))
{
    $query=mysqli_query($koneksi,"DELETE  from tbl_pendaftar WHERE id_pendaftaran='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_pendaftar';
    </script>";
 }

}
   elseif (isset ($_POST['hapus_member']))
{
    $query=mysqli_query($koneksi,"DELETE  from tbl_register WHERE id_register='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_member';
    </script>";
 }

}
   elseif (isset ($_POST['hapus_galeri']))
{
    $query=mysqli_query($koneksi,"DELETE  from tbl_galeri WHERE id_foto='$_GET[id]'");
 if($query)
 {
    echo "<script>alert('data dihapus');
    window.location='index.php?page=data_galeri';
    </script>";
 }

}





?>