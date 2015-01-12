<html>
	<!--<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
	header ('Location: accueil.php');
	exit();
}
?>-->
<!DOCTYPE html>
<html lang="en">
	  
    <head>
        <title>Urbanic HTML5 Template</title>
		<meta charset="utf-8" />
        <meta name="keywords" content="" />
		<meta name="description" content="" />
<!-- 
Urbanic Template 
http://www.templatemo.com/preview/templatemo_395_urbanic 
-->
        <meta charset="UTF-8">
		 <meta charset="utf-8">
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
    <div class="templatemo-team" id="templatemo-about">
		<!--  <div class="container">
			<div class="row">
                <div class="templatemo-line-header">
                   <div class="text-center"> -->
		<?php

if (isset($_GET['id']))
	{
	$id_player=$_GET['id'];
					//echo $id_player;
	

	$db = mysqli_connect("localhost","root","","football") or die("Error" . mysqli_error($db)); 






 
echo'<hr>';

$req="CREATE OR REPLACE VIEW vue AS 
         SELECT p.nom_pays AS country , e.nom_equipe AS team , itp.nom_trophee_perso AS prize , j.nom_joueur AS nom_joueur , 
         j.poste_joueur AS poste , j.nbr_but AS goal , j.nbr_match AS matches , j.description AS descr , j.age AS age, j.id_joueur AS idj , j.id_equipe AS jid
         FROM joueur j, pays p , equipe e , trophee_perso itp  
         WHERE j.id_pays=p.id_pays
		 AND j.id_equipe=e.id_equipe
         AND j.id_trophee_perso= itp.id_trophee_perso
		 AND  j.id_joueur= $id_player
         ";
if ($stmt = $db->prepare($req)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
			
		
}
$sql='SELECT * FROM vue ';
if ($result = $db->query($sql)) {
echo ('<div width="25">');
echo('<table class="CSS_Table_Example">');

while($data = $result->fetch_assoc())
{
	
    echo('<tr>');
    echo('<th>');
    $image_name= (string)$data['idj'] ;
    $folder_name= (string)$data['jid'] ;
	echo '<center><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px"></center></br>';
	echo('</th>');
	echo('<tr>');
    echo('<td>');
	echo 'Nom Joueur : '.$data['nom_joueur'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo 'Poste de Joueur : '.$data['poste'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo 'Nombre des buts marqués  : '.$data['goal'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo 'Nombre des matches joués  : '.$data['matches'].'</br>';
	echo('</td>');
    echo('</tr>');
	 $descr=utf8_decode ($data['descr']);
     echo('<td>');
	echo 'Description  : '.$descr.'</br>';
	echo('</td>');
    echo('</tr>');
	echo('<td>');
	echo 'Nom Pays : '.$data['country'].'</br>';
	echo('</td>');
    echo('</tr>');
	echo('<td>');
	echo'Equipe :'.$data['team'].'</br>';
	echo('</td>');
    echo('</tr>');
	echo('<td>');
	echo  'Trophée: '.$data['prize'].'</br>';
	echo('</td>');
	echo('</tr>');
	
	
}

echo '</table>';

echo ('</div>');

echo ('<div>');

echo ('</div>');
$sql='SELECT nbr_buttete , nbr_butpied FROM joueur
WHERE id_joueur="'.$id_player.'"';
if ($result = $db->query($sql)) {

while($data = $result->fetch_assoc())
{
    
	$but_tete =$data['nbr_buttete'];
 $but_pied =$data['nbr_butpied'];
	
    
}
}
if (($but_tete<1) && ($but_pied<1))
{
	$but_tete=1 ;
	$but_pied=1;
}
}

}


?>
           <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
		title:{
			text: "goals"
		},
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			//yValueFormatString: "#0.#,,. Million",
			dataPoints: [
				{  y: <?php echo $but_tete ;?> , legendText:"bp", indexLabel: "Buts Pieds" },
				
				{  y: <?php echo $but_pied ;?> , legendText:"bt", indexLabel: "Buts Tete" },
			]
		}
		]
	});
	chart.render();
}

	
</script>

</div>
<script type="text/javascript" src="canvasjs-1.5.7/canvasjs.min.js"></script>

<body>
<div  id="chartContainer" style="height: 500px; width: 100%;"></div>
	
	
            
	
			<hr>
				<center><span class="txt_orange"><h2>Vidéos</h2></span></center>
				<br>
   			<center><iframe width="640" height="390" src="//www.youtube.com/embed/Wxzm9psN9m8" frameborder="0" allowfullscreen></iframe></center>
			<br>
		<center><h5><a href="accueil.php">ACCEUIL</a> | <a href="equipeall.php">EQUIPES</a>  | <a href="joueurs.php">JOUEURS</a>  | <a href="terrains.php">TERRAINS</a> | <a href="news.php">NEWS</a> </h5></center>

   			<br>
   		<center>Copyright © portail foot2015</center>
    </body>
</html>