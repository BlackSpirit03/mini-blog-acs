-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 nov. 2017 à 10:54
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
-- Base de données :  `bdd_miniblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_articles`
--

DROP TABLE IF EXISTS `t_articles`;
CREATE TABLE IF NOT EXISTS `t_articles` (
  `idt_Articles` int(11) NOT NULL,
  `DateMAJ` datetime DEFAULT NULL,
  `idt_Categorie` int(11) DEFAULT NULL,
  `Titre` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `idt_Auteur` int(11) DEFAULT NULL,
  `Texte_Article` longtext CHARACTER SET latin1,
  PRIMARY KEY (`idt_Articles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table Articlies';

-- --------------------------------------------------------

--
-- Structure de la table `t_auteurs`
--

DROP TABLE IF EXISTS `t_auteurs`;
CREATE TABLE IF NOT EXISTS `t_auteurs` (
  `idt_auteurs` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nom` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idt_auteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tables des Auteurs';

-- --------------------------------------------------------

--
-- Structure de la table `t_categories`
--

DROP TABLE IF EXISTS `t_categories`;
CREATE TABLE IF NOT EXISTS `t_categories` (
  `idt_Categories` int(11) NOT NULL,
  `Catégorie` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idt_Categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tables des Catégories';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
