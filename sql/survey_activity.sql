-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 déc. 2017 à 16:16
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `survey`
--

-- --------------------------------------------------------

--
-- Structure de la table `survey_activity`
--

DROP TABLE IF EXISTS `survey_activity`;
CREATE TABLE IF NOT EXISTS `survey_activity` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `name_activity` varchar(500) NOT NULL,
  PRIMARY KEY (`id_activity`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `survey_activity`
--

INSERT INTO `survey_activity` (`id_activity`, `name_activity`) VALUES
(1, 'Démolition - technicité courante'),
(2, 'Démolition à l\'explosif'),
(3, 'Découpe du béton (par carottage ou sciage)'),
(4, 'Désamiantage'),
(5, 'Curage'),
(6, 'Autres travaux de démolition'),
(7, 'Autres activités (hors démolition)'),
(8, 'Terrassement'),
(9, 'Construction et entretien de routes'),
(10, 'Ouvrages d\'art, travaux spéciaux'),
(11, 'Canalisations'),
(12, 'Démolition'),
(13, 'Autres');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
