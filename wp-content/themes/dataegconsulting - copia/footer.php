<!-- Footer Section -->
<footer class="footer_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 col-md-5">
                <aside class="widget aboutwidget">
                    <?php get_template_part( 'page-templates/parts/logo' ); ?> 
                    <p>
                    Somos una agencia digital donde nos apasiona la tecnología, 
                    nos centramos en la estrategia y creamos páginas web que generan resultados tangibles.
                    </p>
                </aside>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <aside class="widget contact_widgets">
                    <h3 class="widget_title">contacto</h3>
                    <?php 
                        $titles = dataeg_get_config('menu_contact_info_title');   
                        if ( !empty($titles) ) {
                            ?>
                            <?php
                                foreach ($titles as $key => $title) {
                                    ?>
                                    <p><?php echo esc_html($title); ?></p> 
                                    <?php
                                }
                                ?>
                            <?php
                        }
                    ?>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-2 col-md-3">
                <aside class="widget social_widget">
                    <h3 class="widget_title">social</h3>
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
                </aside>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="copyright">
                    DATA EG &copy; 
                    <script> 
                        var CurrentYear = new Date().getFullYear()  
                        document.write(CurrentYear)  
                    </script> Todos los derechos reservados  
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section -->

<!-- Bact To To -->
<a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>
<!-- Bact To To -->
<?php wp_footer(); ?>
</body>
</html>