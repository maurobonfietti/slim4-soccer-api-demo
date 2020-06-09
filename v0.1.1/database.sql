# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.14-MariaDB)
# Base de datos: slim4_api_skeleton
# Tiempo de Generación: 2019-12-02 21:13:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla player
# ------------------------------------------------------------

DROP TABLE IF EXISTS `player`;

CREATE TABLE `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;

INSERT INTO `player` (`id`, `name`)
VALUES
	(1,'Carlos Tevez'),
	(2,'Paulo Dybala'),
	(3,'Lionel Messi'),
	(4,'Cristiano Ronaldo'),
	(5,'Luka Modrić'),
	(6,'Luis Suarez'),
	(7,'Antoine Griezmann'),
	(8,'James Rodriguez'),
	(9,'Neymar'),
	(10,'Dani Alves'),
	(11,'Matthijs de Ligt'),
	(12,'Frenkie de Jong'),
	(13,'Virgil van Dijk'),
	(14,'Sergio Busquets'),
	(15,'Eden Hazard'),
	(16,'Paul Pogba'),
	(17,'Kevin De Bruyne'),
	(18,'Sergio Agüero'),
	(19,'Gerard Piqué'),
	(20,'Trent Alexander-Arnold'),
	(21,'Moussa Sissoko'),
	(22,'Tanguy Ndombélé'),
	(23,'Raheem Sterling'),
	(24,'Lucas Moura'),
	(25,'Kylian Mbappé'),
	(26,'Raphaël Varane');

/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla team
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stadium_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;

INSERT INTO `team` (`id`, `name`, `stadium_name`, `capacity`)
VALUES
	(1,'Boca Juniors','Alberto J. Armando',50000),
	(2,'River Plate','Antonio Vespucio Liberti',70000),
	(3,"Newell's Old Boys",'Marcelo Bielsa',42000),
	(4,'Rosario Central','Gigante de Arroyito',43000),
	(5,'Colón','Brigadier General Estanislao López',40000),
	(6,'Unión','15 de Abril',26000),
	(7,'Belgrano','Julio César Villagra',30000),
	(8,'Talleres','Francisco Cabasés',18000),
	(9,'Instituto','Juan Domingo Perón',26000),
	(10,'Estudiantes','Ciudad de La Plata',53000),
	(11,'Gimnasia','Ciudad de La Plata',53000),
	(12,'Independiente','Libertadores de América',52000),
	(13,'Racing','Presidente Perón',52000),
	(14,'Vélez Sarsfield','José Amalfitani',49000),
	(15,'San Lorenzo','Pedro Bidegain',48000),
	(16,'Huracán','Tomás Adolfo Ducó',48000),
	(17,'Lanús','Ciudad de Lanús',47000),
	(18,'Banfield','Florencio Sola',35000),
	(19,'Defensa y Justicia','Norberto "Tito" Tomaghello',20000),
	(20,'Nueva Chicago','Estadio Nueva Chicago',25000);

/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
