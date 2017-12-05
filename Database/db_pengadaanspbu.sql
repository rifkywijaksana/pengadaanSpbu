/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.26-MariaDB : Database - db_pengadaanspbu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pengadaanspbu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pengadaanspbu`;

/*Table structure for table `t_dexlitetrx` */

DROP TABLE IF EXISTS `t_dexlitetrx`;

CREATE TABLE `t_dexlitetrx` (
  `idDexlite` int(11) NOT NULL AUTO_INCREMENT,
  `A1Awal` float NOT NULL DEFAULT '0',
  `A1Akhir` float NOT NULL DEFAULT '0',
  `A2Awal` float NOT NULL DEFAULT '0',
  `A2Akhir` float NOT NULL DEFAULT '0',
  `A3Awal` float NOT NULL DEFAULT '0',
  `A3Akhir` float NOT NULL DEFAULT '0',
  `A4Awal` float NOT NULL DEFAULT '0',
  `A4Akhir` float NOT NULL DEFAULT '0',
  `A1Tera` float NOT NULL DEFAULT '0',
  `A2Tera` float NOT NULL DEFAULT '0',
  `A3Tera` float NOT NULL DEFAULT '0',
  `A4Tera` float NOT NULL DEFAULT '0',
  `stokAwal` float NOT NULL DEFAULT '0',
  `bbmMasuk` float NOT NULL DEFAULT '0',
  `sisa` float DEFAULT '0',
  `stokAkhir` float NOT NULL DEFAULT '0',
  `shift` enum('1','2','3') DEFAULT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idDexlite`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `t_nozzle` */

DROP TABLE IF EXISTS `t_nozzle`;

CREATE TABLE `t_nozzle` (
  `idNozzle` varchar(2) NOT NULL,
  `idProduk` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idNozzle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_pertamaxtrx` */

DROP TABLE IF EXISTS `t_pertamaxtrx`;

CREATE TABLE `t_pertamaxtrx` (
  `idPertmax` int(11) NOT NULL AUTO_INCREMENT,
  `C1Awal` float NOT NULL DEFAULT '0',
  `C1Akhir` float NOT NULL DEFAULT '0',
  `C2Awal` float NOT NULL DEFAULT '0',
  `C2Akhir` float NOT NULL DEFAULT '0',
  `C1Tera` float NOT NULL DEFAULT '0',
  `C2Tera` float NOT NULL DEFAULT '0',
  `stokAwal` float NOT NULL DEFAULT '0',
  `bbmMasuk` float NOT NULL DEFAULT '0',
  `sisa` float DEFAULT '0',
  `stokAkhir` float NOT NULL DEFAULT '0',
  `shift` enum('1','2','3') DEFAULT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idPertmax`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_petralitetrx` */

DROP TABLE IF EXISTS `t_petralitetrx`;

CREATE TABLE `t_petralitetrx` (
  `idPetralite` int(11) NOT NULL AUTO_INCREMENT,
  `C3Awal` float NOT NULL DEFAULT '0',
  `C3Akhir` float NOT NULL DEFAULT '0',
  `C4Awal` float NOT NULL DEFAULT '0',
  `C4Akhir` float NOT NULL DEFAULT '0',
  `C3Tera` float NOT NULL DEFAULT '0',
  `C4Tera` float NOT NULL DEFAULT '0',
  `stokAwal` float NOT NULL DEFAULT '0',
  `bbmMasuk` float NOT NULL DEFAULT '0',
  `sisa` float DEFAULT '0',
  `stokAkhir` float NOT NULL DEFAULT '0',
  `shift` enum('1','2','3') DEFAULT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idPetralite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_premiumtrx` */

DROP TABLE IF EXISTS `t_premiumtrx`;

CREATE TABLE `t_premiumtrx` (
  `idPremium` int(11) NOT NULL AUTO_INCREMENT,
  `B1Awal` float NOT NULL DEFAULT '0',
  `B1Akhir` float NOT NULL DEFAULT '0',
  `B2Awal` float NOT NULL DEFAULT '0',
  `B2Akhir` float NOT NULL DEFAULT '0',
  `B3Awal` float NOT NULL DEFAULT '0',
  `B3Akhir` float NOT NULL DEFAULT '0',
  `B4Awal` float NOT NULL DEFAULT '0',
  `B4Akhir` float NOT NULL DEFAULT '0',
  `B1Tera` float NOT NULL DEFAULT '0',
  `B2Tera` float NOT NULL DEFAULT '0',
  `B3Tera` float NOT NULL DEFAULT '0',
  `B4Tera` float NOT NULL DEFAULT '0',
  `stokAwal` float NOT NULL DEFAULT '0',
  `bbmMasuk` float NOT NULL DEFAULT '0',
  `sisa` float DEFAULT '0',
  `stokAkhir` float NOT NULL DEFAULT '0',
  `shift` enum('1','2','3') DEFAULT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idPremium`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_produk` */

DROP TABLE IF EXISTS `t_produk`;

CREATE TABLE `t_produk` (
  `idProduk` varchar(5) NOT NULL,
  `namaProduk` varchar(15) DEFAULT NULL,
  `hargaBeli` int(11) DEFAULT NULL COMMENT 'Per 8 Kilo Liter',
  `hargaJual` int(11) DEFAULT NULL,
  `kapasitasTank` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `tipeUser` enum('ADMIN','USER','MANAJERIAL') NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
