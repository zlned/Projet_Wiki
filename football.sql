-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Décembre 2014 à 15:31
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `competition`
--

INSERT INTO `competition` (`id_competition`, `nom_competition`, `ville`) VALUES
(1, 'COUPE DE FRANCE', 'PARIS'),
(2, 'CHAMPIONNAT DE FRANCE', 'PARIS'),
(3, 'COUPE DE LA LIGUE', 'PARIS'),
(4, 'COUPE UEFA', 'VARSOVIE'),
(5, 'CHAMPIONS LEAGUE', 'BERLIN'),
(6, 'SUPER COUPE DE FRANCE', 'MARSEILLE'),
(99, 'pas de competition', 'X');

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE IF NOT EXISTS `entraineur` (
  `id_entraineur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entraineur` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  PRIMARY KEY (`id_entraineur`),
  KEY `id_pays` (`id_pays`),
  KEY `id_pays_2` (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `entraineur`
--

INSERT INTO `entraineur` (`id_entraineur`, `nom_entraineur`, `id_pays`) VALUES
(1, 'LAURENT BLANC', 33),
(2, 'CHRISTOPHE GALTIER', 33),
(3, 'MARCELO BIESLA', 55),
(4, 'HUBERT FOURNIER', 33),
(5, 'LEONARDO JARDIM', 35);

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
  `id_competition1` int(11) NOT NULL,
  `id_competition2` int(11) NOT NULL,
  `id_competition3` int(11) NOT NULL,
  `id_trophee1` int(11) NOT NULL,
  `id_trophee2` int(11) NOT NULL,
  `id_trophee3` int(11) NOT NULL,
  PRIMARY KEY (`id_equipe`),
  KEY `id_pays` (`id_pays`),
  KEY `id_trophee` (`id_trophee`),
  KEY `id_terrain` (`id_terrain`),
  KEY `id_entraineur` (`id_entraineur`),
  KEY `id_pays_2` (`id_pays`),
  KEY `id_trophee_2` (`id_trophee`),
  KEY `id_terrain_2` (`id_terrain`),
  KEY `id_saison` (`id_saison`),
  KEY `id_competition1` (`id_competition1`),
  KEY `id_competition2` (`id_competition2`),
  KEY `id_competition3` (`id_competition3`),
  KEY `id_trophee1` (`id_trophee1`),
  KEY `id_trophee2` (`id_trophee2`),
  KEY `id_trophee3` (`id_trophee3`),
  KEY `id_competition` (`id_competition`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom_equipe`, `id_pays`, `id_trophee`, `id_terrain`, `id_entraineur`, `id_competition`, `id_saison`, `id_competition1`, `id_competition2`, `id_competition3`, `id_trophee1`, `id_trophee2`, `id_trophee3`) VALUES
(1, 'PARIS SAINT GERMAIN', 33, 99, 6, 1, 1, 5, 2, 3, 5, 99, 99, 99),
(2, 'OLYMPIQUE DE MARSEILLE', 33, 99, 2, 3, 1, 5, 2, 3, 4, 99, 99, 99),
(3, 'OLYMPIQUE LYONNAIS', 33, 99, 3, 2, 1, 5, 2, 3, 99, 99, 99, 99),
(4, 'ASSOCIATION SPORTIVE DE MONACO', 33, 99, 4, 5, 1, 5, 2, 3, 99, 99, 99, 99);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `nom_joueur`, `id_pays`, `id_equipe`, `poste_joueur`, `nbr_but`, `id_trophee_perso`, `nbr_match`, `description`, `nbr_cj`, `nbr_cr`, `nbr_buttete`, `nbr_butpied`, `nbr_matchtut`, `nbr_matchremp`, `age`) VALUES
(1, 'ZLATAN IBRAHIMOVIC', 46, 1, 'ATTAQUANT', 12, 1, 11, 'Zlatan Ibrahimovi? est un footballeur international suédois, né le 3 octobre 1981 à Malmö, qui évolue actuellement au poste d''attaquant au Paris Saint-Germain.', 3, 1, 3, 8, 10, 1, 33),
(2, 'EDILSON CAVANI', 59, 1, 'ATTAQUANT', 12, 2, 16, 'Edinson Roberto Paulo Cavani Gómez, surnommé El Matador ou encore plus rarement El Botija ou Florestan, né le 14 février 1987 est un footballeur international uruguayen qui évolue au poste d''attaquant au Paris Saint-Germain.', 1, 1, 5, 7, 14, 2, 27),
(3, 'BLAISE MATUIDI', 33, 1, 'MILIEU DE TERRAIN', 3, 99, 20, 'Blaise Matuidi, né le 9 avril 1987 à Toulouse, est un footballeur international français. Milieu défensif et milieu relayeur, il débute sa carrière professionnelle à l''ES Troyes AC où il découvre la Ligue 2 et la Ligue 1 sous les ordres de Jean-Marc Furlan. Il évolue ensuite pendant quatre saisons à l''AS Saint-Étienne dont il devient le capitaine, il y découvre la coupe d''Europe et obtient ses premières sélections en équipe de France alors qu''il y joue. En 2011 il rejoint le Paris Saint-Germain avec qui il remporte le championnat de France à deux reprises, le Trophée des champions et la Coupe de la Ligue, il atteint également par deux fois les quarts-de-finale de la Ligue des champions avec le club parisien. En équipe nationale, il participe à l''Euro 2012 et à la Coupe du monde 2014 avec l''équipe de France.', 2, 0, 1, 2, 19, 1, 27),
(4, 'MARCO VERATTI', 39, 1, 'MILIEU DE TERRAIN', 1, 99, 17, 'Marco Verratti, né le 5 novembre 1992 à Pescara, est footballeur international italien qui évolue au poste de milieu de terrain au Paris Saint-Germain. Il est considéré à l''heure actuelle comme l''un des plus grands espoirs du football italien et mondial.', 7, 0, 0, 1, 15, 2, 22),
(5, 'STEVE MANDANDA', 33, 2, 'GARDIEN DE BUT', 0, 99, 17, 'Steve Mandanda, né le 28 mars 1985 à Kinshasa, est un footballeur international français qui évolue au poste de gardien de but à l''Olympique de Marseille. Il est le frère du gardien de but international congolais Parfait Mandanda.', 1, 0, 0, 0, 17, 0, 29),
(6, 'ANDRE AYEW', 23, 2, 'ATTAQUANT', 3, 99, 17, 'André Ayew, né le 17 décembre 1989 à Seclin, est un footballeur international ghanéen qui évolue au poste de milieu de terrain à l''Olympique de Marseille. Il possède également la nationalité française.', 3, 0, 1, 2, 15, 2, 24),
(7, 'NICOLAS NKOULOU', 237, 2, 'DEFENSEUR', 2, 99, 16, 'Nicolas Nkoulou, né le 27 mars 1990 à Yaoundé, est un footballeur international camerounais qui évolue au poste de défenseur à l''Olympique de Marseille. Formé à la Kadji Sport Academies au Cameroun, il rejoint l''AS Monaco en novembre 2007. Il signe son premier contrat professionnel en 2008, à seulement 18 ans. Décrit comme très prometteur par ses pairs, il est sacré champion des réserves professionnelles en étant l''un des piliers ', 2, 0, 0, 2, 16, 0, 24),
(8, 'ANDRE PIERRE GIGNAC', 33, 2, 'ATTAQUANT', 12, 99, 17, 'André-Pierre Gignac, né le 5 décembre 1985 à Martigues, est un footballeur international français qui évolue au poste d''attaquant à l''Olympique de Marseille. André-Pierre Gignac commence à jouer au football à l''âge de cinq ans et demi à l''Étoile sportive fosséenne avant de poursuivre sa formation au FC Martigues. Lors de l''édition 2001-2002 de la Coupe Gambardella, il parvient à se hisser en demi-finale avec l''équipe martégale, éliminée par l''OGC Nice', 2, 0, 4, 8, 16, 1, 29);

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
(23, 'GHANA', 'AFRIQUE'),
(33, 'FRANCE', 'EUROPE'),
(35, 'PORTUGAL', 'EUROPE'),
(39, 'ITALIE', 'EUROPE'),
(46, 'SUEDE', 'EUROPE'),
(55, 'BRESIL', 'AMERIQUE LATINE'),
(59, 'URUGUAY', 'AMERIQUE LATINE'),
(216, 'TUNISIE', 'AFRIQUE'),
(237, 'CAMEROUN', 'AFRIQUE');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `terrain`
--

INSERT INTO `terrain` (`id_terrain`, `nom_terrain`, `ville`, `id_pays`) VALUES
(1, 'STADE DE FRANCE', 'PARIS', 33),
(2, 'VELODROME', 'MARSEILLE', 33),
(3, 'STADE DE GERLAND ', 'LYON', 33),
(4, 'STADE LOUIS II', 'MONACO', 33),
(5, 'STADE GEOFFROY-GUICHARD', 'SAINT-ETIENNE', 33),
(6, 'STADE DE FRANCE', 'PARIS', 33);

-- --------------------------------------------------------

--
-- Structure de la table `trophee`
--

CREATE TABLE IF NOT EXISTS `trophee` (
  `id_trophee` int(11) NOT NULL AUTO_INCREMENT,
  `nom_trophee` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trophee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

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
(7, 'SUPER COUPE UEFA'),
(99, '0 trophee');

-- --------------------------------------------------------

--
-- Structure de la table `trophee_perso`
--

CREATE TABLE IF NOT EXISTS `trophee_perso` (
  `id_trophee_perso` int(11) NOT NULL AUTO_INCREMENT,
  `nom_trophee_perso` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trophee_perso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `trophee_perso`
--

INSERT INTO `trophee_perso` (`id_trophee_perso`, `nom_trophee_perso`) VALUES
(1, 'MEILLEUR JOUR'),
(2, 'MEILLEUR BUTEUR'),
(99, '0 trophee perso');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entraineur`
--
ALTER TABLE `entraineur`
  ADD CONSTRAINT `entraineur_ibfk_3` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`),
  ADD CONSTRAINT `equipe_ibfk_10` FOREIGN KEY (`id_trophee1`) REFERENCES `trophee` (`id_trophee`),
  ADD CONSTRAINT `equipe_ibfk_11` FOREIGN KEY (`id_trophee2`) REFERENCES `trophee` (`id_trophee`),
  ADD CONSTRAINT `equipe_ibfk_12` FOREIGN KEY (`id_trophee3`) REFERENCES `trophee` (`id_trophee`),
  ADD CONSTRAINT `equipe_ibfk_13` FOREIGN KEY (`id_competition`) REFERENCES `competition` (`id_competition`),
  ADD CONSTRAINT `equipe_ibfk_3` FOREIGN KEY (`id_trophee`) REFERENCES `trophee` (`id_trophee`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipe_ibfk_4` FOREIGN KEY (`id_terrain`) REFERENCES `terrain` (`id_terrain`),
  ADD CONSTRAINT `equipe_ibfk_5` FOREIGN KEY (`id_entraineur`) REFERENCES `entraineur` (`id_entraineur`),
  ADD CONSTRAINT `equipe_ibfk_6` FOREIGN KEY (`id_saison`) REFERENCES `saison` (`id_saison`),
  ADD CONSTRAINT `equipe_ibfk_7` FOREIGN KEY (`id_competition1`) REFERENCES `competition` (`id_competition`),
  ADD CONSTRAINT `equipe_ibfk_8` FOREIGN KEY (`id_competition2`) REFERENCES `competition` (`id_competition`),
  ADD CONSTRAINT `equipe_ibfk_9` FOREIGN KEY (`id_competition3`) REFERENCES `competition` (`id_competition`);

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
