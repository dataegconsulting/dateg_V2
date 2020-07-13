<?php
/*
Plugin Name: Data Eg Features
Plugin URI:
Description: SERVICIOS DESTACADOS
Version: 1.0
Author: Filiberto Mba Obama
Author URI:
License: GLP2
Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function crear_post_type_features() {
   
  	$labels = array(
  		'name'                => _x( 'Servicios Destacados', 'Post Type General Name', 'dataeg' ),
  		'singular_name'       => _x( 'Servicio', 'Post Type Singular Name', 'dataeg' ),
  		'menu_name'           => __( 'Servicios Destacados', 'dataeg' ),
  		'parent_item_colon'   => __( 'Servicio Destacado Padre', 'dataeg' ),
  		'all_items'           => __( 'Todos los Servicios Destacados', 'dataeg' ),
  		'view_item'           => __( 'Ver Servicio Destacado', 'dataeg' ),
  		'add_new_item'        => __( 'Agregar Nuevo Servicio Destacado', 'dataeg' ),
  		'add_new'             => __( 'Agregar Nuevo Servicio Destacado', 'dataeg' ),
  		'edit_item'           => __( 'Editar Servicio Destacado', 'dataeg' ),
  		'update_item'         => __( 'Actualizar Servicio Destacado', 'dataeg' ),
  		'search_items'        => __( 'Buscar Servicio Destacado', 'dataeg' ),
  		'not_found'           => __( 'No encontrado', 'dataeg' ),
  		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'dataeg' ),
  	);

    $args = array(
		'label'       		=> __('feature', 'dataeg'),
		'description' 		=> __('Servicios destacados', 'dataeg'),
		'labels'      		=> $labels,
		'supports'    		=> array('title', 'editor', 'thumbnail', 'excerpt' ),
		'public'      		=> true,
		'menu_position' 		=> 6,
		'menu_icon' 			=> 'dashicons-format-image',
		'exclude_from_search' => true,
		'capibility_type' 	=> 'page',
    );

    register_post_type( 'features', $args );
}
add_action('init', 'crear_post_type_features', 0);


 


/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function dataeg_campos_features() {
	
	$prefix = 'dataeg_features_';

	$dataeg_campos_features = new_cmb2_box( 
		array(
			'id'           => $prefix . 'features',
			'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
			'object_types' => array( 'features' ), // Post type
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left
			
		) 
	);


    $dataeg_campos_features->add_field( 
		array(
			'name'        	=> esc_html__( 'Description', 'cmb2' ),
			'description' 	=> esc_html__( 'Agregue una descripción', 'cmb2' ),
			'id'      		=> $prefix . 'descripcion',
			'type'        	=> 'textarea_small',
	  	) 
	);

	$dataeg_campos_features->add_field( 
		array(
			'name'       		=> esc_html__('Codigo de Font Awesome', 'cmb2'),
			'description'	 	=> esc_html__('Font Awesome. E.J. fa fa-diamond.', 'cmb2'),
			'id'         		=> $prefix . 'codes',
			'type'       		=> 'text',
		)
	);

	$dataeg_campos_features->add_field( 
		array(
			'name'       		=> esc_html__('URL', 'cmb2'),
			'description' 		=> esc_html__('ID de la pagina', 'cmb2'),
			'id'         		=> $prefix . 'url',
			'type'       		=> 'text',
		)
	);
}
add_action( 'cmb2_admin_init', 'dataeg_campos_features' );