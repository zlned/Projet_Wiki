<html>
<center>
<form action="connexion.php" method="post">

	<label for="email">Adresse email</label>
	<input type="text" name="email" value=""/>

	<label for="passe">Mot de passe</label>
	<input type="password" name="passe" value=""/>

	<input type="submit" value="Se connecter"/><br />
	<a href="inscription.php">inscrire</a>

<?php
include_once 'function.ini.php';

if(isset($_POST) && isset($_POST['email']) AND isset($_POST['passe'])){
	$y = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE email = ?');
	$y->execute(array($_POST['email']));
	$x = $y->fetch();
	if ($x[0] == 0){
		echo 'Cette adresse email n\'existe pas';
	}else{
		$e = $bdd->prepare('SELECT mot_passe FROM membres WHERE email = ?');
		$e->execute(array($_POST['email']));
		$rep = $e->fetch();
		$passe = sha1($_POST['passe']);

		if ($passe == $rep['mot_passe']){
			session_start();
			$_SESSION['utilisateur'] = $_POST['email'];
			header('Location: blog/index.php'); 
		}else{
			echo 'Mot de passe incorrect';
		}
	}

}

?>
</form>
</center>
</html>