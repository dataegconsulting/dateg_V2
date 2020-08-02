<?php
// Setup Function: Registers support for various WordPress features 
if ( ! function_exists( 'dataeg_setup' ) ) :        
    function dataeg_setup() {

        // Make theme available for translation.
        load_theme_textdomain( 'dataeg', get_template_directory() . '/languages' );
    
        // Add Theme Support
        add_theme_support('post-thumbnails');

        // Add featured image sizes
        add_image_size( 'servicios-large', 480, 1900, true ); // width, height, crop
        add_image_size( 'featured-small', 320, 147, true );
        add_image_size( 'blog-featured', 370, 305 );

        add_theme_support('automatic-feed-links');// Add default posts and comments RSS feed links to <head>.
        add_theme_support('title-tag');    
            
        add_theme_support( 'custom-background' );

        // Register Navigation Menus
        register_nav_menu( 'principal', __('Menu Principal', 'dataeg') );
        register_nav_menu( 'movil', __('Menu Movil', 'dataeg') );
        register_nav_menu( 'servicios', __('Menu servicios', 'dataeg') );
        register_nav_menu( 'footer-menu', __('Menu Footer', 'dataeg') );


        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Enable support for Post Formats. See https://developer.wordpress.org/themes/functionality/post-formats 
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ) );
    }
endif; // dataeg_setup
add_action( 'after_setup_theme', 'dataeg_setup' );