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
<h1>Ajouter une news</h1>
<?php 
$mysqli = new mysqli("localhost", "root", "", "test");
  
//supression
if(isset($_GET['delete']) AND isset($_GET['id'])){
$idP = intval($_GET['id']);
$result = $mysqli->query("DELETE INTO billets WHERE id =  '".$idP."'");
}
  
if(isset($_POST['envoi'])){
if(isset($_POST['auteur']) AND !empty($_POST['auteur']) AND isset($_POST['titre']) AND !empty($_POST['titre']) AND isset($_POST['contenu']) AND !empty($_POST['contenu']))
{
//$auteurS = mysqli_escape_string($_POST['auteur']);//Sécurité: évité les attaque et les actes sur les base de donnée
//$titreS = mysqli_escape_string($_POST['titre']);//éviter la supprission et modification du votre base de donnée par les hackeur
//$contenuS = mysqli_escape_string($_POST['contenu']);

$v3 = $mysqli->query("INSERT INTO billets VALUES ('', '".$_POST['titre']."', '".$_POST['contenu']."')");
echo 'news publiée';
}
else 
{ 
echo 'tous les champs sont obligatoires';
}
}
?>
<form action="indexblog.php" method="post">
Auteur : <input type="text" name="auteur" value="<?php if(isset($_POST['auteur'])) { echo $_POST['auteur']; }?>" /><br />
Titre : <input type="text" name="titre" value="<?php if(isset($_POST['titre'])) { echo $_POST['titre']; }?>"/><br />
Contenue : <textarea name="contenu" /><?php if(isset($_POST['contenu'])) { echo $_POST['contenu']; }?></textarea><br />
<input type="submit" name="envoi" value="go" /><br />
</form>
<hr />
<!-- <h1>Liste des news</h1>
<?php
$v3 = $mysqli->query("SELECT id,titre, auteur, contenu FROM articles");
$row = mysqli_fetch_array($v3, MYSQLI_ASSOC);
while ($row){

echo htmlspecialchars($$row['auteur']);
echo htmlspecialchars($$row['titre']);
echo htmlspecialchars($$row['contenu']); 
?>
<br />
<a href="?delete&id=<?php echo $$row['id'];  ?>"><img scr="delete.png" /></a> <br />

<?php
}
mysqli_free_result($v3);
?>
</body>
</center>
</html> -->