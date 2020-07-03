# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18)
# Database: registrations
# Generation Time: 2020-07-01 07:13:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table registration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plate_number` varchar(9) NOT NULL DEFAULT '',
  `reg_expired` tinyint(1) NOT NULL,
  `reg_exp_date` char(30) NOT NULL DEFAULT '',
  `vehicle_type` char(20) NOT NULL DEFAULT '',
  `vehicle_make` char(20) NOT NULL DEFAULT '',
  `vehicle_model` char(20) NOT NULL DEFAULT '',
  `vehicle_colour` char(20) NOT NULL DEFAULT '',
  `vehicle_vin` varchar(17) NOT NULL DEFAULT '',
  `vehicle_tare_weight` int(5) NOT NULL,
  `vehicle_gross_mass` int(5) DEFAULT NULL,
  `insurer_name` char(20) DEFAULT '',
  `insurer_code` int(2) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;

INSERT INTO `registration` (`id`, `plate_number`, `reg_expired`, `reg_exp_date`, `vehicle_type`, `vehicle_make`, `vehicle_model`, `vehicle_colour`, `vehicle_vin`, `vehicle_tare_weight`, `vehicle_gross_mass`, `insurer_name`, `insurer_code`, `user_id`)
VALUES
	(1,'EBF28E',0,'2021-02-05T23:15:30.000Z','Wagon','BMW','X4 M40i','Blue','12389347324',1700,NULL,'Allianz',32,1),
	(2,'CXD82F',1,'2020-03-01T23:15:30.000Z','Hatch','Toyota','Corolla','Silver','54646546313',1432,1500,'AAMI',17,2),
	(3,'QWX55Z',0,'2020-12-08T23:15:30.000Z','SUV','Jaguar','F pace','Green','65465466541',1620,NULL,'NRMA',27,3),
	(4,'WOP29P',0,'2020-12-08T23:15:30.000Z','Sedan','Mercedes','X4 M40i','Blue','87676676762',1700,NULL,'GIO',13,2);

/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `dob` varchar(10) NOT NULL DEFAULT '',
  `gender` char(10) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `mobile` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `dob`, `gender`, `email`, `mobile`)
VALUES
	(1,'Jonathan Rhodes','08-12-1978','Male','jonathan@gmail.com','0455678903'),
	(2,'Kristina Thompson','02-06-1988','Female','kthompson@gmail.com','0466543212'),
	(3,'Allan Taylor','05-05-1977','Male','ataylor@gmail.com','0443322231');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
