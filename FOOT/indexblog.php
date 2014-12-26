<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
		<link href="CSS.css" rel="stylesheet" /> 
		<meta http-equiv="content-type" content="text/html" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
						
				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Helios</a></h1>
							<hr />
							<p>Another fine freebie by HTML5 UP</p>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly">Start</a>
						</footer>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="">Dropdown</a>
 							</li>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="indexblog.php">Blog</a></li>
							<li><a href="no-sidebar.php">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Les équipes <strong>de LIGUE 1</strong>.</h2>
					<p>
						A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
						Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
					</p>
				</header>
			</section>


      
 
	<center>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    
    <em><?php echo htmlspecialchars($donnees['contenu']);?></em>
    <br /><br />
    <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</center>
</body>
</html>