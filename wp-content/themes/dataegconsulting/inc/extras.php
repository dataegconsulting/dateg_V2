<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package TA Music
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

 

/**
 * Get images attached to post.
 */
if ( !function_exists( 'ta_post_images' ) ) {
	function ta_post_images( $args=array() ) {
		global $post;

		$defaults = array(
			'numberposts'		=> -1,
			'order'				=> 'ASC',
			'orderby'			=> 'menu_order',
			'post_mime_type'	=> 'image',
			'post_parent'		=>  $post->ID,
			'post_type'			=> 'attachment',
		);
		$args = wp_parse_args( $args, $defaults );

		return get_posts( $args );
	}
}






/**
 * Posts Page Custom Template.
 */
function posts_page_custom_template( $template ) {
	global $wp_query;

	if( true == ( $posts_per_page_id = get_option( 'page_for_posts' ) ) ) {
		$page_id = $wp_query->get_queried_object_id();
		if( $page_id == $posts_per_page_id ){
			$theme_directory = get_stylesheet_directory() ."/";
			$page_template   = get_post_meta( $page_id, '_wp_page_template', true );
			if( $page_template != 'default' ){
				if( is_child_theme() && !file_exists( $theme_directory . $page_template ) ){
					$theme_directory = get_template_directory();
				}
				return $theme_directory . $page_template;
			}
		}
	}

	return $template;
}
add_filter( 'template_include', 'posts_page_custom_template' );

/**
 * Customize Tag Cloud Widget font size.
 */
function custom_tag_cloud_widget( $args ) {
	$args['largest'] = 1; //largest tag
	$args['smallest'] = 1; //smallest tag
	$args['unit'] = 'em'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );

/**
 * Custom Read More Button
 */
function modify_read_more_link() {

	return '<p><a href="' . get_permalink() . '" class="read-more">' . __( 'Read More', 'ta-music' ) . '</a><i class="fa fa-angle-double-right read-more-icon"></i></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * Add script for Load More button.
 */
function load_more_js_init() {
	global $wp_query;

	// What page are we on? And what is the pages limit?
	$max = $wp_query->max_num_pages;
	$paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;

	// Add some parameters for the JS.
	wp_localize_script(
		'ta-music-app-js',
		'ta_music',
		array(
			'startPage' => $paged,
			'maxPages' => $max,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'load_more_js_init' );
 