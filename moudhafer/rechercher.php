<html>
<head>
<title>Module de recherche et de visualisation</title>
<link rel="stylesheet" type="text/css" href="style.css" /> 
<br>
<br> 
</head>

<body>

<form  action="rechercher.php"  method="post">

Trouver 
<input type="html"  name="query"  size="50">
<input type="submit"  name="envoyer"  value="envoyer">

</form>

<hR>

<?php
if( ! empty($_POST) )
{
	//R�cup�rer la saisie du formulaire dans une variable
	$query  =  $_POST['query'];

	//Mettre la liste des �l�ments/document dans :
	//la table : relation (element, document)
	// Bdd : bddmi1

	//Connexion au serveur mysql
	//$connexion = mysql_connect("localhost", "root", "");

	//Selection de la base de donn�es 
	//mysql_select_db("bddmi4", $connexion);
	$sql = new mysqli("localhost", "root", "", "bddmi4");
	$result = $sql->query("SELECT  * FROM mot WHERE mot LIKE '%$query%'");
	$result1 = $sql->query("SELECT  * FROM document");
	$result2 = $sql->query("SELECT  * FROM document");

	
	$row = $result->fetch_assoc();

	//Requ�te SQL pour lire la relation element <--> document � la recherche 
	//de la saisie query

	//$sql = "SELECT  * FROM mot WHERE mot LIKE '%$query%' ";
	//Ex�cution de la requ�te SQL
	//$resultats = mysql_query($sql);

	//Parcourir et afficher les r�sultats obtenus � partir de la requ�te
	while ( $ligne =  mysqli_fetch_row($result) )  // ligne ou row  results ou query
	{
		$mots = $ligne[0];
		$source = $ligne[1];
	
		$lien  = "<a href='$source'>$source</a>";
	
		echo   $lien, "<br/>";
	}

	//Fermerture de la connexion
	mysqli_close($sql);

}

?>

</body>

</html>