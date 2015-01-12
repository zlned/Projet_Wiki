<html>
	<head>
	
	</head>
	<body>
		
			
			<?php
$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
echo '<form  action="save_terrain.php" method="post" enctype="multipart/form-data">';
echo '<p>Nom Terrain : <input type ="text" name="nom_Terrain"></p><br>';
echo '<p>Ville_terrain : <input type ="text" name="ville_terrain"></p><br>';
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

echo '</select></br></br>
<p>Description</p>';
echo '<textarea rows="4" cols="50" name="description_terrain">

</textarea>';
echo'<p>photo:</p><input type="file" name="picToUpload" id="picToUpload" ></p>';
echo '<p><input type="submit" value="enregistrer terrain"</p>';
echo "</form>";
//////////////////////////////////////////Equipe//////////////////////////////

?>

			
		</form>







				
	</body>
</html>