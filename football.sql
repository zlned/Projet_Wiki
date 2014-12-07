-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 07 Décembre 2014 à 17:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `football`
--

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id_competition` int(11) NOT NULL AUTO_INCREMENT,
  `nom_competition` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  PRIMARY KEY (`id_competition`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE IF NOT EXISTS `entraineur` (
  `id_entraineur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entraineur` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_trophee_perso` int(11) NOT NULL,
  PRIMARY KEY (`id_entraineur`),
  KEY `id_pays` (`id_pays`),
  KEY `id_pays_2` (`id_pays`),
  KEY `id_trophee_perso` (`id_trophee_perso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `entraineur`
--

INSERT INTO `entraineur` (`id_entraineur`, `nom_entraineur`, `id_pays`, `id_trophee_perso`) VALUES
(11, 'LAURENT BLANC', 33, 1),
(12, 'CHRISTOPHE GALTIER', 33, 1),
(13, 'MARCELO BIESLA', 33, 1),
(14, 'HUBERT FOURNIER', 33, 1),
(15, 'LEONARDO JARDIM', 33, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_trophee` int(11) NOT NULL,
  `id_terrain` int(11) NOT NULL,
  `id_entraineur` int(11) NOT NULL,
  `id_competition` int(11) NOT NULL,
  `id_saison` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`),
  KEY `id_pays` (`id_pays`),
  KEY `id_trophee` (`id_trophee`),
  KEY `id_terrain` (`id_terrain`),
  KEY `id_entraineur` (`id_entraineur`),
  KEY `id_pays_2` (`id_pays`),
  KEY `id_trophee_2` (`id_trophee`),
  KEY `id_terrain_2` (`id_terrain`),
  KEY `id_saison` (`id_saison`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id_joueur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_joueur` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `poste_joueur` varchar(255) NOT NULL,
  `nbr_but` int(10) NOT NULL,
  `id_trophee_perso` int(11) NOT NULL,
  `nbr_match` int(11) NOT NULL,
  `description` text NOT NULL,
  `nbr_cj` int(11) NOT NULL,
  `nbr_cr` int(11) NOT NULL,
  `nbr_buttete` int(11) NOT NULL,
  `nbr_butpied` int(11) NOT NULL,
  `nbr_matchtut` int(11) NOT NULL,
  `nbr_matchremp` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id_joueur`),
  KEY `id_pays` (`id_pays`),
  KEY `id_pays_2` (`id_pays`),
  KEY `id_equipe` (`id_equipe`),
  KEY `id_trophee_perso` (`id_trophee_perso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`, `continent`) VALUES
(33, 'FRANCE', 'EUROPE'),
(216, 'TUNISIE', 'AFRIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE IF NOT EXISTS `saison` (
  `id_saison` int(11) NOT NULL AUTO_INCREMENT,
  `saison` varchar(255) NOT NULL,
  PRIMARY KEY (`id_saison`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `saison`
--

INSERT INTO `saison` (`id_saison`, `saison`) VALUES
(1, '2010'),
(2, '2011'),
(3, '2012'),
(4, '2013'),
(5, '2014');

-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

CREATE TABLE IF NOT EXISTS `terrain` (
  `id_terrain` int(11) NOT NULL AUTO_INCREMENT,
  `nom_terrain` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  PRIMARY KEY (`id_terrain`),
  KEY `id_pays` (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `terrain`
--

INSERT INTO `terrain` (`id_terrain`, `nom_terrain`, `ville`, `id_pays`) VALUES
(1, 'STADE DE FRANCE', 'PARIS', 33),
(2, 'VELODROME', 'MARSEILLE', 33),
(3, 'STADE DE GERLAND ', 'LYON', 33),
(4, 'STADE LOUIS II', 'MONACO', 33),
(5, 'STADE GEOFFROY-GUICHARD', 'SAINT-ETIENNE', 33);

-- --------------------------------------------------------

--
-- Structure de la table `trophee`
--

CREATE TABLE IF NOT EXISTS `trophee` (
  `id_trophee` int(11) NOT NULL AUTO_INCREMENT,
  `nom_trophee` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trophee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `trophee`
--

INSERT INTO `trophee` (`id_trophee`, `nom_trophee`) VALUES
(1, 'COUPE DE FRANCE'),
(2, 'CHAMPIONAT DE FRANCE'),
(3, 'COUPE DE LA LIGUE'),
(4, 'CHAMPIONS LIGUE'),
(5, 'COUPE UEFA'),
(6, 'SUPER COUPE DE FRANCE'),
(7, 'SUPER COUPE UEFA');

-- --------------------------------------------------------

--
-- Structure de la table `trophee_perso`
--

CREATE TABLE IF NOT EXISTS `trophee_perso` (
  `id_trophee_perso` int(11) NOT NULL AUTO_INCREMENT,
  `nom_trophee_perso` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trophee_perso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `trophee_perso`
--

INSERT INTO `trophee_perso` (`id_trophee_perso`, `nom_trophee_perso`) VALUES
(1, 'MEILLEUR JOUR'),
(2, 'MEILLEUR BUTEUR');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entraineur`
--
ALTER TABLE `entraineur`
  ADD CONSTRAINT `entraineur_ibfk_1` FOREIGN KEY (`id_trophee_perso`) REFERENCES `trophee_perso` (`id_trophee_perso`),
  ADD CONSTRAINT `entraineur_ibfk_3` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_6` FOREIGN KEY (`id_saison`) REFERENCES `saison` (`id_saison`),
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`),
  ADD CONSTRAINT `equipe_ibfk_3` FOREIGN KEY (`id_trophee`) REFERENCES `trophee` (`id_trophee`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipe_ibfk_4` FOREIGN KEY (`id_terrain`) REFERENCES `terrain` (`id_terrain`),
  ADD CONSTRAINT `equipe_ibfk_5` FOREIGN KEY (`id_entraineur`) REFERENCES `entraineur` (`id_entraineur`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`),
  ADD CONSTRAINT `joueur_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `joueur_ibfk_3` FOREIGN KEY (`id_trophee_perso`) REFERENCES `trophee_perso` (`id_trophee_perso`);

--
-- Contraintes pour la table `terrain`
--
ALTER TABLE `terrain`
  ADD CONSTRAINT `terrain_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
