<?php
    /**
     * @package WordPress
     * @subpackage dataeg
     * @since 1.5
     */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11">	
        <?php wp_head(); ?> 
    </head>

    <body <?php body_class(); ?>>

    <!-- Preloading -->
    <div class="preloader text-center">
        <div class="la-ball-circus la-2x">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
    <!-- Preloading -->

    <!-- Header 01 -->
    <?php echo get_template_part('headers/header01');?>
    <!-- Header 01 -->

    <!-- Search From -->
    <?php echo get_template_part('headers/search_from');?>
    <!-- Search From -->

    <!-- PopUP Menu -->
    <?php echo get_template_part('headers/popup_menu');?>
    <!-- PopUP Menu -->

 