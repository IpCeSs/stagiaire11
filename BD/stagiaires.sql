-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 fév. 2018 à 09:13
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `campusnumerique`
--

-- --------------------------------------------------------

--
-- Structure de la table `stagiaires`
--

DROP TABLE IF EXISTS `stagiaires`;
CREATE TABLE IF NOT EXISTS `stagiaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Entreprise` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stagiaires`
--

INSERT INTO `stagiaires` (`id`, `Nom`, `Prénom`, `Genre`, `Entreprise`) VALUES
(1, 'BASSIM', 'Samir', 'Homme', 'Agilium'),
(2, 'BASSO BONDINI', 'Théo', 'Homme', ''),
(3, 'BIAGI', 'Alexandre', 'Homme', ''),
(4, 'BOUDONNAT', 'Alexandre', 'Homme', 'Maison Du Net'),
(5, 'BOUHASSOUN', 'Zouleka', 'Femme', 'Inforum'),
(6, 'DUCHENE', 'Igor', 'Homme', ''),
(7, 'FOURDACHON', 'Julien', 'Homme', ''),
(8, 'GRAS', 'Sandrine', 'Femme', ''),
(9, 'GRILLET', 'Isabelle', 'Femme', ''),
(10, 'LE DEVEDEC', 'Eric', 'Homme', 'Agilium'),
(11, 'MAISONNEUVE', 'Vincent', 'Homme', 'Webmacanik'),
(12, 'PIGEOLET', 'Cécilia', 'Femme', 'Compilatio.net'),
(13, 'SLIMANI', 'Ahmed', 'Homme', ''),
(14, 'VERGES', 'Vincent', 'Homme', 'About Goods Company'),
(15, 'VOIRON', 'Arnaud', 'Homme', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
