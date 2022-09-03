-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour tp-animaux
CREATE DATABASE IF NOT EXISTS `tp-animaux` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tp-animaux`;

-- Listage de la structure de la table tp-animaux. animaux
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `classe` varchar(255) DEFAULT NULL,
  `ordre` varchar(255) DEFAULT NULL,
  `famille` varchar(255) DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table tp-animaux.animaux : ~4 rows (environ)
DELETE FROM `animaux`;
/*!40000 ALTER TABLE `animaux` DISABLE KEYS */;
INSERT INTO `animaux` (`id`, `nom`, `classe`, `ordre`, `famille`, `habitat`, `statut`, `photo`) VALUES
	(1, 'Lion', 'MammifÃ¨re', 'Carnivore', 'FÃ©lin', 'Savane', 'VU', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Lion_d%27Afrique.jpg/290px-Lion_d%27Afrique.jpg'),
	(2, 'Crocodile', 'Reptile', 'Crocodilien', 'Crocodylidae', 'RÃ©gions chaudes', 'LC', 'https://www.monde-animal.fr/wp-content/uploads/2021/03/fiche-animale-monde-animal-crocodile-americain-crocodylus-acutus-1024x683.jpg'),
	(3, 'Chien', 'MammifÃ¨re', 'Carnivore', 'CanidÃ©', 'Parmis les hommes', 'LC', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Collage_of_Nine_Dogs.jpg/290px-Collage_of_Nine_Dogs.jpg'),
	(4, 'Aigle royal', 'Oiseau', 'Accipitriforme', 'AccipitridÃ©', 'Falaises', 'LC', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/GoldenEagle-Nova.jpg/290px-GoldenEagle-Nova.jpg');
/*!40000 ALTER TABLE `animaux` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
wordpresswordpress