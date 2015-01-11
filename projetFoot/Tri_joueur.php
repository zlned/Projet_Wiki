<form action="tri_joueur.php" method="POST">
      <input type="text" name="voiture"><br>
      <input type="checkbox" name="options" value="under">&nbsp;-25 ans<br>
     <input type="checkbox" name="options" value="over">&nbsp;+25 ans <br>
     
    <input type="submit" value="trier" name="submit">
     </form>

<?php
echo '<link rel="stylesheet" href="galerie.css" type="text/css">';

	$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
	 
 if(isset($_POST['options']) && 
   $_POST['options'] == 'over') 
{
   $sql = "SELECT nom_joueur , poste_joueur , age ,id_joueur , id_equipe FROM joueur
   where age >25" or die("Error in the consult.." . mysqli_error($db));  
	

	

if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			echo "<br>";
			echo $stmt->num_rows () ;
				echo "<br>";
		
}

	if ($stmt = $db->query($sql)) 
	{
		echo ('<table>');
		echo '<ul id="photo-wall">';
		
	while ($ligne =mysqli_fetch_assoc($stmt))
	{
	
	 $image_name= (string)$ligne['id_joueur'] ;
    $folder_name= (string)$ligne['id_equipe'] ;
			$nom = $ligne['nom_joueur'];
		$post = $ligne['poste_joueur'];
		$age = $ligne['age'];
	
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
	
		
		
		
	
	}
	echo '</ul>';	
exit();
	}
}
else  if(isset($_POST['options']) && 
   $_POST['options'] == 'under') 
{
    {
   $sql = "SELECT nom_joueur , poste_joueur , age ,id_joueur , id_equipe FROM joueur
   where age <= 25" or die("Error in the consult.." . mysqli_error($db));  
	

	

if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			echo "<br>";
			echo $stmt->num_rows () ;
				echo "<br>";
		
}

	if ($stmt = $db->query($sql)) 
	{
		echo ('<table>');
		echo '<ul id="photo-wall">';
		
	while ($ligne =mysqli_fetch_assoc($stmt))
	{
	
	 $image_name= (string)$ligne['id_joueur'] ;
    $folder_name= (string)$ligne['id_equipe'] ;
			$nom = $ligne['nom_joueur'];
		$post = $ligne['poste_joueur'];
		$age = $ligne['age'];
	
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
	
	}
	echo '</ul>';	
exit();
	}
}
} 


	 
	 


	$sql = "SELECT nom_joueur , poste_joueur , age ,id_joueur , id_equipe FROM joueur" or die("Error in the consult.." . mysqli_error($db));  
	

	

if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			echo "<br>";
			echo $stmt->num_rows () ;
				echo "<br>";
		
}

	if ($stmt = $db->query($sql)) 
	{
		echo ('<table>');
		echo '<ul id="photo-wall">';
		
	while ($ligne =mysqli_fetch_assoc($stmt))
	{
	
	 $image_name= (string)$ligne['id_joueur'] ;
    $folder_name= (string)$ligne['id_equipe'] ;
			$nom = $ligne['nom_joueur'];
		$post = $ligne['poste_joueur'];
		$age = $ligne['age'];
	
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
		
	
	}
	echo '</ul>';	

	}
	




?>