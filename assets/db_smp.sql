-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2022 pada 20.21
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_smp`
--
CREATE DATABASE IF NOT EXISTS `db_smp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_smp`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(56) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `level` varchar(56) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(6, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(45) NOT NULL,
  `foto_galeri` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_foto`, `nama_foto`, `foto_galeri`) VALUES
(2, 'Labor', '2955877_orig.png'),
(4, 'babababa', '042.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftar`
--

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
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftaran`, `id_register`, `no_pendaftaran`, `tgl_daftar`, `NISN`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `asal_sekolah`, `nm_ayah`, `nm_ibu`, `pekerjaan`, `bahasa_indonesia`, `ipa`, `matematika`, `bahasa_inggris`, `pas_foto`, `foto_skhu`, `alamat`, `no_tlp`, `konfirmasi`) VALUES
(1, 4, 'NP-20190813023657', '2019-08-13', '1510001', 'Retno setianto', 'Medan', '1996-03-03', 'Laki-Laki', 'Islam', 'SD Negeri 1', 'alif', 'ani', 'CEO', '89', '90', '90', '90', 'index.jpg', 'ktp.pdf', 'Medan', '08262347343', 'LULUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
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
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`) VALUES
(5, '2019-08-06', 'Upacar bendera', 'Pancasila lahir sebagai refleksi dari perjuangan bangsa Indonesia sendiri. Dibuat berdasarkan sejarah perjuangan bangsa Indonesia sejak sebelum masa kerajaan hingga mencapai kemerdekaan. Pancasila merupakan buah pemikiran dan perenungan jiwa yang mendalam mengenai nilai-nilai luhur yang dimiliki oleh bangsa Indonesia. Dalam proses perumusannya, para penggagas Pancasila berpikir ', '042.jpg'),
(6, '2019-08-06', 'Hari Besar', 'Sebelum agama-agama besar masuk ke Indonesia, masyarakat Indonesia telah mengenala 2 macam kepercayaan dalam menyembah Tuhan Yang Maha Esa, yaitu melalui ajaran animism dan dinamisme. Seiring berjalannya waktu, ajaran Hindu dan Buddha masuk ke Indonesia melalui jalur perdagangan. Dari sana, timbul rasa saling menghormati dan toleransi antar umat beragama. Hal ini dapat dilihat dari keberadaan Candi Borobudur sebagai wujud keberadaan masyarakat Buddha serta Candi Prambanan milik masyarakat Hindu. Kehidupan masyarakatnya pun penuh rasa kekeluargaan, gotong royong dan musyawarah. Nilai-nilai yang Pancasila yang terdapat saat itu ialah nilai religius, nilai toleransi beragama, kekeluargaan dan musyawarah', '2955877_orig.png'),
(7, '2019-08-07', 'Kabar Sekolah', 'Istilah Pancasila pertama kali ditemukan dalam kitab Sutasoma karya Mpu Tantular pada abad ke 14, yang merujuk pada 5 perintah kesusuilaan (Pancasila Krama), yaitu larangan Melakukan Kekerasa, Mencuri, Dengki, Berbohong dan Mabuk Akibat Minuman Keras. Kata Bhineka Tunggal Ika bermakna walaupun berbeda, satu jua adanya. Kata-kata ini telah lama dikenal masyarakat Indonesia, ini menunjukkan bahwa masyarakat Indonesia telah hidup rukun dan saling menghormati setiap perbedaan sejak dahulu.', 'lxX7j.jpg'),
(8, '2019-08-09', 'Kabar Sekolah', 'Nilai luhur lainnya ialah sumpah Maha Patih Gajah Mada dalam Sumpah Palapa, yaitu Tan amukti palapa during purna nusantara (tak akan makan buah palapa sebeluam memepersatukan nusantara) Nilai yang lain yaitu Mitreka Satata, yang artinya persahabatan antar agama. Mpu Prapanca dalam kitabnya Negarakertagama menuliskan susunan pemerintahan Majapahit atas dasar musyawarah serta pengakuan mengenai harkat dan martabat manusia. Jadinya, dapat disimpulkan bahwa selama masa kejayaan nasional, nilai-nilai luhur Pancasila sudah ada di Indonesia, antara lain nilai persatuan, pengakuan harkat dan martabat manusia, keasusilaan, serta nilai-nilai religius.', 'IMG_6641.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
  `id_register` int(11) NOT NULL AUTO_INCREMENT,
  `NISN` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_register`
--

INSERT INTO `tbl_register` (`id_register`, `NISN`, `nama`, `username`, `password`) VALUES
(4, '1510001', 'Retno setianto', 'anto', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
