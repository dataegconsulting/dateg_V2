<?php
/*
**** POST TYPE TUTORIALES ****
*/
function register_tutorial_posttype() {
	$labels = array(
		'name'               => _x( 'Tutoriales', 'tutorialeswp' ),
		'singular_name'      => _x( 'Tutorial', 'tutorialeswp' ),
		'add_new'            => __( 'Añadir nuevo','tutorialeswp'),
		'add_new_item'       => __( 'Nuevo tutorial','tutorialeswp'),
		'edit_item'          => __( 'Editar tutorial','tutorialeswp' ),
		'new_item'           => __( 'Nuevo tutorial','tutorialeswp' ),
		'all_items'          => __( 'Todos los tutoriales','tutorialeswp' ),
		'view_item'          => __( 'Ver tutorial','tutorialeswp'),
		'search_items'       => __( 'Buscar tutorial','tutorialeswp'),
		'not_found'          => __( 'No encontrado!','tutorialeswp' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','tutorialeswp' ),
		'parent_item_colon'  => '',
		'menu_name'          => __('TUTORIALES','tutorialeswp'));
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'tutorial' ),
		'has_archive'        => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'can_export'         => true,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions')
	);
	register_post_type( 'tutorial', $args );	
}
add_action( 'init', 'register_tutorial_posttype' );

/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function tutorial_features() {
	
	$prefix = 'tutorial_';

	$tutorial_features = new_cmb2_box( 
		array(
			'id'           => $prefix . 'tutorial',
			'title'        => esc_html__( 'Campos Homepage', 'cmb2' ), 
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left
			
		) 
	);


    $tutorial_features->add_field( 
		array(
			'name'        	=> esc_html__( 'Description', 'cmb2' ),
			'description' 	=> esc_html__( 'Agregue una descripción', 'cmb2' ),
			'id'      		=> $prefix . 'descripcion',
			'type'        	=> 'textarea_small',
	  	) 
	);

	$tutorial_features->add_field( 
		array(
			'name'       		=> esc_html__('Codigo de Font Awesome', 'cmb2'),
			'description'	 	=> esc_html__('Font Awesome. E.J. fa fa-diamond.', 'cmb2'),
			'id'         		=> $prefix . 'codes',
			'type'       		=> 'text',
		)
	);

	$tutorial_features->add_field( 
		array(
			'name'       		=> esc_html__('URL', 'cmb2'),
			'description' 		=> esc_html__('ID de la pagina', 'cmb2'),
			'id'         		=> $prefix . 'url',
			'type'       		=> 'text',
		)
	);
}
add_action( 'cmb2_admin_init', 'tutorial_features' );


/*
**** TAXONOMY categorias-tutoriales ****
*/
function taxonomia_tutoriales_category() {
	register_taxonomy( 'categorias-tutoriales',
	array (0 => 'tutorial'),
	array(
		'hierarchical'      => true,
		'label'             => __('Categorías de tutoriales','tutorialeswp'),
		'show_ui'           => true,
		'query_var'         => true,
		'show_admin_column' => true,
		'labels'            => array (
			'search_items'               => __('Buscar categorías','tutorialeswp'),
			'popular_items'              => __('Más populares','tutorialeswp'),
			'all_items'                  => __('Todas','tutorialeswp'),
			'parent_item'                => __('Superior','tutorialeswp'),
			'parent_item_colon'          => __('Categoría superior','tutorialeswp'),
			'edit_item'                  => __('Editar categoría','tutorialeswp'),
			'update_item'                => __('Actualizar categoría','tutorialeswp'),
			'add_new_item'               => __('Añadir nueva categoría','tutorialeswp'),
			'new_item_name'              => __('Nueva categoría','tutorialeswp'),
			'separate_items_with_commas' => __('Separar por comas','tutorialeswp'),
			'add_or_remove_items'        => __('Añadir o borrar','tutorialeswp'),
			'choose_from_most_used'      => __('Elegir de las más usadas','tutorialeswp'),
		)
	) );
}
add_action( 'init', 'taxonomia_tutoriales_category');

/*
**** TAXONOMY tags-tutoriales ****
*/
function taxonomia_tutoriales_tag() {
	register_taxonomy( 'tags-tutoriales',
	array (0 => 'tutorial'),
	array( 'hierarchical' => false,
		'label'                 => __('Categorías de tutoriales','tutorialeswp'),
		'show_ui'               => true,
		'query_var'             => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',		
		'labels' => array (
			'name'                       => _x( 'Etiquetas', 'tutorialeswp' ),
			'singular_name'              => _x( 'Etiqueta', 'tutorialeswp' ),
			'search_items'               => __( 'Buscar Etiquetas', 'tutorialeswp' ),
			'popular_items'              => __( 'Etiquetas Populares', 'tutorialeswp' ),
			'all_items'                  => __( 'Todas las Etiquetas', 'tutorialeswp' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Editar Etiqueta', 'tutorialeswp' ),
			'update_item'                => __( 'Actualizar Etiqueta', 'tutorialeswp' ),
			'add_new_item'               => __( 'Añadir Nueva Etiqueta', 'tutorialeswp' ),
			'new_item_name'              => __( 'Nombre de Nueva Etiqueta', 'tutorialeswp' ),
			'separate_items_with_commas' => __( 'Separa las etiquetas con comas', 'tutorialeswp' ),
			'add_or_remove_items'        => __( 'Añadir o remover etiquetas', 'tutorialeswp' ),
			'choose_from_most_used'      => __( 'Elige entre las etiquetas más utilizadas', 'tutorialeswp' ),
			'not_found'                  => __( 'Ninguna etiqueta encontrada.', 'tutorialeswp' ),
			'menu_name'                  => __( 'Etiquetas', 'tutorialeswp' ),
		)
	) );
}
add_action( 'init', 'taxonomia_tutoriales_tag');

