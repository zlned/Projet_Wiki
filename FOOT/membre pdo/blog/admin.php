<html>   
<center>
   <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="CSS.css" rel="stylesheet" /> 
    </head>
<body>
<h1>Ajouter une news</h1>
<?php 
$mysqli = new mysqli("localhost", "root", "", "test");
/*
//supression
if(isset($_GET['delete']) AND isset($_GET['id'])){
$idP = intval($_GET['id']);
$result = $mysqli->query("DELETE INTO billets WHERE id =  '".$idP."'");
}
  
if(isset($_POST['envoi'])){
if(isset($_POST['auteur']) AND !empty($_POST['auteur']) AND isset($_POST['titre']) AND !empty($_POST['titre']) AND isset($_POST['contenu']) AND !empty($_POST['contenu']))
{
//$auteurS = mysqli_escape_string($_POST['auteur']);//Sécurité: évité les attaque et les actes sur les base de donnée
//$titreS = mysqli_escape_string($_POST['titre']);//éviter la supprission et modification du votre base de donnée par les hackeur
//$contenuS = mysqli_escape_string($_POST['contenu']);
*/
$v3 = $mysqli->query("INSERT INTO billets VALUES ('', '".$_POST['titre']."', '".$_POST['contenu']."')");
echo 'news publiée';
}
else 
{ 
echo 'tous les champs sont obligatoires';
}
}
?>
<form action="index.php" method="post">
Auteur : <input type="text" name="auteur" value="<?php if(isset($_POST['auteur'])) { echo $_POST['auteur']; }?>" /><br />
Titre : <input type="text" name="titre" value="<?php if(isset($_POST['titre'])) { echo $_POST['titre']; }?>"/><br />
Contenue : <textarea name="contenu" /><?php if(isset($_POST['contenu'])) { echo $_POST['contenu']; }?></textarea><br />
<input type="submit" name="envoi" value="go" /><br />
</form>
<hr />
<h1>Liste des news</h1>
<?php
$v4 = $mysqli->query("SELECT id,titre, auteur, contenu FROM articles");

$row = mysqli_fetch_array($v4, MYSQLI_ASSOC);

while ($row){

echo htmlspecialchars($row['auteur']);
echo htmlspecialchars($row['titre']);
echo htmlspecialchars($row['contenu']); 
?>
<br />
<a href="?delete&id=<?php echo $row['id'];  ?>"><img scr="delete.png" /></a> <br />

<?php
}

mysqli_free_result($v4);
?>
</body>
</center>
</html>