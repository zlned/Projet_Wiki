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
					Bienvenue Admin!<br />
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
                                <li><a href="admin.php"><strong><h5>Accueil</strong></h5></a></li>
                                <li><a href="equipeA.php"><strong><h5>Equipes</strong></h5></a></li>
                                <li><a href="joueursA.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li><a href="terrainsA.php"><strong><h5>Terrains</strong></h5></a></li>
								<?php 
									if (isset($_SESSION['admin']) && $_SESSION['admin'] <> ""){
								?>
								<li class="active"><a href="admin.php"><strong><h5>Admin</strong></h5></a></li>
								<?php } ?>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
			<img src="images/bgnouveau.jpg" alt="gallery" width="1500" height="400" class="img-responsive" />
		</div>
                        <!--<div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                	<h2>BIENVENUE SUR LE PORTAIL DU LIGUE 1 </h2> 
                                    <p><h2>F.F.F</h2></p>
                                    <p><a class="btn btn-lg btn-orange" href="#" role="button">Entrer</a></p>
                              </div>
                            </div>
                        </div>
                </div>-->

            </div><!-- /#templatemo-carousel -->
        </div>
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">Portail Ligue 1</span>     
                </div>	
            </div>
			<hr>
			
<!--<a href="index.html" class="current">-->
		
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>