<html>
<head>
</head>
<title>Test Affichage</title>
<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost','root',''); 
mysql_select_db('football',$db);
 
echo'<hr>';

mysql_query("CREATE OR REPLACE VIEW vue AS 
         SELECT p.nom_pays AS country , e.nom_equipe AS team , itp.nom_trophee_perso AS prize , j.nom_joueur AS nom_joueur , 
         j.poste_joueur AS poste , j.nbr_but AS goal , j.nbr_match AS matches , j.description AS descr , j.age AS age, j.id_joueur AS idj
         FROM joueur j, pays p , equipe e , trophee_perso itp  
         WHERE j.id_pays=p.id_pays
		 AND j.id_equipe=e.id_equipe
         AND j.id_trophee_perso= itp.id_trophee_perso
         ");
$sql='SELECT * FROM vue ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo ('<div width="25">');
echo ('<h1>Table Joueur</h1>');
echo('<table border="1">');

while($data = mysql_fetch_assoc($req))
{
	
    echo('<tr>');
    echo('<td>');
    $image_name= (string)$data['idj'] ;
	echo '<center><img src="photos/'.$image_name.'.jpg"><p style="font-size:20px">'.$image_name.'</p></center></br>';
	echo('</td>');
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
	echo utf8_decode ('Nombre des buts marqués  : ').$data['goal'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode ('Nombre des matches joués  : ').$data['matches'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode ('Description  : ').$data['descr'].'</br>';
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
	echo utf8_decode ('Trophée: ').$data['prize'].'</br>';
	echo('</td>');
	echo('</tr>');
	
	
}

echo '</table>';

echo ('</div>');
echo'<hr>';









exit();
?>
    <p>ksdsdddddddddddddddddddh</p>
</body>
</html>