<?php

define("ENTRY_POINT", true);

session_start();

include "config.php";
include "connect_db.php";
include "model_page.php";
include "model_auth.php";
include "helper_template.php";
include "helper_menu.php";
include "helper_auth.php";
include "controller_page.php";
include "controller_auth.php";
include "dispatcher.php";


try {
	
	dispatch();

} catch (Exception $e) {

	$tags["message"] = $e->getMessage();
	echo load_template("tpl_error.html", $tags );
}


	


?>
