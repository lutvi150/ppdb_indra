    
<?php
include "koneksi.php";
if (isset($_POST['ubahpengumuman'])){

	$nama_f = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$tipe = $_FILES['foto']['type'];

	// nama_penulis`='$_POST[nama_penulis]'==> Nama Di dalam Kurung petak adalah name pada form edit penulis

	if($lokasi==""){
	$query = "UPDATE tbl_pengumuman SET 
	   `tgl_pengumuman`='$_POST[tgl]',
        `judul_pengumuman`='$_POST[judul]',
		`isi_pengumuman`='$_POST[isi]' WHERE `id_pengumuman`='$_POST[idp]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());
	}
	else{
move_uploaded_file($lokasi,"images_pengumuman/$nama_f");
$query = "UPDATE tbl_pengumuman SET 
 		`tgl_pengumuman`='$_POST[tgl]',
        `judul_pengumuman`='$_POST[judul]',
		`isi_pengumuman`='$_POST[isi]',
		`foto_pengumuman`='$nama_f' WHERE `id_pengumuman`='$_POST[idp]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());

	}
	echo "<script>alert('Data Sudah Edit');
	window.location='index.php?page=data_pengumuman';
	</script>";
}

//aksi edit_admin
elseif(isset($_POST['editadmin'])){

	$ida = $_POST['ida'];
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$level = $_POST['level'];
	
	$sqlquery = mysqli_query($koneksi,"UPDATE tbl_admin SET
	`nama_admin`='$nama',
	`username`='$user',
	`password`='$pass',
	`level`='$level' WHERE id_admin = '$ida'");
	
	if($sqlquery){
	echo "<script>alert('Data Sudah Edit');</script>";
	echo "<script>window.location='index.php?page=data_admin';</script>";
	}else{
	echo "<script>alert('Data Gagal Edit');</script>";
	echo "<script>location='index.php?page=edit_admin';</script>";
	
	}
}


elseif(isset($_POST['edit_member'])){

	$idr = $_POST['idr'];
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['password'];
	
	$sqlquery = mysqli_query($koneksi,"UPDATE tbl_register SET
	`nama`='$nama',
	`username`='$user',
	`password`='$pass' WHERE id_register = '$idr'");
	
	if($sqlquery){
	echo "<script>alert('Data Sudah Edit');</script>";
	echo "<script>window.location='index.php?page=data_member';</script>";
	}else{
	echo "<script>alert('Data Gagal Edit');</script>";
	echo "<script>location='index.php?page=edit_member';</script>";
	
	}

// aksi edit_pendaftar
}elseif (isset($_POST['edit_pendaftar'])){

	$nama_f = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$tipe = $_FILES['foto']['type'];
	$nama_foto = $_FILES['foto_skhu']['name'];
	$lokasi = $_FILES['foto_skhu']['tmp_name'];
	$tipe = $_FILES['foto_skhu']['type'];
	$id = $_POST['id'];
	// nama_penulis`='$_POST[nama_penulis]'==> Nama Di dalam Kurung petak adalah name pada form edit penulis

	if($lokasi==""){
	$query = "UPDATE tbl_pendaftar SET 
	   `nama`='$_POST[nm_lengkap]',
        `tempat_lahir`='$_POST[tmpt_lahir]',
		`tgl_lahir`='$_POST[tgl_lahir]',
		`jenis_kelamin`='$_POST[jk]',
		`agama`='$_POST[agama]',
        `asal_sekolah`='$_POST[asl_sk]',
		`nm_ayah`='$_POST[nm_ayah]',
        `nm_ibu`='$_POST[nm_ibu]',
		`pekerjaan`='$_POST[kerja]',
		`bahasa_indonesia`='$_POST[bi]',
		`ipa`='$_POST[ipa]',
		`matematika`='$_POST[mtk]',
		`bahasa_inggris`='$_POST[bhs_inggris]',
		`alamat`='$_POST[almt_lkp]',
        `no_tlp`='$_POST[no_tlp]' WHERE `id_pendaftaran`='$_POST[id]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());
	}
	else{
move_uploaded_file($lokasi,"images/$nama_f");
move_uploaded_file($lokasi,"images/$nama_foto");
$query = "UPDATE tbl_pendaftar SET 
 	 	`nama`='$_POST[nm_lengkap]',
        `tempat_lahir`='$_POST[tmpt_lahir]',
		`tgl_lahir`='$_POST[tgl_lahir]',
		`jenis_kelamin`='$_POST[jk]',
		`agama`='$_POST[agama]',
        `asal_sekolah`='$_POST[asl_sk]',
		`nm_ayah`='$_POST[nm_ayah]',
        `nm_ibu`='$_POST[nm_ibu]',
		`pekerjaan`='$_POST[kerja]',
		`bahasa_indonesia`='$_POST[bi]',
		`ipa`='$_POST[ipa]',
		`matematika`='$_POST[mtk]',
		`bahasa_inggris`='$_POST[bhs_inggris]',
		`pas_foto`='$nama_f',
		`foto_skhu`='$nama_foto',
		`alamat`='$_POST[almt_lkp]',
        `no_tlp`='$_POST[no_tlp]' WHERE `id_pendaftaran`='$_POST[id]'";
$proses = mysqli_query($koneksi,$query) or die (mysqli_eror());

if($proses){
	echo "<script>alert('Data Sudah Edit');</script>";
	echo "<script>window.location='index.php?page=data_pendaftar';</script>";
	}else{
	echo "<script>alert('Data Gagal Edit');</script>";
	echo "<script>location='index.php?page=edit_pendaftar';</script>";
	
	}
}


} elseif (isset($_POST['edit_galeri'])){

	$nama_foto = $_FILES['foto_g']['name'];
	$lokasi = $_FILES['foto_g']['tmp_name'];
	$tipe = $_FILES['foto_g']['type'];
	$idg = $_POST['idg'];

	if($lokasi==""){
	$query =mysqli_query($koneksi, "UPDATE tbl_galeri SET 
	   `nama_foto`='$_POST[nama_f]'WHERE `id_galeri`='$idg'");

	}
	else{
move_uploaded_file($lokasi,"images/$nama_foto");
$query = mysqli_query($koneksi, "UPDATE tbl_galeri SET 
  `nama_foto`='$_POST[nama_f]',
  `foto_galeri`='$nama_foto' WHERE `id_foto`='$idg'");


	}
	echo "<script>alert('Data Sudah Edit');
	window.location='index.php?page=data_galeri';
	</script>";
}

// batas
?>