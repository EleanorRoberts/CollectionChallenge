# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.4-MariaDB-1:10.6.4+maria~focal)
# Database: pokemon
# Generation Time: 2021-09-30 08:40:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table stats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stats`;

CREATE TABLE `stats` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(11) DEFAULT NULL,
  `type1` varchar(11) DEFAULT NULL,
  `type2` varchar(11) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `attack` int(11) DEFAULT NULL,
  `defense` int(11) DEFAULT NULL,
  `spAttack` int(11) DEFAULT NULL,
  `spDefense` int(11) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `deleted` tinyint(2) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;

INSERT INTO `stats` (`id`, `name`, `type1`, `type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`, `deleted`)
VALUES
	(1,'Bulbasaur','Grass','Poison',45,49,49,65,65,45,0),
	(2,'Ivysaur','Grass','Poison',60,62,63,80,80,60,0),
	(3,'Venusaur','Grass','Poison',80,82,83,100,100,80,0),
	(4,'Charmander','Fire','',39,52,43,60,50,65,0),
	(5,'Charmeleon','Fire','',58,64,58,80,65,80,0),
	(6,'Charizard','Fire','Flying',78,84,78,109,85,100,0),
	(7,'Squirtle','Water','',44,48,65,50,64,43,0),
	(8,'Wartortle','Water','',59,63,80,65,80,58,0),
	(9,'Blastoise','Water','',79,83,100,85,105,78,0),
	(10,'Caterpie','Bug','',45,30,35,20,20,45,0),
	(11,'Metapod','Bug','',50,20,55,25,25,30,0),
	(12,'Butterfree','Bug','Flying',60,45,50,25,25,35,0),
	(13,'Weedle','Bug','Poison',40,35,30,20,20,50,0),
	(14,'Kakuna','Bug','Poison',45,25,50,25,25,35,0),
	(15,'Beedrill','Bug','Poison',65,90,40,45,80,75,0),
	(16,'Pidgey','Normal','Flying',40,45,40,35,35,56,0),
	(17,'Pidgeotto','Normal','Flying',63,60,55,50,50,71,0),
	(18,'Pidgeot','Normal','Flying',83,80,75,70,70,101,0),
	(19,'Rattata','Normal','',30,56,35,25,35,72,0),
	(20,'Raticate','Normal','',55,81,60,50,70,97,0),
	(21,'Spearow','Normal','Flying',40,60,30,31,31,70,0),
	(22,'Fearow','Normal','Flying',65,90,65,61,61,100,0),
	(23,'Ekans','Poison','',35,60,44,40,54,55,0),
	(24,'Arbok','Poison','',60,95,69,65,79,80,0),
	(25,'Pikachu','Electric','',35,55,40,50,50,90,0),
	(26,'Raichu','Electric','',60,90,55,90,80,110,0),
	(27,'Sandshrew','Ground','',50,75,85,20,30,40,0),
	(28,'Sandslash','Ground','',75,100,110,45,55,65,0),
	(29,'Nidoran(F)','Poison','',55,47,52,40,40,41,0),
	(30,'Nidorina','Poison','',70,62,67,55,55,56,0),
	(31,'Nidoqueen','Poison','Ground',90,92,87,75,85,76,0),
	(32,'Nidoran(M)','Poison','',46,57,40,40,40,50,0),
	(33,'Nidorino','Poison','',61,72,57,55,55,65,0),
	(34,'Nidoking','Poison','Ground',81,102,77,85,75,85,0),
	(35,'Clefairy','Fairy','',70,45,48,60,65,35,0),
	(36,'Clefable','Fairy','',95,70,73,95,90,60,0),
	(37,'Vulpix','Fire','',38,41,40,50,65,65,0),
	(38,'Ninetails','Fire','',73,76,75,81,100,100,1),
	(39,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(40,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(41,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(42,'Not Damo','Bug','Flying',1,0,1,1,1,1,1),
	(43,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(44,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(45,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(46,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(47,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(48,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(49,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(50,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(51,'Not Ash','Bug','Flying',1,1,1,1,1,1,1),
	(52,'Not Ash','Bug','Flying',45,60,30,45,25,75,1),
	(53,'Not Ash','Bug','Flying',63,60,40,45,50,75,1),
	(54,'Not Will','Normal','Flying',1,1,1,1,1,1,1),
	(55,'Not Ash','Bug','Flying',45,30,55,25,20,45,1),
	(56,'Not Jake','Bug','Flying',-1,1,1,1,1,1,1),
	(57,'Not Ash','Bug','Flying',45,30,55,25,20,71,1),
	(58,'Beedrill','Bug','Flying',1,1,1,1,1,1,1),
	(59,'Not Ash','Normal','Flying',45,1,1,1,1,1,1),
	(60,'Not Bob','Normal','Flying',45,1,1,1,1,1,1);

/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
