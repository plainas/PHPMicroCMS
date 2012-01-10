<?php

if (!defined("ENTRY_POINT")){
	 	exit("Can not run this script directly!");
	}


//extracts action name and parameters from URL's path, does basic data
function parse_request(){
	$raw_route = $_SERVER["PATH_INFO"];

	//stear clear, allow only leters, numbers and slashes
	if(!empty($raw_route) and preg_match('/^[\p{L}\/\d]++$/uD', $raw_route) == 0){
		throw new Exception("Invalid URL");
	}
	
	$url_pieces = explode("/",$raw_route);

	$params = array();
	
	//parameters may go empty if nothing is passed
	if(count($url_pieces)>2){
		$params = array_slice($url_pieces, 2);	
	}	
	
	return array("action" => $url_pieces[1], "params" => $params);
}


//routes requests actions, does parameter handling
function dispatch(){

	global $config;
	
	$url_data = parse_request();	
	
	$action = $url_data["action"];
	$params = $url_data["params"];
	
	//redirect root url to welcome page
	if(empty($action)){
		$action="welcome";
	}
	
	if(!in_array( $action, array_keys($config["routes"]))){
		throw new Exception("Bad Request! Action does not Exist");
	}

	if(!check_permission($action, $params)){
		throw new Exception("Permission denied!");
	}

	//data is already sanitized, authentication passed, we may proceed
	$action_function = $config["routes"][$action];
	$action_function($params);
	
}

?>	
