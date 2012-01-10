<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}


function login($user, $pass){
	$sql = "select pass_salt, pass_hash from users where username='$user'";
	
	$result = mysql_query($sql);
	
	if(!$result){
		echo $sql;
		return false;
	}
	
	if(mysql_num_rows($result)!=1){
		throw new Exception("Login Error!");
	}
	
	$row = mysql_fetch_assoc($result);
	
	$hash = sha1($row["pass_salt"] . $pass);
	
	return ($hash == $row["pass_hash"]) ? true : false;

	 
}


function is_admin($username){
	$sql = "select role from users where username='$username'";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)!=1){
		//this would be quite odd, just in case...
		throw new Exception("Error checking admin priviledges");
	}
	
	$role = mysql_result($result,0);
	
	return ($role == 1) ? true : false;
}

?>

