<?php
    
$db =mysqli_connect('localhost','root','','flux_rss') or ("Error " . mysqli_error($db)); 

libxml_use_internal_errors(true);
	$RSS_DOC = simpleXML_load_file('http://www.matchendirect.fr/rss/foot-ligue-1-c10.xml');
	if (!$RSS_DOC) {
		echo "Failed loading XML\n";
		foreach(libxml_get_errors() as $error) {
			echo "\t", $error->message;
		}
	}


	/* Get title, link, managing editor, and copyright from the document  */
	$rss_title = $RSS_DOC->channel->title;
	$rss_link = $RSS_DOC->channel->link;
	$rss_editor = $RSS_DOC->channel->managingEditor;
	$rss_copyright = $RSS_DOC->channel->copyright;
	$rss_date = $RSS_DOC->channel->pubDate;
    $rss_description=$RSS_DOC->channel->description;

	//Loop through each item in the RSS document
	     $sqlrow = "SELECT * FROM flux " or die("Error in the consult.." . mysqli_error()); 
        if ($stmt = $db->prepare($sqlrow)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();        
 
	
}

	foreach($RSS_DOC->channel->item as $RSSitem)
	{

		$id_flux 	= md5($RSSitem->title);
		$fetch_date = date("Y-m-j G:i:s"); //NOTE: we don't use a DB SQL function so its database independant
		$item_title = $RSSitem->title;
		$item_date  = date("Y-m-j", strtotime($RSSitem->pubDate));
		$item_url	= $RSSitem->link;
        $item_description= $RSSitem->description;
        

		//echo "Processing item '" , $item_id , "' on " , $fetch_date 	, "<br/>";
	
		echo ("<h1>");
		echo utf8_decode ($item_title), "<br/>";
		echo ("</h1>");
		echo utf8_decode ($item_date), "<br/>";
		echo utf8_decode ($item_description), "<br/>";
        echo "<a href=".$item_url.">Par ici</a><br/>";
        
        $item_exists_sql = "SELECT id_flux FROM flux where id_flux = '" . $id_flux . "'" or die("Error in the consult.." . mysqli_error()); 
        if ($stmt = $db->prepare($item_exists_sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
 
	
          
 
	
}
       if($stmt->num_rows <1)
		{
			
			$sql = " INSERT INTO flux(id_flux ,date_flux, title_flux, link_flux, description_flux) VALUES ('" .$id_flux. "','" .$item_date. "', '" .utf8_decode ($item_title) . "', '" . $item_url . "', '" . utf8_decode ($item_description) . "')" or die("Error in the consult.." . mysqli_error($db));
			
      
                if ($stmt = $db->prepare($sql)) {
 
	/* Exécution de la requête */
	$stmt->execute();
 
	/* Stockage du résultat */

            $stmt->store_result();
 
	
}
		}
		else
		{
			//echo "<font color=blue>Not inserting existing item..</font><br/>";
		}
		

		echo "<br/>";
	

	// End of form //
}






?>