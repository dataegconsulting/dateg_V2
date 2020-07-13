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

 
function register_features_posttype() {

	$labels = array(
		'name'               => _x( 'Servicios Destacados', 'dataeg' ),
		'singular_name'      => _x( 'Servicio', 'dataeg' ),
		'add_new'            => __( 'Añadir nuevo','dataeg'),
		'add_new_item'       => __( 'Nuevo servicio','dataeg'),
		'edit_item'          => __( 'Editar servicio','dataeg' ),
		'new_item'           => __( 'Nuevo servicio','dataeg' ),
		'all_items'          => __( 'Todos los servicios','dataeg' ),
		'view_item'          => __( 'Ver servicio','dataeg'),
		'search_items'       => __( 'Buscar servicio','dataeg'),
		'not_found'          => __( 'No encontrado!','dataeg' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','dataeg' ),
		'parent_item_colon'  => '',
		'menu_name'          => __('SERVICIOS DESTACADOS','dataeg')
	);

    $args = array(
		'labels'      		=> $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'features' ),
		'has_archive'        => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'can_export'         => true,
		'menu_position'      => 77,
		'supports'           => array('title','editor','thumbnail','excerpt','custom-fields','revisions')
    );

    register_post_type( 'features', $args );
}
add_action('init', 'register_features_posttype');

/*
**** TAXONOMY categorias-features ****
*/
function taxonomia_features_category() {
	register_taxonomy( 'categorias-features',
	array (0 => 'features'),
	array(
		'hierarchical'      => true,
		'label'             => __('Categorías de features','dataeg'),
		'show_ui'           => true,
		'query_var'         => true,
		'show_admin_column' => true,
		'labels'            => array (
			'search_items'               => __('Buscar categorías','dataeg'),
			'popular_items'              => __('Más populares','dataeg'),
			'all_items'                  => __('Todas','dataeg'),
			'parent_item'                => __('Superior','dataeg'),
			'parent_item_colon'          => __('Categoría superior','dataeg'),
			'edit_item'                  => __('Editar categoría','dataeg'),
			'update_item'                => __('Actualizar categoría','dataeg'),
			'add_new_item'               => __('Añadir nueva categoría','dataeg'),
			'new_item_name'              => __('Nueva categoría','dataeg'),
			'separate_items_with_commas' => __('Separar por comas','dataeg'),
			'add_or_remove_items'        => __('Añadir o borrar','dataeg'),
			'choose_from_most_used'      => __('Elegir de las más usadas','dataeg'),
		)
	) );
}
add_action( 'init', 'taxonomia_features_category');


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