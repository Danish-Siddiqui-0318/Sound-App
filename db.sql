/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - sound-app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sound-app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `sound-app`;

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `album_photo` varchar(255) DEFAULT NULL,
  `releaseyear` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `album` */

insert  into `album`(`id`,`album_name`,`artist`,`album_photo`,`releaseyear`) values 
(1,'1989 (Taylor Version)','3','albumimage/images.jpeg','2023');

/*Table structure for table `artist` */

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `artist` */

insert  into `artist`(`artist_id`,`artist_name`,`artist_image`) values 
(3,'Taylor Swift','artist_image/GettyImages-1987932445.jpeg'),
(4,'Ed Sheeran','artist_image/Ed_Sheeran-6886_(cropped).jpg');

/*Table structure for table `musicgenre` */

DROP TABLE IF EXISTS `musicgenre`;

CREATE TABLE `musicgenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `music_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `musicgenre` */

insert  into `musicgenre`(`id`,`music_genre_name`) values 
(3,'pop music');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`role`) values 
(3,'Danish Siddiqui','danish@gmail.com','danish','Admin'),
(4,'Waqar Hussain','Waqar@gmail.com','Waqar','User'),
(5,'Uzair Arain','uzair@gmail.com','uzair','User');

/*Table structure for table `videogenre` */

DROP TABLE IF EXISTS `videogenre`;

CREATE TABLE `videogenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `videogenre` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
