<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}

//quick basic template engine
function load_template($file,$tags){
	$html_output = file_get_contents($file);   
	foreach ($tags as $tag => $replaceby){
		$tag = "{".$tag."}";
		$html_output = str_replace($tag, $replaceby, $html_output);	
	}
	return $html_output;
}

?>
