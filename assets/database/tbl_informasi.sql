/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `tbl_informasi`;
CREATE TABLE `tbl_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `last_update` datetime DEFAULT NULL,
  KEY `tbl_informasi_id_informasi_idx` (`id_informasi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_informasi` (`id_informasi`, `judul`, `isi`, `last_update`) VALUES
(1, 'visi_misi', NULL, NULL);
INSERT INTO `tbl_informasi` (`id_informasi`, `judul`, `isi`, `last_update`) VALUES
(2, 'ruangan_kelas', NULL, NULL);
INSERT INTO `tbl_informasi` (`id_informasi`, `judul`, `isi`, `last_update`) VALUES
(3, 'pengumuman', NULL, NULL);
INSERT INTO `tbl_informasi` (`id_informasi`, `judul`, `isi`, `last_update`) VALUES
(4, 'kegiatan', NULL, NULL),
(5, 'syarat', NULL, NULL),
(6, 'biaya', '<p>tess</p>\n', NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;