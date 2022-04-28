-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table db_smp_dev.tbl_galeri
CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(45) NOT NULL,
  `foto_galeri` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_smp_dev.tbl_galeri: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_galeri` DISABLE KEYS */;
INSERT INTO `tbl_galeri` (`id_foto`, `nama_foto`, `foto_galeri`) VALUES
	(2, 'Labor', '2955877_orig.png'),
	(4, 'babababa', '042.jpg');
/*!40000 ALTER TABLE `tbl_galeri` ENABLE KEYS */;

-- membuang struktur untuk table db_smp_dev.tbl_pendaftar
CREATE TABLE IF NOT EXISTS `tbl_pendaftar` (
  `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_register` int(11) NOT NULL,
  `no_pendaftaran` varchar(30) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `NISN` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(34) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `bahasa_indonesia` varchar(56) NOT NULL,
  `ipa` varchar(45) NOT NULL,
  `matematika` varchar(45) NOT NULL,
  `bahasa_inggris` varchar(45) NOT NULL,
  `pas_foto` text NOT NULL,
  `foto_skhu` text NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `konfirmasi` varchar(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_smp_dev.tbl_pendaftar: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_pendaftar` DISABLE KEYS */;
INSERT INTO `tbl_pendaftar` (`id_pendaftaran`, `id_register`, `no_pendaftaran`, `tgl_daftar`, `NISN`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `asal_sekolah`, `nm_ayah`, `nm_ibu`, `pekerjaan`, `bahasa_indonesia`, `ipa`, `matematika`, `bahasa_inggris`, `pas_foto`, `foto_skhu`, `alamat`, `no_tlp`, `konfirmasi`, `id_user`) VALUES
	(1, 4, 'NP-20190813023657', '2019-08-13', '1510001', 'Retno setianto', 'Medan', '1996-03-03', 'Laki-Laki', 'Islam', 'SD Negeri 1', 'alif', 'ani', 'CEO', '89', '90', '90', '90', 'index.jpg', 'ktp.pdf', 'Medan', '08262347343', 'LULUS', NULL);
/*!40000 ALTER TABLE `tbl_pendaftar` ENABLE KEYS */;

-- membuang struktur untuk table db_smp_dev.tbl_pengumuman
CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` text NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_smp_dev.tbl_pengumuman: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;
INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`) VALUES
	(5, '2019-08-06', 'Upacar bendera', 'Pancasila lahir sebagai refleksi dari perjuangan bangsa Indonesia sendiri. Dibuat berdasarkan sejarah perjuangan bangsa Indonesia sejak sebelum masa kerajaan hingga mencapai kemerdekaan. Pancasila merupakan buah pemikiran dan perenungan jiwa yang mendalam mengenai nilai-nilai luhur yang dimiliki oleh bangsa Indonesia. Dalam proses perumusannya, para penggagas Pancasila berpikir ', '042.jpg'),
	(6, '2019-08-06', 'Hari Besar', 'Sebelum agama-agama besar masuk ke Indonesia, masyarakat Indonesia telah mengenala 2 macam kepercayaan dalam menyembah Tuhan Yang Maha Esa, yaitu melalui ajaran animism dan dinamisme. Seiring berjalannya waktu, ajaran Hindu dan Buddha masuk ke Indonesia melalui jalur perdagangan. Dari sana, timbul rasa saling menghormati dan toleransi antar umat beragama. Hal ini dapat dilihat dari keberadaan Candi Borobudur sebagai wujud keberadaan masyarakat Buddha serta Candi Prambanan milik masyarakat Hindu. Kehidupan masyarakatnya pun penuh rasa kekeluargaan, gotong royong dan musyawarah. Nilai-nilai yang Pancasila yang terdapat saat itu ialah nilai religius, nilai toleransi beragama, kekeluargaan dan musyawarah', '2955877_orig.png'),
	(7, '2019-08-07', 'Kabar Sekolah', 'Istilah Pancasila pertama kali ditemukan dalam kitab Sutasoma karya Mpu Tantular pada abad ke 14, yang merujuk pada 5 perintah kesusuilaan (Pancasila Krama), yaitu larangan Melakukan Kekerasa, Mencuri, Dengki, Berbohong dan Mabuk Akibat Minuman Keras. Kata Bhineka Tunggal Ika bermakna walaupun berbeda, satu jua adanya. Kata-kata ini telah lama dikenal masyarakat Indonesia, ini menunjukkan bahwa masyarakat Indonesia telah hidup rukun dan saling menghormati setiap perbedaan sejak dahulu.', 'lxX7j.jpg'),
	(8, '2019-08-09', 'Kabar Sekolah', 'Nilai luhur lainnya ialah sumpah Maha Patih Gajah Mada dalam Sumpah Palapa, yaitu Tan amukti palapa during purna nusantara (tak akan makan buah palapa sebeluam memepersatukan nusantara) Nilai yang lain yaitu Mitreka Satata, yang artinya persahabatan antar agama. Mpu Prapanca dalam kitabnya Negarakertagama menuliskan susunan pemerintahan Majapahit atas dasar musyawarah serta pengakuan mengenai harkat dan martabat manusia. Jadinya, dapat disimpulkan bahwa selama masa kejayaan nasional, nilai-nilai luhur Pancasila sudah ada di Indonesia, antara lain nilai persatuan, pengakuan harkat dan martabat manusia, keasusilaan, serta nilai-nilai religius.', 'IMG_6641.JPG');
/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;

-- membuang struktur untuk table db_smp_dev.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_smp_dev.tbl_user: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id_register`, `nisn`, `nama`, `username`, `password`, `role`) VALUES
	(4, '-', 'Admin', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin'),
	(8, '1550010081', '1550010081', '1550010081', '147cc12f888bae4627202b813385f26f9811a0610ac74d29a501eb17a25f743480589c77b38584554088e82bd11a4965e1a084f52b2bea01ef8ab34b7f87859e', 'siswa');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
