/*
SQLyog Ultimate v13.1.1 (64 bit)
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `album` */

/*Table structure for table `artist` */

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `artist` */

insert  into `artist`(`artist_id`,`artist_name`,`artist_image`) values 
(3,'Taylor Swift','artist_image/GettyImages-1987932445.jpeg'),
(4,'Ed Sheeran','artist_image/Ed_Sheeran-6886_(cropped).jpg'),
(5,'The Local Train','artist_image/63414571.jpeg'),
(7,'Dua Lipa','artist_image/dua.jpeg');

/*Table structure for table `music` */

DROP TABLE IF EXISTS `music`;

CREATE TABLE `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `music_loc` varchar(255) DEFAULT NULL,
  `music_title` varchar(255) DEFAULT NULL,
  `music_thumbnail` varchar(255) DEFAULT NULL,
  `music_year` varchar(255) DEFAULT NULL,
  `music_artist` varchar(255) DEFAULT NULL,
  `music_album` varchar(255) DEFAULT NULL,
  `music_genre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `music` */

insert  into `music`(`id`,`music_loc`,`music_title`,`music_thumbnail`,`music_year`,`music_artist`,`music_album`,`music_genre`) values 
(6,'music/spotifydown.com - Blank Space.mp3','Blank Space','music_thumbnail/sddefault.jpg','2023','3','4','3'),
(7,'music/spotifydown.com - Levitating.mp3','Levitating','music_thumbnail/levidua.jpg','2020','7','5','3'),
(8,'music/[SPOTIFY-DOWNLOADER.COM] Aaoge Tum Kabhi.mp3','Aoge Tum Kabhi','music_thumbnail/jkh.jpg','2017','5','3','4'),
(9,'music/spotifydown.com - Perfect.mp3','Perfect','music_thumbnail/9a22fbaa1c35182063a67cae7913175c.jpg','2017','4','6','3');

/*Table structure for table `musicgenre` */

DROP TABLE IF EXISTS `musicgenre`;

CREATE TABLE `musicgenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `music_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `musicgenre` */

insert  into `musicgenre`(`id`,`music_genre_name`) values 
(3,'pop music'),
(4,'Sad ');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`role`) values 
(3,'Danish Siddiqui','danish@gmail.com','danish','Admin'),
(4,'waqar Hussain','waqar@gmail.com','Waqar','User'),
(12,'uzair','uzair@gmail.com','uzair','User');

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_loc` varchar(255) DEFAULT NULL,
  `video_artist` varchar(255) DEFAULT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `video_genre` varchar(255) DEFAULT NULL,
  `video_description` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `video` */

/*Table structure for table `video_artist` */

DROP TABLE IF EXISTS `video_artist`;

CREATE TABLE `video_artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `video_artist` */

/*Table structure for table `videogenre` */

DROP TABLE IF EXISTS `videogenre`;

CREATE TABLE `videogenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `videogenre` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
