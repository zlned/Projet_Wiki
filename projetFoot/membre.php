<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
	header ('Location: accueil.php');
	exit();
}
?>

<html>

<body>
Bienvenue <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] <> ""){
echo htmlentities(trim($_SESSION['admin']));}
else { echo htmlentities(trim($_SESSION['utilisateur']));} ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>