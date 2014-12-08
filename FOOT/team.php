<!--

-->
<?php
echo '<link href="photos.css" rel="stylesheet">';
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost','root',''); 
mysql_select_db('football',$db);




 
echo'<hr>';

mysql_query("CREATE OR REPLACE VIEW vue_equipe AS 
         SELECT e.nom_equipe AS equipe , p.nom_pays AS country , t.nom_trophee AS trophee , s.nom_terrain AS stade , c.nom_entraineur AS coach , co.nom_competition AS competition
         FROM equipe e , pays p ,trophee t,terrain s , entraineur c, saison sa , competition co
         WHERE e.id_pays=p.id_pays
		 AND e.id_trophee=t.id_trophee
         AND e.id_terrain= s.id_terrain
         AND e.id_competition= co.id_competition
         AND e.id_saison= sa.id_saison 
         AND e.id_entraineur=c.id_entraineur
         ");
$sql='SELECT * FROM vue_equipe ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo ('<div width="25">');
echo ('<h1>Table équipe</h1>');
echo('<table border="1">');

while($data = mysql_fetch_assoc($req))
{
	
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
         SELECT j.nom_joueur AS joueur , e.id_equipe AS ide, j.id_equipe jie
         FROM equipe e , joueur j 
         WHERE e.id_equipe=j.id_equipe
		 ");
$sql='SELECT * FROM vue_photo_players  ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
while ($data = mysql_fetch_assoc($req))
{
    $image_name =$data['jie'];
    $image_folder =$data['ide'];
    $player_name=$data['joueur'];
    echo '<ul>' ;
     echo '<li>';
    echo '<a href="#">';
        echo '<img src="photos/'.$image_folder."/".$image_name.'.jpg">';
         echo '<strong>'.$player_name.'</strong>';
         echo '</a>';
    echo'</li>';
     echo'</ul>';
    
}
?>




