<?php

if (!defined("ENTRY_POINT")){
	exit("Can not run this script directly!");
}

//code from assignment No 1

function wrap_list($list_contents,$level){
	return '<ul class ="list_level_'.$level.'" >'.$list_contents."</ul>";
}

function wrap_list_element($element_contents,$level){
	return '<li class="list_element_level_'.$level.'" name="list_element_level_'.$level.'" >'.$element_contents."</li>";
}

function wrap_list_link($url, $text){
	$text = htmlspecialchars($text);
	return '<a href="'.$url.'">'.$text."</a>";
}

function generate_menu($menu,$level){
	$list_out="";
	foreach($menu as $menu_item){
		$element_out = wrap_list_link($menu_item["url"], $menu_item["name"]); 
		if(array_key_exists("subpages",$menu_item)){
			
			$element_out .= generate_menu($menu_item["subpages"],$level+1);
		}
		$list_out .= wrap_list_element($element_out,$level);
		
	}
	return wrap_list($list_out,$level);
}

/*******************************************************************************
  added for assignment No 2
*******************************************************************************/


/*
Convert from flat database structure to tree, ready to feed into generate_menu()
This will become ineficient for bigger amounts of pages. TODO: add extra
filtering before recursive call
*/
function query_result_to_array_tree($flat_menu_data, $parent_id){
	global $config;
	$urlbase = $config["base_url"];

	$filtered_array = filter_by_parent($flat_menu_data, $parent_id);
	
	$final_menu_array = array();
	
	if (count($filtered_array) > 0){
		foreach ($filtered_array as $key => $value){
			$new_el["name"] 	= htmlspecialchars($value["title"]);
			$new_el["url"] 	= $urlbase ."index.php/view/". $value["id"];		
			$subpages = query_result_to_array_tree( $flat_menu_data, $value["id"]);
			
			if (count($subpages)>0){
				$new_el["subpages"] = $subpages; 
			}
			$final_menu_array[] = $new_el;
		}
	}
	return $final_menu_array;
}



//improvised version array_filter() for absolute values
function filter_by_parent($flat_menu_data, $parent_id){
	$filtered_array = array();
	foreach($flat_menu_data as $element){
		if ($element["parent"] == $parent_id){
			$filtered_array[] = $element;
		}
	}
	return $filtered_array;
}

?>
