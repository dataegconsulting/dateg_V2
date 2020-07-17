<div class="popup popup__menu">
        <a href="" id="close-popup" class="close-popup"></a>
        <div class="container mobileContainer">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <div class="logo2">
                        <?php
                            $logo = dataeg_get_config('media-mobile-logo');
                        ?>

                        <?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
                            
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            </a>

                        <?php else: ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                                <img src="<?php echo esc_url_raw( get_template_directory_uri().'/img/logo2.png'); ?>" alt="<?php bloginfo( 'name' ); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popup-inner">
                        <div class="dl-menu__wrap dl-menuwrapper">
                            <?php
                                $menu_name = 'movil';
                                $locations = get_nav_menu_locations();
                                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                            ?>

                            <ul class="dl-menu dl-menuopen">
                                <?php
                                    $count = 0;
                                    $submenu = false;

                                    foreach( $menuitems as $item ):

                                        $link = $item->url;
                                        $title = $item->title;
                                        // item does not have a parent so menu_item_parent equals 0 (false)
                                        if ( !$item->menu_item_parent ):

                                            // save this id for later comparison with sub-menu items
                                            $parent_id = $item->ID; ?> 

                                            <li class="item">
                                                <a href="<?php echo $link; ?>" class="title">
                                                    <?php echo $title; ?>
                                                </a>
                                                <?php endif; ?>

                                                <?php if ( $parent_id == $item->menu_item_parent ): ?>

                                                <?php if ( !$submenu ): $submenu = true; ?>
                                                <ul class="dl-submenu">
                                                    <?php endif; ?>
                                                    <li class="item">
                                                        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                                                    </li>
                                                    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                                </ul>
                                                    <?php $submenu = false; endif; ?>
                                                <?php endif; ?>

                                                <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                                            </li>                           
                                        <?php $submenu = false; endif; ?>

                                        <?php $count++; 
                                    endforeach;
                                ?>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <?php 
                            $titles = dataeg_get_config('menu_contact_info_title');   
                            if ( !empty($titles) ) {
                                ?>
                                <ul class="footer__contacts text-left">
                                <?php
                                    foreach ($titles as $key => $title) {
                                        ?>
                                        <li><?php echo esc_html($title); ?></li> 
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <?php
                            }
                        ?>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                    <div class="popUp_social text-right">
                        <?php 
                            $social_links = dataeg_get_config('menu_popup_social_link');                        
                            $social_icons = dataeg_get_config('menu_popup_social_icon');
                            $social_title = dataeg_get_config('menu_popup_social_title');
                            if ( !empty($social_links) ) {
                                ?>
                                <ul>
                                    <?php
                                    foreach ($social_links as $key => $value) {
                                        $titles = $social_title[$key];
                                        ?>
                                        <li>
                                            <a href="<?php echo esc_url($value); ?>">
                                                <i class="<?php echo esc_attr($social_icons[$key]); ?>"></i>
                                                <?php echo esc_html($titles); ?>  
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <?php
                            }
                        ?>       
                    </div>
                </div>
            </div>
        </div>
    </div>

