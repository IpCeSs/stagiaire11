-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 fév. 2018 à 14:45
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
-- Base de données :  `tdblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Bienvenue les amis', 'Vous trouverez sur mon blog tout ce qui concerne le scrapbooking et les macramés! Tutos et rélaisations en tous genres vous attendent ici! Je souhaite que vous vous amusiez autant que moi!!', '2018-02-02 15:25:45'),
(2, 'Le macramé', 'Le macramé, l\'art moderne de décorer des nœuds, serait né chez les tisserands arabes du xiiie siècle. La signification originale du Migramah arabe, duquel le mot « macramé » est dérivé, peut être rendue par « serviette rayée », « frange ornementale » ou « voile brodé ». Une autre étymologie est citée par Le Robert et Le Trésor de la langue française : de l\'arabe mahrama mouchoir, passant par le turc mahrama mouchoir, mot ensuite importé sous la forme macramè par les Génois avec le sens de petite serviette de toilette brodée et frangée.', '2018-02-02 15:38:30'),
(3, 'Le Scrapbooking', 'Le scrapbooking, ou créacollage, collimage (francisations principalement utilisées au Québec1), est une forme de loisir créatif consistant à introduire des photographies dans un décor en rapport avec le thème abordé, dans le but de les mettre en valeur par une présentation plus originale qu\'un simple album photo. Pour cela, de nombreuses techniques de scrapbooking existent, telles que le serendipity, le tag, l\'iris folding, le spirella, etc. Les pratiquants et adeptes de cette pratique s\'appellent des « scrapeurs » ou des « créacolleurs » ou encore « collimagistes », termes plus souvent répandus en français québécois.\r\n\r\nLe format habituel d\'une page de scrapbooking est de 30 x 30 cm. Toutefois, tous les formats de page et d\'album sont autorisés au gré de l\'imagination et du matériel à la disposition de chacun.\r\n\r\nUne page comporte généralement un titre, un journaling, la date et le nom des personnes présentes sur les photos.\r\n\r\nLe scrapbooking est à la fois un loisir créatif, une forme d\'art décoratif, et l\'occasion de coucher sur le papier, au travers des photos et des commentaires, l\'histoire d\'une famille.', '2018-02-02 15:42:46'),
(4, 'Le Scoubidou', 'Le Scoubidou est un loisir créatif du début des années 1960, qui a ressurgi dans les années 1980. À l\'aide de tuyaux en plastique souple de section millimétrique, on tresse d\'interminables boudins colorés - carrés ou polygonaux, droits ou torsadés - qui peuvent être utilisés en porte-clefs. Il est possible de faire d\'autres scoubidous plus complexes (triangulés, en croix...) voire des personnages, objets ou animaux selon l\'imagination du créateur.', '2018-02-02 15:42:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
