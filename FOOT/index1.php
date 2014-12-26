<html>   
<center>
   <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="CSS.css" rel="stylesheet" /> 
    </head>
<body>
<?php
include 'config.php';
$v1 = $mysqli->query("SELECT * FROM articles ORDER BY id DESC LIMIT 0,10 ");//les 10 dérniers articles
?>
<h1> Liste des Dernières Articles<h1/>
<?php
while ($infor_article = mysqli_fetch_array($v1)) {
?>
Nouveauté n'<?php echo $infor_article['id']; ?> par 
<?php echo $infor_article['auteur']; ?> : 
<i><a href="post.php?id=<?php echo $infor_article['id']; ?>"> <?php echo htmlspecialchars($infor_article['titre']); ?></i><br/>
<?php echo nl2br(htmlspecialchars($infor_article['contenue'])); ?><br />
<hr/>
</body>
</center>
</html>

<?php
}
?>