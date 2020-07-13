<div class="popup popup__menu">
        <a href="" id="close-popup" class="close-popup"></a>
        <div class="container mobileContainer">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <div class="logo2">
                        <?php get_template_part( 'page-templates/parts/logo2' ); ?> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popup-inner">
                        <div class="dl-menu__wrap dl-menuwrapper">
                        <?php
                            wp_nav_menu( [
                                'theme_location'  => 'movil',
                                'menu'            => '', 
                                'container'       => false, 
                                'menu_class'      => 'dl-menu dl-menuopen',  
                                'echo'            => true, 
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 10, 
                            ] );
                        ?> 
                            
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

