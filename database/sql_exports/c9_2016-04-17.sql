# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.11)
# Database: c9
# Generation Time: 2016-04-17 20:33:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table dp_tag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dp_tag`;

CREATE TABLE `dp_tag` (
  `dp_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `dp_tag` WRITE;
/*!40000 ALTER TABLE `dp_tag` DISABLE KEYS */;

INSERT INTO `dp_tag` (`dp_id`, `tag_id`)
VALUES
	(1,1),
	(1,2),
	(2,2);

/*!40000 ALTER TABLE `dp_tag` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dps`;

CREATE TABLE `dps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productUsedIn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dps_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `dps` WRITE;
/*!40000 ALTER TABLE `dps` DISABLE KEYS */;

INSERT INTO `dps` (`id`, `slug`, `name`, `description`, `license`, `productUsedIn`, `user_id`, `category_id`, `created_at`, `updated_at`)
VALUES
	(1,'FT231XSUSBtoSerial','FT231XS USB to Serial','this is usb to ttl communication bridge','Creative commans','https://www.sparkfun.com/products/12757',1,1,'2016-04-14 00:00:00',NULL),
	(2,'Power_VIN_5v_LM1117','Power 5v out LM1117','power 5 volts linear drop module','Creative Commons','https://www.sparkfun.com/products/12757',1,1,'2016-04-14 00:00:00',NULL),
	(3,'atmega328_5v_16mhz','Atmega328 5v 16mhz','','','',1,0,NULL,NULL),
	(4,'atmega328_Arduino','Atmega328 Arduino','','','',1,0,NULL,NULL),
	(5,'atmega25603_3v8mhz','Atmega 25603 3v8 mhz','','','',1,0,NULL,NULL),
	(6,'basic_ftdi','Basic Ftdi','','','',1,0,NULL,NULL),
	(7,'battery_boost_converter_TPS61200','Battery boost converter TPS61200','','','',1,0,NULL,NULL),
	(8,'battery_Fuel_Gauge_max17048','Battery Fuel Gauge max17048','','','',1,0,NULL,NULL),
	(9,'battery_gauge_max17043g+u','Battery Gauge Max17043g+u','','','',1,0,NULL,NULL),
	(10,'esp8266','Esp8266','','','',1,0,NULL,NULL),
	(11,'led_driver_AL8805','Led Driver AL8805','','','',1,0,NULL,NULL),
	(12,'LiPo_Charger_MCP73831','LiPo Charger MCP73831','','','',1,0,NULL,NULL),
	(13,'Lipo_singlecell_charger_mcp73831','Lipo Singlecell Charger Mcp73831','','','',1,0,NULL,NULL),
	(14,'logic_level_converter_BSS138','Logic Level Converter BSS138','','','',1,0,NULL,NULL),
	(15,'MCP4725_Breakout','MCP4725 Breakout','','','',1,0,NULL,NULL),
	(16,'Power_5v_3_3_ap2112k','Powe 5v 3_3 ap2112k','','','',1,0,NULL,NULL),
	(17,'Power_5vto3_3_MIC5205','Power 5v to 3_3 MIC5205','','','',1,0,NULL,NULL),
	(18,'Power_9_5v_LP2985','Power 9v 5v LP2985','','','',1,0,NULL,NULL),
	(19,'power_selectable_5v_3.3v','Power Selectable 5v 3.3v','','','',1,0,NULL,NULL),
	(20,'SD_w_hexconverter','SD w hexconverter','','','',1,0,NULL,NULL);

/*!40000 ALTER TABLE `dps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2016_04_14_190754_create_dps_table',1),
	('2016_04_17_085733_create_categories_table',1),
	('2016_04_15_112418_create_tags_table',2),
	('2016_04_17_122521_create_dp_tag_table',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'usb',NULL,NULL),
	(2,'power',NULL,NULL);

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Nuri Erginer','nerginer@gnexlab.com','$2y$10$.2N51DAJZbdPAGAFVpbfjOuHXbfBbFFCXkMj51IuDAWu3ZkuP0WvG',NULL,'2016-04-17 16:42:48','2016-04-17 16:42:48');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
