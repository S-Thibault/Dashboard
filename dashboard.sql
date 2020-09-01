-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 sep. 2020 à 12:34
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dashboard`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ida` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `noma` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idc` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomc` varchar(255) NOT NULL,
  `slugc` varchar(255) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomp` varchar(255) NOT NULL,
  `slugp` varchar(255) NOT NULL,
  `lieu-achat` varchar(255) NOT NULL,
  `adresse-achat` varchar(255) DEFAULT NULL,
  `url-achat` varchar(255) DEFAULT NULL,
  `ref` varchar(255) NOT NULL,
  `catégorie` varchar(255) NOT NULL,
  `date-achat` datetime NOT NULL,
  `date-fin-garantie` datetime NOT NULL,
  `prix` int(11) NOT NULL,
  `conseils-entretien` longtext NOT NULL,
  `photo-ticker-achat` varchar(255) NOT NULL,
  `manuel-utilisation` longtext NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
