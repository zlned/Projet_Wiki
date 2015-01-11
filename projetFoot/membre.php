<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
	header ('Location: accueil.php');
	exit();
}
?>

<html>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>