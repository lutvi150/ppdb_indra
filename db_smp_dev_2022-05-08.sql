# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.34)
# Database: db_smp_dev
# Generation Time: 2022-05-08 04:52:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_galeri
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(45) NOT NULL,
  `foto_galeri` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_galeri` WRITE;
/*!40000 ALTER TABLE `tbl_galeri` DISABLE KEYS */;

INSERT INTO `tbl_galeri` (`id_foto`, `nama_foto`, `foto_galeri`)
VALUES
	(2,'Labor','2955877_orig.png'),
	(4,'babababa','042.jpg'),
	(5,'','67fa68a2b805879824d67789c4f3afd5.png');

/*!40000 ALTER TABLE `tbl_galeri` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_lampiran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_lampiran`;

CREATE TABLE `tbl_lampiran` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_attachment` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `lampiran` text,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_lampiran` WRITE;
/*!40000 ALTER TABLE `tbl_lampiran` DISABLE KEYS */;

INSERT INTO `tbl_lampiran` (`id`, `id_attachment`, `id_user`, `lampiran`, `type`)
VALUES
	(1,1,14,'b3bfcf0afa212c6c867115e34402fc39.png\n','image/png'),
	(2,3,14,'b9d1060d4d13a2deaa1f940f542dcaf4.pdf\n','.pdf');

/*!40000 ALTER TABLE `tbl_lampiran` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_nilai
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_nilai`;

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_nilai` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_nilai` WRITE;
/*!40000 ALTER TABLE `tbl_nilai` DISABLE KEYS */;

INSERT INTO `tbl_nilai` (`id_nilai`, `jenis_nilai`, `id_user`, `nilai`)
VALUES
	(49,'ipa',14,90),
	(50,'matematika',14,80),
	(51,'bahasa_inggris',14,90);

/*!40000 ALTER TABLE `tbl_nilai` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_pendaftar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_pendaftar`;

CREATE TABLE `tbl_pendaftar` (
  `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_register` int(11) NOT NULL,
  `no_pendaftaran` varchar(30) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nisn` varchar(30) NOT NULL DEFAULT '',
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
  `pas_foto` text NOT NULL,
  `foto_skhu` text NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `konfirmasi` varchar(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `penghasilan_ayah` bigint(30) DEFAULT NULL,
  `penghasilan_ibu` bigint(30) DEFAULT NULL,
  `pekerjaan_ayah` varchar(200) DEFAULT NULL,
  `pekerjaan_ibu` varchar(200) DEFAULT NULL,
  `nilai_rata_rata` int(11) DEFAULT NULL,
  `kelulusan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_pendaftar` WRITE;
/*!40000 ALTER TABLE `tbl_pendaftar` DISABLE KEYS */;

INSERT INTO `tbl_pendaftar` (`id_pendaftaran`, `id_register`, `no_pendaftaran`, `tgl_daftar`, `nisn`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `asal_sekolah`, `nm_ayah`, `nm_ibu`, `pekerjaan`, `bahasa_indonesia`, `pas_foto`, `foto_skhu`, `alamat`, `no_tlp`, `konfirmasi`, `id_user`, `status`, `anak_ke`, `jumlah_saudara`, `penghasilan_ayah`, `penghasilan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nilai_rata_rata`, `kelulusan`)
VALUES
	(1,4,'NP-20190813023657','2019-08-13','1510001','Retno setianto','Medan','1996-03-03','Laki-Laki','Islam','SD Negeri 1','alif','ani','CEO','89','index.jpg','ktp.pdf','Medan','08262347343','LULUS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(2,0,'0','2022-04-30','1550010020','Lala','0','2022-04-30','-','-','-','-','-','-','0','-','-','-','-','-',11,'draft',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(3,0,'REG-20220504-14','2022-05-04','1550010056','tata','Batusangkar','2022-05-03','L','Islam','SD Negeri 1','-','-','','0','-','-','Padang','082285498005','0',14,'process',NULL,0,0,0,'-','0',88,'lulus');

/*!40000 ALTER TABLE `tbl_pendaftar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_pengumuman
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_pengumuman`;

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` text NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_pengumuman` WRITE;
/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`)
VALUES
	(5,'2019-08-06','Upacar bendera','Pancasila lahir sebagai refleksi dari perjuangan bangsa Indonesia sendiri. Dibuat berdasarkan sejarah perjuangan bangsa Indonesia sejak sebelum masa kerajaan hingga mencapai kemerdekaan. Pancasila merupakan buah pemikiran dan perenungan jiwa yang mendalam mengenai nilai-nilai luhur yang dimiliki oleh bangsa Indonesia. Dalam proses perumusannya, para penggagas Pancasila berpikir ','042.jpg'),
	(6,'2019-08-06','Hari Besar','Sebelum agama-agama besar masuk ke Indonesia, masyarakat Indonesia telah mengenala 2 macam kepercayaan dalam menyembah Tuhan Yang Maha Esa, yaitu melalui ajaran animism dan dinamisme. Seiring berjalannya waktu, ajaran Hindu dan Buddha masuk ke Indonesia melalui jalur perdagangan. Dari sana, timbul rasa saling menghormati dan toleransi antar umat beragama. Hal ini dapat dilihat dari keberadaan Candi Borobudur sebagai wujud keberadaan masyarakat Buddha serta Candi Prambanan milik masyarakat Hindu. Kehidupan masyarakatnya pun penuh rasa kekeluargaan, gotong royong dan musyawarah. Nilai-nilai yang Pancasila yang terdapat saat itu ialah nilai religius, nilai toleransi beragama, kekeluargaan dan musyawarah','2955877_orig.png'),
	(7,'2019-08-07','Kabar Sekolah','Istilah Pancasila pertama kali ditemukan dalam kitab Sutasoma karya Mpu Tantular pada abad ke 14, yang merujuk pada 5 perintah kesusuilaan (Pancasila Krama), yaitu larangan Melakukan Kekerasa, Mencuri, Dengki, Berbohong dan Mabuk Akibat Minuman Keras. Kata Bhineka Tunggal Ika bermakna walaupun berbeda, satu jua adanya. Kata-kata ini telah lama dikenal masyarakat Indonesia, ini menunjukkan bahwa masyarakat Indonesia telah hidup rukun dan saling menghormati setiap perbedaan sejak dahulu.','lxX7j.jpg'),
	(8,'2019-08-09','Kabar Sekolah1','Nilai luhur lainnya ialah sumpah Maha Patih Gajah Mada dalam Sumpah Palapa, yaitu Tan amukti palapa during purna nusantara (tak akan makan buah palapa sebeluam memepersatukan nusantara) Nilai yang lain yaitu Mitreka Satata, yang artinya persahabatan antar agama. Mpu Prapanca dalam kitabnya Negarakertagama menuliskan susunan pemerintahan Majapahit atas dasar musyawarah serta pengakuan mengenai harkat dan martabat manusia. Jadinya, dapat disimpulkan bahwa selama masa kejayaan nasional, nilai-nilai luhur Pancasila sudah ada di Indonesia, antara lain nilai persatuan, pengakuan harkat dan martabat manusia, keasusilaan, serta nilai-nilai religius.','Screen_Shot_2022-04-27_at_15_12_27.png');

/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_setting
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_setting`;

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_setting` varchar(200) DEFAULT NULL,
  `setting` text,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_setting` WRITE;
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;

INSERT INTO `tbl_setting` (`id_setting`, `jenis_setting`, `setting`)
VALUES
	(1,'pengumuman','2022-05-04 20:00:45'),
	(2,'kuata','90');

/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;

INSERT INTO `tbl_user` (`id_register`, `nisn`, `nama`, `username`, `password`, `role`)
VALUES
	(4,'-','Admin','admin','c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec','admin'),
	(8,'1550010081','1550010081','1550010081','147cc12f888bae4627202b813385f26f9811a0610ac74d29a501eb17a25f743480589c77b38584554088e82bd11a4965e1a084f52b2bea01ef8ab34b7f87859e','siswa'),
	(9,'1550010081','ani','ani','0118af338e587b46c64cc79782f494ea03b673872490c260590bd2b1c2976c533c3d771cc1caf30456dc70a21dc4662177f45e7e3ade0b4e078436344e7ad1ae','siswa'),
	(10,'1550010092','Mahmud','1550010092','18dcee3bc16cfe25702a6e80aab25e26905e3d7ac4a67d5e2641a10dcfff4128c1e5dcca5390bcb46c8db12b205fdeb39c17ba557a6885e809245cc6531e0910','siswa'),
	(11,'1550010020','Lala','1550010020','2b7b25d1d252cdcaec29495e37d29ce26fcfb58213a610740a8e859aa56c0d9efa5a1e0e99f2cc04d3f0456869e442d6d890d53fff8e62bd8a5a84c2df809efe','siswa'),
	(14,'1550010056','tata','1550010056','11a3b9ba3cc558f1d05f056dbd2567a43031c857dd3325f5b9179d21ee8ed4f9a7d0441d904c7a51501da4132963eeb7f8f359012fa028ca6bdbbf4deda92702','siswa');

/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
