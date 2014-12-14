<P>
<B>DEMARRAGE PROCESSUS :</B>
<BR>
<?php echo " ", date ("h:i:s"); ?>
</P>

<?php

include 'test.php';

//Augmentation du temps
//d'exécution de ce script
set_time_limit (500);

$path= "ccm";

explorerDir($path);

function explorerDir($path)
{
	$folder = opendir($path);
	while($entree = readdir($folder))
	{
		//On ignore les entrées . ..
		if($entree != "." && $entree != "..")
		{
			// On vérifie si il s'agit d'un répertoire
			if(is_dir($path."/".$entree))
			{
				$sav_path = $path;
				// Construction du path jusqu'au nouveau répertoire
				$path .= "/".$entree;
				//echo "DOSSIER = ", $path, "<BR>";
				// On parcours le nouveau répertoire
				explorerDir($path);
				$path = $sav_path;
			}
			else
			{
				//C'est un fichier html ou pas
				$path_source = $path."/".$entree;
				
				//Si c'est un .html
				if( preg_match('/.htm/', $path_source) )
				{
					//On appelle la fonction indexer($source)
					//Par un include en haut du script
					//include 'indexation9.php'; 
					indexer($path_source);
				}
			}
		}
	}
	closedir($folder);
}
?>

<P>
<B>ARRET PROCESSUS :</B>
<BR>
<?php echo " ", date ("h:i:s"); ?>
</P>