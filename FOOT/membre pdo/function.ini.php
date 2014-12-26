<?php
$BDD_hote = 'localhost';
$BDD_bd = 'mon_site';
$BDD_utilisateur = 'root';
$BDD_mot_passe = '';

try{
	$bdd = new PDO('mysql:host='.$BDD_hote.';dbname='.$BDD_bd, $BDD_utilisateur, $BDD_mot_passe);
	$bdd->exec("SET CHARACTER SET utf8");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch(PDOException $e){
	echo 'Erreur : '.$e->getMessage();
	echo 'N° : '.$e->getCode();
}
?>