<?php

function dataeg_widgets_sidebar(){

    register_sidebar(array(

        'name'         => 'Menu Servicios',
        'id'           => 'sidebar_widget',
        'class'         => '<ul>',
        'before_widget' => '<div class="meipaly_categorie_widget ">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(

        'name'         => 'widget Help',
        'id'           => 'sidebar_help',       
        'before_widget' => '<div class="meipaly_services_help">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
}
add_action('widgets_init', 'dataeg_widgets_sidebar');


 