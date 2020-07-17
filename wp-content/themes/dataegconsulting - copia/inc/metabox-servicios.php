<?php
/*
	Description: METABOXES SERVICIOS PAGE
	Version: 1.0
	Author: Filiberto Mba Obama
	Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function dta_seccion_paquetes()
{
	$prefix = 'dta_group_';

	/**
	 * Repeatable Field Groups
	 */
	$dta_paquets = new_cmb2_box(array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__('MÁS SERVICIOS ', 'cmb2'),
		'object_types'  => array('page'),
		'show_on'		=> array ('key' => 'id', 'value' => array(442, 16)),
		'context' 	    => 'normal',
		'priority'	    => 'high',
		'show_names'    => true, 
	));

	$dta_paquets->add_field(array(
		'name' => esc_html__('Titulo Sección', 'cmb2'),
		'desc' => esc_html__('Añada un titulo para la sección', 'cmb2'),
		'id'   => $prefix . 'intro_paquets',
		'type' => 'text',
	));

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $dta_paquets->add_field(array(
		'id'          => $prefix . 'paquetes',
		'type'        => 'group',
		'description' => esc_html__('Agregue opciones según sea necesario', 'cmb2'),
		'options'     => array(
			'group_title'   => esc_html__('Paquetes del Servicios {#}', 'cmb2'), // {#} gets replaced by row number
			'add_button'    => esc_html__('Agregar Otro Grupo', 'cmb2'),
			'remove_button' => esc_html__('Eliminar', 'cmb2'),
			'sortable'      => true,
			// 'closed'     => true, // true to have the groups closed by default
		),
	));

	$dta_paquets->add_group_field($group_field_id, array(
		'name'       => esc_html__('Titulo del Servicio', 'cmb2'),
		'id'         => 'titulo_paquet',
		'type'       => 'text',
	));

	$dta_paquets->add_group_field($group_field_id, array(
		'name'        => esc_html__('Description', 'cmb2'),
		'description' => esc_html__('Agregue una descripción', 'cmb2'),
		'id'          => 'desc_paquet',
		'type'        => 'textarea_small',
	));

	$dta_paquets->add_group_field($group_field_id, array(
		'name'       => esc_html__('Codigo de Font Awesome', 'cmb2'),
		'desc' => esc_html__('Font Awesome. E.J. fa fa-diamond.', 'cmb2'),
		'id'         => 'codes_paquet',
		'type'       => 'text',
	));

	$dta_paquets->add_group_field($group_field_id, array(
		'name'       => esc_html__('URL', 'cmb2'),
		'desc' => esc_html__('ID de la pagina', 'cmb2'),
		'id'         => 'url_paquet',
		'type'       => 'text',
	));
}
add_action('cmb2_admin_init', 'dta_seccion_paquetes');



function campos_gallery() {
	
	$prefix = 'dataeg_gallery_';

	$dataeg_campos_gallery = new_cmb2_box( 
		array(
			'id'           => $prefix . 'gallery',
			'title'        => esc_html__( 'Campos gallery', 'cmb2' ),
			'object_types' => array( 'post' ), // Post type
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left
			'fields'     => array(
				array(
					'name' => __( 'Location for Your Post', 'ta-music' ),
					'desc' => __( 'You can add location information for video or gallery post.', 'ta-music' ),
					'id'   => $prefix . 'post_location',
					'type' => 'text_medium',
				),
			),
		) 
	);
}
add_action('cmb2_admin_init', 'campos_gallery');

