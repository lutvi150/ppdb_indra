-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 06:05 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_smp`
--
CREATE DATABASE IF NOT EXISTS `db_smp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_smp`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(45) NOT NULL,
  `foto_galeri` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_foto`, `nama_foto`, `foto_galeri`) VALUES
(2, 'Labor', '2955877_orig.png'),
(4, 'babababa', '042.jpg'),
(5, '', '67fa68a2b805879824d67789c4f3afd5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lampiran`
--

CREATE TABLE IF NOT EXISTS `tbl_lampiran` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_attachment` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `lampiran` text,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_lampiran`
--

INSERT INTO `tbl_lampiran` (`id`, `id_attachment`, `id_user`, `lampiran`, `type`) VALUES
(6, 1, 17, '2a41ae3902cf8af6d02e6a32d3c2a519.jpg', '.jpg'),
(7, 2, 17, 'c62eecf1b6f1bdd09372409b765511e5.jpg', '.jpg'),
(8, 3, 17, 'cb5bd5b7125532427a611399c4208443.png', '.png'),
(9, 1, 18, '3bff4e5ef24967d20e813ac8170fc2f6.png', '.png'),
(10, 2, 18, '971b0a711d57f23cab24d931f001e02a.pdf', '.pdf'),
(11, 3, 18, '532f0fc0f91fd52aa0b6fd096a3bf9bd.pdf', '.pdf'),
(12, 1, 19, '2cd1549ad48a1ca1389a1f809e2670a4.jpg', '.jpg'),
(13, 2, 19, '3b3af3f707fd64fdeb461c33ef5c0f72.jpg', '.jpg'),
(14, 3, 19, 'cde09ba533a35c57765b7b3511c4c636.jpg', '.jpg'),
(15, 1, 20, '08b6bc7e86b96c68558dd87ba5b5a597.jpg', '.jpg'),
(16, 2, 20, '8822e51b7dfa8a7b88962f41259e7cd4.jpg', '.jpg'),
(17, 3, 20, 'd4340e5687a7c05b453306b8b7ffa2bf.png', '.png'),
(21, 1, 22, '558d37c6def1f9c4cc0007d4f81c430f.png', '.png'),
(22, 2, 22, '8bd48e7066206c9225601040028b8939.png', '.png'),
(23, 3, 22, '5d6c2ad8cad885deccd01c23f5bb548b.png', '.png'),
(24, 1, 23, '13e827ee805570b7a5abd8627456d6d4.png', '.png'),
(25, 2, 23, 'a602571926341412f5915749c5ae6f22.png', '.png'),
(26, 3, 23, '9420be8c75318c3fea0f068333910395.png', '.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_nilai` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=647 ;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `jenis_nilai`, `id_user`, `nilai`) VALUES
(49, 'ipa', 14, 90),
(50, 'matematika', 14, 80),
(51, 'bahasa_inggris', 14, 90),
(136, 'ipa', 17, 70),
(137, 'matematika', 17, 79),
(138, 'bahasa_inggris', 17, 95),
(187, 'ipa', NULL, NULL),
(188, 'matematika', NULL, NULL),
(189, 'bahasa_inggris', NULL, NULL),
(286, 'ipa', 18, 89),
(287, 'matematika', 18, 20),
(288, 'bahasa_inggris', 18, 90),
(289, 'bahasa_indonesia', 18, 20),
(290, 'ipa', 15, 80),
(291, 'matematika', 15, 80),
(292, 'bahasa_inggris', 15, 80),
(293, 'bahasa_indonesia', 15, 80),
(338, 'ipa', 19, 70),
(339, 'matematika', 19, 88),
(340, 'bahasa_inggris', 19, 89),
(341, 'bahasa_indonesia', 19, 78),
(527, 'ipa', 20, 78),
(528, 'matematika', 20, 70),
(529, 'bahasa_inggris', 20, 88),
(530, 'bahasa_indonesia', 20, 88),
(599, 'ipa', 21, 77),
(600, 'matematika', 21, 79),
(601, 'bahasa_inggris', 21, 86),
(602, 'bahasa_indonesia', 21, 77),
(627, 'ipa', 22, 90),
(628, 'matematika', 22, 80),
(629, 'bahasa_inggris', 22, 70),
(630, 'bahasa_indonesia', 22, 90),
(643, 'ipa', 23, 80),
(644, 'matematika', 23, 70),
(645, 'bahasa_inggris', 23, 90),
(646, 'bahasa_indonesia', 23, 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftar` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftaran`, `id_register`, `no_pendaftaran`, `tgl_daftar`, `nisn`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `asal_sekolah`, `nm_ayah`, `nm_ibu`, `pekerjaan`, `bahasa_indonesia`, `pas_foto`, `foto_skhu`, `alamat`, `no_tlp`, `konfirmasi`, `id_user`, `status`, `anak_ke`, `jumlah_saudara`, `penghasilan_ayah`, `penghasilan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nilai_rata_rata`, `kelulusan`) VALUES
(11, 0, 'REG-20220521-22', '2022-05-21', '11122', 'indra', 'Medan', '2022-05-18', 'L', 'Islam', '5', 'A. S', 'Ibu', '', '', '', '', 'Medan City', '0852912892', '0', 22, 'process', 2, 5, 120000, 55550, 'A. S', 'IRT', 83, 'lulus'),
(12, 0, 'REG-20220525-23', '2022-05-25', '20110249', 'mei', 'Medan', '2000-05-25', 'L', 'Kristen', 'SD Cinta Rakyat', 'Muttadin', 'Hermi', '', '', '', '', 'Binjai', '08123412445', '0', 23, 'process', 2, 5, 2000000, 500000, 'Petani', 'ART', 78, 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` varchar(30) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` text NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`) VALUES
(5, '2019-08-06', 'Upacar bendera', 'Pancasila lahir sebagai refleksi dari perjuangan bangsa Indonesia sendiri. Dibuat berdasarkan sejarah perjuangan bangsa Indonesia sejak sebelum masa kerajaan hingga mencapai kemerdekaan. Pancasila merupakan buah pemikiran dan perenungan jiwa yang mendalam mengenai nilai-nilai luhur yang dimiliki oleh bangsa Indonesia. Dalam proses perumusannya, para penggagas Pancasila berpikir ', '042.jpg'),
(6, '2019-08-06', 'Hari Besar', 'Sebelum agama-agama besar masuk ke Indonesia, masyarakat Indonesia telah mengenala 2 macam kepercayaan dalam menyembah Tuhan Yang Maha Esa, yaitu melalui ajaran animism dan dinamisme. Seiring berjalannya waktu, ajaran Hindu dan Buddha masuk ke Indonesia melalui jalur perdagangan. Dari sana, timbul rasa saling menghormati dan toleransi antar umat beragama. Hal ini dapat dilihat dari keberadaan Candi Borobudur sebagai wujud keberadaan masyarakat Buddha serta Candi Prambanan milik masyarakat Hindu. Kehidupan masyarakatnya pun penuh rasa kekeluargaan, gotong royong dan musyawarah. Nilai-nilai yang Pancasila yang terdapat saat itu ialah nilai religius, nilai toleransi beragama, kekeluargaan dan musyawarah', '2955877_orig.png'),
(7, '2019-08-07', 'Kabar Sekolah', 'Istilah Pancasila pertama kali ditemukan dalam kitab Sutasoma karya Mpu Tantular pada abad ke 14, yang merujuk pada 5 perintah kesusuilaan (Pancasila Krama), yaitu larangan Melakukan Kekerasa, Mencuri, Dengki, Berbohong dan Mabuk Akibat Minuman Keras. Kata Bhineka Tunggal Ika bermakna walaupun berbeda, satu jua adanya. Kata-kata ini telah lama dikenal masyarakat Indonesia, ini menunjukkan bahwa masyarakat Indonesia telah hidup rukun dan saling menghormati setiap perbedaan sejak dahulu.', 'lxX7j.jpg'),
(8, '2019-08-09', 'Kabar Sekolah1', 'Nilai luhur lainnya ialah sumpah Maha Patih Gajah Mada dalam Sumpah Palapa, yaitu Tan amukti palapa during purna nusantara (tak akan makan buah palapa sebeluam memepersatukan nusantara) Nilai yang lain yaitu Mitreka Satata, yang artinya persahabatan antar agama. Mpu Prapanca dalam kitabnya Negarakertagama menuliskan susunan pemerintahan Majapahit atas dasar musyawarah serta pengakuan mengenai harkat dan martabat manusia. Jadinya, dapat disimpulkan bahwa selama masa kejayaan nasional, nilai-nilai luhur Pancasila sudah ada di Indonesia, antara lain nilai persatuan, pengakuan harkat dan martabat manusia, keasusilaan, serta nilai-nilai religius.', 'Screen_Shot_2022-04-27_at_15_12_27.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id_setting` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_setting` varchar(200) DEFAULT NULL,
  `setting` text,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `jenis_setting`, `setting`) VALUES
(1, 'pengumuman', '2022-05-25 10:51:45'),
(2, 'kuata', '100'),
(3, 'total_lulus', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_register`, `nisn`, `nama`, `username`, `password`, `role`) VALUES
(4, '-', 'Admin', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin'),
(8, '1550010081', '1550010081', '1550010081', '147cc12f888bae4627202b813385f26f9811a0610ac74d29a501eb17a25f743480589c77b38584554088e82bd11a4965e1a084f52b2bea01ef8ab34b7f87859e', 'siswa'),
(9, '1550010081', 'ani', 'ani', '0118af338e587b46c64cc79782f494ea03b673872490c260590bd2b1c2976c533c3d771cc1caf30456dc70a21dc4662177f45e7e3ade0b4e078436344e7ad1ae', 'siswa'),
(10, '1550010092', 'Mahmud', '1550010092', '18dcee3bc16cfe25702a6e80aab25e26905e3d7ac4a67d5e2641a10dcfff4128c1e5dcca5390bcb46c8db12b205fdeb39c17ba557a6885e809245cc6531e0910', 'siswa'),
(11, '1550010020', 'Lala', '1550010020', '2b7b25d1d252cdcaec29495e37d29ce26fcfb58213a610740a8e859aa56c0d9efa5a1e0e99f2cc04d3f0456869e442d6d890d53fff8e62bd8a5a84c2df809efe', 'siswa'),
(14, '1550010056', 'tata', '1550010056', '11a3b9ba3cc558f1d05f056dbd2567a43031c857dd3325f5b9179d21ee8ed4f9a7d0441d904c7a51501da4132963eeb7f8f359012fa028ca6bdbbf4deda92702', 'siswa'),
(15, '20110945', 'irma', 'irma', '6b7cb98bda6a8207277eaf54cea6e8aac0d71c8420bba2b54201ec8b01ad3eada8825751ac68ed10aea1b174b38bd374b10b53caac341604dcfb613358a0d137', 'siswa'),
(16, '1550010034', 'Budi hartini', '1550010034', '08a3f253a4d4113c055b8caacf5f8aaa1187d4be9c0616d7081cf19cc1aa9fc2dc70f33eb215b5702e5077e46b8464d25ada09fb31a39170c6ad520c570fb105', 'siswa'),
(17, '2011202', 'adeva', 'adevakirana', '68496107728fc31e74a89eb5b706e1d27e767b2db1170f6fcb44998d421b56888317a972bf87347675474c67e63998c3c4bf0bbf065afac73648a4692d44e761', 'siswa'),
(18, '1550010019', 'TIA MHARANI', '1550010019', '3a8ed78734c030f8fdb620d39e660dec9dde584530df7eb0b2e154ec258bfa23ed89204c3ea38cd0899d6dc9156e8804490c9372ccd01498c219fefe78507002', 'siswa'),
(19, '08091004', 'ayudwitanti', 'ayudwitanti', 'b7a81606f8e78336178d6c7e3474b590976c7428606d6333fe53b1425ad21f1e0d223ab661fbfea6332da7376720d8596ade1df61adf64d939ac7ff9d4e4a4e4', 'siswa'),
(20, '111111111123', 'rasyapanjaitan', 'rasyapanjaitan', '12e327b0692270ab067ea630fceaf757f173fa2041173fd8150759fc4fe5c4f1d216f0a4f25e10faf4274f3c9d5a5187e0aad7a784da078f3135cc08e8ab2e65', 'siswa'),
(21, '18081234', 'murniati', 'murni', '399184a24327963dd4201b874f0472560ac53d7651f3b851e6d058b0337237e2c6ae60f4317b85bf424425ee7710f4d5c810b596058b566329383b9aae9905c4', 'siswa'),
(22, '11122', 'indra', 'indra', '1c8dd7a2bd923cc22a2aa84631d9ad51a31413a13b4407cec629226cfe631e9e557df6320069a25a0f93388b7dfb88bc0fe537c6fdb90ae746726f18608a8448', 'siswa'),
(23, '20110249', 'mei', 'mei', '5dd1455ddc6a5d46a15e562f63ca88767e3792232d6d3a8be9da2011f1da266709beba7163fb2cf6a0b0f3bc0b084bca33e15929b216bce079b0cbb7bff78d52', 'siswa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
