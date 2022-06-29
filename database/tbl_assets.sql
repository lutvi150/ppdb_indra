-- -------------------------------------------------------------
-- TablePlus 4.6.8(424)
--
-- https://tableplus.com/
--
-- Database: db_smp
-- Generation Time: 2022-06-29 12:56:50.3930
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `tbl_assets` (
  `id_assets` int(11) NOT NULL AUTO_INCREMENT,
  `assets` varchar(255) DEFAULT NULL,
  `link` text,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_assets`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `tbl_assets` (`id_assets`, `assets`, `link`, `type`) VALUES
(2, 'e63fa135766a4ff696a7380023d67172.png', 'http://localhost:8888/ppdb_indra/uploads/e63fa135766a4ff696a7380023d67172.png', '.png'),
(3, '98bd4946248eb1784b960b4669b7103d.png', 'http://localhost:8888/ppdb_indra/uploads/98bd4946248eb1784b960b4669b7103d.png', '.png'),
(4, 'af0521f82bcb996b687e0e4f98f97566.png', 'http://localhost:8888/ppdb_indra/uploads/af0521f82bcb996b687e0e4f98f97566.png', '.png');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;