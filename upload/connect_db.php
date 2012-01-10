<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}

mysql_connect($config['mysql_host'], $config['mysql_user'], $config['mysql_pass'])
	or die('Could not connect: ' . mysql_error());

mysql_select_db($config['mysql_db'])
	or die('Could not select database');


?>
