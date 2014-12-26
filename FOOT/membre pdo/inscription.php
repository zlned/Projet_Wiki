<html>

<form method="post" action="inscription.php">
<center>
	<label for="nom">Nom: </label>
	<input type="text" name="nom" id="nom" value=""/><br /><br />
	
	<label for="prenom">Prénom: </label>
	<input type="text" name="prenom" id="prenom" value=""/><br /><br />

	<label for="email">Adresse email: </label>
	<input type="text" name="email" id="email" value=""/><br /><br />

	<label for="passe">Mot de passe: </label>
	<input type="text" name="passe" id="passe" value=""/><br /><br />

	<label for="sexe">Sexe: </label>
	<select name="sexe">
		<option value="1">Homme</option>
		<option value="2">Femme</option>
	</select><br /><br />

	<input type="submit" name="envoi" value="Envoyer"/><br /><br />
		<a href="connexion.php">connexion</a>

	
<?php
include_once 'function.ini.php';

if(isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) 
&& isset($_POST['email']) && isset($_POST['passe']) && isset($_POST['sexe'])){

	if(get_magic_quotes_gpc()){
		$_POST['nom'] = stripslashes(trim($_POST['nom']));
		$_POST['prenom'] = stripslashes(trim($_POST['prenom']));
		$_POST['email'] = stripslashes(trim($_POST['email']));
		$_POST['passe'] = stripslashes(trim($_POST['passe']));
		$_POST['sexe'] = stripslashes(trim($_POST['sexe']));
	}

	//Si le formulaire est posté et les champs remplis
	//Traitement et insertion des données

//if(preg_match('#^(([a-z0-9!#$%&\'*+/=?^_`{|}~-]+.?)*[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+.?)*[a-z0-9-_]{2,}+).[a-z]{2,5}$#i',$_POST['email'])){
$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)
                               
$regex = '/^' . $atom . '+' .   // Une ou plusieurs fois les caractères autorisés avant l'arobase
'(\.' . $atom . '+)*' .         // Suivis par zéro point ou plus
                                // séparés par des caractères autorisés avant l'arobase
'@' .                           // Suivis d'un arobase
'(' . $domain . '{1,63}\.)+' .  // Suivis par 1 à 63 caractères autorisés pour le nom de domaine
                                // séparés par des points
$domain . '{2,63}$/i';          // Suivi de 2 à 63 caractères autorisés pour le nom de domaine

// test de l'adresse e-mail
if (preg_match($regex, $_POST['email'])) {
}else{

	echo 'Veuillez entrer une adresse électronique valide';

} 
$id_membre = '';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_passe = sha1($_POST['passe']);
$sexe = $_POST['sexe'];

if($i = $bdd->prepare("
	INSERT INTO membres (id_membre,nom,prenom,email,mot_passe,sexe)
	VALUES (:id_membre,:nom,:prenom,:email,:mot_passe,:sexe)")
)
	
$i->bindParam(':id_membre', $id_membre);
$i->bindParam(':nom', $nom);
$i->bindParam(':prenom', $prenom);
$i->bindParam(':email', $email);
$i->bindParam(':mot_passe', $mot_passe);
$i->bindParam(':sexe', $sexe);
$i->execute();
}
?>

</center>

</form>
	
</html>