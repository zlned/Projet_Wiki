<html>
	<head>
	
	</head>
	<body>
		
			
			<?php
$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
echo '<form  action="save_entraineur.php" method="post" enctype="multipart/form-data">';
echo '<p>Nom entraineur : <input type ="text" name="Nom_entraineur"></p><br>';

//////////////////////////////////////////Pays//////////////////////////////
			$sql='SELECT * FROM pays ';
		if ($stmt = $db->prepare($sql)) {

				/* Exécution de la requête */
				$stmt->execute();

				/* Stockage du résultat */

						$stmt->store_result();
					 "<br>";
					 $stmt->num_rows () ;
							

			}
echo("<p>Pays </p>");
				echo('<select name="choix_pays" id="choix_pays">');

		if ($stmt = $db->query($sql)) 
		{

		while ($data =mysqli_fetch_assoc($stmt))
		   {
			echo('<option value="' .$data['id_pays'].'">');
			echo $data['nom_pays'];
			echo('</option>');
			}

		}

echo '</select></br></br>';
echo '<p><input type="submit" value="enregistrer entraineur"</p>';
echo "</form>";


?>

			






				
	</body>
</html>