<?php
    
//Enqueue scripts and styles.
function dataeg_styles() {

    // -- Include All CSS --
    wp_enqueue_style('style',                   get_stylesheet_uri() );
    wp_enqueue_style('bootstrap',               get_template_directory_uri() . '/css/bootstrap.css', false, '');
    wp_enqueue_style('owl.carousel',            get_template_directory_uri() . '/css/owl.carousel.css', true, '');
    wp_enqueue_style('owl.theme',               get_template_directory_uri() . '/css/owl.theme.css', true, '');
    wp_enqueue_style('font-awesome.min',        get_template_directory_uri() . '/css/font-awesome.min.css', true, '');        
    wp_enqueue_style('animate',                 get_template_directory_uri() . '/css/animate.css', true, ''); 
    wp_enqueue_style('magnific-popup',          get_template_directory_uri() . '/css/magnific-popup.css', false, '');
    wp_enqueue_style('settings',                get_template_directory_uri() . '/css/settings.css', true, '');
    wp_enqueue_style('slick',                   get_template_directory_uri() . '/css/slick.css', true, '');
    wp_enqueue_style('icons',                   get_template_directory_uri() . '/css/icons.css', true, '');        
    wp_enqueue_style('preset',                  get_template_directory_uri() . '/css/preset.css', true, '');
    wp_enqueue_style('theme',                   get_template_directory_uri() . '/css/theme.css', false, '');
    wp_enqueue_style('responsive',              get_template_directory_uri() . '/css/responsive.css', true, '');
    wp_enqueue_style('color1',                  get_template_directory_uri() . '/css/presets/color1.css', true, '');  
}
add_action('wp_enqueue_scripts', 'dataeg_styles');


// Required JavaScript Libraries
function dataeg_scripts() {

    // -- Include All JS --
    wp_enqueue_script('jquery',                     get_template_directory_uri() . '/js/jquery.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap',                  get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('custom',                     get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '', true);
    wp_enqueue_script('gmaps',                      get_template_directory_uri() . '/js/gmaps.js', array('jquery'), '', true);
    wp_enqueue_script('revolution',                 get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true);
    wp_enqueue_script('tools',                      get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', array('jquery'), '', true);

    // -- Rev slider Add on Start --
    wp_enqueue_script('extension.actions',          get_template_directory_uri() . '/js/extensions/revolution.extension.actions.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.carousel',         get_template_directory_uri() . '/js/extensions/revolution.extension.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.kenburn',          get_template_directory_uri() . '/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.migration',        get_template_directory_uri() . '/js/extensions/revolution.extension.migration.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.parallax',         get_template_directory_uri() . '/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.slideanims',       get_template_directory_uri() . '/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.layeranimation',   get_template_directory_uri() . '/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.navigation',       get_template_directory_uri() . '/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '', true);
    wp_enqueue_script('extension.video',            get_template_directory_uri() . '/js/extensions/revolution.extension.video.min.js', array('jquery'), '', true);

    //-- Portfolio Filter Add on End --
    wp_enqueue_script('filterable',                 get_template_directory_uri() . '/js/filterable.js', array('jquery'), '', true);

    //-- Rev slider Add on End --
    wp_enqueue_script('dlmenu',                     get_template_directory_uri() . '/js/dlmenu.js', array('jquery'), '', true);
    wp_enqueue_script('magnific.popup',             get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '', true);
    wp_enqueue_script('mixer',                      get_template_directory_uri() . '/js/mixer.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.easing',              get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '', true);
    wp_enqueue_script('owl.carousel',               get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true);
    wp_enqueue_script('slick',                      get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.appear',              get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), '', true);
    wp_enqueue_script('script',                     get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'dataeg_scripts');
    
     
 