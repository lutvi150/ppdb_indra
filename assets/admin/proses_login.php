<?php
include "koneksi.php";
?>

<?php 
$user = $_POST ['username']; //username ['username']==>adalah nama name di form
$pass = $_POST ['pass'];
$login = $_POST ['login'];

if($login){
    if($user =="" || $pass ==""){
        echo "<script>alert('username atau password salah');
        </script>";
    }else{
        $query = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE 
        username='$user' and password='$pass'");
        $data = mysqli_fetch_array($query);
        $cek = mysqli_num_rows($query);

        if ($cek >= 1){
            session_start();
            $_SESSION['id_admin'] = $data['id_admin']; //$_SESSION 
            $_SESSION['nama_admin'] = $data['nama_admin'];
            $_SESSION['level'] = $data['level'];
            echo "<script>alert('Anda Berhasil Login');
            window.location='user/index.php';
            </script>";
        }else{
            echo "<p>username dan password anda salah!!</p>";
        
        }
    }
  
}
?>