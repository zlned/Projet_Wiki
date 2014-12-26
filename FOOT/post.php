<?php 
include 'config.php';

if(!isset($_GET['id'])){
header('Location: index1.php');
}
else
{
$id_GET = intval($_GET['id']);
}
$v1 = $mysqli->query("SELECT * FROM articles WHERE id='".$id_get."'");
$info_article = mysqli_fetch_array($v1); 
if(!isset($info_article['id'])) { ?>
<h1><?php echo $info_article['titre']; ?></h1>
<h5> par <?php echo $info_article['auteur']; ?></h5>
<br/>
<?php echo nl2be(htmlspecialchars($info_article['contenu'])); ?>
<br />

<?php 
$v2 = mysqli_query("SELECT * FROM commentaire WHERE id_article = '".$info_article['id']."' ORDER BY id LIMIT 0,10");
while ($info_article = mysqli_fetch_array($v2)) { ?>
Commentaire n'<?php echo $info_article['id']; ?> par <?php echo $info_article['auteur']; ?> : <br />
<?php echo nl2be(htmlspecialchars($info_article['commentaire'])); ?><br /><br />
<?php
}
}
else
{
echo 'Erreur, news non existant';
}
?>