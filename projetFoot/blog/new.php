<html>   
<center>
   <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="CSS.css" rel="stylesheet" /> 
    </head>
<body>
<h1>Ajouter une news</h1>
<form action="index.php" method="post">
Auteur : <input type="text" name="auteur" value="" /><br />
Titre : <input type="text" name="titre" value=""/><br />
Contenue : <textarea name="contenu" /><?php if(isset($_POST['contenu'])) { echo $_POST['contenu']; }?></textarea><br />
<input type="submit" name="envoi" value="go" /><br />
</form>

<?php

$mysqli = new mysqli("localhost", "root	", "", "mon_site");
$result = $mysqli->query("INSERT INTO articles VALUE ('', '".$_POST['titre']."', '".$_POST['auteur']."', '".$_POST['contenue']."')");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);

?>
<hr />
<h1>Liste des news</h1>

</body>
</center>
</html>