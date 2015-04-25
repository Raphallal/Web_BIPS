-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 20 Avril 2015 à 16:18
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bips`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `mail` varchar(50) NOT NULL DEFAULT '' COMMENT 'sert d''id de connexion',
  `pwd` varchar(50) DEFAULT NULL COMMENT 'codage md5',
  `filiere` varchar(8) NOT NULL,
  `annee` varchar(2) NOT NULL,
  `spe` varchar(6) NOT NULL COMMENT 'specialite',
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'droit de modifs sur le site',
  `admin_name` varchar(20) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '0' COMMENT 'mail de confirmation repondu ou non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`mail`, `pwd`, `filiere`, `annee`, `spe`, `admin`, `admin_name`, `verified`) VALUES
('floria.caba@u-psud.fr', 'cb6502f9476f042ca76fcc94e5fa80b1', 'Prof', '', '', 0, NULL, 0),
('florian.cabaret@u-psud.fr', 'd69fe099168de496aa5667581fbf2dc3', 'PeiP', '2', 'C', 0, NULL, 0),
('thomas.dasilva@u-psud.fr', '1ebbde7aa4f74adb333af0b9b784d51d', 'PeiP', '2', 'C', 0, NULL, 0),
('toto.toto@u-psud.fr', 'c33ca5e7eae116138d1d1b61158d58f9', 'Et', '4', 'EES', 0, NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
