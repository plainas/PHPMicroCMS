<?php

//database settings
$config["mysql_host"] = "mysql.example.com";
$config["mysql_user"] = "scott";
$config["mysql_pass"] = "tiger";
$config["mysql_db"] = "microcms_db";


//server path configuration
//URL with path to the CMS root dir WITH trailing slash
$config["base_url"] = "http://example.com/microcms/";



//DO NOT EDIT ==================================================================
//maps url patterns into actions	
$config["routes"] = array(
	"view" 	=> "page_view",
	"edit" 	=> "page_show_form",
	"submit"  => "page_submit",
	"welcome" => "page_welcome",
	"login"	=> "auth_login",
	"logout"  => "auth_logout"
);


?>
