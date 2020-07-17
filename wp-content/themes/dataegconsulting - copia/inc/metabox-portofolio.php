<?php
/*
	Description: METABOXES PORTOFOLIO PROYECTO
	Version: 1.0
	Author: Filiberto Mba Obama
	Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function crear_post_type_projects() {

	$labels = array(
		'name'               	=> _x( 'Portofolios', 'dataeg' ),
		'singular_name'      	=> _x( 'Portofolio', 'dataeg' ),
		'add_new'            	=> __( 'Añadir nuevo','dataeg'),
		'add_new_item'       	=> __( 'Nuevo portofolio','dataeg'),
		'edit_item'          	=> __( 'Editar portofolio','dataeg' ),
		'new_item'           	=> __( 'Nuevo portofolio','dataeg' ),
		'all_items'          	=> __( 'Todos los portofolios','dataeg' ),
		'view_item'          	=> __( 'Ver portofolio','dataeg'),
		'search_items'       	=> __( 'Buscar portofolio','dataeg'),
		'not_found'          	=> __( 'No encontrado!','dataeg' ),
		'not_found_in_trash' 	=> __( 'No encontrado en la papelera','dataeg' ),
		'parent_item_colon'  	=> '',
		'menu_name'          	=> __('PORTOFOLIOS','dataeg')
	);

    $args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable' 	=> true,
		'show_ui' 				=> true,
		'show_in_menu' 			=> true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'has_archive'        	=> true,
		'capability_type'    	=> 'post',
		'menu_icon'          	=> 'dashicons-welcome-learn-more',
		'can_export'         	=> true,
		'hierarchical' 			=> false,
		'menu_position'      	=> 78,
		'supports'           	=> array('title', 'editor', 'thumbnail', 'revisions')
	);

	//registrar post type
	register_post_type( 'projects', $args);

	// Initialize New Taxonomy Labels
	$labels = array(
		'name' 					=> _x( 'Tags', 'taxonomy general name' ),
		'singular_name' 		=> _x( 'Tag', 'taxonomy singular name' ),
		'search_items' 			=>  __( 'Search Types' ),
		'all_items' 			=> __( 'All Tags' ),
		'parent_item' 			=> __( 'Parent Tag' ),
		'parent_item_colon' 	=> __( 'Parent Tag:' ),
		'edit_item' 			=> __( 'Edit Tags' ),
		'update_item' 			=> __( 'Update Tag' ),
		'add_new_item' 			=> __( 'Add New Tag' ),
		'new_item_name' 		=> __( 'New Tag Name' ),
	);

	// Custom taxonomy for Project Tags
	register_taxonomy(
		'tagportfolio',
		array('projects'), 
		array(
			'hierarchical' 		=> true,
			'labels' 			=> $labels,
			'show_ui' 			=> true,
			'query_var' 		=> true,
			'rewrite' 			=> array( 'slug' => 'tag-portfolio' ),
		)
	);
}
add_action('init', 'crear_post_type_projects');

 
/*
* Metaboxes Campos para proyectos
*/
function dataeg_campos_projects()
{
	$prefix = 'dataeg_projects_';

	$dataeg_campos_projects = new_cmb2_box(

		array(
			'id'           		=> $prefix . 'projects',
			'title'         	=> esc_html__('PROYECTOS PORTOFOLIOS', 'cmb2'), 
			'object_types' 		=> array('projects'), // post type
			'taxonomies'       	=> array( 'category' ),
			//'show_on'      	=> array('key' => 'page-template', 'value' => 'template-projects.php'),
			'context'      		=> 'normal', //  'normal', 'advanced', or 'side'
			'priority'     		=> 'high',  //  'high', 'core', 'default' or 'low'
			'show_names'   		=> true, // Show field names on the left
		)
	);

	$dataeg_campos_projects->add_field(

		array(
			'name'        		=> esc_html__('Descripción', 'cmb2'),
			'description' 		=> esc_html__('Agregue la descripción del proyecto', 'cmb2'),
			'id'      			=> $prefix . 'descripcion_proyecto',
			'type'        		=> 'textarea_small',
		)
	);

	$dataeg_campos_projects->add_field(

		array(
			'name'        		=> esc_html__('Cliente', 'cmb2'),
			'description' 		=> esc_html__('Agregue el Nombre del Cliente', 'cmb2'),
			'id'      			=> $prefix . 'cliente_proyecto',
			'type'        		=> 'text',
		)
	);

	$dataeg_campos_projects->add_field(

		array(
			'name'        		=> esc_html__('Categoria', 'cmb2'),
			'description' 		=> esc_html__('Agregue una Categoria', 'cmb2'),
			'id'      			=> $prefix . 'categoria_proyecto',
			'type'        		=> 'text',
		)
	);

	$dataeg_campos_projects->add_field(

		array(
			'name'        		=> esc_html__('Fecha', 'cmb2'),
			'description' 		=> esc_html__('Agregue la Facha inicio del proyecto', 'cmb2'),
			'id'      			=> $prefix . 'fecha_proyecto',
			'type'        		=> 'text',
		)
	);

	$dataeg_campos_projects->add_field(
		array(
			'name'        		=> esc_html__('Stado', 'cmb2'),
			'description' 		=> esc_html__('Agregue el Stado', 'cmb2'),
			'id'      			=> $prefix . 'stado_proyecto',
			'type'        		=> 'text',
		)
	);

	//$dataeg_campos_projects->add_field(array(
	//	'name' => esc_html__('Imagen', 'cmb2'),
	//	'id'   => $prefix . 'imagen_proyecto',
	//	'type' => 'file',
	//));

	$dataeg_campos_projects->add_field(

		array(
			'name'    			=> 'Test File',
			'desc'    			=> 'Upload an image or enter an URL.',
			'id'   				=> $prefix . 'imagen_proyecto',
			'type'    			=> 'file',
			// Optional:
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'text' => array(
				'add_upload_file_text' => 'Agregar o subir archivo' // Change upload button text. Default: "Add or Upload File"
			),
			// query_args are passed to wp.media's library query.
			'query_args' => array(
				//'type' => 'application/pdf', // Make library only display PDFs.
				// Or only allow gif, jpg, or png images
				'type' => array(
					'image/gif',
					'image/jpeg',
					'image/png',
				),
			),
			'preview_size' => 'large', // Image size to use when previewing in the admin.
		)
	);
}
add_action('cmb2_admin_init', 'dataeg_campos_projects');


