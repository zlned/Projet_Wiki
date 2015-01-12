<?php

$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db));
error_reporting(E_ALL | E_STRICT);
$sql="SELECT id_joueur FROM joueur desc";
if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			echo "<br>";
			echo $stmt->num_rows () ;
				echo "/////////////////////////////////////////////";
		
}


if (isset($_POST['poste_joueur'])) {
    echo $poste_joueur = $_POST['poste_joueur'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['nom_joueur'])) {
    echo $nom_joueur = $_POST['nom_joueur'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['nbr_but'])) {
    echo $nbr_but = $_POST['nbr_but'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['tp'])) {
    echo $tp = $_POST['tp'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['nbr_m'])) {
    echo $nbr_m = $_POST['nbr_m'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['descr'])) {
    echo $descr = $_POST['descr'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['cj'])) {
    echo $cj = $_POST['cj'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['cr'])) {
    echo $cr = $_POST['cr'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['bp'])) {
    echo $bp = $_POST['bp'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['tut'])) {
    echo $tut = $_POST['tut'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['remp'])) {
    echo $remp = $_POST['remp'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['age'])) {
    echo $age = $_POST['age'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['choix_eq'])) {
    echo $choix_equipe = $_POST['choix_eq'];
	echo "<br>";
}
if (isset($_POST['choix_tro'])) {
    echo $choix_tro = $_POST['choix_tro'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['choix_pa'])) {
    echo $choix_pays = $_POST['choix_pa'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['sai'])) {
    echo $saison = $_POST['sai'];
	echo "<br>";
}
else echo ("false");
  




$sql='INSERT INTO `football`.`joueur` (`id_joueur`, `nom_joueur`, `id_pays`, `id_equipe`, `poste_joueur`, `nbr_but`, `id_trophee_perso`, `nbr_match`, `description`, `nbr_cj`, `nbr_cr`, `nbr_buttete`, `nbr_butpied`, `nbr_matchtut`, `nbr_matchremp`, `age`) VALUES (NULL, "'.$nom_joueur.'", "'.$choix_pays.'", "'.$choix_equipe.'", "'.$poste_joueur.'", "'.$nbr_but.'", "'.$choix_tro.'", "'.$nbr_m.'", "'.$descr.'", "'.$cj.'", "'.$cr.'","'.$bp.'", "'.$bp.'", "'.$tut.'", "'.$remp.'", "'.$age.'")';
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
$sql='SELECT id_joueur FROM joueur' ;
if ($stmt = $db->query($sql)) 
	{
		
		
	while ($ligne =mysqli_fetch_assoc($stmt))
	{
		$image_name= (string)$ligne['id_joueur'] ;
	}

 $name=$_FILES['picToUpload']['name'];
	
$path = 'photos/'.$choix_equipe.'/' . basename($name);
echo $path ;
$docFileType = pathinfo($path,PATHINFO_EXTENSION);
	
//echo $docFileType ;
echo $path ;
if (isset($_FILES['picToUpload']))
	   {
	   var_dump($_FILES);
	   }

echo "</br>";
if($docFileType != "jpg")
   {	
    echo "Sorry, only JPG is allowed.";
 
}
else
{
 
 if ($_FILES["picToUpload"]["error"] > 0)
    {
    echo "Error Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
    }
	
 
    if (file_exists('photos/'.$choix_equipe.'/' . $_FILES["picToUpload"]["name"]))
      {
      echo $_FILES["picToUpload"]["name"] . " already exists. ";
      }

else
      {
	
		//rename ($_FILES["picToUpload"]["name"] , $image_name.'.jpg');
      move_uploaded_file($_FILES["picToUpload"]["tmp_name"],$path);
      //echo "Stored in: " . 'photos/'.$choix_equipe.'/' . $image_name.'.jpg'; //<- This is it
    
}
	
}
//$path = $db->real_escape_string($path);

}
	
  header('Location: admin.php');  

?>
<!--
echo '<p>Nombre de but : <input type ="text" name="nbr_but"></p><br>';
echo '<p>Trophee Perso : <input type ="text" name="tp"></p><br>';
echo '<p>Saison : <input type ="text" name="sai"></p><br>';
echo '<p>Matches joué: <input type="number"  min="1" max="99" name="nbr_m"></p><br>';
echo '<p>Description : <input type ="text" name="descr"></p><br>';
echo '<p>Carton jaune :<input type="number" min="1" max="99" name="cj"></p><br>';
echo '<p>Carton rouge : <input type="number" min="1" max="99" name="cr"></p><br>';
echo '<p>nombre ds butes marqué avec la tete : <input type="number"  min="1" max="99" name="bt"></p><br>';
echo '<p>nombre ds butes marqué avec le pied : <input type="number"  min="1" max="99" name="bp"></p><br>';
echo '<p>nombre  matches tut : <input type="number"  min="1" max="99" name="tut"></p><br>';
echo '<p>nombre  matches rempla : <input type="number"  min="1" max="99" name="remp"></p><br>';
echo '<p>Age : <input type="number"  min="1" max="99" name=eagz"></p><br>';
echo'<p>photo:</p><input type="file" name="picToUpload" id="fileToUpload" ></p>';
echo '<p><input type="submit" value="enregistrer"</p>'-->
