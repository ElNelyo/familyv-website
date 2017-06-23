-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Juin 2017 à 21:56
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fairyv`
--

-- --------------------------------------------------------

--
-- Structure de la table `devlog`
--

CREATE TABLE IF NOT EXISTS `devlog` (
  `id` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `texte` varchar(5000) NOT NULL,
  `ajout` varchar(5000) NOT NULL,
  `modif` varchar(5000) NOT NULL,
  `suppr` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `devlog`
--

INSERT INTO `devlog` (`id`, `titre`, `texte`, `ajout`, `modif`, `suppr`, `date`) VALUES
('54132121', 'Devblog #1 - Version Bêta', '', '+ Ajout du système de faim et de soif </br>\n+ Ajout de la nouvelle interface de téléphone </br>\n+ Ajout de fonctionnalités au téléphone</br>\n+ Ajout de la carte d''identité </br>\n+ Ajout du magasin de vêtements</br>\n+ Ajout de superettes </br>', 'Modification de la fréquence a laquelle vous obtenez votre salaire</br>\n* Modification de la touche utilisée pour verrouiller le véhicule</br>\n* Modification de la dégradation de la faim et de la soif</br>\n* Modification du script de réparation des dépanneurs</br>\n* Modification des emplacements de drogues</br>\n* Modification des emplacements de garages</br>', '- Suppression de l''égo sur-dimensionner de James Jebbia0</br>\n- Suppression du nom de Pratt sur le SUV de la LSPD</br>\n- Suppression de la mention de Mr Dixon sur le SUV de la LSMC</br>\n- Diverses suppression de citoyens</br>', '2017-06-11');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` varchar(15) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `texte` varchar(5000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `titre`, `texte`, `image`, `date`) VALUES
('289019017', 'Ouverture de notre site internet ', 'Bienvenue à tous ! </br></br>\nNous sommes très heureux de vous présenter notre tout nouveaux site internet! Vous pourrez y retrouver toutes les dernières nouveautés ainsi que la partie <a href="index.php?page=devlog">#devblog</a> consacrée à l''avancement du projet FAIRY-V au niveau développement.</br> \nMais également un journal de la ville qui sera tenu par : X\n\n</br>\nNous vous souhaitons à tous une excellente journée et surtout bon jeu sur notre serveur.\n</br></br>\nLE STAFF - FAIRYV', 'open', '2017-06-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
