<?php
/*
	Description: METABOXES DOWNLOAD
	Version: 1.0
	Author: Filiberto Mba Obama
	Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/




function crear_post_type_downloads() {

	$labels = array(
		'name'               => _x( 'downloads', 'dataeg' ),
		'singular_name'      => _x( 'download', 'dataeg' ),
		'add_new'            => __( 'Añadir nuevo','dataeg'),
		'add_new_item'       => __( 'Nuevo download','dataeg'),
		'edit_item'          => __( 'Editar download','dataeg' ),
		'new_item'           => __( 'Nuevo download','dataeg' ),
		'all_items'          => __( 'Todos los downloads','dataeg' ),
		'view_item'          => __( 'Ver download','dataeg'),
		'search_items'       => __( 'Buscar download','dataeg'),
		'not_found'          => __( 'No encontrado!','dataeg' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','dataeg' ),
		'parent_item_colon'  => '',
		'menu_name'          => __('DOWNLOADS','dataeg')
	);

    $args = array(
		'labels'      		=> $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'downloads' ),
		'has_archive'        => true,
		'capability_type'    => 'page',
		'menu_icon'          => 'dashicons-download',
		'can_export'         => true,
		'menu_position'      => 79,
		'supports'           => array('title', 'thumbnail', 'revisions')
	);

	// Registering your Custom Post Type
	register_post_type( 'downloads', $args);
}
add_action('init', 'crear_post_type_downloads');



function dataeg_campos_downloads()
{
	$prefix = 'dataeg_downloads_';

	$dataeg_campos_downloads = new_cmb2_box(array(
		'id'           => $prefix . 'downloads',
		'title'         => esc_html__('Descargar ... ', 'cmb2'),
		'object_types' => array('downloads'), // post type
		//'show_on'      => array('key' => 'page-template', 'value' => 'template-projects.php'),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	));


	$dataeg_campos_downloads->add_field(array(
		'name'    => 'Agregar o subir archivo',
		'desc'    => 'Upload an image or enter an URL.',
		'id'   => $prefix . 'pdf_download',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Agregar o subir archivo' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			//'type' => array(
			//	'image/gif',
			//	'image/jpeg',
			//	'image/png',
			//),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	));
	
}
add_action('cmb2_admin_init', 'dataeg_campos_downloads');


function taxonomia_categoria_download()
{
	$labels = array(
		'name'              => _x('Categoria Download', 'taxonomy general name'),
		'singular_name'     => _x('Categoria Download', 'taxonomy singular name'),
		'search_items'      => __('Buscar Categoria Download'),
		'all_items'         => __('Todas las Categorias Downloads'),
		'parent_item'       => __('Categoria Download Padre'),
		'parent_item_colon' => __('Categoria Download Padre:'),
		'edit_item'         => __('Editar Categoria Download'),
		'update_item'       => __('Actualizar Categoria Download'),
		'add_new_item'      => __('Agregar Nueva Categoria Download'),
		'new_item_name'     => __('Nueva Categoria Download'),
		'menu_name'         => __('Categoria Download'),
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria-download')
	);
	register_taxonomy( 'categoria-download', array( 'downloads'), $args);
}
add_action('init', 'taxonomia_categoria_download');