<?php


if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}

/*
"You shall not pass!"
Centralized authetication.
This is called while the requested is being processed.
*/
function check_permission($action, $params){

	//admin can do everything
	if($_SESSION["is_admin"]){
		return true;
	}
	
	//only admins can edit
	if($action == "edit" or $action== "submit"){
		return false;
	}
	
	//everyone can see this
	if($action == 'welcome' or $action=="login" or $action=="logout"){
		return true;
	}
	
	if($action == 'view'){
		//logged users can view all articles
		if($_SESSION["is_logged"] == true){
			return true;
		}
		
		//non logged users can only view open articles
		return !page_is_restricted($params[0]);	
	}
	
}



function get_logout_link(){
	global $config;
	return "Logged in as ".$_SESSION["username"].'.<br /><a href ="'.$config["base_url"].'index.php/logout">Logout</a>.';
}

?>
