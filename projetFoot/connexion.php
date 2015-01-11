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


<form action="connexion.php" method="post">

	<label for="email">Adresse email</label>
	<input type="text" name="email" value=""/>

	<label for="passe">Mot de passe</label>
	<input type="password" name="passe" value=""/>

	<input class="btn btn-lg btn-orange" type="submit" value="Se connecter"/><br /><br />
	<!-- <p><a href="inscription.php" role="button">Inscription</a></p><br /> -->

<?php
include_once 'function.ini.php';



if(isset($_POST) && isset($_POST['email']) AND isset($_POST['passe'])){
$mail_admin = 'admin@foot.fr';
$mdp_admin = 'admin';
	if ($_POST['email'] == $mail_admin AND $_POST ['passe'] == $mdp_admin){
	session_start();
	$_SESSION['admin'] = $_POST['email'];
	header('Location: admin.php'); } else {
	$y = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE email = ?');
	$y->execute(array($_POST['email']));
	$x = $y->fetch();
	if ($x[0] == 0){
		echo 'Cette adresse email n\'existe pas';
	}else{
		if ($e = $bdd->prepare('SELECT mot_passe FROM membres WHERE email = ?')){
			$e->execute(array($_POST['email']));
			$rep = $e->fetch();
			$passe = sha1($_POST['passe']);

			if ($passe == $rep['mot_passe']){
				session_start();
				$_SESSION['utilisateur'] = $_POST['email'];
				header('Location: accueil.php'); 
		
			}else{
			echo 'Mot de passe incorrect';
			}
		}
	}
	}
}
	?>
</form>

	</div>

        </div>
            </div>
       
</body>
</html>