<?php
//Accès aux différentes fonctions
//de traitement
include 'bibliotheque.inc.php';

//La source à traiter
$source = "source.html";

//Lancer l'indexation d'un html
indexer($source);

//La démarche de l'analyse 
//et traitement d'un html
function indexer($source)
{
	//indexation :  traitrement et analyse d'une source html

	//1 :  Transformer le fichier en chaine
	$chaine_html =  file2chaine($source);
	// fin commun //


	// Debut traitemnt head //
	//2 :  Récupérer le titre du head
	$titre = get_title($chaine_html);

	//3 :  Récupérer les keywords du head
	$keywords = get_keywords($source);

	//4 :  Récupérer le descriptif du head
	$description = get_description($source);

	//5 : La chaine avec les éléments du head
	$chaine_head = $titre . " " . $keywords . " " . $description ;

	//6 : Conversion des entités html en caractères ascii
	$chaine_head = entitesHTML2ASCII($chaine_head);

	//6bis : Mise en miniscule du texte -> pour traiter les doublons
	$chaine_head = strtolower($chaine_head);

	//7 : Traitement de la chaine HEAD : Fragmentation + filtrage
	$separateurs = " ,.():!?»«\t\"\n\r\'-+/*%{}[]#0123456789";
	
	$tab_mots_head = explode2( $separateurs , $chaine_head );

	//8 : Afficher la liste des éléments obtenus
	//print_tableau($tab_mots_head);

	//9 : Suppression des doublons et récupération des occurrences
	$tab_assoc_valeurs_occurrences = array_count_values( $tab_mots_head ) ;

	//10 : Afficher la liste des éléments sans doublons et + occurrences
	//print_tableau($tab_assoc_valeurs_occurrences);

	$coefficient = 3; // pour valoriser les mots du head par rapport à ceux du body
	//11 : Suppression des doublons et récupération des occurrences
	$tab_assoc_head_valeurs_poids = occurrences2poids( $tab_assoc_valeurs_occurrences, $coefficient) ;

	//12 : Afficher la liste des éléments sans doublons et + occurrences
	print_tableau($tab_assoc_head_valeurs_poids);

	// Début traitement body //

	//2: Supprimer les script du html 
	$chaine_html_sans_scripts = strip_scripts($chaine_html);

	//2bis: Extraction du body/html/entitées html
	$chaine_body_html = get_body($chaine_html_sans_scripts);

	//3: Supprimer les balises html 
	$chaine_body_sans_balises = strip_tags($chaine_body_html);

	//4 : Conversion des entités html en caractères ascii
	$chaine_body_texte = entitesHTML2ASCII($chaine_body_sans_balises);

	//5 : Mise en miniscule du texte -> pour traiter les doublons
	$chaine_body_texte = strtolower($chaine_body_texte);

	//6 : Traitement de la chaine body : Fragmentation + filtrage
	$tab_mots_body = explode2( $separateurs , $chaine_body_texte );

	//7 : Afficher la liste des éléments obtenus du body
	//print_tableau($tab_mots_body);

	//8 : Suppression des doublons et récupération des occurrences
	$tab_assoc_valeurs_occurrences = array_count_values( $tab_mots_body ) ;

	//9 : Afficher la liste des éléments sans doublons et + occurrences
	//print_tableau($tab_assoc_valeurs_occurrences);

	$coefficient = 1; // les poids des mots body = occurrences

	//11 : Suppression des doublons et récupération des occurrences
	$tab_assoc_body_valeurs_poids = occurrences2poids( $tab_assoc_valeurs_occurrences, $coefficient) ;

	//12 : Afficher la liste des éléments sans doublons et + occurrences
	print_tableau($tab_assoc_body_valeurs_poids);

	/////////////////////////////Fin traitement body /////////////////////

	//////////////////////////Fusion des tables mots/poids  du head et du body ///

	$tab_document_mots_poids = fusionner_head_body($tab_assoc_head_valeurs_poids, $tab_assoc_body_valeurs_poids);

	//xx : Afficher les informations du documents html
	echo "SOURCE = $source", "<br />";
	echo "TITRE = $titre", "<br />";
	echo "DESCRIPTIF = $description", "<br />";
	
	//xx : Afficher la liste des éléments du document mots/poids
	print_tableau($tab_document_mots_poids);
	

//Mettre les résultats dans bbd ///////////////////
	$connect = mysql_connect("localhost", "root", "");
	$select = mysql_select_db("bddmi4", $connect);
	mysql_query ("SET NAMES iso-8859-1"); // utf8
	
	//1 : Insertion des éléments du document
	$sql1 =  "INSERT INTO document VALUES (
				'',
				'$source',
				'$titre',
				'$description')
			";
	mysql_query($sql1);
	
	//Récupération de l'id du document
	$id_document = mysql_insert_id();
	
	//2 : Insertion des éléments mots
	foreach($tab_document_mots_poids as $mot => $poids)
	{
		$sql2 =  "INSERT INTO mot VALUES (
				'',
				'$mot')
			";
		mysql_query($sql2);
		
		//Récupération de l'id du mot
		$id_mot = mysql_insert_id();
		
		 //3: Mettre en relation document <--> mot <--> poids
		$sql3 =  "INSERT INTO document_mot VALUES (
				$id_document,
				$id_mot,
				$poids)
			";
		mysql_query($sql3);
		
	} 
	//Fermeture de SQL
	mysql_close($connect);
	
}



?>