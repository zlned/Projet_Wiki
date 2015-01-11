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
                                <li class="active"><a href="accueil.php"><strong><h5>Accueil</strong></h5></a></li>
                                <li><a href="equipe.php"><strong><h5>Equipes</strong></h5></a></li>
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
                            <p><?php
    
$db =mysqli_connect('localhost','root','','flux_rss') or ("Error " . mysqli_error($db)); 

libxml_use_internal_errors(true);
	$RSS_DOC = simpleXML_load_file('http://www.lfp.fr/ligue1/rss.xml');
	if (!$RSS_DOC) {
		echo "Failed loading XML\n";
		foreach(libxml_get_errors() as $error) {
			echo "\t", $error->message;
		}
	}


	/* Get title, link, managing editor, and copyright from the document  */
	$rss_title = $RSS_DOC->channel->title;
	$rss_link = $RSS_DOC->channel->link;
	$rss_editor = $RSS_DOC->channel->managingEditor;
	$rss_copyright = $RSS_DOC->channel->copyright;
	$rss_date = $RSS_DOC->channel->pubDate;
    $rss_description=$RSS_DOC->channel->description;

	//Loop through each item in the RSS document
	     $sqlrow = "SELECT * FROM flux " or die("Error in the consult.." . mysqli_error()); 
        if ($stmt = $db->prepare($sqlrow)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();        
 
	
}

	foreach($RSS_DOC->channel->item as $RSSitem)
	{

		$id_flux 	= md5($RSSitem->title);
		$fetch_date = date("Y-m-j G:i:s"); //NOTE: we don't use a DB SQL function so its database independant
		$item_title = $RSSitem->title;
		$item_date  = date("Y-m-j", strtotime($RSSitem->pubDate));
		$item_url	= $RSSitem->link;
        $item_description= $RSSitem->description;
        

		//echo "Processing item '" , $item_id , "' on " , $fetch_date 	, "<br/>";
	
		echo ("<h1>");
		echo utf8_decode ($item_title), "<br/>";
		echo ("</h1>");
		echo utf8_decode ($item_date), "<br/>";
		echo utf8_decode ($item_description), "<br/>";
        echo "<a href=".$item_url.">Par ici</a><br/>";
        
        $item_exists_sql = "SELECT id_flux FROM flux where id_flux = '" . $id_flux . "'" or die("Error in the consult.." . mysqli_error()); 
        if ($stmt = $db->prepare($item_exists_sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
 
	
          
 
	
}
       if($stmt->num_rows <1)
		{
			
			$sql = " INSERT INTO flux(id_flux ,date_flux, title_flux, link_flux, description_flux) VALUES ('" .$id_flux. "','" .$item_date. "', '" .utf8_decode ($item_title) . "', '" . $item_url . "', '" . utf8_decode ($item_description) . "')" or die("Error in the consult.." . mysqli_error($db));
			
      
                if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
 
	
}
		}
		else
		{
			//echo "<font color=blue>Not inserting existing item..</font><br/>";
		}
		

		echo "<br/>";
	

	// End of form //
}






?></p>
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
							<p><?php include 'mercato.php' ?></p>
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
                            <p><?php include 'resultat.php'?></p>
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
<!--<a href="index.html" class="current">-->
		
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> </a> </h5></center>
   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>