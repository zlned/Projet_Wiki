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
                                <li class="active"><a href="joueursA.php"><strong><h5>Joueurs</strong></h5></a></li>
								<li><a href="terrainsA.php"><strong><h5>Terrains</strong></h5></a></li>
								<li><a href="admin2.php"><strong><h5>Admin</strong></h5></a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
                            <center><span class="txt_orange"><h2>joueurs</h2></span></center>
                    <div class="clearfix"></div>
                    <!-- /.row -->
<div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                          <div class="templatemo-project-box"> <a class="colorbox" href="images/full-gallery-image-1.jpg" data-group="gallery-graphic"><img src="../templatemo_395_urbanic/images/gallery-image-1.jpg" class="img-responsive" alt="gallery" /> </a>
                              <div class="project-overlay">
                                <h5><a class="colorbox" href="images/full-gallery-image-1.jpg" data-group="gallery-graphic">PSG</a></h5>
                                <hr />
                                <h4><a class="colorbox" href="images/full-gallery-image-1.jpg" data-group="gallery-graphic">THIAGO SILVA</a></h4>
                              </div>
                          </div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                            <a class="colorbox" href="images/full-gallery-image-2.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-2.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BREAKFAST</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-3.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>GREEN COLORS</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            <a class="colorbox" href="images/full-gallery-image-4.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-4.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CAMERA</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-5.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-5.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>PLANT</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>CABLE TRAIN</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            <a class="colorbox" href="images/full-gallery-image-7.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CITY</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            <a class="colorbox" href="images/full-gallery-image-8.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BIRDS</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            <a class="colorbox" href="images/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>NATURE</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>DOGGY</h4>
                                    </div>
                                </div>
                            </a>                        </li>
                    </ul>
                    <!-- /.gallery -->
    </div>
            
<!--<script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>-->
		<br><br>
		<hr>
		<center><span class="txt_orange"><h2>NEWS</h2></span></center>
        <div class="templatemo-service">
		  <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
						
                            <div>
                                <img src="images/mercatof.jpg" alt="icon" />
                                <span class="templatemo-service-item-header">MERCATO</span>
                            </div>
                            <p>transferts mercao jnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js vjnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js v</p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                   <span> <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="images/infosf.jpg" alt="icon"/>
                                <span class="templatemo-service-item-header">INFOS LIGUE 1</span>
                            </div>
							<p>rss infos ligue 1 de football jnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js vjnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js v</p>
                            <div class="text-center">
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div></span>
						
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/resultatsf.jpg" alt="icon"/>
                                <span class="templatemo-service-item-header">Résultats L1</span>
                            </div>
                            <p>Les résultats jnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js vjnzhuf bzccns cjnjdscn uzenfcnc s vcnsdiv ndifvbd vsvsfihv sfvs bvisvhs vshfv hsvsi fsfvs ifvsfb hcsbd cgv sdc h hs vhjshjvd sh vds cjsidncvjsk vckjs dvs v sknjdv js v</p>
                            <div class="text-center">
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
          </div>
        </div>
			<hr>
				<center><span class="txt_orange"><h2>Vidéos</h2></span></center>
				<br>
   			<center><img src="images/watch.jpg" alt="watchvideo" /></center>
			<br>
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>