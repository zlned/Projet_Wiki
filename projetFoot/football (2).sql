-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 11 Janvier 2015 à 17:12
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
  `description_equipe` text NOT NULL,
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

INSERT INTO `equipe` (`id_equipe`, `nom_equipe`, `id_pays`, `id_trophee`, `id_terrain`, `id_entraineur`, `id_competition`, `id_saison`, `id_competition1`, `id_competition2`, `id_competition3`, `id_trophee1`, `id_trophee2`, `id_trophee3`, `description_equipe`) VALUES
(1, 'PARIS SAINT GERMAIN', 33, 99, 6, 1, 1, 5, 2, 3, 5, 99, 99, 99, 'Le Paris Saint-Germain Football Club (couramment abrégé en Paris SG ou PSG) est un club de football français basé à Paris, issu de la fusion en 1970 du Stade Saint-Germain, fondé en 1904, et du Paris FC fondé en 1969.\r\n\r\nPrésent en première division depuis 1974, le Paris SG est depuis 2007 le club français y évoluant depuis le plus longtemps sans discontinuité : la saison 2014-2015 est sa 41e saison consécutive dans l''élite. Le club a remporté quatre titres de champion de France en 1986, 1994, 2013 et 2014, huit Coupes de France, quatre Coupes de la Ligue et une Coupe d''Europe des vainqueurs de coupe en 1996, la seule remportée par un club français. Malgré sa jeune existence, ses performances européennes lui valent d''apparaître au troisième rang français (et 49e rang européen) du classement des clubs de football du xxe siècle selon l''IFFHS.\r\n\r\nLe Paris Saint-Germain joue à domicile au Parc des Princes, depuis juillet 1974, et s''entraîne au Centre d''entraînement Ooredoo à Saint-Germain-en-Laye, un lieu hérité du Stade Saint-Germain. Dirigé par Daniel Hechter puis Francis Borelli, le club est racheté en 1991 par le diffuseur du championnat, Canal+, qui mène le club parisien à un certain succès pendant ses premières années. En 2006, le PSG devient la propriété du fonds d''investissement américain Colony Capital, intéressé à la future rénovation du Parc des Princes. En 2011 et 2012, le Qatar Sports Investments, fonds d''investissement souverain de l’émirat du Qatar, rachète à son tour le club, lui apportant des moyens financiers considérables et en fait une des sections du nouveau club omnisports du Paris Saint-Germain. Nasser Al-Khelaïfi devient le président du conseil de surveillance.'),
(2, 'OLYMPIQUE DE MARSEILLE', 33, 99, 2, 3, 1, 5, 2, 3, 4, 99, 99, 99, 'L''Olympique de Marseille (OM) est un club de football français fondé en août 1899 par René Dufaure de Montmirail. Neuf titres de championnat de France professionnel, dix Coupes de France, trois Coupes de la Ligue, deux Trophées des champions et une Ligue des champions de l''UEFA composent le palmarès du club le plus titré et le plus populaire du football français1.\r\n\r\nLe club joue au stade de l''Huveaune de 1904 à 1937, date à laquelle est inauguré le stade Vélodrome. Auparavant, le club marseillais remporte sa première Coupe de France en 1924 et devient le tout premier club provincial à s''adjuger ce titre.\r\n\r\nMarseille est l''un des clubs qui a joué durant la saison inaugurale 1932-1933 et qui évolue encore en Ligue 1 aujourd''hui. L''OM remporte son premier Championnat en 1937, avant de descendre pour la première fois en seconde division en 1959. Une série de montées et descentes s''effectue dans les années 1960 et la décennie suivante est marquée par le premier doublé Coupe-Championnat de l''histoire du club en 1972.\r\n\r\nAprès une période noire aux débuts des années 1980 où l''OM est proche de la faillite, l''arrivée de Bernard Tapie introduit la période la plus faste du club, avec quatre titres de champion consécutifs, une Coupe de France et la Ligue des champions 1992-1993, qui reste la seule remportée par un club français. L''affaire VA-OM et ses conséquences économiques plongent le club en deuxième division. Depuis sa remontée en 1996, le club se confronte à nouveau à la justice avec l''affaire des comptes de l''OM et n''arrive plus à gagner de titre majeur, malgré notamment deux finales de Coupe UEFA (1999 et 2004). Cette période blanche prend fin avec le titre de champion de France 2009-2010 et trois victoires consécutives en Coupe de la Ligue en 2010, 2011 et 2012.\r\n\r\nLe club est depuis 2011 présidé par Vincent Labrune, l''actionnaire principale étant Margarita Louis-Dreyfus, veuve de Robert Louis-Dreyfus. L''équipe première, entraînée par Marcelo Bielsa depuis le 21 mai 2014, évolue lors de la saison 2014-2015 en première division française pour la soixante-cinquième fois de son histoire.'),
(3, 'OLYMPIQUE LYONNAIS', 33, 99, 3, 2, 1, 5, 2, 3, 99, 99, 99, 99, 'L''Olympique lyonnais, couramment abrégé en OL, est un club de football français fondé en 1950. Le club, basé dans le quartier de Gerland, est présidé depuis juin 1987 par Jean-Michel Aulas et l''équipe est entraînée par Hubert Fournier depuis le 23 mai 2014. Il évolue depuis 1989 en Ligue 1.\r\n\r\nL''Olympique lyonnais évolue dans le Stade de Gerland et s''entraîne au centre Tola Vologe, à Lyon. Il possède à son palmarès sept titres - obtenus consécutivement - de champion de France, cinq Coupes de France et une Coupe de la Ligue, ce qui en fait l''un des clubs les plus titrés du championnat de France.\r\n\r\nLe club connaît son apogée au cours des années 2000 avec sept titres consécutifs de champion de France, ce qui constitue un record françaisnote 2, entre 2002 et 2008, une Coupe de France et une Coupe de la Ligue. La section féminine du club a remporté quant à elle le championnat féminin à neuf reprisesnote 3. En 2007, les sections masculines et féminines remportent chacune leur championnat de France, pour la première fois dans l''histoire du football français. En 2008, l’Olympique lyonnais fait mieux en remportant les deux doublés coupe-championnat, homme et femme. Depuis le milieu des années 2000, la section féminine occupe les plus hauts niveaux du football féminin européen (2 titres successifs en Ligue des champions).\r\n\r\nSur le plan international, le club participe régulièrement à la plus prestigieuse des coupes européennes, la Ligue des champions. Après avoir été membre du G14, organisation des clubs les plus importants et riches d''Europe, jusqu''à sa dissolution en janvier 2008, il fait partie des fondateurs de l''association européenne des clubs.\r\n\r\nAujourd''hui, il est considéré comme l''un des clubs majeurs du football européen, avec douze qualifications en Ligue des champions d''affilée. Depuis 2011, le club rhodanien se base de plus en plus sur son centre de formation. L''Olympique lyonnais est le club français qui a joué le plus de matches européens, puisqu''il est à 212 matches (dont 107 succès) depuis ses débuts dans le fief de l''Inter Milan le 10 décembre 1958.'),
(4, 'ASSOCIATION SPORTIVE DE MONACO', 33, 99, 4, 5, 1, 5, 2, 3, 99, 99, 99, 99, 'L''Association Sportive Monaco Football Club, abrégé en ASM, est un club de football monégasque fondé le 23 août 1924. Bien qu''elle ne soit pas située sur le territoire français, l''AS Monaco est affiliée à la Fédération française de football et participe au championnat de France, dont elle est la seule équipe non française professionnelle.\r\n\r\nSept titres de champion de France, cinq Coupes de France, une Coupe de la Ligue et, au niveau européen, une finale de Coupe des vainqueurs de coupe ainsi qu''une finale de Ligue des champions de l''UEFA composent le palmarès d''un des clubs les plus prestigieux du football français.\r\n\r\nLe club évolue au Stade des Moneghetti de 1924 à 1939 puis au Stade Louis-II à partir de 1939, et s''entraîne au centre de La Turbie. Le centre de formation du club, où ont notamment été formés Lilian Thuram, Emmanuel Petit, David Trezeguet ou Thierry Henry, est réputé comme l’un des meilleurs du championnat de France.\r\n\r\nLe 29 mai 2011, le club est relégué en Ligue 2, alors qu''il est présent dans l''élite du football français de manière ininterrompue depuis 1977. Le club est présidé par le milliardaire russe Dmitry Rybolovlev, qui a acquis 66,67 % des parts du club le 23 décembre 2011. Son entraîneur est Leonardo Jardim depuis juin 2014.\r\n\r\nLe 11 mai 2013, après deux saisons en Ligue 2, le club retrouve la Ligue 1. Le 17 mai 2013 et après sa victoire deux buts à un contre Le Mans, l''AS Monaco FC remporte pour la première fois de son histoire le titre de champion de Ligue 2, le dernier qu''il manquait au club au niveau national.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `nom_joueur`, `id_pays`, `id_equipe`, `poste_joueur`, `nbr_but`, `id_trophee_perso`, `nbr_match`, `description`, `nbr_cj`, `nbr_cr`, `nbr_buttete`, `nbr_butpied`, `nbr_matchtut`, `nbr_matchremp`, `age`) VALUES
(1, 'ZLATAN IBRAHIMOVIC', 46, 1, 'ATTAQUANT', 12, 1, 11, 'Zlatan Ibrahimovi? est un footballeur international suédois, né le 3 octobre 1981 à Malmö, qui évolue actuellement au poste d''attaquant au Paris Saint-Germain.', 3, 1, 3, 8, 10, 1, 33),
(2, 'EDILSON CAVANI', 59, 1, 'ATTAQUANT', 12, 2, 16, 'Edinson Roberto Paulo Cavani Gómez, surnommé El Matador ou encore plus rarement El Botija ou Florestan, né le 14 février 1987 est un footballeur international uruguayen qui évolue au poste d''attaquant au Paris Saint-Germain.', 1, 1, 5, 7, 14, 2, 27),
(3, 'BLAISE MATUIDI', 33, 1, 'MILIEU DE TERRAIN', 3, 99, 20, 'Blaise Matuidi, né le 9 avril 1987 à Toulouse, est un footballeur international français. Milieu défensif et milieu relayeur, il débute sa carrière professionnelle à l''ES Troyes AC où il découvre la Ligue 2 et la Ligue 1 sous les ordres de Jean-Marc Furlan. Il évolue ensuite pendant quatre saisons à l''AS Saint-Étienne dont il devient le capitaine, il y découvre la coupe d''Europe et obtient ses premières sélections en équipe de France alors qu''il y joue. En 2011 il rejoint le Paris Saint-Germain avec qui il remporte le championnat de France à deux reprises, le Trophée des champions et la Coupe de la Ligue, il atteint également par deux fois les quarts-de-finale de la Ligue des champions avec le club parisien. En équipe nationale, il participe à l''Euro 2012 et à la Coupe du monde 2014 avec l''équipe de France.', 2, 0, 1, 2, 19, 1, 27),
(4, 'MARCO VERATTI', 39, 1, 'MILIEU DE TERRAIN', 1, 4, 17, 'Marco Verratti, né le 5 novembre 1992 à Pescara, est footballeur international italien qui évolue au poste de milieu de terrain au Paris Saint-Germain. Il est considéré à l''heure actuelle comme l''un des plus grands espoirs du football italien et mondial.', 7, 0, 0, 1, 15, 2, 22),
(5, 'SALVATORE SIRIGU', 39, 1, 'GARDIEN DE BUT', 0, 99, 26, 'né le 12 janvier 1987 à Nuoro, dans la province du même nom en Sardaigne, est un footballeur international italien. Il évolue au poste de gardien de but au Paris Saint-Germain.', 1, 0, 0, 0, 25, 1, 27),
(6, 'DAVID LUIZ', 55, 1, 'DEFENSEUR', 1, 99, 20, 'David Luiz Moreira Marinho, plus connu sous le nom David Luiz, né le 22 avril 1987 à Diadema, dans l''État de São Paulo, est un footballeur brésilien évoluant au Paris Saint-Germain2 où il joue au poste de défenseur central. Il peut aussi jouer en tant que latéral, ou en tant que milieu défensif. Il possède, à l''état civil, la double nationalité : brésilienne et portugaise.', 1, 0, 0, 1, 17, 3, 27),
(7, 'JAVIER PASTORE', 54, 1, 'MILIEU DE TERRAIN', 1, 99, 24, 'Javier Matías Pastore (surnommé El Flaco), né le 20 juin 1989 à Córdoba, est un footballeur international argentin, qui évolue au poste de milieu offensif au Paris Saint-Germain.', 0, 0, 0, 1, 18, 6, 25),
(8, 'LUCAS MOURA', 55, 1, 'MILIEU DE TERRAIN', 6, 99, 26, 'Lucas Rodrigues Moura da Silva dit Lucas Moura ou plus simplement Lucas, né le 13 août 1992 à São Paulo, est un footballeur international brésilien, sélectionné dès l''âge de 19 ans, qui évolue au poste de milieu offensif au Paris Saint-Germain.\r\n\r\nDoté d''une grande vitesse et de grandes qualités techniques, il est est considéré comme l''un des plus grands espoirs du football Brésilien et mondial.', 1, 0, 1, 5, 22, 4, 22),
(9, 'THIAGO MOTTA', 39, 1, 'MILIEU DE TERRAIN', 0, 99, 22, 'Thiago Motta Santon Olivares (né le 28 août 1982 à São Bernardo do Campo) est un joueur de football italo-brésilien qui évolue au poste de milieu relayeur. Il représente l''Italie depuis février 2011.\r\n\r\nIl joue actuellement au Paris Saint-Germain.', 5, 0, 0, 0, 20, 2, 32),
(10, 'GREGORY VAN DER WIEL', 31, 1, 'DEFENSEUR', 0, 99, 19, 'Gregory Kurtley van der Wiel est un footballeur professionnel néerlandais né le 3 février 1988 à Amsterdam.\r\n\r\nIl évolue au poste de défenseur latéral droit au Paris-Saint-Germain et est international néerlandais.', 1, 1, 0, 0, 15, 4, 26),
(11, 'THIAGO SILVA', 55, 1, 'DEFENSEUR', 0, 3, 13, 'Thiago Emiliano da Silva, né le 22 septembre 1984 à Rio de Janeiro, est un footballeur international brésilien qui joue au poste de défenseur central au Paris Saint-Germain.', 1, 0, 0, 0, 12, 1, 30),
(12, 'STEVE MANDANDA', 33, 2, 'GARDIEN DE BUT', 0, 99, 17, 'Steve Mandanda, né le 28 mars 1985 à Kinshasa, est un footballeur international français qui évolue au poste de gardien de but à l''Olympique de Marseille. Il est le frère du gardien de but international congolais Parfait Mandanda.', 1, 0, 0, 0, 17, 0, 29),
(13, 'ANDRE AYEW', 23, 2, 'ATTAQUANT', 3, 99, 17, 'André Ayew, né le 17 décembre 1989 à Seclin, est un footballeur international ghanéen qui évolue au poste de milieu de terrain à l''Olympique de Marseille. Il possède également la nationalité française.', 3, 0, 1, 2, 15, 2, 24),
(14, 'NICOLAS NKOULOU', 237, 2, 'DEFENSEUR', 2, 99, 16, 'Nicolas Nkoulou, né le 27 mars 1990 à Yaoundé, est un footballeur international camerounais qui évolue au poste de défenseur à l''Olympique de Marseille. Formé à la Kadji Sport Academies au Cameroun, il rejoint l''AS Monaco en novembre 2007. Il signe son premier contrat professionnel en 2008, à seulement 18 ans. Décrit comme très prometteur par ses pairs, il est sacré champion des réserves professionnelles en étant l''un des piliers ', 2, 0, 0, 2, 16, 0, 24),
(15, 'ANDRE PIERRE GIGNAC', 33, 2, 'ATTAQUANT', 12, 99, 17, 'André-Pierre Gignac, né le 5 décembre 1985 à Martigues, est un footballeur international français qui évolue au poste d''attaquant à l''Olympique de Marseille. André-Pierre Gignac commence à jouer au football à l''âge de cinq ans et demi à l''Étoile sportive fosséenne avant de poursuivre sa formation au FC Martigues. Lors de l''édition 2001-2002 de la Coupe Gambardella, il parvient à se hisser en demi-finale avec l''équipe martégale, éliminée par l''OGC Nice', 2, 0, 4, 8, 16, 1, 29),
(16, 'ROD FANNI', 33, 2, 'DEFENSEUR', 1, 99, 12, 'né le 6 décembre 1981 à Martigues (France), est un footballeur international français qui évolue au poste de défenseur à l''Olympique de Marseille.', 0, 0, 1, 0, 9, 3, 33),
(17, 'BENJAMIN MENDY', 33, 2, 'DEFENSEUR', 0, 99, 18, 'Benjamin Mendy est un footballeur français né le 17 juillet 1994 à Longjumeau de parents Sénégalais. Il évolue au poste d''arrière gauche à l''Olympique de Marseille.', 3, 0, 0, 0, 18, 0, 20),
(18, 'ROMAIN ALESSANDRINI', 33, 2, 'MILIEU DE TERRAIN', 1, 99, 13, 'né le 3 avril 1989 à Marseille, est un footballeur français qui évolue au poste de milieu offensif à l’Olympique de Marseille.', 0, 0, 0, 1, 9, 4, 25),
(19, 'GILBERT GIANELLI IMBULA', 33, 2, 'MILIEU DE TERRAIN', 3, 99, 19, 'né le 12 septembre 1992 à Vilvorde (Belgique), est un footballeur français d''origine congolaise qui évolue au poste de milieu de terrain à l''Olympique de Marseille. Il a grandi à Argenteuil (Val-d''Oise), dans le quartier du Val d''Argent Sud.', 1, 1, 1, 2, 19, 0, 22),
(20, 'BRICE DJA DJEDJE', 225, 2, 'DEFENSEUR', 0, 99, 18, 'né le 23 décembre 1990 à Aboudé (Côte d''Ivoire), est un footballeur international ivoirien, évoluant au poste d''arrière droit à Olympique de Marseille.\r\n\r\nIl est le cousin de l''attaquant Franck Dja Djédjé.', 1, 0, 0, 0, 18, 0, 24),
(21, 'DIMITRI PAYET', 33, 2, 'ATTAQUANT', 5, 99, 18, 'né le 29 mars 1987 à Saint-Pierre (La Réunion, France), est un footballeur international français qui évolue au poste de milieu de terrain à l''Olympique de Marseille.', 1, 0, 1, 4, 17, 1, 27),
(22, 'FLORIAN THAUVIN', 33, 2, 'ATTAQUANT', 4, 99, 19, 'né le 26 janvier 1993 à Orléans, est un footballeur français qui évolue au poste de milieu de terrain offensif à l''Olympique de Marseille.', 1, 0, 0, 4, 19, 0, 21),
(23, 'HENRI BEDIMO', 237, 3, 'DEFENSEUR', 0, 99, 11, 'Henri Bedimo Nsamé est un footballeur international camerounais né le 4 juin 1984 à Douala. Évoluant au poste de défenseur gauche, il commence sa carrière professionnelle au Toulouse FC en 2003 ', 0, 0, 0, 0, 10, 1, 30),
(24, 'CHRISTOPHE JALLET', 33, 3, 'DEFENSEUR', 0, 99, 17, 'Christophe Jallet, né le 31 octobre 1983 à Cognac, est un footballeur international français qui évolue aux postes d''arrière latéral droit ou de milieu latéral droit à l''Olympique lyonnais. Christophe Jallet débute le football à l''AL Saint-Brice, en banlieue de Cognac, puis à l''UA Cognac où il évolue alors derrière l''attaquant. Pisté par le principal club de la région, les Chamois niortais, depuis ses 13 ans, ses parents estiment qu''il est trop jeune pour partir et il reste donc à Cognac.', 2, 0, 0, 0, 17, 0, 31),
(25, 'YOHAN GOURCUFF', 33, 3, 'MILIEU DE TERRAIN', 3, 99, 7, 'Yoann Gourcuff, né le 11 juillet 1986 à Plœmeur dans le Morbihan, est un footballeur international français qui évolue au poste de meneur de jeu à l''Olympique lyonnais.', 0, 0, 0, 3, 3, 4, 28),
(26, 'YASSINE BENZIA', 33, 3, 'ATTAQUANT', 1, 99, 4, 'Yassine Benzia, né le 8 septembre 1994 à Saint-Aubin-les-Elbeuf, est un footballeur français, qui évolue au poste d''attaquant à l''Olympique lyonnais.', 0, 0, 0, 1, 1, 3, 20),
(27, 'ALEXANDRE LACAZETTE', 33, 3, 'ATTAQUANT', 17, 99, 19, 'né le 28 mai 1991 à Lyon, est un footballeur international français qui évolue au poste d''attaquant à l''Olympique lyonnais.', 1, 0, 14, 3, 19, 0, 23),
(28, 'ANTHONY LOPEZ', 35, 3, 'GARDIEN DE BUT', 0, 99, 19, 'né le 1er octobre 1990 à Givors, est un footballeur franco-portugais qui évolue au poste de gardien de but à l''Olympique lyonnais.', 0, 0, 0, 0, 19, 0, 24),
(29, 'CORENTIN TOLISSO', 33, 3, 'MILIEU DE TERRAIN', 3, 99, 19, 'né le 3 août 1994 à Tarare, est un footballeur français. Joueur polyvalent pouvant évoluer au poste de milieu de terrain ou d''arrière latéral, il joue actuellement à l''Olympique lyonnais.', 0, 0, 0, 3, 18, 1, 20),
(30, 'ARNOLD MVUEMBA', 33, 3, 'MILIEU DE TERRAIN', 0, 99, 16, 'Arnold Mvuemba Makengo, né le 28 janvier 1985 à Alençon, est un footballeur français qui évolue au poste de milieu de terrain a l''Olympique lyonnais.', 1, 0, 0, 0, 9, 7, 29),
(31, 'NABIL FEKIR', 33, 3, 'MILIEU DE TERRAIN', 7, 99, 15, 'né le 18 juillet 1993 à Lyon, est un footballeur franco-algérien? qui évolue au poste de milieu de terrain à l''Olympique lyonnais.', 3, 0, 1, 6, 15, 0, 21),
(32, 'MILAN BISEVAC', 381, 3, 'DEFENSEUR', 0, 99, 10, 'né le 31 août 1983 à Kosovska Mitrovica, est un footballeur international serbe qui évolue au poste de défenseur à l''Olympique lyonnais.', 4, 0, 0, 0, 10, 0, 31),
(33, 'STEED MALBRANQUE', 33, 3, 'MILIEU DE TERRAIN', 3, 99, 14, 'né le 6 janvier 1980 à Mouscron en Belgique, est un footballeur français qui évolue au poste de milieu offensif à l''Olympique lyonnais.\r\n\r\nIl débute sa carrière de footballeur professionnel à l''Olympique lyonnais, club dans lequel il est formé et où il remporte la Coupe Gambardella en 1997. Après des débuts prometteurs et une Coupe de la Ligue française à son palmarès, il est transféré dans le club anglais de Fulham en 2001. Il y évolue pendant 5 ans, remportant la Coupe Intertoto. Il rejoint Tottenham Hotspur en 2006 et y gagne une Coupe de la Ligue anglaise puis il rejoint Sunderland en 2008.\r\n\r\nSteed Malbranque retourne jouer dans le championnat français avec l''AS Saint-Étienne en 2011. Il n''y joue qu''un match et annonce vouloir rompre son contrat. Il se retire du football professionnel jusqu''à la fin de la saison.\r\n\r\nEn 2012, il signe un contrat d''un an avec son club formateur, l''Olympique lyonnais.', 2, 0, 1, 2, 9, 5, 34),
(34, 'AYMEN ABDENNOUR', 216, 4, 'DEFENSEUR', 0, 99, 7, 'AYMEN ABDENNOUR, né le 6 août 1989 à Sousse, est un footballeur tunisien évoluant à l''AS Monaco, en Ligue 1 française. Il mesure 1,87 m pour 84 kg.', 2, 0, 0, 0, 7, 0, 25),
(35, 'JEREMI TOULALAN', 33, 4, 'MILIEU DE TERRAIN', 0, 99, 15, 'Jérémy Toulalan, né le 10 septembre 1983 à Nantes, est un footballeur international français qui est capitaine et évolue au poste de milieu de terrain à l''AS Monaco', 5, 0, 0, 0, 14, 1, 31),
(36, 'LACINA TRAORE', 225, 4, 'ATTAQUANT', 4, 99, 14, 'Lacina Traoré, né le 20 mai 1990 à Abidjan, est un footballeur international ivoirien qui évolue au poste d''attaquant à l''AS Monaco. Formé à l''Académie Mimosifcom, il rejoint le Stade d''Abidjan dès son jeune âge. En 2006, il intègre l''équipe A du club et est titulaire à tous les matchs. En 2008, il rejoint le club roumain du CFR Cluj. Il quitte la Roumanie en 2010 pour rejoindre la Russie et le Kouban Krasnodar.', 3, 0, 1, 3, 11, 3, 24),
(37, 'DIMITAR BERBATOV', 359, 4, 'ATTAQUANT', 5, 99, 16, 'Dimitar Berbatov est un footballeur international bulgare qui évolue au poste d''attaquant à l''AS Monaco. Dimitar Berbatov naît le 30 janvier 1981 à Blagoevgrad. Ivan Berbatov, son père, était également un footballeur professionnel. Sa mère, Margarita, était une infirmière.', 4, 0, 1, 4, 15, 1, 33),
(38, 'JOAO MOUTINHO', 46, 4, 'MILIEU DE TERRAIN', 2, 4, 18, 'João Filipe Iria Santos Moutinho, plus connu sous le nom de João Moutinho, est un footballeur international portugais né le 8 septembre 1986 à Portimão. Il évolue au poste de milieu de terrain à l''AS Monaco et en équipe du Portugal.\r\n\r\nIl est placé 61e dans le "Top 100 players in the World 2013" par le magazine sportif anglais Four Four Two, devant des joueurs de grande renommée tels que Iker Casillas, Mats Hummels, Nemanja Vidi?, David Villa, Jesús Navas, Ramires, Claudio Marchisio ou encore Diego Costa.', 3, 0, 1, 1, 16, 2, 28),
(39, 'YANNICK FERREIRA CARRASCO ', 32, 4, 'ATTAQUANT', 4, 99, 18, 'né le 4 septembre 1993 à Ixelles (Belgique), est un joueur de football belge évoluant au poste de milieu de terrain à l''AS Monaco.', 1, 0, 1, 3, 15, 3, 21),
(40, 'FABINHO', 55, 4, 'DEFENSEUR', 0, 99, 17, 'Fábio Henrique Tavares, dit Fabinho, né le 23 octobre 1993 à Campinas, est un footballeur brésilien qui évolue au poste de latéral droit.', 2, 0, 0, 0, 16, 1, 21),
(41, 'LUCAS ARIEL OCAMPOS', 54, 4, 'MILIEU DE TERRAIN', 1, 99, 15, 'né le 11 juillet 1994 à Quilmes, Buenos Aires, est un footballeur argentin qui évolue au poste de milieu offensif à l''AS Monaco.', 2, 0, 0, 1, 6, 9, 20),
(42, 'Anthony MARTIAL', 33, 4, 'ATTAQUANT', 1, 99, 16, 'né le 5 décembre 1995 à Massy, est un footballeur français qui évolue au poste d''attaquant à l''AS Monaco. Il est le frère du défenseur brestois Johan Martial.', 0, 0, 0, 1, 6, 10, 19),
(43, 'RICARDO CARVALHO ', 35, 4, 'DEFENSEUR', 0, 99, 13, 'Ricardo Alberto Silveira Carvalho, dit Ricardo Carvalho, (né le 18 mai 1978 à Amarante, Portugal) est un footballeur portugais qui joue en tant que défenseur central pour la sélection portugaise et, depuis 2013, pour l''AS Monaco.', 2, 1, 0, 0, 12, 1, 36),
(44, 'Danijel SUBASIC ', 385, 4, 'GARDIEN DE BUT', 0, 99, 19, 'né le 27 octobre 1984 à Zadar (Yougoslavie, aujourd''hui Croatie), est un footballeur international croate qui évolue au poste de gardien de but à l''AS Monaco.', 2, 0, 0, 0, 19, 0, 30);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `new_new`
--
CREATE TABLE IF NOT EXISTS `new_new` (
`equipe` varchar(255)
,`ide` int(11)
);
-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `new_view`
--
CREATE TABLE IF NOT EXISTS `new_view` (
`equipe` varchar(255)
,`country` varchar(255)
,`trophee` varchar(255)
,`stade` varchar(255)
,`coach` varchar(255)
,`competition` varchar(255)
,`ide` int(11)
);
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
(31, 'PAYS-BAS', 'EUROPE'),
(32, 'BELGIQUE', 'EUROPE'),
(33, 'FRANCE', 'EUROPE'),
(35, 'PORTUGAL', 'EUROPE'),
(39, 'ITALIE', 'EUROPE'),
(46, 'SUEDE', 'EUROPE'),
(54, 'ARGENTINE', 'AMERIQUE LATINE'),
(55, 'BRESIL', 'AMERIQUE LATINE'),
(59, 'URUGUAY', 'AMERIQUE LATINE'),
(216, 'TUNISIE', 'AFRIQUE'),
(225, 'COTE D''IVOIRE', 'AFRIQUE'),
(237, 'CAMEROUN', 'AFRIQUE'),
(359, 'BULGARIE', 'EUROPE'),
(381, 'SERBIE', 'EUROPE'),
(385, 'CROITIE', 'EUROPE');

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
  `description` text NOT NULL,
  PRIMARY KEY (`id_terrain`),
  KEY `id_pays` (`id_pays`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `terrain`
--

INSERT INTO `terrain` (`id_terrain`, `nom_terrain`, `ville`, `id_pays`, `description`) VALUES
(1, 'PARC DES PRINCES', 'PARIS', 33, 'Le Parc des Princes est un stade situé au sud-ouest de la ville de Paris, dans le XVIe arrondissement, et sur le périphérique parisien. C''est le quatrième plus grand stade français mais aussi l''un des plus anciens et plus connus de la région parisienne. Propriété de la Ville de Paris, le stade est en concession à la SESE, une société filiale de Canal+, cédée en juin 2006 lors de la vente du PSG à un fonds d''investissements américain (Colony Capital), à un fonds d''investissements français (Butler) et à une banque américaine (Morgan Stanley). Le renouvellement du bail du stade est actuellement en discussion avec la Ville de Paris. Malgré de nombreuses divergences qui perdurent avec la mairie de Paris, c''est Colony Capital associé à Vinci qui devrait récupérer la concession du Parc des Princes pour une durée estimée à 60 ans.\n\nLe premier Parc fut inauguré le 18 juillet 1897 sous le nom de « Parc des Princes », mais l''actuelle enceinte signée par l''architecte Roger Taillibert date de 1972.\n\nSon club résident actuel est le Paris Saint-Germain depuis 1974. Le RC Paris y a séjourné de 1984 à 1990, le Paris FC de 1972 à 1974 puis en 1978-1979. Ceci concerne l''enceinte de 1972, car avant cette date, le RC Paris (1932-1966) et le Stade français (1945-1966) furent résidents au Parc. L''équipe de France de football et l''équipe de France de rugby à XV utilisèrent également ce stade avant l''inauguration du Stade de France en janvier 1998.\nCe site est desservi par les stations de métro Porte de Saint-Cloud et Porte d''Auteuil.'),
(2, 'VELODROME', 'MARSEILLE', 33, 'Le stade Vélodrome est une enceinte sportive située à Marseille en France. Bâti dans le 8e arrondissement de la ville, c''est le principal équipement sportif de Marseille et le second stade de France. Le Vélodrome est, depuis son inauguration en 1937, utilisé par le club de football de l''Olympique de Marseille.\r\n\r\nInitialement de 35 000 places, le stade connaît plusieurs extensions au cours du XXe siècle. Le changement le plus notable est celui précédant la Coupe du monde de football 1998, l''enceinte passant à 60 000 places et n''ayant plus de toit. Le Vélodrome changea encore de configuration en vue du Championnat d''Europe de football 2016, avec la couverture du stade et une capacité augmentée de 7 000 places.\r\n\r\nCe stade n''est pas réservé au football : il accueille dans ses débuts des courses cyclistes (d''où le nom de Vélodrome) mais aussi des rencontres du Marseille XIII, club phocéen du rugby à XIII dans les années 1950, certaines rencontres de phase finale du Championnat de France de rugby à XV et du RC Toulon ainsi que des concerts.'),
(3, 'STADE DE GERLAND ', 'LYON', 33, 'Le stade de Gerland est la principale enceinte sportive de la ville de Lyon. Situé dans le 7e arrondissement, dans le quartier de Gerland, il est actuellement utilisé par l''Olympique lyonnais. C''est le sixième plus grand stade français après le stade de France de Saint Denis, le stade Vélodrome de Marseille, le Grand Stade Lille Métropole de Lille, Parc des Princes de Paris et le stade Geoffroy Guichard à St-Etienne. Il fait l’objet d’une inscription au titre des monuments historiques depuis le 4 octobre 19673.'),
(4, 'STADE LOUIS II', 'MONACO', 33, 'Le stade Louis-II est un complexe sportif destiné à la pratique de nombreux sports en principauté de Monaco. Il comprend notamment un stade de football, des pistes d''athlétisme, une salle omnisports et un centre nautique1.\r\n\r\nIl est inauguré le 25 janvier 1985, le stade doit son nom au prince Louis II de Monaco qui fit construire l''ancien stade de la principauté (qui portait également le nom de stade Louis-II). La capacité du stade est de 18 523 places assises.'),
(5, 'STADE GEOFFROY-GUICHARD', 'SAINT-ETIENNE', 33, 'Le stade Geoffroy-Guichard, surnommé « le Chaudron » est un stade sportif français situé à Saint-Étienne, construit en 1930. Il est situé au nord de la ville dans le quartier de Carnot Le Marais.\r\n\r\nC''est le stade où se jouent les matchs de football de l''AS Saint-Étienne. À l''origine, il s''agit d''un vaste terrain de 40 000 m2 acheté par Geoffroy Guichard, fondateur des magasins Casino, qui désirait un stade pour son équipe. Il est inauguré en 1931 et comprend une piste d''athlétisme et une tribune principale de 1 000 places. Au fur et à mesure des succès de son club résident, il est agrandi et adapté pour atteindre, en 1998, la capacité de 35 616 places. En raison des travaux de rénovation pour accueillir des matchs de l''Euro 2016, la capacité est réduite pour la période 2011-2014. Elle pourra atteindre 41 965 places à la fin des travaux. Il sert aussi à des rencontres de rugby et à des concerts. En 2010, il s''agit de l''un des dix plus grands stades français à usage sportif en général.'),
(6, 'STADE DE FRANCE', 'PARIS', 33, 'Le stade de France est le plus grand stade français avec 81 338 places en configuration football/rugby. Il se situe dans le quartier de la Plaine Saint-Denis à Saint-Denis, dans la banlieue nord de Paris. Il est l''œuvre des architectes Jules Benarrous, Michel Macary, Aymeric Zublena, Michel Regembal et Claude Costantini. L''architecture de ce stade s''inspire du Worldport de la compagnie américaine Pan Am qui se situe à l''aéroport international John-F.-Kennedy de New York.\r\n\r\nIl est inauguré le 28 janvier 1998 par Jacques Chirac, président de la République, lors du match de football France - Espagne. Construit pour les besoins de la Coupe du Monde de football en France afin de remplacer le Parc des Princes jugé trop petit, il a également été conçu pour accueillir différents événements sportifs : football, rugby, athlétisme, courses automobiles. Il peut également abriter des concerts, des grands spectacles et des animations (rêve de neige et la plage au stade). Sa capacité évolue entre 70 000 (athlétisme) et 81 338 places (football, rugby, concerts et spectacles) grâce à des tribunes basses rétractables.\r\n\r\nIl a porté provisoirement le nom de stade de France – Paris 2012 (car il aurait été le stade olympique de Paris 2012) jusqu''à la désignation de Londres pour les Jeux olympiques d''été de 2012.\r\n\r\nÀ ce jour, c''est le seul stade au monde à avoir accueilli une finale de Coupe du monde de football et une finale de Coupe du monde de rugby.'),
(7, 'STADIUM MUNICIPAL DE TOULOUSE', 'TOULOUSE', 33, 'Le Stadium municipal est la plus grande enceinte sportive de Toulouse. C''est le septième stade français par la capacité. Il est situé sur l''île du Ramier, à proximité immédiate du centre de Toulouse.\r\n\r\nIl accueille l''équipe professionnelle du Toulouse Football Club (TFC), ainsi que les grands matchs de rugby du Stade toulousain en H Cup (Coupe d''Europe) ou en Top 14. Il a accueilli des matchs de coupe du monde de football, et des matchs amicaux de l''équipe de France de football. Enfin, il a accueilli des matchs de coupe du monde de rugby à XV et des matchs amicaux de l''équipe de France de rugby à XV.\r\n\r\nLe stadium est accessible via la ligne B du métro de Toulouse grâce aux stations Empalot ou Saint-Michel – Marcel-Langer, ainsi que par la ligne T1 du Tramway, arrêt Ile du Ramier'),
(8, 'STADE ALLIANZ RIVIERA', 'NICE', 33, 'L’Allianz Riviera est un stade multifonction, situé dans le quartier Saint-Isidore à Nice, dans les Alpes-Maritimes. Il compte environ 35 000 places. Son club résident est l''Olympique gymnaste club Nice Côte d''Azur qui y a livré son premier match le 22 septembre 2013. Démarré officiellement le 6 août 2011, le chantier s’est achevé en septembre 2013. L''Allianz Riviera sera l''un des stades hôtes de l''Euro 2016.');

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
(1, 'MEILLEUR JOUEUR'),
(2, 'MEILLEUR BUTEUR'),
(3, 'MEILLEUR DEFENSEUR'),
(4, 'MEILLEUR MILIEU DE TERRAIN'),
(99, '0 trophee perso');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue`
--
CREATE TABLE IF NOT EXISTS `vue` (
`country` varchar(255)
,`team` varchar(255)
,`prize` varchar(255)
,`nom_joueur` varchar(255)
,`poste` varchar(255)
,`goal` int(10)
,`matches` int(11)
,`descr` text
,`age` int(11)
,`idj` int(11)
,`jid` int(11)
);
-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue_photo_players`
--
CREATE TABLE IF NOT EXISTS `vue_photo_players` (
`joueur` varchar(255)
,`ide` int(11)
,`jie` int(11)
,`jij` int(11)
);
-- --------------------------------------------------------

--
-- Structure de la vue `new_new`
--
DROP TABLE IF EXISTS `new_new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_new` AS select `e`.`nom_equipe` AS `equipe`,`e`.`id_equipe` AS `ide` from ((`equipe` `e` join `pays` `p`) join `joueur` `j`) where ((`e`.`id_pays` = `p`.`id_pays`) and (`e`.`id_equipe` = 2));

-- --------------------------------------------------------

--
-- Structure de la vue `new_view`
--
DROP TABLE IF EXISTS `new_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_view` AS select `e`.`nom_equipe` AS `equipe`,`p`.`nom_pays` AS `country`,`t`.`nom_trophee` AS `trophee`,`s`.`nom_terrain` AS `stade`,`c`.`nom_entraineur` AS `coach`,`co`.`nom_competition` AS `competition`,`e`.`id_equipe` AS `ide` from (((((((`equipe` `e` join `pays` `p`) join `trophee` `t`) join `terrain` `s`) join `entraineur` `c`) join `saison` `sa`) join `competition` `co`) join `joueur` `j`) where ((`e`.`id_pays` = `p`.`id_pays`) and (`e`.`id_trophee` = `t`.`id_trophee`) and (`e`.`id_terrain` = `s`.`id_terrain`) and (`e`.`id_competition` = `co`.`id_competition`) and (`e`.`id_entraineur` = `c`.`id_entraineur`) and (`e`.`id_equipe` = '1'));

-- --------------------------------------------------------

--
-- Structure de la vue `vue`
--
DROP TABLE IF EXISTS `vue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue` AS select `p`.`nom_pays` AS `country`,`e`.`nom_equipe` AS `team`,`itp`.`nom_trophee_perso` AS `prize`,`j`.`nom_joueur` AS `nom_joueur`,`j`.`poste_joueur` AS `poste`,`j`.`nbr_but` AS `goal`,`j`.`nbr_match` AS `matches`,`j`.`description` AS `descr`,`j`.`age` AS `age`,`j`.`id_joueur` AS `idj`,`j`.`id_equipe` AS `jid` from (((`joueur` `j` join `pays` `p`) join `equipe` `e`) join `trophee_perso` `itp`) where ((`j`.`id_pays` = `p`.`id_pays`) and (`j`.`id_equipe` = `e`.`id_equipe`) and (`j`.`id_trophee_perso` = `itp`.`id_trophee_perso`) and (`j`.`id_joueur` = 11));

-- --------------------------------------------------------

--
-- Structure de la vue `vue_photo_players`
--
DROP TABLE IF EXISTS `vue_photo_players`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue_photo_players` AS select `j`.`nom_joueur` AS `joueur`,`e`.`id_equipe` AS `ide`,`j`.`id_equipe` AS `jie`,`j`.`id_joueur` AS `jij` from (`equipe` `e` join `joueur` `j`) where ((`e`.`id_equipe` = `j`.`id_equipe`) and (`e`.`id_equipe` = 2));

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
