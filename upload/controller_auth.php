<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}

//Performs login, sets up session data about user credentials
function auth_login(){

	global $config;
	
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);
	
	if(login($username,$password)){
		
		$_SESSION["is_logged"] = true;
		$_SESSION["username"] = $username;
		$_SESSION["is_admin"] = is_admin($username);
		header("location:".$config["base_url"]."index.php/welcome");
		
	}else{
		throw new Exception("Login Failed");
	}
}


//Kills authentication credentials and redirects to welcome page
function auth_logout(){
	session_destroy();
	header("location:".$config["base_url"]."welcome");
	
}

?>
