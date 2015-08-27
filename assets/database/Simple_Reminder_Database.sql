/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.6.24 : Database - simple_reminder
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simple_reminder` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `simple_reminder`;

/*Table structure for table `reminder` */

DROP TABLE IF EXISTS `reminder`;

CREATE TABLE `reminder` (
  `reminder_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `reminder_title` varchar(15) DEFAULT NULL,
  `reminder_note` text,
  `reminder_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reminder_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `username` (`username`),
  CONSTRAINT `reminder_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `reminder` */

insert  into `reminder`(`reminder_id`,`username`,`reminder_title`,`reminder_note`,`reminder_timestamp`,`reminder_status`) values (8,'MichelleAnn07','BECHLOE IS LIFE','SHIP IT','2015-08-27 16:12:25','SENT');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`lname`,`fname`,`email`) values ('',NULL,NULL,NULL,NULL),('MichelleAnn07','12345','Mendoza','Michelle Ann','raymarmonte@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
