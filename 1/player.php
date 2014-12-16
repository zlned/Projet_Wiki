<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db = mysql_connect('localhost','root',''); 
mysql_select_db('football',$db);

$sql='SELECT nbr_buttete , nbr_butpied FROM joueur ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

while($data = mysql_fetch_assoc($req))
{
    $but_tete =$data['nbr_buttete'];
    $but_pied =$data['nbr_butpied'];
    
}
?>
<?php
 
echo'<hr>';
echo '<link rel="stylesheet" href="table.css" type="text/css"/>';
mysql_query("CREATE OR REPLACE VIEW vue AS 
         SELECT p.nom_pays AS country , e.nom_equipe AS team , itp.nom_trophee_perso AS prize , j.nom_joueur AS nom_joueur , 
         j.poste_joueur AS poste , j.nbr_but AS goal , j.nbr_match AS matches , j.description AS descr , j.age AS age, j.id_joueur AS idj , j.id_equipe AS jid
         FROM joueur j, pays p , equipe e , trophee_perso itp  
         WHERE j.id_pays=p.id_pays
		 AND j.id_equipe=e.id_equipe
         AND j.id_trophee_perso= itp.id_trophee_perso
         ");
$sql='SELECT * FROM vue ';
$req= mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo ('<div width="25">');
echo ('<h1>Table Joueur</h1>');
echo('<table class="CSS_Table_Example" style="width:600px;height:150px;>');

while($data = mysql_fetch_assoc($req))
{
	
    echo('<tr>');
    echo('<td>');
    $image_name= (string)$data['idj'] ;
    $folder_name= (string)$data['jid'] ;
	echo '<center><img src="photos/'.$folder_name."/".$image_name.'.jpg"><p style="font-size:20px">'.$image_name.'</p></center></br>';
	echo('</td>');
	echo('</tr>');
    echo('<td>');
	echo 'Nom Joueur : '.$data['nom_joueur'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo 'Poste de Joueur : '.$data['poste'].'</br>';
	echo('</td>');
    echo('</tr>');
    echo('<td>');
	echo utf8_decode('Nombre des buts marqués  : ').$data['goal'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode('Nombre des matches joués  : ').$data['matches'].'</br>';
	echo('</td>');
    echo('</tr>');
     echo('<td>');
	echo utf8_decode('Description  : ').$data['descr'].'</br>';
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

echo ('<div>');

echo ('</div>');

?>