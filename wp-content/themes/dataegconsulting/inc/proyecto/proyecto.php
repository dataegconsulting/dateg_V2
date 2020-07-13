<?php
/*
	Description: METABOXES DOWNLOAD
	Version: 1.0
	Author: Filiberto Mba Obama
	Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 * Add a proyecto custom post type.
 */
add_action('init', 'create_redvine_proyecto');
function create_redvine_proyecto() 
{
  $labels = array(
    'name' => _x('proyecto', 'proyecto'),
    'singular_name' => _x('proyecto', 'proyecto'),
    'add_new' => _x('Add New', 'proyecto'),
    'add_new_item' => __('Add New proyecto Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('proyecto',$args);
}

register_taxonomy( "proyecto-categories", 
	array( 	"proyecto" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"), 
			"singular_label" => __( "Field" ), 
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
			                    'with_front' => false)
		 ) 
);

