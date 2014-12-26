<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
						
				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Helios</a></h1>
							<hr />
							<p>Another fine freebie by HTML5 UP</p>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly">Start</a>
						</footer>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="">Dropdown</a>
 							</li>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="indexblog.php">Blog</a></li>
							<li><a href="no-sidebar.php">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
	
<?php
echo '<link href="photos.css" rel="stylesheet">';
echo '<link rel="stylesheet" href="table.css" type="text/css"/>';
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost','root',''); 
mysql_select_db('football',$db);
//if(isset($_POST['photo']))
//{
//echo $pic_choice=$_POST['photo'];
//}



 
echo'<hr>';

mysql_query("CREATE OR REPLACE VIEW vue_equipe AS 
         SELECT e.nom_equipe AS equipe , p.nom_pays AS country , t.nom_trophee AS trophee , s.nom_terrain AS stade , c.nom_entraineur AS coach , co.nom_competition AS competition , e.id_equipe AS ide
         FROM equipe e , pays p ,trophee t,terrain s , entraineur c, saison sa , competition co
         WHERE e.id_pays=p.id_pays
		 AND e.id_trophee=t.id_trophee
         AND e.id_terrain= s.id_terrain
         AND e.id_competition= co.id_competition
         AND e.id_saison= sa.id_saison 
         AND e.id_entraineur=c.id_entraineur
		 AND e.id_equipe=1;
         ");
$sql='SELECT * FROM vue_equipe ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo ('<div width="25">');
echo ('<h1>Table équipe</h1>');
echo('<table class="CSS_Table_Example">');

while($data = mysql_fetch_assoc($req))
{
	 echo('<tr>');
    echo('<th>');
	$image_folder =$data['ide'];
	 echo '<img src="images/'.$image_folder.'.png" width="200" height="200">';
	echo('</td>');
    echo('</tr>');
    echo('<tr>');
    echo('<td>');
	echo 'Nom Equipe : '.$data['equipe'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo 'Pays : '.$data['country'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo utf8_decode('Trophée  : ').$data['trophee'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode('Terrain : ').$data['stade'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode('Entraineur  : ').$data['coach'].'</br>';
	echo('</td>');
    echo('</tr>');
	echo('<td>');
	echo 'competition en cours : '.$data['competition'].'</br>';
	echo('</td>');
    echo('</tr>');
	
}

echo '</table>';

echo ('</div>');
echo'<hr>';

echo ('<div>');




$sql=("CREATE OR REPLACE VIEW vue_photo_players AS 
         SELECT j.nom_joueur AS joueur , e.id_equipe AS ide, j.id_equipe jie , j.id_joueur AS jij
         FROM equipe e , joueur j 
         WHERE e.id_equipe=j.id_equipe
		 AND e.id_equipe=1 ;
		 ");
$sql='SELECT * FROM vue_photo_players  ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
while($data = mysql_fetch_assoc($req))
{
	
    $image_name =$data['jij'];
    $image_folder =$data['ide'];
    $player_name=$data['joueur'];
    echo '<ul>' ;
     echo '<li>';
    echo '<a href="#">';
        echo '<img src="photos/'.$image_folder."/".$image_name.'.jpg" alt="'.$player_name.'">';
	
         echo '<strong>'.$player_name.'</strong>';
         echo '</a>';
    echo'</li>';
     echo'</ul>';
    
}
?>

</body>
</html>


