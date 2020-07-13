<section class="service_section commonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="sub_title white">Servicios</h1>
                <h4 class="sec_title white"> ¡Todo lo que necesita para triunfar en el mundo digital<br> lo podrá encontrar en un sólo lugar!</h4> 
            </div>
        </div>
        <div class="row custom_column">
            <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'features',
                    'showposts' => 3,
                    'orderby'          => 'post_date',
                    'order'            => 'ASC',
                    'post_status' => 'publish',
                    'has_password' => false,
                    'post__not_in' => array(get_the_ID())
                ));
                if ($the_query->have_posts()) :
                    // the loop
                    while ($the_query->have_posts()) : $the_query->the_post();?>
                        <div class="col-lg-4 col-sm-6 col-md-4">
                                
                                        
                            <div class="icon_box_2 text-center">
                                <h3><?php echo the_title(); ?></h3>
                                <p>
                                <?php echo get_post_meta(get_the_ID(), 'dataeg_description', true); ?>
                                </p>
                                <div class="iconWrap">
                                <i class="<?php echo get_post_meta(get_the_ID(), 'dataeg_features_codes', true); ?>"></i>
                                </div>
                                <a href="<?php echo esc_url(get_permalink(get_post_meta(get_the_ID(), 'dataeg_features_url', true))); ?>">leer más</a>
                            </div>
                        </div>
                        <?php 
                    endwhile;
                    wp_reset_postdata();
                endif; 
            ?>
        </div>
    </div>
</section>