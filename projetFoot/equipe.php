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
					Bienvenue <?php echo htmlentities(trim($_SESSION['utilisateur'])); ?> !<br />
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
                                <li class="active"><a href="equipe.php"><strong><h5>Equipes</strong></h5></a></li>
                                <li><a href="joueurs.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li><a href="terrains.php"><strong><h5>Terrains</strong></h5></a></li>
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
		
        <div class="templatemo-team" id="templatemo-about">
        <div class="container">
<div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>EQUIPES</span>
							<br><br>
  <?php
echo '<link href="galerie.css" rel="stylesheet">';
//echo '<link rel="stylesheet" href="table.css" type="text/css"/>';
$db = mysqli_connect('localhost','root','','football'); 
if (isset($_GET['id']))
	{
	echo $id_equipe=$_GET['id'];



//if(isset($_POST['photo']))
//{
//echo $pic_choice=$_POST['photo'];
//}



 
echo'<hr>';

$sql_vue="
         SELECT nom_equipe , id_equipe ,description_equipe ,nom_terrain ,nom_entraineur
		 FROM equipe e, terrain t , entraineur en
		 WHERE e.id_terrain = t.id_terrain
		 AND   e.id_entraineur= en.id_entraineur
		 AND id_equipe= $id_equipe
		 "; 	 
       
if ($result= $db->query($sql_vue))
{
while($data = $result->fetch_assoc())
	
{
	$image_folder =$data['id_equipe'];
	 echo '<img src="images_eq/'.$image_folder.'.png" width="200" height="200"/>';	
	echo 'Nom Equipe : '.$data['nom_equipe'].'</br>';
	echo utf8_decode ('DescriptionEquipe : '.$data['description_equipe'].'</br>');
	echo 'Nom Equipe : '.$data['nom_entraineur'].'</br>';
	//echo'<img src="images/terrain/'.$image_terrain.'.jpg"></br>';
	echo 'Terrain : <a href="terrains.php">'.$data['nom_terrain'].'</a>';
	

	
}
}
	
$sql1='SELECT * FROM vue_photo_players';
if ($result = $db->query($sql1))
{
echo '<ul id="photo-wall">' ;

while($data = $result->fetch_assoc())

{
	
    $image_name =$data['jij'];
    $image_folder =$data['ide'];
    $player_name=$data['joueur'];
    
     echo '<li>';
   
        echo '<a href="player.php?id='.$image_name.'"><img src="photos/'.$image_folder."/".$image_name.'.jpg" alt="'.$player_name.'"></a>';
	 echo'</sli>';	
         echo '<strong>'.$player_name.'</strong>';
         echo '</a>';
   
     
    
}}
echo'</ul>';
}
?>
         
<!--        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		-->
<<<<<<< HEAD
			<hr>
				<center><span class="txt_orange"><h2>Vidéos</h2></span></center>
				<br>
   			<center><iframe width="854" height="510" src="//www.youtube.com/embed/eoYH7eM33dM" frameborder="0" allowfullscreen></iframe></center>
			<br>
<center><h5>ACCEUIL | NEWS | EQUIPES | JOUEURS | TERRAINS</h5></center>
=======
		<br><br><br><br><br><br><br>
<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
>>>>>>> origin/master
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>