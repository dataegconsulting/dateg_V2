<?php

    /**
     * dataeg functions and definitions
     * @package dataeg
     * @since dataeg 1.5
     */

    /* ************************************************************************ */
    //  External Modules/Files.
    require get_template_directory() . '/inc/setup.php';
    require get_template_directory() . '/inc/widgets.php';      
    require get_template_directory() . '/inc/enqueues.php'; 
    require get_template_directory() . '/inc/redux-config.php'; 
    require get_template_directory() . '/inc/metabox-sliders.php';
    require get_template_directory() . '/inc/metabox-download.php';
    require get_template_directory() . '/inc/metabox-features.php';
    require get_template_directory() . '/inc/metabox-servicios.php';
    require get_template_directory() . '/inc/metabox-portofolio.php';
    require get_template_directory() . '/inc/redux/extensions/repeater/extension_repeater.php';
    require get_template_directory() . '/inc/redux/extensions/repeater/field_repeater.php';



    /* ************************************************************************ */
    //  JavaScript Detection. Adds a `js` class to the root `<html>` element when JavaScript is detected.
  
    function dataeg_javascript_detection() {

        wp_add_inline_script( 'dataeg-typekit', "(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);" );
    }
    add_action( 'wp_enqueue_scripts', 'dataeg_javascript_detection', 0 );


    /* ************************************************************************ */
    //  dataeg para Redux
    
    if ( !function_exists( 'dataeg' ) ) {

        function dataeg( $id, $fallback = false, $param = false ) {
            global $dataeg;

            if ( $fallback == false ) $fallback = '';
                $output = ( isset( $dataeg[$id] ) && $dataeg[$id] !== '' ) ? $dataeg[$id] : $fallback;
            if ( !empty($dataeg[$id]) && $param ) {
                $output = $dataeg[$id][$param];
            }
            return $output;
        }
    }

    function dataeg_get_config($name, $default = '') {
        global $consulting_options;
        if ( isset($consulting_options[$name]) ) {
            return $consulting_options[$name];
        }
        return $default;
    }


    /* ************************************************************************ */
    //  Include Favicon

    function my_favicon_link() {

        echo '<link rel="shortcut icon" type="image/png" href="img/favicon.png" />' . "\n";
    }
    add_action( 'wp_head', 'my_favicon_link' );


    /* ************************************************************************ */
    //  Limitar la longitud de la publicación usando el número de palabras

    function excerpt($limit) {

        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . ' [...]';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
        return $excerpt;
    }


    /* ************************************************************************ */
    //Limitar con la funcion get_the_content

    function content($limit) {

        $content = explode(' ', get_the_content(), $limit);
        if (count($content) >= $limit) {
            array_pop($content);
            $content = implode(" ", $content) . ' [...]';
        } else {
            $content = implode(" ", $content);
        }
        $content = preg_replace('/[.+]/', '', $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        return $content;
    }

    
    /* ************************************************************************ */
    //  Class Home Body
       
    // function wp_body_classes( $classes ) {
    //     $classes[] = 'gdlr-core-body woocommerce-no-js attorna-body attorna-body-front attorna-full  attorna-with-sticky-navigation  attorna-blockquote-style-1 gdlr-core-link-to-lightbox';
        
    //     return $classes;
    // }
    // add_filter( 'body_class','wp_body_classes' );
