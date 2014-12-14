<?php

//Fusionner liste head et body
function fusionner_head_body($tab_head, $tab_body)
{	
	if( count($tab_head) < count($tab_body) )
	{
		$tab_petite = $tab_head;
		$tab_grande = $tab_body;
	}	
	else
	{
		$tab_petite = $tab_body;
		$tab_grande = $tab_head;	
	}
	//parcours la petite liste
	foreach($tab_petite as   $mot => $poids)
	{		
		//On vérifie la présence de l'élément dans liste 2
		if( array_key_exists($mot, $tab_grande) )
		{
			$tab_grande[$mot] = $tab_grande[$mot] + $poids ;
		}
		else
		{
			$tab_grande[$mot] = $poids ;
		}
	}
	
	return $tab_grande;
}

//Passage d'occurrences à poids par un coefficient : head = 3 et body = 1
function occurrences2poids( $tab_assoc_valeurs_occurrences, $coefficient)
{

	foreach($tab_assoc_valeurs_occurrences as $mot => $occurrence)
	{
		$tab_assoc_valeurs_occurrences[$mot] *= $coefficient ;
	}
	
	return $tab_assoc_valeurs_occurrences;
}

//Suppression des scripts : <script...>...</script>
function strip_scripts( $chaine_html )
{
	$modele_balises_scripts = '/<script[^>]*?>.*?<\/script>/is';

	$html_sans_script = preg_replace($modele_balises_scripts, '', $chaine_html);

	return $html_sans_script;
}

//Recupération du body HTML : <body...>(...)</body>
function  get_body($chaine_html) 
{
	$body = "";
	//$modele = '/<body>(.*)<\/body>/i' ;
	$modele = "/<body[^>]*>(.*?)<\/body>/is";

	if(preg_match($modele, $chaine_html, $lebody))
	{
		$body = $lebody[1] ;
	}
	return $body;
}

//Conversion des entités html en caractères ascii
function entitesHTML2ASCII($chaine_entitesHTML)
{
	// retourne la table de traduction des entités 
	//utilisée en interne par la htmlentities():
	$table_caracts_html = get_html_translation_table(HTML_ENTITIES);

	// retourne un tableau dont les clés sont les valeurs 
	//du précédent $table_caracts_html, 
	//et les valeurs sont les clés.
	$tableau_html_caracts = array_flip ( $table_caracts_html ) ;

	// retourne une chaine de caractères après
	//avoir remplacer avoir remplacé les éléments/clés 
	//par les éléments/valeurs du tableau associatif de
	//paires $tableau_html_caracts dans la chaîne $chaine.

	return strtr($chaine_entitesHTML, $tableau_html_caracts );
}

//Transformer file 2  chaine
function  file2chaine($fichier)
{
	$chaine = "";
	$tableau_lignes = file($fichier);
	$chaine = implode($tableau_lignes, " ");
	return $chaine;
}

//Recupération du titre HTML
function  get_title($chaine_html) 
{
	$titre = "";
	//$modele = '/<title>(.*)<\/title>/i' ;
	$modele = "/<title>(.*?)<\/title>/is";

	if(preg_match($modele, $chaine_html, $letitre))
	{
		$titre = $letitre[1] ;
	}
	return $titre;
}

//Récupération des mots-clés : keywords
function get_keywords ($fichier_html)
{
	$meta_keywords = "";

	//Tableau associatif :  name <-> content
	$tableau_metas = get_meta_tags( $fichier_html );

	if( ! empty($tableau_metas['keywords'])  )
	{
		$meta_keywords = $tableau_metas['keywords'];
	}
	return $meta_keywords;
}

//Récupération du 
function get_description($fichier_html)
{
	$meta_description= "";

	//Tableau associatif :  name <-> content
	$tableau_metas = get_meta_tags( $fichier_html );

	if( ! empty($tableau_metas['description'])  )
	{
		$meta_description = $tableau_metas['description'];
	}
	return $meta_description;
}


//Définiton de fonctions diverses//////////////////////////////////
//Fonction de de fragmentation de texte en éléments
function explode2( $separateurs , $chaine )
{
	$tab = array();
	$tok = strtok( $chaine,  $separateurs );
	
	while ($tok != false) 
	{		
		//Si la taille de l'élément est > 2, alors on garde
		if( strlen( $tok)  > 2 )	$tab[] = $tok;
		$tok = strtok( $separateurs );
	}
	return $tab;
}

//fonction afficher un tableau d'élément
function print_tableau($tab_mots)
{	
	echo "<hr>";
	foreach ($tab_mots  as  $indice => $mot )  
	{
		echo $indice, " ---> ", $mot, "<br />";
	}
	echo "<hr>";
}


?>