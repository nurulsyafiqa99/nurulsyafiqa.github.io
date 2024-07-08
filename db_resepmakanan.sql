# Host: localhost  (Version: 5.6.20)
# Date: 2015-12-10 14:57:42
# Generator: MySQL-Front 5.2  (Build 5.66)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

DROP DATABASE IF EXISTS `db_resepmakanan`;
CREATE DATABASE `db_resepmakanan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_resepmakanan`;

#
# Source for table "category"
#

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

#
# Data for table "category"
#

INSERT INTO `category` VALUES (25,'Makanan Timur Tengah'),(26,'Makanan Asia'),(27,'Minuman');

#
# Source for table "guest_book"
#

DROP TABLE IF EXISTS `guest_book`;
CREATE TABLE `guest_book` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

#
# Data for table "guest_book"
#

INSERT INTO `guest_book` VALUES (13,'Test Komentar','herysepty','2015-11-16'),(16,'Test Komentar','Anonymous','2015-11-20');

#
# Source for table "recipe"
#

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE `recipe` (
  `Id` varchar(11) NOT NULL DEFAULT '',
  `title_resep` varchar(255) DEFAULT NULL,
  `dir_image` varchar(100) DEFAULT NULL,
  `descript` text,
  `date` date DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `rating` int(3) DEFAULT NULL,
  `id_user` varchar(25) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "recipe"
#

INSERT INTO `recipe` VALUES ('R0001','Bakso','storage/img/Baksoimg4.jpg','Makanan has indoesia','2015-11-15','1',1,'herysepty','Makanan Asia'),('R0002','Puyunghai','storage/img/PuyunghaiBaksoimg4.jpg','Makanan favorit gue','2015-11-14','1',1,'herysepty','Makanan Asia'),('R0003','Mie Goreng','storage/img/Mie GorengBaksoimg4.jpg','Makanan Asli Indoesia','2015-11-17','2',1,'admin','Makanan Asia'),('R0004','Tuna','storage/img/TunaBaksoimg4.jpg','Sea Food','2015-11-17','0',1,'admin','Makanan Asia'),('R0005','Soft Drink','storage/img/Soft Drinkimg4.jpg','Minuman Penghilang dahaga','2015-11-17','1',1,'herysepty','Minuman'),('R0006','Makanan China','storage/img/Makanan ChinaGTA V Selfie Part2.png','ewewe','2015-12-10','1',1,'14','Minuman');

#
# Source for table "resep_bahan"
#

DROP TABLE IF EXISTS `resep_bahan`;
CREATE TABLE `resep_bahan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `bahan` varchar(100) DEFAULT NULL,
  `id_recipe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

#
# Data for table "resep_bahan"
#

INSERT INTO `resep_bahan` VALUES (50,'Bakso','R0001'),(51,'Telur','R0002'),(52,'Ice','R0005'),(53,'Bakso','R0002'),(54,'Apa aja boleh','R0006');

#
# Source for table "tb_cara_buat"
#

DROP TABLE IF EXISTS `tb_cara_buat`;
CREATE TABLE `tb_cara_buat` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cara_buat` varchar(255) DEFAULT NULL,
  `id_recipe` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

#
# Data for table "tb_cara_buat"
#

INSERT INTO `tb_cara_buat` VALUES (27,'Rebus Bakso','R0001'),(28,'Campur Bahan Bahan','R0002'),(29,'dkajsdka','R0006');

#
# Source for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(25) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (14,'Hery Septyadi','herysepty','heryspty@gmail.co.id','12345',1),(15,'Hery Septyadi','admin','heryspty@gmail.co.id','123',0);

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
