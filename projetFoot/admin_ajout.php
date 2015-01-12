<html>
	<head>
	
	</head>
	<body>
		
			
			<?php
$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
echo '<form  action="" method="post" enctype="multipart/form-data">';
echo '<p>Nom joueur : &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp <input type ="text" name="nom_joueur"></p><br>';
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
				echo('<select name="choix_pa" id="choix_pays">');

		if ($stmt = $db->query($sql)) 
		{

		while ($data =mysqli_fetch_assoc($stmt))
		   {
			echo('<option value="' .$data['id_pays'].'">');
			echo $data['nom_pays'];
			echo('</option>');
			}

		}

echo "</select>";
echo ("<p>Si l'équipe ne se trouve pas dans la liste veuillez l'ajouter dans la rubrique 'Ajouter une équipe </p>");
//////////////////////////////////////////Equipe//////////////////////////////
$sql='SELECT * FROM equipe ';
		if ($stmt = $db->prepare($sql)) {

				/* Exécution de la requête */
				$stmt->execute();

				/* Stockage du résultat */

						$stmt->store_result();
					
						 $stmt->num_rows () ;
							

			}
echo("<p>Equipe </p>");
				echo('<select name="choix_eq" id="choix_equipe">');

		if ($stmt = $db->query($sql)) 
		{

		while ($data =mysqli_fetch_assoc($stmt))
		   {
			echo('<option value="' .$data['id_equipe'].'">');
			echo $data['nom_equipe'];
			echo('</option>');
			}

		}
echo "</select>";
//////////////////////////////////////////Trophée//////////////////////////////
$sql='SELECT * FROM trophee_perso ';
		if ($stmt = $db->prepare($sql)) {

				/* Exécution de la requête */
				$stmt->execute();

				/* Stockage du résultat */

						$stmt->store_result();
					
						 $stmt->num_rows () ;
							

			}
echo("<p>Trophée </p>");
				echo('<select name="choix_tro" id="choix_tro"><br>');

		if ($stmt = $db->query($sql)) 
		{

		while ($data =mysqli_fetch_assoc($stmt))
		   {
			echo('<option value="' .$data['id_trophee_perso'].'">');
			echo $data['nom_trophee_perso'];
			echo('</option>');
			}

		}
echo "</select>";
echo '<p>Poste Joueur : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type ="text" name="poste_joueur"></p><br>';
echo '<p>Nombre de but : &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp <input type ="text" name="nbr_but"></p><br>';
echo '<p>Trophee Perso : &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp<input type ="text" name="tp"></p><br>';
echo '<p>Saison : &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type ="text" name="sai"></p><br>';
echo '<p>Matches joué:  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="number"  min="1" max="99" name="nbr_m"></p><br>';
echo '<p>Description :  &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type ="text" name="descr"></p><br>';
echo '<p>Carton jaune : &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="number" min="1" max="99" name="cj"></p><br>';
echo '<p>Carton rouge : &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="number" min="1" max="99" name="cr"></p><br>';
echo '<p>nombre ds butes marqué avec la tete : <input type="number"  min="1" max="99" name="bt"></p><br>';
echo '<p>nombre ds butes marqué avec le pied : <input type="number"  min="1" max="99" name="bp"></p><br>';
echo '<p>nombre  matches tut :&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp<input type="number"  min="1" max="99" name="tut"></p><br>';
echo '<p>nombre  matches rempla : &nbsp <input type="number"  min="1" max="99" name="remp"></p><br>';
echo '<p>Age : &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="number"  min="1" max="99" name="age"></p><br>';
echo '<p>photo: <input type="file" name="picToUpload" id="picToUpload" ></p>';
echo '<p><input type="submit" value="enregistrer"</p>'
?>

			
		</form>







				
	</body>
</html>