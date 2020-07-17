<?php
/*
Description: METABOXES SLIDER 
Version: 1.0
Author: Filiberto Mba Obama
Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function crear_post_type_sliders() {

	$labels = array(
		'name'               => _x( 'Sliders', 'dataeg' ),
		'singular_name'      => _x( 'slider', 'dataeg' ),
		'add_new'            => __( 'Añadir nuevo','dataeg'),
		'add_new_item'       => __( 'Nuevo slider','dataeg'),
		'edit_item'          => __( 'Editar slider','dataeg' ),
		'new_item'           => __( 'Nuevo slider','dataeg' ),
		'all_items'          => __( 'Todos los sliders','dataeg' ),
		'view_item'          => __( 'Ver slider','dataeg'),
		'search_items'       => __( 'Buscar slider','dataeg'),
		'not_found'          => __( 'No encontrado!','dataeg' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','dataeg' ),
		'parent_item_colon'  => '',
		'menu_name'          => __('REVSLIDER','dataeg')
	);
	$args = array(
		'labels'      		=> $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'sliders' ),
		'has_archive'        => true,
		'capability_type'    => 'page',
		'menu_icon'          => 'dashicons-slides',
		'can_export'         => true,
		'menu_position'      => 80,
		'supports'           => array('title', 'editor', 'thumbnail', 'revisions')
	); 
    //registrar post type
    register_post_type( 'sliders', $args );
}
add_action('init', 'crear_post_type_sliders');


/*
* Metaboxes Sliders
*/


/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function dataeg_campos_sliders() {
     $prefix = 'dataeg_sliders_';

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$dataeg_campos_sliders = new_cmb2_box( array(
		'id'           => $prefix . 'sliders',
		'title'        => esc_html__('REVSLIDER FORMULARIOS', 'cmb2' ),
		'object_types' => array( 'sliders' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
     ) );

     $dataeg_campos_sliders->add_field( array(
       'name'        => esc_html__( 'Sub Titulo', 'cmb2' ),
       'id'      => $prefix . 'sub_titulo_slider',
       'type'        => 'text',
     ) );

    $dataeg_campos_sliders->add_field( array(
  		'name'        => esc_html__( 'Description', 'cmb2' ),
  		'description' => esc_html__( 'Agregue una descripción', 'cmb2' ),
  		'id'      => $prefix . 'desc_slider',
  		'type'        => 'textarea_small',
  	) );

     $dataeg_campos_sliders->add_field( array(
		'name' => esc_html__( 'Imagen Slider', 'cmb2' ),
		'desc' => esc_html__( 'Imagen para el Slider', 'cmb2' ),
		'id'   => $prefix . 'imagen_slider',
		'type' => 'file',
	) );
}
add_action( 'cmb2_admin_init', 'dataeg_campos_sliders' );