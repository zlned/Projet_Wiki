<?php
session_start();
if (!isset($_SESSION['utilisateur']) && !isset($_SESSION['admin'])) {
	header ('Location: inscription.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Urbanic HTML5 Template</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
				<meta charset="utf-8"/>

<!-- 
Urbanic Template 
http://www.templatemo.com/preview/templatemo_395_urbanic 
-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
					Bienvenue <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] <> ""){
echo 'Admin';}
else { echo htmlentities(trim($_SESSION['utilisateur']));} ?> !<br />
					<a href="deconnexion.php">Déconnexion</a>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/templatemo_logo.jpg" alt="Urbanic free HTML5 template" title="Urbanic HTML5 Template" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li><a href="accueil.php"><strong><h5>Accueil</strong></h5></a></li>
                                <li><a href="equipeall.php"><strong><h5>Equipes</strong></h5></a></li>
                                <li class="active"><a href="joueurs.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li><a href="terrains.php"><strong><h5>Terrains</strong></h5></a></li>
								<li><a href="news.php"><strong><h5>News</strong></h5></a></li>
								<?php 
									if (isset($_SESSION['admin']) && $_SESSION['admin'] <> ""){
								?>
								<li><a href="admin.php"><strong><h5>Admin</strong></h5></a></li>
								<?php } ?>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
    
	<div class="text-center">              
                           <center><span class="txt_orange"><h2>Les Joueurs</h2></span></center>
                    <form action="" method="POST">
      	<input type="checkbox" id="btn" name="options" value="all" >&nbsp;Reset<br>
     
      <input type="checkbox" id="btn" name="options" value="under">&nbsp;-25 ans<br>
     <input type="checkbox" id="btn" name="options" value="over">&nbsp;+25 ans <br>
		<input type="checkbox" id="btn" name="options" value="buteur">&nbsp;Top Buteur <br>
<?php
$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
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

echo "</select>";
?>
	<br>
    <input class="btn btn-primary" type="submit" value="trier" id="btn" name="submit">
     </form>
	</div>
<center>	

<?php
echo '<link rel="stylesheet" href="galerie.css" type="text/css">';

	$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 
	 	 

 if(isset($_POST['options']) && ($_POST['options'] == 'all')) 
 {
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
	echo '<a href="player.php?id='.$image_name.'">';
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
		
	echo "</a>";
	}
	echo '</ul>';	
	}
	
	
 }
else if(isset($_POST['options']) && ($_POST['options'] == 'buteur')) 
 {
	$sql = "SELECT nom_joueur , poste_joueur , age ,id_joueur , id_equipe FROM joueur ORDER BY nbr_but DESC" or die("Error in the consult.." . mysqli_error($db));  
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
	echo '<a href="player.php?id='.$image_name.'">';
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
		
	echo "</a>";
	}
	echo '</ul>';	
	}
	
	
 }


else if(isset($_POST['options']) && ($_POST['options'] == 'over')) 
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
	echo '<a href="player.php?id='.$image_name.'">';
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p></a>") ;
	
		
		
		
	
	}
	echo '</ul>';	

	}
}
else if(isset($_POST['options']) && ($_POST['options'] == 'under'))  
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
	echo '<a href="player.php?id='.$image_name.'">';
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p></a>") ;
	
	}
	echo '</ul>';	

	}
}
else if(isset($_POST['choix_pays']))
 {
	$pays=$_POST['choix_pays'];
	$sql = "SELECT nom_joueur , poste_joueur , age ,id_joueur , id_equipe FROM joueur
	WHERE id_pays = $pays ";
	
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
	echo '<a href="player.php?id='.$image_name.'">';
	echo '<li><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></sli>';
	
			echo ("<p><font size='2px'>".$nom."</font></p>") ;
			echo ("<p><font size='2px'>".$post."</font></p>") ;
			echo ("<p><font size='2px'>".$age." Ans  	 </font></p>") ;
		
	echo "</a>";
	}
	echo '</ul>';	
	}
	
	
 }


?>
</center>

<hr>
				<center><span class="txt_orange"><h2>Vidéos</h2></span></center>
				<br>
   			<center><iframe width="854" height="510" src="//www.youtube.com/embed/-6k7ML1nksk" frameborder="0" allowfullscreen></iframe></center>
			<br>
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> | <a href="news.php">NEWS</a> </h5></center>

   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>