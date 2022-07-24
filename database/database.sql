-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: db_smp
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_assets`
--

DROP TABLE IF EXISTS `tbl_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets` (
  `id_assets` int(11) NOT NULL AUTO_INCREMENT,
  `assets` varchar(255) DEFAULT NULL,
  `link` text,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_assets`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets`
--

LOCK TABLES `tbl_assets` WRITE;
/*!40000 ALTER TABLE `tbl_assets` DISABLE KEYS */;
INSERT INTO `tbl_assets` VALUES (2,'e63fa135766a4ff696a7380023d67172.png','http://localhost:8888/ppdb_indra/uploads/e63fa135766a4ff696a7380023d67172.png','.png'),(3,'98bd4946248eb1784b960b4669b7103d.png','http://localhost:8888/ppdb_indra/uploads/98bd4946248eb1784b960b4669b7103d.png','.png'),(4,'af0521f82bcb996b687e0e4f98f97566.png','http://localhost:8888/ppdb_indra/uploads/af0521f82bcb996b687e0e4f98f97566.png','.png'),(6,'8b80ba1abe8b79f193bb823277a1bda7.PNG','https://ppdbpniel.cloverteam.my.id/uploads/8b80ba1abe8b79f193bb823277a1bda7.PNG','.PNG'),(7,'93b2a19f60becea4ac1a6e22a6f31ae3.png','https://ppdbpniel.cloverteam.my.id/uploads/93b2a19f60becea4ac1a6e22a6f31ae3.png','.png'),(8,'fcde945238f426eab84a0059f3db5b44.png','https://ppdbpniel.cloverteam.my.id/uploads/fcde945238f426eab84a0059f3db5b44.png','.png'),(9,'edd7e5c25d4623175e383949f4504821.PNG','https://ppdbpniel.cloverteam.my.id/uploads/edd7e5c25d4623175e383949f4504821.PNG','.PNG'),(10,'cc0afba9410c4bd3d0d36364141ebac7.PNG','https://ppdbpniel.cloverteam.my.id/uploads/cc0afba9410c4bd3d0d36364141ebac7.PNG','.PNG'),(13,'34df3563c1989a06154dd52deffdaa4d.jpeg','https://ppdb.cloverteam.my.id/uploads/34df3563c1989a06154dd52deffdaa4d.jpeg','.jpeg'),(14,'f589889fedf5d8975c3ab8b88b17429b.jpeg','https://ppdb.cloverteam.my.id/uploads/f589889fedf5d8975c3ab8b88b17429b.jpeg','.jpeg'),(15,'bc967aa45690f8620cf5e6589ae5d192.jpeg','https://ppdbpniel.cloverteam.my.id/uploads/bc967aa45690f8620cf5e6589ae5d192.jpeg','.jpeg'),(19,'d64cedb783f19d6f9e286b43fd5b1262.jpeg','https://ppdb.cloverteam.my.id/uploads/d64cedb783f19d6f9e286b43fd5b1262.jpeg','.jpeg'),(20,'47b3dbab41b4854b66f36bf154249aed.jpeg','https://ppdb.cloverteam.my.id/uploads/47b3dbab41b4854b66f36bf154249aed.jpeg','.jpeg'),(21,'2027817ec35832cb682a60c17085d5d8.jpeg','https://ppdb.cloverteam.my.id/uploads/2027817ec35832cb682a60c17085d5d8.jpeg','.jpeg'),(22,'e710c7dd173313b698cea9276379da68.jpeg','https://ppdb.cloverteam.my.id/uploads/e710c7dd173313b698cea9276379da68.jpeg','.jpeg'),(23,'893fdc744685fed930253039045ec846.jpeg','https://ppdb.cloverteam.my.id/uploads/893fdc744685fed930253039045ec846.jpeg','.jpeg'),(24,'16364226eea7fac47ced79d4c677d66c.jpeg','https://ppdb.cloverteam.my.id/uploads/16364226eea7fac47ced79d4c677d66c.jpeg','.jpeg'),(25,'6e12a1c52a36a9a480da2ff02a01aabe.jpeg','https://ppdb.cloverteam.my.id/uploads/6e12a1c52a36a9a480da2ff02a01aabe.jpeg','.jpeg');
/*!40000 ALTER TABLE `tbl_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeri`
--

DROP TABLE IF EXISTS `tbl_galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(45) NOT NULL,
  `foto_galeri` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeri`
--

LOCK TABLES `tbl_galeri` WRITE;
/*!40000 ALTER TABLE `tbl_galeri` DISABLE KEYS */;
INSERT INTO `tbl_galeri` VALUES (2,'Labor','2955877_orig.png'),(4,'babababa','042.jpg'),(5,'','67fa68a2b805879824d67789c4f3afd5.png');
/*!40000 ALTER TABLE `tbl_galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_guru`
--

DROP TABLE IF EXISTS `tbl_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_guru` (
  `id_guru` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  `nip_guru` varchar(20) DEFAULT NULL,
  UNIQUE KEY `id` (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_guru`
--

LOCK TABLES `tbl_guru` WRITE;
/*!40000 ALTER TABLE `tbl_guru` DISABLE KEYS */;
INSERT INTO `tbl_guru` VALUES (1,'Mahdonala','197610282006042019');
/*!40000 ALTER TABLE `tbl_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_informasi`
--

DROP TABLE IF EXISTS `tbl_informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_informasi`),
  KEY `tbl_informasi_id_informasi_idx` (`id_informasi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_informasi`
--

LOCK TABLES `tbl_informasi` WRITE;
/*!40000 ALTER TABLE `tbl_informasi` DISABLE KEYS */;
INSERT INTO `tbl_informasi` VALUES (1,'visi_misi','<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">VISI MISI SEKOLAH PNIEL MEDAN&nbsp;</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">VISI&nbsp;</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">Sekolah Kristen yang unggul dalam menjadikan siswa berilmu,beriman dan berkarya&nbsp;</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">MISI</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">1. Melaksanakan pendidikan yang berkualitas sehinnga para siswa memiliki kemampuan akademik&nbsp;</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">2. Melaksanakan pendidikan karakter terhadap siswa sesuai ajaran alkitab.</span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:16px\">3. Melaksanakan pendidikan agar siswa memilik karya</span></span></p>\n\n<p>&nbsp;</p>\n',NULL),(2,'ruangan_kelas','<p><strong>RUANGAN KELAS 1</strong></p>\n\n<p><strong><img alt=\"\" src=\"https://ppdb.cloverteam.my.id/uploads/f589889fedf5d8975c3ab8b88b17429b.jpeg\" style=\"height:360px; width:640px\" /></strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong>RUANGAN KELAS 2</strong></p>\n\n<p><img alt=\"RUANGAN KELAS 1\" src=\"https://ppdb.cloverteam.my.id/uploads/34df3563c1989a06154dd52deffdaa4d.jpeg\" style=\"height:360px; width:640px\" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>RUANGAN KELAS 3</strong></p>\n\n<p><img alt=\"\" src=\"https://ppdbpniel.cloverteam.my.id/uploads/bc967aa45690f8620cf5e6589ae5d192.jpeg\" style=\"height:360px; width:640px\" /></p>\n',NULL),(3,'pengumuman','<p>TEST</p>\n',NULL),(4,'kegiatan',NULL,NULL),(5,'syarat','<p><span style=\"font-size:18px\"><span style=\"color:#2ecc71\"><strong>Syarat Pendaftaran</strong></span></span></p>\n\n<p><span style=\"font-size:18px\"><span style=\"color:#2ecc71\"><strong>1. FC ijazah&nbsp;&nbsp;</strong></span></span><span style=\"font-size:18px\"><span style=\"color:#2ecc71\"><strong>2. Fc akte lahir</strong></span></span></p>\n\n<p><span style=\"font-size:18px\"><span style=\"color:#2ecc71\"><strong>3. Fc kartu keluarga&nbsp;&nbsp;</strong></span></span><span style=\"font-size:18px\"><span style=\"color:#2ecc71\"><strong>4. Pasphoto 2X3 &amp; 3X4 masing masing 4 lembar</strong></span></span></p>\n',NULL),(6,'biaya','<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>1.UANG PENDAFTARAN SEBESAR Rp.100,00,</strong></span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>2.UANG BULANAN Rp.110.000,</strong></span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>3.SERAGAM 1 PASANG+BAJU OLARAGA Rp.450.000,</strong></span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>4.UANG PENGEMBANGAN PENDIDIKAN Rp .150.000,</strong></span></span></p>\n\n<p>&nbsp;</p>\n',NULL),(7,'fasilitas_sekolah','<p><span style=\"font-size:14px\"><span style=\"color:#2ecc71\"><strong>1.PERPUSTAKAAN</strong></span></span></p>\n\n<p><strong><img alt=\"1.PERPUSTAKAAN\" src=\"https://ppdb.cloverteam.my.id/uploads/893fdc744685fed930253039045ec846.jpeg\" style=\"height:480px; width:640px\" /></strong></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#2ecc71\"><strong>2.RUANGAN KOMPUTER</strong></span></span></p>\n\n<p>&nbsp;</p>\n\n<p><strong><img alt=\"2.RUANGAN KOMPUTER\" src=\"https://ppdb.cloverteam.my.id/uploads/6e12a1c52a36a9a480da2ff02a01aabe.jpeg\" style=\"height:480px; width:640px\" /></strong></p>\n\n<p><strong><img alt=\"\" src=\"https://ppdb.cloverteam.my.id/uploads/16364226eea7fac47ced79d4c677d66c.jpeg\" style=\"height:480px; width:640px\" /></strong></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n',NULL),(8,'extrakurikuler','<p><span style=\"font-size:14px\"><span style=\"color:#2ecc71\"><strong>1.TEKONDO</strong></span></span></p>\n\n<p><strong><img alt=\"\" src=\"https://ppdb.cloverteam.my.id/uploads/d64cedb783f19d6f9e286b43fd5b1262.jpeg\" style=\"height:480px; width:640px\" /></strong></p>\n\n<p>&nbsp;</p>\n\n<p><strong><img alt=\"\" src=\"https://ppdb.cloverteam.my.id/uploads/2027817ec35832cb682a60c17085d5d8.jpeg\" style=\"height:360px; width:640px\" /></strong></p>\n\n<p><strong><span style=\"color:#2ecc71\"><span style=\"font-size:14px\">2. PENDALAMAN ALKITAB</span></span><img alt=\"2.PENDALAMAN ALKITAB\" src=\"https://ppdb.cloverteam.my.id/uploads/e710c7dd173313b698cea9276379da68.jpeg\" style=\"height:492px; width:1040px\" /></strong></p>\n',NULL),(9,'beasiswa','<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>Anak pendeta discount uang sekolah sampai tamat&nbsp;</strong></span></span></p>\n\n<p><span style=\"color:#2ecc71\"><span style=\"font-size:14px\"><strong>Rangking I-III gratis uang sekolah selama 3 bulan&nbsp;&nbsp;</strong></span></span></p>\n',NULL);
/*!40000 ALTER TABLE `tbl_informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lampiran`
--

DROP TABLE IF EXISTS `tbl_lampiran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_lampiran` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_attachment` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `lampiran` text,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lampiran`
--

LOCK TABLES `tbl_lampiran` WRITE;
/*!40000 ALTER TABLE `tbl_lampiran` DISABLE KEYS */;
INSERT INTO `tbl_lampiran` VALUES (6,1,17,'2a41ae3902cf8af6d02e6a32d3c2a519.jpg','.jpg'),(7,2,17,'c62eecf1b6f1bdd09372409b765511e5.jpg','.jpg'),(8,3,17,'cb5bd5b7125532427a611399c4208443.png','.png'),(9,1,18,'3bff4e5ef24967d20e813ac8170fc2f6.png','.png'),(10,2,18,'971b0a711d57f23cab24d931f001e02a.pdf','.pdf'),(11,3,18,'532f0fc0f91fd52aa0b6fd096a3bf9bd.pdf','.pdf'),(12,1,19,'2cd1549ad48a1ca1389a1f809e2670a4.jpg','.jpg'),(13,2,19,'3b3af3f707fd64fdeb461c33ef5c0f72.jpg','.jpg'),(14,3,19,'cde09ba533a35c57765b7b3511c4c636.jpg','.jpg'),(15,1,20,'08b6bc7e86b96c68558dd87ba5b5a597.jpg','.jpg'),(16,2,20,'8822e51b7dfa8a7b88962f41259e7cd4.jpg','.jpg'),(17,3,20,'d4340e5687a7c05b453306b8b7ffa2bf.png','.png'),(21,1,22,'558d37c6def1f9c4cc0007d4f81c430f.png','.png'),(22,2,22,'8bd48e7066206c9225601040028b8939.png','.png'),(23,3,22,'5d6c2ad8cad885deccd01c23f5bb548b.png','.png'),(24,1,23,'13e827ee805570b7a5abd8627456d6d4.png','.png'),(25,2,23,'a602571926341412f5915749c5ae6f22.png','.png'),(26,3,23,'9420be8c75318c3fea0f068333910395.png','.png'),(27,1,25,'f92e205776a49699f6135438a08146f2.jpg','.jpg'),(28,2,25,'32fa4fb384bda63d90d683c5a2ded9c8.jpg','.jpg'),(29,3,25,'803945cd7cb15957aa8502c7434c63bb.png','.png'),(30,1,32,'421cc7b5025a44ec76aced32f3032989.jpg','.jpg'),(31,2,32,'a6a554919ca2db19bb487bc2d931dfef.jpg','.jpg'),(32,3,32,'3a820cb56183913645f2c25aed1ee68d.jpg','.jpg'),(33,1,33,'00b9225f8e9c6ec9d6b04578d79ca7d7.jpg','.jpg'),(34,2,33,'3448e8ad5b0dfefa7b1ad7f61eace25d.jpg','.jpg'),(35,3,33,'e829497fbf112518f3e5cb1f051bd224.jpg','.jpg'),(36,1,41,'a75880c482daebf96c5c4405f9e048bc.jpg','.jpg'),(37,2,41,'66d111d49c563cae6ead5e60d8c701ad.jpg','.jpg'),(38,3,41,'e8d5538a0de1e95f26ced836e2df1256.jpg','.jpg'),(39,1,44,'26c0e634fe46d50df2e0d474aa3fc104.jpg','.jpg'),(40,2,44,'33827ecbaf21794b50092cacd4582bc2.jpg','.jpg'),(41,3,44,'06eaadef1a525586d3733b94739d23a6.jpg','.jpg'),(42,1,45,'87825a4e452fcc79e8e1f5d2ffe61190.jpg','.jpg'),(43,2,45,'9a836c8b5e945707adc94b1edc92b7d9.jpg','.jpg'),(44,3,45,'5d0e867d29c1247b8e76a2fb85526553.jpg','.jpg'),(45,1,46,'80972fc9d624e52ac301dd79f8bdde6a.png','.png'),(46,2,46,'da42d5599ab82d134538e94620e982aa.png','.png'),(47,3,46,'96df19ab1ac2e6b7757517f0532d4128.png','.png'),(48,1,49,'ed1e8aee24d8f916c8758c8f6b7a588a.png','.png'),(49,2,49,'88420bb25339299a57cebe72aabaf152.png','.png'),(50,3,49,'becb87c50fbb82d7b8186ff8c7ee1277.png','.png'),(51,1,50,'7e8bcc08539b677a32fc0a03a3cb2cb7.png','.png'),(52,2,50,'14bdc28328c1da29349b2d7df5501f94.png','.png'),(53,3,50,'46711eb0ba9f3cd74f57b1078b180d87.png','.png'),(54,1,51,'efd8ef6621000b1ef0c35da7216429c7.jpg','.jpg'),(55,2,51,'93e39888f55cfa3b56ea84e7d84206fa.jpg','.jpg'),(56,3,51,'80f970f37b0a8d6ce1e981114ebaeab1.jpg','.jpg');
/*!40000 ALTER TABLE `tbl_lampiran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nilai`
--

DROP TABLE IF EXISTS `tbl_nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_nilai` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=1059 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nilai`
--

LOCK TABLES `tbl_nilai` WRITE;
/*!40000 ALTER TABLE `tbl_nilai` DISABLE KEYS */;
INSERT INTO `tbl_nilai` VALUES (49,'ipa',14,90),(50,'matematika',14,80),(51,'bahasa_inggris',14,90),(136,'ipa',17,70),(137,'matematika',17,79),(138,'bahasa_inggris',17,95),(187,'ipa',NULL,NULL),(188,'matematika',NULL,NULL),(189,'bahasa_inggris',NULL,NULL),(286,'ipa',18,89),(287,'matematika',18,20),(288,'bahasa_inggris',18,90),(289,'bahasa_indonesia',18,20),(290,'ipa',15,80),(291,'matematika',15,80),(292,'bahasa_inggris',15,80),(293,'bahasa_indonesia',15,80),(338,'ipa',19,70),(339,'matematika',19,88),(340,'bahasa_inggris',19,89),(341,'bahasa_indonesia',19,78),(527,'ipa',20,78),(528,'matematika',20,70),(529,'bahasa_inggris',20,88),(530,'bahasa_indonesia',20,88),(599,'ipa',21,77),(600,'matematika',21,79),(601,'bahasa_inggris',21,86),(602,'bahasa_indonesia',21,77),(643,'ipa',23,80),(644,'matematika',23,70),(645,'bahasa_inggris',23,90),(646,'bahasa_indonesia',23,70),(671,'ipa',25,60),(672,'matematika',25,66),(673,'bahasa_inggris',25,66),(674,'bahasa_indonesia',25,60),(687,'ipa',32,70),(688,'matematika',32,70),(689,'bahasa_inggris',32,60),(690,'bahasa_indonesia',32,80),(755,'ipa',33,50),(756,'matematika',33,55),(757,'bahasa_inggris',33,59),(758,'bahasa_indonesia',33,50),(783,'ipa',41,60),(784,'matematika',41,60),(785,'bahasa_inggris',41,77),(786,'bahasa_indonesia',41,70),(811,'ipa',44,70),(812,'matematika',44,80),(813,'bahasa_inggris',44,80),(814,'bahasa_indonesia',44,70),(831,'ipa',45,70),(832,'matematika',45,70),(833,'bahasa_inggris',45,70),(834,'bahasa_indonesia',45,70),(879,'ipa',46,80),(880,'matematika',46,0),(881,'bahasa_inggris',46,0),(882,'bahasa_indonesia',46,80),(927,'ipa',49,90),(928,'matematika',49,90),(929,'bahasa_inggris',49,90),(930,'bahasa_indonesia',49,90),(975,'ipa',50,90),(976,'matematika',50,90),(977,'bahasa_inggris',50,90),(978,'bahasa_indonesia',50,90),(1043,'ipa',51,89),(1044,'matematika',51,78),(1045,'bahasa_inggris',51,77),(1046,'bahasa_indonesia',51,77),(1055,'ipa',22,90),(1056,'matematika',22,80),(1057,'bahasa_inggris',22,70),(1058,'bahasa_indonesia',22,80);
/*!40000 ALTER TABLE `tbl_nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pendaftar`
--

DROP TABLE IF EXISTS `tbl_pendaftar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `information_source` text,
  `cita_cita` text,
  `gol_darah` varchar(5) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `hobby` text,
  `tgl_lahir_ayah` varchar(50) DEFAULT NULL,
  `tgl_lahir_ibu` varchar(50) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(255) DEFAULT NULL,
  `nm_panggilan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pendaftar`
--

LOCK TABLES `tbl_pendaftar` WRITE;
/*!40000 ALTER TABLE `tbl_pendaftar` DISABLE KEYS */;
INSERT INTO `tbl_pendaftar` VALUES (11,0,'REG-20220721-22','2022-07-21','11122','indra','Medan','2022-05-18','L','Islam','5','A. S','Ibu','','','','','Medan City','0852912892','0',22,'process',2,5,120000,55550,'o','IRT',80,'lulus','adadada','Programmer','A',60,166,'adada','2022-07-21','2022-07-21','Medan','Medan','Mei'),(12,0,'REG-20220525-23','2022-05-25','20110249','mei','Medan','2000-05-25','L','Kristen','SD Cinta Rakyat','Muttadin','Hermi','','','','','Binjai','08123412445','0',23,'process',2,5,2000000,500000,'Petani','ART',78,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,0,'0','2022-06-06','222222','indra','0','2022-06-06','-','-','-','-','-','','','','','-','-','-',24,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,0,'REG-20220606-25','2022-06-06','20222022','reh','Medan','2022-06-06','L','Hindu','4','Rea','Ira','','','','','MEDAN','085132165425','0',25,'process',2,4,5000000,50000,'Rea','IRT',63,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,0,'0','2022-06-07','12345678','Budi Hartono','0','2022-06-07','-','-','-','-','-','','','','','-','-','-',26,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,0,'0','2022-06-07','00023893','Lestari','0','2022-06-07','-','-','-','-','-','','','','','-','-','-',27,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,0,'0','2022-06-07','10186897','nur','0','2022-06-07','-','-','-','-','-','','','','','-','-','-',28,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,0,'0','2022-06-08','12081124','nurcahayapermata','0','2022-06-08','-','-','-','-','-','','','','','-','-','-',29,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,0,'0','2022-06-08','12081000','naomigiawa','0','2022-06-08','-','-','-','-','-','','','','','-','-','-',30,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,0,'0','2022-06-08','10189797','josuapandiangan','0','2022-06-08','-','-','-','-','-','','','','','-','-','-',31,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,0,'REG-20220608-32','2022-06-08','12345679','nura','medan','2003-06-08','P','Hindu','SD MARI BERSAMA','RASYA','NIARI','','','','','JLN MUARA TAKUS','081265676877','0',32,'process',2,2,3500000,0,'PNS','IRT',70,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,0,'REG-20220611-33','2022-06-11','12456789','yunita','lampung','2003-06-11','P','Budha','sd kusuma jaya','M.P','L.M','','','','','JLN JLN','091456778887','0',33,'process',1,2,540000,0,'pengusaha','IRT',54,'tidak lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,0,'REG-20220614-41','2022-06-14','12334567','revanda','0','2003-06-14','L','Hindu','0','nn','k.n','','','','','jln hari raya','111','0',41,'process',1,2,1200000,0,'p','irt',67,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,0,'0','2022-06-15','01369524','udinrene','0','2022-06-15','-','-','-','-','-','','','','','-','-','-',42,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,0,'0','2022-06-15','12378907','purapura','0','2022-06-15','-','-','-','-','-','','','','','-','-','-',43,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,0,'REG-20220615-44','2022-06-15','10192345','taniasari','pekanbaru','2001-06-15','P','Hindu','sd damai sukaramai','m.m','s.m','','','','','bahagia','09123456','0',44,'process',1,3,4900000,0,'pengusaha','ibu rumah tangga',75,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,0,'REG-20220617-45','2022-06-17','44444444','kumalasari','jogja','2001-06-17','P','Islam','sd 118','Y.H','K.S','','','','','DAMAI AJA','01234456678','0',45,'process',2,2,480000,0,'pns','IRT',70,'lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,0,'REG-20220617-46','2022-06-17','12345458','Budi Hartono','Batusangkar','1993-06-17','L','Islam','SMA 1 Batusangkar','Budi','Yani','','','','','Tes alamat','082285498005','0',46,'process',2,2,300000,0,'Petani','Rumah Tangga',40,'tidak lulus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,0,'0','2022-07-05','98989705','loret','0','2022-07-05','-','-','-','-','-','','','','','-','-','-',47,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,0,'0','2022-07-07','12234567','pakwasit','0','2022-07-07','-','-','-','-','-','','','','','-','-','-',48,'draft',0,0,0,0,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,0,'REG-20220710-49','2022-07-10','22342234','budi12345','Batusangkar','2009-02-03','L','Kristen','Sumut','Budi','Yani','','','','','Sumatera utara','082285498003','0',49,'process',3,4,30000000,5000000,'Petani','Pedagang',90,'lulus','Sosial media dan keluarga','Programmer','A',166,54,'main game',NULL,NULL,NULL,NULL,NULL),(32,0,'REG-20220711-50','2022-07-11','12342638','unit tes','Medan','2022-07-11','L','Kristen','SAM 1 Medan','Ayah','yati','','','','','-alamat','082285498003','0',50,'process',1,3,30000,3000000,'Petani','Rumah Tangga',90,'lulus','media sosial','Programmer','A',150,50,'Memasak','2021-12-30 00:00:00','2022-12-31 00:00:00','Medan','Medan','Ani'),(33,0,'REG-20220711-51','2022-07-11','14072547','JUNI','JAKARTA','2001-07-11','P','Budha','SDN MARI','K.N','R.K','','','','','JLN','12121212121','0',51,'process',1,2,500000,0,'wirausaha','ibu rumah tangga',80,'lulus','BROSUR','DOKTER','A',150,45,'MEMASAK','1973-08-29 00:00:00','1975-02-22 00:00:00','PADANG','PADANG','UNI');
/*!40000 ALTER TABLE `tbl_pendaftar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pengumuman`
--

DROP TABLE IF EXISTS `tbl_pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` text NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pengumuman`
--

LOCK TABLES `tbl_pengumuman` WRITE;
/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;
INSERT INTO `tbl_pengumuman` VALUES (5,'2019-08-06','Upacar bendera','Pancasila lahir sebagai refleksi dari perjuangan bangsa Indonesia sendiri. Dibuat berdasarkan sejarah perjuangan bangsa Indonesia sejak sebelum masa kerajaan hingga mencapai kemerdekaan. Pancasila merupakan buah pemikiran dan perenungan jiwa yang mendalam mengenai nilai-nilai luhur yang dimiliki oleh bangsa Indonesia. Dalam proses perumusannya, para penggagas Pancasila berpikir ','042.jpg'),(6,'2019-08-06','Hari Besar','petugas untuk ibadah di sekolah','2955877_orig.png'),(7,'2019-08-07','petugas upacara bendera','petugas upacara bendera ','lxX7j.jpg'),(8,'2019-08-09','kegiatan sekolah','pengumuman perlombaan olimpiade ','2020-11-17_(52).png');
/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_setting`
--

DROP TABLE IF EXISTS `tbl_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_setting` (
  `id_setting` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_setting` varchar(200) DEFAULT NULL,
  `setting` text,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_setting`
--

LOCK TABLES `tbl_setting` WRITE;
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
INSERT INTO `tbl_setting` VALUES (1,'pengumuman','2022-05-25 15:00:45'),(2,'kuata','100'),(3,'total_lulus','60'),(4,'nilai_minimal','60');
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(30) NOT NULL,
  `foto_profil` text,
  `verifikasi_email` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (4,'-','Admin','admin','c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec','admin',NULL,NULL),(8,'1550010081','1550010081','1550010081','147cc12f888bae4627202b813385f26f9811a0610ac74d29a501eb17a25f743480589c77b38584554088e82bd11a4965e1a084f52b2bea01ef8ab34b7f87859e','siswa',NULL,'1'),(9,'1550010081','ani','ani','0118af338e587b46c64cc79782f494ea03b673872490c260590bd2b1c2976c533c3d771cc1caf30456dc70a21dc4662177f45e7e3ade0b4e078436344e7ad1ae','siswa',NULL,'0'),(10,'1550010092','Mahmud','1550010092','18dcee3bc16cfe25702a6e80aab25e26905e3d7ac4a67d5e2641a10dcfff4128c1e5dcca5390bcb46c8db12b205fdeb39c17ba557a6885e809245cc6531e0910','siswa',NULL,NULL),(11,'1550010020','Lala','1550010020','2b7b25d1d252cdcaec29495e37d29ce26fcfb58213a610740a8e859aa56c0d9efa5a1e0e99f2cc04d3f0456869e442d6d890d53fff8e62bd8a5a84c2df809efe','siswa',NULL,NULL),(14,'1550010056','tata','1550010056','11a3b9ba3cc558f1d05f056dbd2567a43031c857dd3325f5b9179d21ee8ed4f9a7d0441d904c7a51501da4132963eeb7f8f359012fa028ca6bdbbf4deda92702','siswa',NULL,NULL),(15,'20110945','irma','irma','6b7cb98bda6a8207277eaf54cea6e8aac0d71c8420bba2b54201ec8b01ad3eada8825751ac68ed10aea1b174b38bd374b10b53caac341604dcfb613358a0d137','siswa',NULL,'1'),(16,'1550010034','Budi hartini','1550010034','08a3f253a4d4113c055b8caacf5f8aaa1187d4be9c0616d7081cf19cc1aa9fc2dc70f33eb215b5702e5077e46b8464d25ada09fb31a39170c6ad520c570fb105','siswa',NULL,NULL),(17,'2011202','adeva','adevakirana','68496107728fc31e74a89eb5b706e1d27e767b2db1170f6fcb44998d421b56888317a972bf87347675474c67e63998c3c4bf0bbf065afac73648a4692d44e761','siswa',NULL,NULL),(18,'1550010019','TIA MHARANI','1550010019','3a8ed78734c030f8fdb620d39e660dec9dde584530df7eb0b2e154ec258bfa23ed89204c3ea38cd0899d6dc9156e8804490c9372ccd01498c219fefe78507002','siswa',NULL,NULL),(19,'08091004','ayudwitanti','ayudwitanti','b7a81606f8e78336178d6c7e3474b590976c7428606d6333fe53b1425ad21f1e0d223ab661fbfea6332da7376720d8596ade1df61adf64d939ac7ff9d4e4a4e4','siswa',NULL,NULL),(20,'111111111123','rasyapanjaitan','rasyapanjaitan','12e327b0692270ab067ea630fceaf757f173fa2041173fd8150759fc4fe5c4f1d216f0a4f25e10faf4274f3c9d5a5187e0aad7a784da078f3135cc08e8ab2e65','siswa',NULL,NULL),(21,'18081234','murniati','murni','399184a24327963dd4201b874f0472560ac53d7651f3b851e6d058b0337237e2c6ae60f4317b85bf424425ee7710f4d5c810b596058b566329383b9aae9905c4','siswa',NULL,NULL),(22,'11122','indra','indra','1c8dd7a2bd923cc22a2aa84631d9ad51a31413a13b4407cec629226cfe631e9e557df6320069a25a0f93388b7dfb88bc0fe537c6fdb90ae746726f18608a8448','siswa',NULL,NULL),(23,'20110249','mei','mei','5dd1455ddc6a5d46a15e562f63ca88767e3792232d6d3a8be9da2011f1da266709beba7163fb2cf6a0b0f3bc0b084bca33e15929b216bce079b0cbb7bff78d52','siswa',NULL,NULL),(24,'222222','indra','indra         3','cb13c023494c8c2e949bff1a299b23474e797bacbbeaa851a7514b0b5bd01379f5ad6c6a7812ee520a911b30e7001555b99aa2e9bb00849147c758128fc65741','siswa',NULL,NULL),(25,'20222022','reh','rehul','3ae6af77559d18e019feb617aec6e3d52047f26dcdf35d7824f83901c74f3eebd5f98b88c71755b88f5284e1828271d138f75121618bf7f07c5f5452dc5ccac7','siswa',NULL,NULL),(26,'12345678','Budi Hartono','lutvi1500@gmail.com','4b45ca58f624f1120f152a927695a072e111855d97c78199ed63d07e7ef3dc9e02622a241f24d13d5dc49781e73546746672bc67452a09b01fdc37809c0453a6','siswa',NULL,'0'),(27,'00023893','Lestari','Lestari98@gmail.com','22f14bce26eec6a7b08b5ae7bb9ca3732b6860beef6147c9b62c78ab2795d667231ff102e28ebb91c25fd7153dd531245a6c06678bd0c9c7759631e7389adbfb','siswa',NULL,'0'),(28,'10186897','nur','nuraja99@gmail.com','cc6ef7ba465e251f8e4934280859fdf4f5d806ba393c2cacab9da18d0a5cf22f00038cac159bf75576f9b683065cd5ca30a1d2995348838b790c68e21675699e','siswa',NULL,'0'),(29,'12081124','nurcahayapermata','nurcahaya','61f9a7aa188889f10b94cb4bbff07809dc822a76d352c122b484cd05c409cbf59c610dd888ec1ee347a7a8920afa3e076b333ba5d8824e33418ef9a209dae6dc','siswa',NULL,'0'),(30,'12081000','naomigiawa','naomigiawa','08d3b57ae74a3bc8d924dba55fa01fe9fc4457a20e679621773f76812a807c36cf551d8f50a74532ea01e5a4033202748666bccd281705e6aa02d1a3102ac44b','siswa',NULL,'0'),(31,'10189797','josuapandiangan','josuapandiangan','8fedb124321ed31a35d69d2c6941153abd6a58509bf4253cf7fda50dfd8333fb64dfead1d0819a2cddae3115d8dae9f995ca6998df463a9ddddcd3b463fe10d0','siswa',NULL,'0'),(32,'12345679','nura','nuraisyah','ad334e1d81b7206bcc63dadf054e906d693c677fffc1209ba65f173e4bcf89c04dd09bfa4a459cc26d69cd42856dcb5fd864281c1e8005fa75c8243372c185fe','siswa',NULL,'0'),(33,'12456789','yunita','yunita','0ddbe93c35bbe5916411f421ecd63ea743a5ed7e570eadeb1e246a61f958306b80777dbb61c5e4c67056cb201be9720bdf21da7d20c4990adad9e9b0afbf74b8','siswa',NULL,'1'),(34,'','admin2','admin2','admin2','admin',NULL,NULL),(35,'','nando','nando','nando','admin3',NULL,NULL),(36,'','rando','rando','rando','admin4',NULL,NULL),(37,'','Tes','Tes','tes','admin',NULL,NULL),(38,'','yuhu','yuhu','yuhu','admin',NULL,NULL),(39,'','budi','budi','budi','admin',NULL,NULL),(40,'','indra','indra','1c8dd7a2bd923cc22a2aa84631d9ad51a31413a13b4407cec629226cfe631e9e557df6320069a25a0f93388b7dfb88bc0fe537c6fdb90ae746726f18608a8448','admin',NULL,NULL),(41,'12334567','revanda','revan','e4336544bc72f5fecfec67559975d7a87ea0309dc5005bae861e03e78c47ab4f60de232fc4318959d56efc8175b960a48265a1dccf785946fc68c9b00c10ec94','siswa',NULL,'1'),(42,'01369524','udinrene','udinrene','4773dc9afd29f18dd2cf42aeb051db808d20c7edb9561736ae91bcbca588593fce8ab3b086dcb6ece0434bb1a6ff570dd13ae692320b92c48c7c8dbcffb07fe2','siswa',NULL,'1'),(43,'12378907','purapura','purapura','70d3fdeb0627596c6da6bba60abc2c5b1c566591034030941a54df12f07f5ac4b221d7cf9ac1c3dbf68be0162ede36e09978d5fa7e80824160fb00f72685c35f','siswa',NULL,'1'),(44,'10192345','taniasari','taniasari','8d2ca541984e3782889fa6ed95a96d3dba68a8c13304decfa836cea333ae14a48dd8379eec7b333ccbaeae7b26cb069e0a8e0322ab1f8f173b7d2906b9dbfd3c','siswa',NULL,'1'),(45,'44444444','kumalasari','kumalasari','dffdf3d719d50e469df642fd7f903290feede5fb1031eb148f1ae5537305a6b99c0a6ecd9144e14a541dd36a565c40075e1e5e4695dcc3f0c4aad3c2b29da26b','siswa','87825a4e452fcc79e8e1f5d2ffe61190.jpg','1'),(46,'12345458','Budi Hartono','budi123','4dea3a8e63f43542fe75f17e6c5977f50e39398ac10d6293de1460b457305d84512560611c240d48bab4a903cbdde7593baf4b5c9dbe77a2aab17c1e9b08597a','siswa','80972fc9d624e52ac301dd79f8bdde6a.png','1'),(47,'98989705','loret','loret','bfcbd6544bfcb51100fd5ab07de0f2e5eefbcdb91037e8302470b4003a760148fef1a8017d1949d2038daea561042c3c126858d9d13e8c3869f3362a401ea232','siswa',NULL,'1'),(48,'12234567','pakwasit','pakwasit','f788fdfd1357cca6f2e5d0ffd5ab353f188d3d08f5c6fce6580566cc19f85296f3e7a2872be0fb91bb80f9b68dbe1c510a35c2b54a93f150d4d7dab7fe0436e7','siswa',NULL,'1'),(49,'22342234','budi12345','budi12345','a6327ea9af5d3ca9881ddf1778a36a89668dd6b22352ef28eefd92b3cae239f2c5559a2c254237c3971fe426c2c5095ad33e01ec7ef4e8f2549f592e62252b03','siswa','ed1e8aee24d8f916c8758c8f6b7a588a.png','1'),(50,'12342638','unit tes','unittes123','2a2e3cace5893e9b54d60c0f48020afffe75cf2c9c0151cf1441079f30eaa5f1290e9c9f9582bd5e268541bdbc51416cc0bbb4dd421bc7f39a329f9c02fafa30','siswa','7e8bcc08539b677a32fc0a03a3cb2cb7.png','1'),(51,'14072547','JUNI','JUNITI','a95146013116b487681361ab7052f8c3ea4a5461ba71abb4426324d5b80231f9d49035f3c96f689e4adf2d8c4175a1abd9012f225c3a0d7323918da1d88e2991','siswa','efd8ef6621000b1ef0c35da7216429c7.jpg','1');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-21 22:56:31
