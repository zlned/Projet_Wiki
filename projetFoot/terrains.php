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
                                <li><a href="equipe.php"><strong><h5>Equipes</strong></h5></a></li>
                                <li><a href="joueurs.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li class="active"><a href="terrains.php"><strong><h5>Terrains</strong></h5></a></li>
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
        
        <div>
            <!-- Carousel -->
            <!-- /#templatemo-carousel -->
</div>
<div class="templatemo-team" id="templatemo-about">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>TERRAINS</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
	<?php 
		$Link = mysqli_connect("localhost", "root", "", "football");
		mysqli_query($Link,"SET NAMES UTF8");
		
			if (!$Link) {echo "Err-000//connexion impossible    #    ";} else
	{	//La connexion a MYSQL est OK.

			$req= "SELECT nom_terrain , ville , description,id_terrain, nom_pays\n"
    . "	FROM terrain t ,pays p \n"
    . "	WHERE p.id_pays=t.id_pays";    //INNER JOIN pays ON terrain.id_pays = pays.nom_pays";
			$Dbase = mysqli_select_db($Link, "football");
			$Datas = mysqli_query($Link, $req);
			if (!$Datas) {echo "Err-FFF//La requete comporte une erreur/SQL=[{$req}]    #    ";} else
			{ // La requete a ete executee avec succes, on retourne un tableau avec toutes les lignes.
				while ($row = mysqli_fetch_array($Datas, MYSQL_ASSOC))
				{
					 $nom = $row["nom_terrain"];
					 $ville = $row["ville"];
					 $pays = $row["nom_pays"];
					 $description = $row["description"]; 
					 $terrain = $row["id_terrain"];
					 ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("i").hide();
  });
  $("#show").click(function(){
    $("i").show();
  });
});
</script>

 <?php 
		
/* 						echo "<img src='images/terrain/".$terrain.".jpg' width='320' height='220' />";
						echo "le terrain" .$nom. "</b> ce trouve dans la ville ".$ville." en ".$pays.".<br/>";
						echo "<p>".$description ."</p><br />";
						echo "<button id=\"hide\">Masquer</button>";
						echo  "<button id=\"show\">Afficher</button><br/><br/>";

				}
			mysqli_free_result($Datas);
				}
		mysqli_close($Link);
	} */
		
	?>	
                <div class="clearfix"> </div>
                    <ul class="row row_team">
						  <li class="col-lg-12 col-md-12 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <!-- <img src="images/stade8.jpg" class="img-responsive" alt="nice" /> -->
                                   <?php echo "<img src='images/terrain/".$terrain.".jpg' width='320' height='220' />"; ?>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header"><?php echo "le terrain" .$nom. "</b> ce trouve dans la ville ".$ville." en ".$pays.".<br/>"; ?></p>
								</div>
								   <?php echo "<i>".$description ."</i><br />";
										 echo "<button id=\"hide\">Masquer</button>";
										 echo  "<button id=\"show\">Afficher</button><br/><br/>";
									?>
                            </div>
                        </li>
                    </ul>
					<?php 
									}
			mysqli_free_result($Datas);
				}
		mysqli_close($Link);
	} ?>
            </div>
        </div><!-- /.templatemo-team -->
        <!-- /.templatemo-portfolio -->
        <!-- /#templatemo-contact -->
<!--        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>-->
<!-- templatemo 395 urbanic -->
<!-- 
    Free HTML5 Templates
    http://www.templatemo.com
-->
	<hr>
				<center><span class="txt_orange"><h2>Vidéos</h2></span></center>
				<br>
   			<center><iframe width="750" height="450" src="//www.youtube.com/embed/4kRd-lrLy6k" frameborder="0" allowfullscreen></iframe></center>
			<br>

					
  <br>
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>