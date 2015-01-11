<!--<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
}
?>-->
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
								<li class="active"><a href="terrainsA.php"><strong><h5>Terrains</strong></h5></a></li>
								<li><a href="admin2.php"><strong><h5>Admin</strong></h5></a></li>
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
                <div class="clearfix"> </div>
                    <ul class="row row_team">
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade1.jpg" class="img-responsive" alt="psg" />
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE PARC DES PRINCES</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade2.jpg" class="img-responsive" alt="om" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE VELEDROME</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade3.jpg" class="img-responsive" alt="ol" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE DE GERLAND</p>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade4.jpg" class="img-responsive" alt="asm" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE LOUIS II</p>
                                    
                                </div>
                            </div>
                        </li>
						  <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade5.jpg" class="img-responsive" alt="esse" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE GEOFFROY-GUICHARD</p>
                                    
                                </div>
                            </div>
                        </li>
						  <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade6.jpg" class="img-responsive" alt="paris" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE DE FRANCE</p>
                                    
                                </div>
                            </div>
                        </li>
						</li>
						  <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade7.jpg" class="img-responsive" alt="toulouse" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADIUM MUNICIPAL DE TOULOUSE</p>
                                    
                                </div>
                            </div>
                        </li>
						</li>
						  <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/stade8.jpg" class="img-responsive" alt="nice" />
                                    
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">STADE ALLIANZ RIVIERA</p>
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
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
  <br>
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>