# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.4-MariaDB-1:10.6.4+maria~focal)
# Database: pokemon
# Generation Time: 2021-09-30 15:15:00 +0000
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
  `name` varchar(11) NOT NULL DEFAULT '',
  `type1` varchar(11) NOT NULL DEFAULT '',
  `type2` varchar(11) DEFAULT NULL,
  `hp` int(11) unsigned NOT NULL,
  `attack` int(11) unsigned NOT NULL,
  `defense` int(11) unsigned NOT NULL,
  `spAttack` int(11) unsigned NOT NULL,
  `spDefense` int(11) unsigned NOT NULL,
  `speed` int(11) unsigned NOT NULL,
  `deleted` tinyint(2) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;

INSERT INTO `stats` (`id`, `name`, `type1`, `type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`, `deleted`)
VALUES
	(1,'Bulbasaur','3','9',45,49,49,65,65,45,0),
	(2,'Ivysaur','3','9',60,62,63,80,80,60,0),
	(3,'Venusaur','3','9',80,82,83,100,100,80,0),
	(4,'Charmander','1','',39,52,43,60,50,65,0),
	(5,'Charmeleon','1','',58,64,58,80,65,80,0),
	(6,'Charizard','1','11',78,84,78,109,85,100,0),
	(7,'Squirtle','2','',44,48,65,50,64,43,0),
	(8,'Wartortle','2','',59,63,80,65,80,58,0),
	(9,'Blastoise','2','',79,83,100,85,105,78,0),
	(10,'Caterpie','13','',45,30,35,20,20,45,0),
	(11,'Metapod','13','',50,20,55,25,25,30,0),
	(12,'Butterfree','13','11',60,45,50,25,25,35,0),
	(13,'Weedle','13','9',40,35,30,20,20,50,0),
	(14,'Kakuna','13','9',45,25,50,25,25,35,0),
	(15,'Beedrill','13','9',65,90,40,45,80,75,0),
	(16,'Pidgey','5','11',40,45,40,35,35,56,0),
	(17,'Pidgeotto','5','11',63,60,55,50,50,71,0),
	(18,'Pidgeot','5','11',83,80,75,70,70,101,0),
	(19,'Rattata','5','',30,56,35,25,35,72,0),
	(20,'Raticate','5','',55,81,60,50,70,97,0),
	(21,'Spearow','5','11',40,60,30,31,31,70,0),
	(22,'Fearow','5','11',65,90,65,61,61,100,0),
	(23,'Ekans','9','',35,60,44,40,54,55,0),
	(24,'Arbok','9','',60,95,69,65,79,80,0),
	(25,'Pikachu','4','',35,55,40,50,50,90,0),
	(26,'Raichu','4','',60,90,55,90,80,110,0),
	(27,'Sandshrew','10','',50,75,85,20,30,40,0),
	(28,'Sandslash','10','',75,100,110,45,55,65,0),
	(29,'Nidoran(F)','9','',55,47,52,40,40,41,0),
	(30,'Nidorina','9','',70,62,67,55,55,56,0),
	(31,'Nidoqueen','9','10',90,92,87,75,85,76,0),
	(32,'Nidoran(M)','9','',46,57,40,40,40,50,0),
	(33,'Nidorino','9','',61,72,57,55,55,65,0),
	(34,'Nidoking','9','10',81,102,77,85,75,85,0),
	(35,'Clefairy','18','',70,45,48,60,65,35,0),
	(36,'Clefable','18','',95,70,73,95,90,60,0),
	(37,'Vulpix','1','',38,41,40,50,65,65,0),
	(38,'Ninetails','1','',73,76,75,81,100,100,1),
	(39,'Jigglypuff','5','18',115,45,20,45,25,20,0),
	(40,'Wigglytuff','5','18',140,70,45,85,50,45,0),
	(41,'Zubat','9','11',40,45,35,30,40,55,0),
	(42,'Golbat','9','11',75,80,70,65,75,90,0),
	(43,'Oddish','3','9',45,50,55,75,65,30,0),
	(44,'Gloom','3','9',60,65,70,80,75,40,0),
	(45,'Vileplume','3','9',75,80,85,110,90,50,0),
	(46,'Paras','13','3',35,70,55,45,55,25,0),
	(47,'Parasect','13','3',60,95,80,60,80,30,0),
	(48,'Venonat','13','9',60,55,50,40,55,45,0),
	(49,'Venomoth','13','9',70,65,60,90,75,90,0),
	(50,'Diglett','10','',10,55,25,35,45,95,0),
	(51,'Dugtrio','10','',35,100,50,50,70,120,0),
	(52,'Meowth','5','',40,45,35,40,40,90,0),
	(53,'Persian','5','',65,70,60,65,65,115,0),
	(54,'Psyduck','2','',50,52,48,65,50,55,0),
	(55,'Golduck','2','',80,82,78,95,80,85,0),
	(56,'Mankey','8','',40,80,35,35,45,70,0),
	(57,'Primeape','8','',65,105,60,60,70,95,0),
	(58,'Growlithe','1','',55,70,45,70,50,60,0),
	(59,'Arcanine','1','',90,110,80,100,80,95,0),
	(60,'Poliwag','2','',40,50,40,40,40,90,0),
	(61,'Poliwhirl','2','',65,65,65,50,50,90,0),
	(62,'Poliwrath','2','8',90,95,95,70,90,70,0);

/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;

INSERT INTO `types` (`id`, `type`)
VALUES
	(13,'Bug'),
	(15,'Dark'),
	(16,'Dragon'),
	(4,'Electric'),
	(18,'Fairy'),
	(8,'Fighting'),
	(1,'Fire'),
	(11,'Flying'),
	(14,'Ghost'),
	(3,'Grass'),
	(10,'Ground'),
	(6,'Ice'),
	(5,'Normal'),
	(9,'Poison'),
	(12,'Psychic'),
	(7,'Rock'),
	(17,'Steel'),
	(2,'Water');

/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
