-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Novembre 2017 à 15:43
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `survey_type_dechets`
--

CREATE TABLE `survey_type_dechets` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_type_dechets`
--

INSERT INTO `survey_type_dechets` (`id`, `type`, `note`) VALUES
(3, 'dangereux', ''),
(2, 'non_inertes_non_dangereux', ''),
(1, 'inertes', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `survey_type_dechets`
--
ALTER TABLE `survey_type_dechets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `survey_type_dechets`
--
ALTER TABLE `survey_type_dechets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
