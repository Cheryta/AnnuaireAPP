-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 08 avr. 2022 à 12:39
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdannuaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `codeArticle` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prixUnitaire` int(11) DEFAULT NULL,
  `prixTotal` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `lieu` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`codeArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`codeArticle`, `libelle`, `quantite`, `prixUnitaire`, `prixTotal`, `date`, `lieu`) VALUES
(3, 'Modem wifi', 5, 52500, 262500, '2022-04-06 00:00:00', 'Amerique'),
(4, 'Cle Usb', 100, 2000, 200000, '2022-04-06 00:00:00', 'Asie'),
(7, 'Chargeur 450G', 30, 2500, 150000, '2022-04-06 00:00:00', 'Afrique'),
(6, 'Ordinateur', 100, 250000, 2500000, '2022-04-06 00:00:00', 'Amerique'),
(8, 'Souris', 50, 1500, 75000, '2022-04-07 00:00:00', 'Asie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
