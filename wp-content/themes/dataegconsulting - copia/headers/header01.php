<header class="header_01" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <?php
                        $logo = dataeg_get_config('media-logo');
                    ?>

                    <?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
                        
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        </a>

                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                            <img src="<?php echo esc_url_raw( get_template_directory_uri().'/img/logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8">
                <nav class="mainmenu text-right">
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => 'principal',
                            'menu'            => '', 
                            'container'       => false, 
                            'menu_class'      => 'm-menu', 
                            'echo'            => true, 
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 10, 
                        ] );
                    ?> 
                </nav>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                <div class="navigator text-right">
                    <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass"></i></a>
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a>
                    <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>