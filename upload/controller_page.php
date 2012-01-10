<?

if (!defined("ENTRY_POINT")){
	 	exit("Can not run this script directly!");
	}


function page_view(){
	
	global $config;
		
	//extact arguments
	$url_args = func_get_arg(0);
	$id = intval($url_args[0]);
	
	//fetch page data from db
	$page_data = get_page($id);
	
	//only logged in users can see restricted pages, regardless being admin or not
	$show_restricted_pages = ($_SESSION["is_logged"] == true) ? true : false;
	
	//fetch menu data from db
	$menudata = get_page_list($show_restricted_pages);
	
	//make tree from db data
	$menudata_tree = query_result_to_array_tree($menudata,0);
	
	//prevent injections
	$page_data = array_map("htmlspecialchars", $page_data);

	//we do not want to break the html generated in here, it already does its own sanitization
	$page_data["menu"] = generate_menu($menudata_tree,0);
	
	
	$page_data["baseurl"] = $config["base_url"];
	
	//if the user is logged show a logout link, else show a login form (nothing to sanitize here, no user data)
	if($_SESSION["is_logged"]){
		$page_data["loginform"] = get_logout_link();
	}else{
		$page_data["loginform"] = load_template("tpl_login_form.html", $page_data);
	}
	
	//if admin show edit link
	if($_SESSION["is_logged"]){
		$page_data["editlink"] =  '<a href="'.$config["base_url"].'index.php/edit/'.$id.'">Edit</a>';
	}else{
		$page_data["editlink"] = "";
	}
	
	//Finaly! Lets load  the templates	
	$output = load_template("tpl_head.html", $page_data);
	$output .= load_template("tpl_page_view.html", $page_data);
	$output .= load_template("tpl_foot.html", $page_data); 
	
	echo $output;

}


function page_show_form(){
	global $config;
		
	$url_args = func_get_arg(0);
	$id = intval($url_args[0]);
	$page_data = get_page($id);
	$menudata = get_page_list(1);
	$menudata_tree = query_result_to_array_tree($menudata,0);
	$page_data = array_map("htmlspecialchars", $page_data);
	$page_data["menu"] = generate_menu($menudata_tree,0);
	
	//if we see an edit form we're for sure already loged in
	$page_data["loginform"] = get_logout_link();	
	
	$page_data["baseurl"] = $config["base_url"];
	
	if($_SESSION["is_logged"]){
		$page_data["loginform"] = get_logout_link();
	}else{
		$page_data["loginform"] = load_template("tpl_login_form.html", $page_data);
	}
	
	$output = load_template("tpl_head.html", $page_data);
	$output .= load_template("tpl_page_form.html", $page_data);
	$output .= load_template("tpl_foot.html", $page_data);
	echo $output;
}


function page_submit(){
	global $config;

	$data["title"] 	= mysql_real_escape_string($_POST["contentstitle"]);
	$data["contents"] 	= mysql_real_escape_string($_POST["contentstext"]);
	$data["id"] 		= intval($_POST["id"]);

	$data = array_map("trim", $data);
	
	if(empty($data["title"]) or empty($data["contents"]) or empty($data["id"])){
		throw new Exception('All fields must be filled!');
	}
	
	update_page($data);
	
	$id = $data["id"];
	//after editing redirect to view edited content
	header("location:" . $config["base_url"] . "index.php/view/$id");
	
}


//simplified version of  page_view()
function page_welcome(){	
	
	global $config;

	$show_restricted_pages = ($_SESSION["is_logged"] == true) ? true : false;
	
	$menudata = get_page_list($show_restricted_pages);
	$menudata_tree = query_result_to_array_tree($menudata,0);
	
	$page_data["menu"] = generate_menu($menudata_tree,0);
	
	//dummy hardcoded data
	$page_data["title"] = "Welcome";
	$page_data["content"] = "Welcome to micro CMS";
	$page_data["baseurl"] = $config["base_url"];
	$page_data["editlink"] = "";
	
	if($_SESSION["is_logged"]){
		$page_data["loginform"] = get_logout_link();
	}else{
		$page_data["loginform"] = load_template("tpl_login_form.html", $page_data);
	}
		
	$output = load_template("tpl_head.html", $page_data);
	$output .= load_template("tpl_page_view.html", $page_data);
	$output .= load_template("tpl_foot.html", $page_data); 
	
	echo $output;	

}



?>
