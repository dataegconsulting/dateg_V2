<?php
get_header();?>

<!-- feature item -->
<?php
                $the_query = new WP_Query(array(
                    'post_type' => 'features',
                    'showposts' => 12,
                    'orderby'          => 'post_date',
                    'order'            => 'ASC',
                    'post_status' => 'publish',
                    'has_password' => false,
                    'post__not_in' => array(get_the_ID())
                ));
                if ($the_query->have_posts()) :
                    // the loop
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>

                     <div class="col-lg-3 col-sm-6 mb-4">
                         <a href="<?php echo esc_url(get_permalink(get_post_meta(get_the_ID(), 'dataeg_features_url', true))); ?>">
                             <div class="bg-white py-5 px-4 text-center box-shadow banner-feature">
                                 <div class="icon-bg mb-4 water-wave">
                                     <i class="<?php echo get_post_meta(get_the_ID(), 'dataeg_features_codes', true); ?> icon text-primary"></i>
                                 </div>
                                 <h4 class="mb-4"> <?php echo the_title(); ?> </h4>
                                 <p><?php echo get_post_meta(get_the_ID(), 'dataeg_features_descripcion', true); ?> </p>
                             </div>
                         </a>
                     </div>

                 <?php endwhile;
                wp_reset_postdata();
            endif; ?>
             <!-- feature item -->
<?php get_footer(); ?>