<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}


function get_page($id){
	$sql = "select * from pages where id = $id";

	$result = mysql_query($sql);

	if (mysql_num_rows($result) == 0) {
	    throw new Exception('Page not found!!');
	}

	$row = mysql_fetch_assoc($result);

	mysql_free_result($result);
	return $row;

}


function get_page_list($protected){
	
	$wc = ($protected) ? " 1 " : " protected=0 ";
	
	$sql = "select * from pages where " . $wc;
	$result = mysql_query($sql);

	if (mysql_num_rows($result) == 0) {
	    throw new Exception('No pages found!!');
	}
	
	$rows = array();
	while ($row = mysql_fetch_assoc($result)) {
   		$rows[]=$row;
   	}
	return $rows; 	  	
}


function update_page($data){

	$title= $data["title"];
	$id= $data["id"];
	$content= $data["contents"];
	
	$sql = "update pages set title='$title', content='$content' where id='$id'";
	
	mysql_query($sql);
	
}

function page_is_restricted($id){
	$sql = "select protected from pages where id='$id'";
	$result = mysql_query($sql);
	$restricted = mysql_result($result,0);
	
	if ($restricted == 1){
		return true;
	}
	return false;
}

?>
