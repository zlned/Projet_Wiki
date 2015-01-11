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
					<?php include 'connexion.php'; ?>
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
					
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
			<center><strong> Inscription </strong></center>
        </div>
        
       <!-- <div>
					<img src="images/bgnouveau.jpg" alt="gallery" width="1500" height="468" class="img-responsive" />                               
		</div> -->

                        <div class="item">
                            <div class="container">

<form class="form-horizontal" method="post" action="inscription.php">
                            <div class="form-group">
<center>
	<label for="nom">Nom: </label>
	<input class="form-control" maxlength="40" type="text" name="nom" id="nom" value=""/><br /><br />
	
	<label for="prenom">Prénom: </label>
	<input class="form-control" type="text" name="prenom" id="prenom" value=""/><br /><br />

	<label for="email">Adresse email: </label>
	<input class="form-control" type="text" name="email" id="email" value=""/><br /><br />

	<label for="passe">Mot de passe: </label>
	<input class="form-control" type="password" name="passe" id="passe" value=""/><br /><br />

	<label for="sexe">Sexe: </label><br />
	<select name="sexe">
		<option value="1"> </option>
		<option value="2">Homme</option>
		<option value="3">Femme</option>
	</select><br /><br />

	<input class="btn btn-orange pull-right" type="submit" name="envoi" value="Envoyer"/><br />
	<!-- <p><a class="btn btn-lg btn-orange" href="connexion.php" role="button">connexion</a></p>
	-->
	
<?php
include_once 'function.ini.php';

if(isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) 
&& isset($_POST['email']) && isset($_POST['passe']) && isset($_POST['sexe'])){

	if(get_magic_quotes_gpc()){
		$_POST['nom'] = stripslashes(trim($_POST['nom']));
		$_POST['prenom'] = stripslashes(trim($_POST['prenom']));
		$_POST['email'] = stripslashes(trim($_POST['email']));
		$_POST['passe'] = stripslashes(trim($_POST['passe']));
		$_POST['sexe'] = stripslashes(trim($_POST['sexe']));
	}

	//Si le formulaire est posté et les champs remplis
	//Traitement et insertion des données

//if(preg_match('#^(([a-z0-9!#$%&\'*+/=?^_`{|}~-]+.?)*[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+.?)*[a-z0-9-_]{2,}+).[a-z]{2,5}$#i',$_POST['email'])){
$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)
                               
$regex = '/^' . $atom . '+' .   // Une ou plusieurs fois les caractères autorisés avant l'arobase
'(\.' . $atom . '+)*' .         // Suivis par zéro point ou plus
                                // séparés par des caractères autorisés avant l'arobase
'@' .                           // Suivis d'un arobase
'(' . $domain . '{1,63}\.)+' .  // Suivis par 1 à 63 caractères autorisés pour le nom de domaine
                                // séparés par des points
$domain . '{2,63}$/i';          // Suivi de 2 à 63 caractères autorisés pour le nom de domaine

// test de l'adresse e-mail
if (preg_match($regex, $_POST['email'])) {
}else{

	echo 'Veuillez entrer une adresse électronique valide';

} 
$id_membre = '';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_passe = sha1($_POST['passe']);
$sexe = $_POST['sexe'];

if($i = $bdd->prepare("
	INSERT INTO membres (id_membre,nom,prenom,email,mot_passe,sexe)
	VALUES (:id_membre,:nom,:prenom,:email,:mot_passe,:sexe)")
)
	
$i->bindParam(':id_membre', $id_membre);
$i->bindParam(':nom', $nom);
$i->bindParam(':prenom', $prenom);
$i->bindParam(':email', $email);
$i->bindParam(':mot_passe', $mot_passe);
$i->bindParam(':sexe', $sexe);
$i->execute();

}

?>

</center>
</div>
</form>
	
                              </div>
                            </div>
              <!--  <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				-->
			
		<!-- /#templatemo-carousel -->


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>


</html>