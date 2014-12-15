-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Décembre 2014 à 15:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `flux_rss`
--

-- --------------------------------------------------------

--
-- Structure de la table `flux`
--

CREATE TABLE IF NOT EXISTS `flux` (
  `id_flux` varchar(100) NOT NULL,
  `date_flux` text NOT NULL,
  `title_flux` text NOT NULL,
  `link_flux` text NOT NULL,
  `description_flux` text NOT NULL,
  PRIMARY KEY (`id_flux`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `flux`
--

INSERT INTO `flux` (`id_flux`, `date_flux`, `title_flux`, `link_flux`, `description_flux`) VALUES
('" .$id_flux. "', '" .$item_date. "', '" .utf8_decode ($item_title) . "', '" . $item_url . "', '" . utf8_decode ($item_description) . "'),
('047d262054ae41ea3d38d2e8d41e5540', '2014-12-8', 'Foot - CM (F) - La Coupe du Monde féminine sur Eurosport', 'http://www.lequipe.fr/Medias/Actualites/La-coupe-du-monde-feminine-sur-eurosport/520601#xtor=RSS-1', 'Eurosport a acquis les droits audiovisuels de la Coupe du monde... '),
('05c9d2e05ec7e67967462e06be0e9f68', '2014-12-8', 'L1 : le classement des passeurs décisifs', 'http://www.maxifoot.fr/football-rss209213/classement-passeurs.php', 'La LFP a actualisé ce lundi le classement des passeurs décisifs après la 17e journée de Ligue 1 disputée ce week-end.\n\nAvec une nouvelle passe réuss...'),
('07f462b066cc376c378c819f50ed73c4', '2014-12-10', 'LdC : attaque, défense... le Barça domine Paris', 'http://www.maxifoot.fr/football-rss209291/ldc-attaque.php', 'Si le Paris Saint-Germain se déplace ce mercredi (20h45) sur la pelouse du FC Barcelone avec le statut de seule équipe encore invaincue en Europe tout...'),
('08fbb0a625085fb613de941af9f0871f', '2014-10-28', 'Foot - Transfert - Adriano encore loin du Havre', 'http://www.lequipe.fr/Football/Actualites/Adriano-encore-loin-du-havre/510392#xtor=RSS-1', 'Comme annoncé lundi par son agent, Adriano va bien aller au Havre... '),
('092b8c4ddec5a499ce1cc1bb53cf5fe8', '2014-11-26', 'Les Canaris à nouveau seuls deuxièmes', 'http://www.lfp.fr/ligue1/article/les-canaris-a-nouveau-seuls-deuxiemes.htm', 'Après la 14e journée de Ligue 1, le FC Nantes reprend seul la 2e place du championnat des pelouses derrière le Paris SG.'),
('0ea06f5cabe836ab9baa3ff412e84d9c', '2014-12-5', 'Les stats officielles de la 16e journée', 'http://www.lfp.fr/ligue1/article/les-stats-officielles-de-la-16e-journee-3.htm', 'Retrouvez les statistiques officielles de la 16e journée de Ligue 1 en partenariat avec AMISCO.'),
('13170c3e6ed47cb9b81bdef6068f91f0', '2014-08-19', 'Rugby - Transfert - Adam Jones signe à Cardiff', 'http://www.lequipe.fr/Rugby/Actualites/Adam-jones-signe-a-cardiff/491556#xtor=RSS-1', 'Après avoir passé 11 ans chez les Ospreys, Adam Jones (GAL, 33ans, 95... '),
('187676e92b3e39094ec57e9cc5e1bdf5', '2014-12-9', 'PSG : ça sent bon la prolongation pour Pastore', 'http://www.maxifoot.fr/football-rss209242/psg-ca.php', 'Comme annoncé il y a plusieurs semaines maintenant, Javier Pastore (25 ans, 17 matchs et 1 but en L1 cette saison), redevenu performant et régulier, d...'),
('1e014de379787a3c508443fcb0e594a9', '2014-11-28', 'Le FC Lorient met l?UNICEF à l?honneur', 'http://www.lfp.fr/ligue1/article/le-fc-lorient-met-l-unicef-a-l-honneur.htm', 'A l?occasion de FC Lorient ? RC Lens comptant pour la 14e journée de Ligue 1, Le FC Lorient a placé la rencontre sous l?égide de l?UNICEF.'),
('1f4f48b07a9e3af3d2048869622785e6', '2014-06-24', 'Basket - NBA - Les Chicago Bulls pensent au transfert de Carmelo Anthony (New York Knicks) depuis le mois de janvier', 'http://www.lequipe.fr/Basket/Actualites/Carmelo-chicago-y-pense-depuis-janvier/476781#xtor=RSS-1', 'Alors que Carmelo Anthony a renoncé à sa dernière année de contrat... '),
('202304213fa0e81727d5ea93ccf4a50d', '2014-12-8', 'La très bonne passe de Dimitri Payet', 'http://www.lfp.fr/ligue1/article/la-tres-bonne-passe-de-dimitri-payet.htm', 'Avec trois passes d?avance après la 17e journée, Dimitri Payet (OM) devient un leader de plus en plus solide du classement officiel des passeurs de Ligue 1.'),
('22462b8748c69f9e07bf36f560137c50', '2014-10-18', 'Basket - Transfert - Echange Anthony - Bynum', 'http://www.lequipe.fr/Basket/Actualites/Echange-anthony-bynum/507613#xtor=RSS-1', 'Boston et Detroit ont procédé vendredi à un échange de remplaçants.... '),
('267bb3940ebe6d69bf41baa74d244275', '2014-06-11', 'Basket - Transfert - Deux recrues françaises, ''JBAM'' et Corosine, à Paris-Levallois', 'http://www.lequipe.fr/Basket/Actualites/-jbam-et-corosine-au-pl/473042#xtor=RSS-1', 'Paris-Levallois a bouclé son recrutement français. Le club de la... '),
('2694e7511a9b8d7ca62d39567afca9e7', '2014-12-9', 'LdC : 11 équipes déjà qualifiées pour les 8es', 'http://www.maxifoot.fr/football-rss209246/ldc-equipes.php', 'Avant la 6e et dernière journée de la phase de poules, on connaît déjà 11 équipes qualifiées pour les 8es de finale de la Ligue des Champions.\n\nLe P...'),
('26c6099172ff989bd344894ddf80a8e5', '2014-12-10', 'PSG : Pastore cherche la victoire à tout prix', 'http://www.maxifoot.fr/football-rss209303/psg-pastore.php', 'Le Paris Saint-Germain affronte le FC Barcelone au Camp Nou ce mercredi (20h45). Une victoire sur la pelouse du Barça serait un déclic pour la suite d...'),
('27df10d0d0c8f639fbc66613ada08466', '2014-12-8', 'Foot - L1 - David Faupala a parié contre Lens', 'http://www.lequipe.fr/Football/Actualites/Faupala-a-parie-contre-lens/520630#xtor=RSS-1', 'David Faupala doit certainement regretter ses derniers tweets. Le... '),
('2a0550ee6054b31e82c87ba6eec4da29', '2014-12-8', 'Foot - ANG - City - Agüero absent un mois ?', 'http://www.lequipe.fr/Football/Actualites/Aguero-absent-un-mois/520596#xtor=RSS-1', 'Sorti pour blessure dès la 7e minute de jeu face à Everton (1-0),... '),
('2a0dd58522b4600ea024cf41b4819d79', '2014-12-1', 'Les stats officielles de la 15e journée', 'http://www.lfp.fr/ligue1/article/les-stats-officielles-de-la-15e-journee-3.htm', 'Retrouvez les statistiques officielles de la 15e journée de Ligue 1 en partenariat avec AMISCO.'),
('2a19849c435dbbfba80c139f93a69ca6', '2014-11-12', 'L?OL tient son nouveau duo !', 'http://www.lfp.fr/ligue1/article/l-ol-tient-son-nouveau-duo.htm', 'Alors qu?Alexandre Lacazette (OL) prend seul les commandes du classement officiel des buteurs de Ligue 1 (11 buts), Nabil Fekir a à la fois signé son 2e doublé et le 300e but de la saison !'),
('2b98a2fa82636821d6540ec509969004', '2014-11-24', 'Dimitri Payet déboule !', 'http://www.lfp.fr/ligue1/article/dimitri-payet-deboule.htm', 'Fort d?un doublé à la passe face aux Girondins, Dimitri Payet (OM) prend la tête du classement officiel des passeurs de Ligue 1 avec cinq unités.'),
('331e32ac471ae300d98a8fc6e90406de', '2014-12-5', 'Ça se bagarre pour la 3e place !', 'http://www.lfp.fr/ligue1/article/ca-se-bagarre-pour-la-3e-place.htm', 'Derrière le duo Lacazette (OL)-Gignac (OM), en tête du classement des buteurs de Ligue 1, la 3e place propose une lutte intense entre dix buteurs après la 16e journée.'),
('37b504523b56b18d48ccef9ff2153e43', '2014-07-24', 'Basket - Transfert - Ray Allen devrait rejoindre LeBron James chez les Cleveland Cavaliers', 'http://www.lequipe.fr/Basket/Actualites/Ray-allen-vers-cleveland/484944#xtor=RSS-1', 'Ray Allen (39 ans) va continuer de fouler les parquets NBA la saison... '),
('39bd0ff113c9b98bf7a50787b256a33f', '2014-12-8', 'Foot - C1 - Arsenal - Wenger : «Répondre de manière forte»', 'http://www.lequipe.fr/Football/Actualites/-repondre-de-maniere-forte/520737#xtor=RSS-1', 'Deuxième de son groupe derrière Dortmund, Arsenal peut finir in... '),
('3eddcb33d322214ab1efc8e64409d741', '2014-06-15', 'Basket - Pro A - Transfert - Châlons-Reims se renforce', 'http://www.lequipe.fr/Basket/Actualites/Chalon-reims-se-renforce/474115#xtor=RSS-1', 'Châlons-Reims, invité à jouer en Pro A la saison prochaine pour... '),
('4059d9d06e3751d216eda49772e1fa59', '2014-07-31', 'Rugby - Transfert - Inu en joker au Stade Français', 'http://www.lequipe.fr/Rugby/Actualites/Inu-en-joker-au-stade-francais/486644#xtor=RSS-1', 'Le Stade Français a officialisé sur son compte Twitter la signature... '),
('428e0ebcf1718de6fde9d2683aa2d971', '2014-11-12', 'Jordan Veretout, Jaune à tout faire', 'http://www.lfp.fr/ligue1/article/jordan-veretout-jaune-a-tout-faire.htm', 'Meilleur buteur et meilleur passeur du FC Nantes (5e de Ligue 1), Jordan Veretout a grandement contribué à porter l?invincibilité des Canaris à neuf matchs cette saison.'),
('4411c0de629f2bd08275d471ae4e03a0', '2014-11-28', 'adidas présente le nouveau ballon de match officiel de Ligue 1®', 'http://www.lfp.fr/ligue1/article/adidas-presente-le-nouveau-ballon-de-match-officiel-de-ligue-1.htm', ' '),
('49368ac5b3a4a35a1b27fe20508a1044', '2014-12-10', 'PSG : 1 600 supporters au Camp Nou !', 'http://www.maxifoot.fr/football-rss209311/psg-supporters.php', 'Les supporters du Paris Saint-Germain ont décidé de se déplacer en masse pour encourager leur équipe au Camp Nou face au FC Barcelone ce mercredi (20h...'),
('4f714e3c86e4ae7d4dc5a7de3377d26a', '2014-12-8', 'Foot - Etranger - Un Ribéry record, un Yanga-Mbiwa en tort', 'http://www.lequipe.fr/Football/Actualites/Un-ribery-record-un-yanga-mbiwa-en-tort/520559#xtor=RSS-1', 'Ribéry (Bayern Munich), Valbuena (Dynamo Moscou) et Sissoko... '),
('4fcd444160c7e0d9ea101e5fb6d7ab46', '2014-12-8', 'Foot - ITA - Cesena se sépare de Pierpaolo Bisoli', 'http://www.lequipe.fr/Football/Actualites/Cesena-se-separe-de-bisoli/520635#xtor=RSS-1', 'Les dirigeants de Cesena, avant-dernier de Serie A, ont décidé de se... '),
('5172b59a08d6b1945938efa2e3581d00', '2014-12-8', 'Foot - FIFA - Racisme : le HNK Rijeka pas sanctionné', 'http://www.lequipe.fr/Football/Actualites/Racisme-le-hnk-rijeka-pas-sanctionne/520685#xtor=RSS-1', 'Le club croate de HNK Rijeka ne sera pas sanctionné suite aux... '),
('5a2580dc33cee0e95bb8e24cc2893902', '2014-11-24', 'Les stats officielles de la 14e journée', 'http://www.lfp.fr/ligue1/article/les-stats-officielles-de-la-14e-journee-3.htm', 'Retrouvez les stats officielles de la 14e journée de Ligue 1 en partenariat avec AMISCO.'),
('5ccec7439816c4eb36de08c03fb51fb2', '2014-12-8', 'Hull City : Ben Arfa répond à Larqué', 'http://www.maxifoot.fr/football-rss209220/hull-city.php', 'Alors que la presse anglaise évoquait un clash entre Steve Bruce et Hatem Ben Arfa (27 ans, 8 matchs en Premier League cette saison) à la mi-temps du ...'),
('5ea964bf1f6ea8eed9011de13b3dc7ca', '2014-12-8', 'Foot - ESP - Barça - Luis Enrique veut plus de concurrence', 'http://www.lequipe.fr/Football/Actualites/Luis-enrique-veut-plus-de-concurrence/520586#xtor=RSS-1', 'Après la large victoire de ses joueurs dans le derby contre... '),
('6270f2fb092d2ee7ae770c0a9c4153bb', '2014-12-8', 'Foot - C1 - Monaco - Sans Carvalho, avec Echiejile', 'http://www.lequipe.fr/Football/Actualites/Sans-carvalho-avec-echiejile/520728#xtor=RSS-1', 'Toujours blessÃ© Ã  un mollet, Ricardo Carvalho sera encore absent face... '),
('65512767d6753928693b4c7fa782edd3', '2014-07-24', 'Basket - Transfert - Jameer Nelson à Dallas ?', 'http://www.lequipe.fr/Basket/Actualites/Jameer-nelson-a-dallas/484947#xtor=RSS-1', 'Jameer Nelson aurait donné son accord pour rejoindre les Dallas... '),
('699837a5e28054ccb8eefdd0931feaa1', '2014-12-8', 'Foot - L1 - 17e j. - Le top 5 arrêts !', 'http://www.lequipe.fr/Football/Actualites/Le-top-5-arrets/520604#xtor=RSS-1', 'Voici notre sélection des 5 plus beaux arrêts de la 17e journée de... '),
('6ad7b505f1e19dce3b1832f473960268', '2014-12-8', 'Foot - C1 - Le Real sans Rodriguez ?', 'http://www.lequipe.fr/Football/Actualites/Le-real-sans-rodriguez/520620#xtor=RSS-1', '	Sorti sur blessure en deuxième période au cours de la victoire 3-0... '),
('6b8fb29e2d8026173dc066215526ae27', '2014-12-7', 'PSG : Messi reconnaît une maturité, mais...', 'http://www.maxifoot.fr/football-rss209138/psg-messi.php', 'Actuel leader de son groupe en Ligue des Champions, le Paris Saint-Germain aura droit à une véritable finale face au FC Barcelone mercredi (20h45). Po...'),
('6e66b0f246fba577c0ada06f8133875d', '2014-12-3', 'Toujours la meilleure note pour le Parc', 'http://www.lfp.fr/ligue1/article/toujours-la-meilleure-note-pour-le-parc.htm', 'Après la 15e journée de Ligue 1, le classement des pelouses reste dominé par le Paris SG.'),
('700cf878b652e4d90c42b9f715e65eb8', '2014-12-8', 'Foot - C1 - Monaco - Valère Germain : «Jouer le nul, ce serait une erreur»', 'http://www.lequipe.fr/Football/Actualites/-jouer-le-nul-une-erreur/520715#xtor=RSS-1', 'Valère Germain annonce clairement la couleur : pas question pour... '),
('7298701a3ae44ae486fcfd7d7cd9dc8e', '2014-12-10', 'LdC : le Barça gagne plus que Paris', 'http://www.maxifoot.fr/football-rss209289/ldc-barca.php', 'Le Paris Saint-Germain a rendez-vous avec une équipe du FC Barcelone en forme ce mercredi (20h45) au Camp Nou. Le club catalan affiche 80% de victoire...'),
('764f045a4224e8e3eb50e890ab605ef8', '2014-08-5', 'Cyclisme - Transferts - Le Néerlandais Bauke Mollema signe chez Trek', 'http://www.lequipe.fr/Cyclisme-sur-route/Actualites/Mollema-signe-chez-trek/487799#xtor=RSS-1', 'Dixième du Tour de France, le Néerlandais Bauke Mollema (Belkin) va... '),
('79437986dc676e0c407e90db8bf79e6f', '2014-12-8', 'Bordeaux : Diabaté pense être le meilleur', 'http://www.maxifoot.fr/football-rss209221/bordeaux-diabate.php', 'La victoire face à Lorient samedi (3-2) en est la preuve, Bordeaux a besoin de Cheick Diabaté (26 ans, 13 matchs et 8 buts en L1 cette saison), auteur...'),
('8805cd2ffc94555418ed8cbdeb140ce9', '2014-12-8', 'LdC : Barça - PSG, un Anglais au sifflet', 'http://www.maxifoot.fr/football-rss209215/ldc-barca.php', 'Le match entre le FC Barcelone et le Paris Saint-Germain prévu mercredi soir au Camp Nou pour la dernière journée de la phase de groupes de la Ligue d...'),
('888e623c5fdb794ef3d57758e254e3da', '2014-06-19', 'Basket - Pro A - Transfert - Beaubois jouera au Mans... sauf si la NBA le demande', 'http://www.lequipe.fr/Basket/Actualites/Beaubois-au-mans/475361#xtor=RSS-1', 'Rodrigue Beaubois, champion NBA avec Dallas en 2011, revient en Pro A... '),
('8d4b79a6388937d2862fb6fdd108b13f', '2014-11-24', 'Paul-Georges Ntep, un homme de derbys', 'http://www.lfp.fr/ligue1/article/paul-georges-ntep-un-homme-de-derbys.htm', 'Après avoir été passeur lors du succès contre le FC Lorient, Paul-Georges Ntep a offert au Stade Rennais une victoire à l?EA Guingamp dans un 2e derby breton de suite.'),
('a1f313f4386c008409e73e3ab87611ad', '2014-12-10', 'PSG : le onze de rêve de Matuidi', 'http://www.maxifoot.fr/football-rss209312/psg-onze.php', 'Le milieu de terrain Blaise Matuidi (27 ans, 15 matchs en Ligue 1 cette saison) a dévoilé ce mercredi son onze de rêve sur la chaîne Youtube du Paris ...'),
('a528d226bb658dc13cc2b6b3583184d4', '2014-12-8', 'Foot - Coupe - Quatre chocs de L1 en 32es', 'http://www.lequipe.fr/Football/Actualites/Quatre-chocs-de-l1-en-32es/520724#xtor=RSS-1', 'Quatre oppositions entre clubs de Ligue 1 (Bordeaux-Toulouse,... '),
('ad904fb698d3533133bd3d9c796de4a8', '2014-12-8', 'Foot - Transfert - Collin à Orlando City (officiel)', 'http://www.lequipe.fr/Football/Actualites/Collin-a-orlando-city-officiel/520710#xtor=RSS-1', 'Comme pressenti, Aurélien Collin (28 ans) évoluera bien au sein de la... '),
('b1a0d1d060fed97e6cb77253b232a1a5', '2014-12-8', 'Foot - ESP - Le Barça insulté à Bernabeu', 'http://www.lequipe.fr/Football/Actualites/Le-barca-insulte-a-bernabeu/520605#xtor=RSS-1', 'Javier Tebas, le président de la Ligue de football professionnel... '),
('b22abeff2c811defeace6cb9a38e9d65', '2014-12-8', 'Real : Ancelotti confirme une cible', 'http://www.maxifoot.fr/football-rss209223/real-ancelotti.php', 'Confronté aux blessures de James Rodriguez et Luka Modric au milieu de terrain, le Real Madrid devrait réagir lors du mercato hivernal à venir. Et com...'),
('b39b186f15c5b46788607eef3b476db8', '2014-07-24', 'Basket - Transfert - Michael Thompson rejoint Rouen', 'http://www.lequipe.fr/Basket/Actualites/Thompson-rejoint-rouen/485020#xtor=RSS-1', 'Rouen a annoncé jeudi la signature pour un an de Michael "Juice"... '),
('b54f4062dac3156a105cfb4333560ac3', '2014-12-8', 'Foot - L2/LFP - Les élus nîmois reçus par Thiriez', 'http://www.lequipe.fr/Football/Actualites/Les-elus-nimois-recus-par-thiriez/520668#xtor=RSS-1', 'Plusieurs élus nîmois, de tous bords politiques, ont été reçus, ce... '),
('b6f726c566a1c7a37b211ad8aa45dd11', '2014-07-23', 'Basket - Transfert - Cleveland envoie Felix à Utah', 'http://www.lequipe.fr/Basket/Actualites/Felix-cleveland-a-utah/484710#xtor=RSS-1', 'Les Cleveland Cavaliers ont envoyé Carrick Felix au Utah Jazz en... '),
('b706409b04df2cb5b9bc71876e937e66', '2014-12-1', 'Dimitri Payet s?installe', 'http://www.lfp.fr/ligue1/article/dimitri-payet-s-installe.htm', 'Auteur d?une 6e passe décisive lors de la 15e journée, Dimitri Payet (OM) confirme sa position de tête au classement officiel des passeurs de Ligue 1.'),
('b8cd5d2828504af7102d84ab98f63100', '2014-12-8', 'Foot - C1 - Le Real sans Rodriguez', 'http://www.lequipe.fr/Football/Actualites/Le-real-sans-rodriguez/520659#xtor=RSS-1', 'Carlo Ancelotti a retenu un groupe de 19 joueurs pour la réception de... '),
('b90bce4168e6eaa19cd6c4ed1dd6e3c9', '2014-12-8', 'Foot - C3 - Le Steaua Bucarest pourra porter son nom', 'http://www.lequipe.fr/Football/Actualites/Le-steaua-pourra-porter-son-nom/520643#xtor=RSS-1', 'Le Steaua Bucarest, entité fondée par le Ministère roumain de la... '),
('ba8084a684317be151e36d86c354ce4f', '2014-12-8', 'Foot - ANG - Van Gaal-Koeman, la vieille querelle', 'http://www.lequipe.fr/Football/Actualites/Van-gaal-et-koeman-ne-s-aiment-pas/520699#xtor=RSS-1', 'Southampton accueille Manchester United ce lundi soir (21h), en... '),
('bf36586cb4b103904da79a94bd02e2fb', '2014-12-8', 'Foot - ALL - 14e j. - Le top 5 buts de Bundesliga', 'http://www.lequipe.fr/Football/Actualites/Le-top-5-buts-de-bundesliga/520614#xtor=RSS-1', 'Retrouvez les meilleures réalisations de la 14e journée de Bundesliga... '),
('bf9f372d227b156b504c0db24256470e', '2014-12-8', 'Foot - ALG - Match en Tunisie le 11 janvier', 'http://www.lequipe.fr/Football/Actualites/Match-en-tunisie-le-11-janvier/520649#xtor=RSS-1', 'La sélection algérienne, dirigée par Christian Gourcuff, effectuera... '),
('c2adca01882fc42b8dd95ae844114c0e', '2014-12-8', 'Foot - ANG - Cup - Arsenal - Hull City au 3e tour', 'http://www.lequipe.fr/Football/Actualites/Arsenal-hull-city-au-3e-tour/520732#xtor=RSS-1', 'Vainqueur de la Cup la saison passée aux dépens de Hull City en... '),
('c88532759762be20eaedb09ed3975190', '2014-12-8', 'Barça : la FIFA lui refuse un joker...', 'http://www.maxifoot.fr/football-rss209232/barca-fifa.php', 'Le FC Barcelone le sait depuis plusieurs semaines, il est interdit de tout recrutement pour les deux prochaines fenêtres de mercato (janvier 2015 et é...'),
('cbf99ad00638cd0795ae2dd44ef3ae91', '2014-12-8', 'Barça : Pedro confiant avant le PSG', 'http://www.maxifoot.fr/football-rss209207/barca-pedro.php', 'Buteur décisif lors du quart de finale de Ligue des Champions entre le FC Barcelone et le Paris Saint-Germain en 2012-2013, Pedro (27 ans, 4 matchs en...'),
('cd74465b4f031481751d0667fd683cde', '2014-12-15', 'Les stats officielles de la 18e journée', 'http://www.lfp.fr/ligue1/article/les-stats-officielles-de-la-18e-journee-3.htm', 'Retrouvez les statistiques officielles de la 18e journée de Ligue 1 en partenariat avec AMISCO.'),
('d8409d9cbcf9de2a06da449b783028ec', '2014-12-9', 'PSG : J. Pastore - "le Mondial, un déclic"', 'http://www.maxifoot.fr/football-rss209239/psg-pastore.php', 'Après nous avoir longtemps laissés sur notre faim, Javier Pastore (25 ans, 17 matchs et 1 but cette saison) est revenu au top de sa forme cette saison...'),
('db69a409e6671552668125e7cabe5acc', '2014-08-20', 'Basket - Transfert - Bangaly Fofana à Strasbourg', 'http://www.lequipe.fr/Basket/Actualites/Bangaly-fofana-a-strasbourg/491829#xtor=RSS-1', 'Strasbourg tient sa 4e recrue estivale. Après avoir enregistré les... '),
('e30facebb1c751a95d69d62430433230', '2014-12-1', 'Encore un coup de Wass !', 'http://www.lfp.fr/ligue1/article/encore-un-coup-de-wass.htm', 'Désormais 6e du classement officiel des buteurs, Daniel Wass (Evian TG FC) a signé contre l?EAG son 7e coup franc direct en Ligue 1 depuis mai 2012.'),
('e663e0f358ab268ea9792f5bc9b16470', '2014-12-8', 'Foot - L1 - 17e j. - Le top 5 buts !', 'http://www.lequipe.fr/Football/Actualites/Le-top-5-buts/520600#xtor=RSS-1', 'Voici notre sélection des 5 plus beaux buts de la 17e journée de L1.... '),
('e7baec28e0dd99c8ad90ef460c31466d', '2014-12-8', 'Foot - Transfert - Aurélien Collin à Orlando City ?', 'http://www.lequipe.fr/Football/Actualites/Aurelien-collin-a-orlando-city/520658#xtor=RSS-1', 'Libre depuis la fin de son contrat avec le Sporting Kansas City,... '),
('e93da260276d9159479ebd3f9019363c', '2014-12-8', 'Alexandre Lacazette garde la tête', 'http://www.lfp.fr/ligue1/article/alexandre-lacazette-garde-la-tete.htm', 'Un 2e doublé lors de la 17e journée de Ligue 1 a permis à Alexandre Lacazette (OL) de conserver la première place du classement officiel des buteurs avec 13 unités.'),
('e94ef16e7a9480fc28fd2daac1fb29da', '2014-09-9', 'Cyclisme - Transfert - Fédrigo chez Bretagne-Séché Environnement', 'http://www.lequipe.fr/Cyclisme-sur-route/Actualites/Fedrigo-chez-bretagne-seche-environnement/497671#xtor=RSS-1', 'Après quatre saisons passées auprès de Marc Madiot à la FDJ.fr,... '),
('ef36c2a15ffbb1c0d78ae0fd97dc6aa3', '2014-12-8', 'PSG : le Barça ne lâchera pas Messi et Neymar', 'http://www.maxifoot.fr/football-rss209196/psg-barca.php', 'Lionel Messi, Neymar voire Luis Suarez, la rumeur annonce un intérêt du PSG pour les attaquants du FC Barcelone depuis plusieurs semaines. Des joueurs...'),
('efcd65f3c825e7f62cb536154bf7d793', '2014-12-8', 'Foot - C1 - PSG - Retour de Cabaye, Bahebeck seul absent à Barcelone', 'http://www.lequipe.fr/Football/Actualites/Cabaye-est-la-bahebeck-seul-absent/520673#xtor=RSS-1', 'Déjà forfait samedi lors de la victoire face à Nantes (1-0),... '),
('f0fbb21effc5fb735012d7881c841876', '2014-12-5', 'Ricky se fait un nom', 'http://www.lfp.fr/ligue1/article/ricky-se-fait-un-nom.htm', 'Ricky van Wolfswinkel devient grâce à sa 3e passe décisive lors de la 16e journée de Ligue 1, le meilleur passeur de l?AS Saint-Etienne.'),
('f5f379ee126bd080de91d7396b9c2dc5', '2014-12-8', 'Foot - MLS - Los Angeles, dans une autre galaxie', 'http://www.lequipe.fr/Football/Actualites/Los-angeles-dans-une-autre-galaxie/520612#xtor=RSS-1', 'Avec désormais cinq titres à son actif, le Los Angeles Galaxy est... '),
('f827d1da8b73aa5e499996de52de8824', '2014-08-24', 'Cyclisme - Transfert - Quentin Jauregui chez AG2R', 'http://www.lequipe.fr/Cyclisme-sur-route/Actualites/Quentin-jauregui-chez-ag2r/492933#xtor=RSS-1', 'Jeune espoir du cyclisme français, Quentin Jauregui (20 ans) a signé... '),
('fdab18db97233e957d8cb4b3eb44dd73', '2014-12-8', 'Les stats officielles de la 17e journée', 'http://www.lfp.fr/ligue1/article/les-stats-officielles-de-la-17e-journee-3.htm', 'Retrouvez les statistiques officielles de la 17e journée de Ligue 1 en partenariat avec AMISCO.'),
('fffb9aaa4e77eb06ed09158f18129ab0', '2014-07-15', 'Hand - Transfert - Diaw quitte Paris pour Bucarest', 'http://www.lequipe.fr/Handball/Actualites/Diaw-quitte-paris-pour-bucarest/482727#xtor=RSS-1', 'En fin de contrat avec le PSG Handball, Ibrahima Diaw quitte Paris... ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
