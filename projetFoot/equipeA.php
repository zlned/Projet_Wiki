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
                                <li class="active"><a href="equipeA.php"><strong><h5>Equipes</strong></h5></a></li>
                                <li><a href="joueursA.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li><a href="terrainsA.php"><strong><h5>Terrains</strong></h5></a></li>
								<li><a href="admin2.php"><strong><h5>Admin</strong></h5></a></li>

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
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
    </div>
                <ul class="row row_team">
                        <center><li class="col-lg-2 col-md-2 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="../templatefoot/images/1.png" alt="psg" width="100" height="100" class="img-responsive" />                                </div>
                                <div class="team-inner">
                                    <!--<p class="team-inner-header">Paris Saint Germain</p>-->
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="../templatefoot/images/2.png" alt="om" width="100" height="100" class="img-responsive" />                                </div>
                                <div class="team-inner">
                                    <!--<p class="team-inner-header">Olypique de Marseille</p>-->
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="../templatefoot/images/3.png" alt="ol" width="100" height="100" class="img-responsive" />                                </div>
                                <div class="team-inner">
                                    <!--<p class="team-inner-header">Olympique Lyonnais</p>-->
                                    
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="../templatefoot/images/4.png" alt="asm" width="100" height="100" class="img-responsive" />                                </div>
                                <div class="team-inner">
                                    <!--<p class="team-inner-header">Association Sportive de Monaco</p>-->
                                    
                                </div>
                            <!--</div>-->
                        </li>
						  <li class="col-lg-2 col-md-2 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="../templatefoot/images/5.png" alt="esse" width="100" height="100" class="img-responsive" />                                </div>
                                <div class="team-inner">
                                    <!--<p class="team-inner-header">Association Sportive de Saint-Étienne</p>-->
                                    
                                </div>
                            </div>
                        </li>
    </ul>
         
<!--        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		-->
		<br><br><br><br><br><br><br>
<center><h5>ACCEUIL | NEWS | EQUIPES | JOUEURS | TERRAINS</h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
		<br>
    </body>
</html>