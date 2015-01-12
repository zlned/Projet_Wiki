<?php

$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db));
//error_reporting(E_ALL | E_STRICT);


if (isset($_POST['Nom_entraineur'])) 
{
    echo $nom_entraineur = $_POST['Nom_entraineur'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['choix_pays'])) 
{
    echo $choix_pays = $_POST['choix_pays'];
	echo "<br>";
}





$sql='INSERT INTO `football`.`entraineur` VALUES (NULL, "'.$nom_entraineur.'", "'.$choix_pays.'")';
 echo $sql ;
if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			echo "<br>";
			$stmt->num_rows () ;
				echo "<br>";
		
}

  header('Location: admin.php');  

?>
