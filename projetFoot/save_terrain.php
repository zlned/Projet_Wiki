<?php

$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db));
//error_reporting(E_ALL | E_STRICT);


if (isset($_POST['description_terrain'])) 
{
    echo $description_terrain = $_POST['description_terrain'];
	echo "<br>";
}
else echo ("false");

if (isset($_POST['ville_terrain'])) 
{
    echo $ville_terrain = $_POST['ville_terrain'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['nom_Terrain'])) 
{
    echo $nom_terrain = $_POST['nom_Terrain'];
	echo "<br>";
}
else echo ("false");
if (isset($_POST['choix_pays'])) 
{
    echo $choix_pays = $_POST['choix_pays'];
	echo "<br>";
}





$sql='INSERT INTO `football`.`terrain` VALUES (NULL, "'.$nom_terrain.'", "'.$ville_terrain.'", "'.$choix_pays.'", "'.$description_terrain.'")';
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


 $name=$_FILES['picToUpload']['name'];

echo $_FILES['picToUpload']['name'];
	
$path = 'images_eq/' . basename($name);
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
	
 
    if (file_exists('images_eq/'. $_FILES["picToUpload"]["name"]))
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

  header('Location: admin.php');  

?>
