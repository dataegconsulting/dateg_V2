<?php /* Template Name: Page_Service */ ?>
<?php get_header(); ?>

<!-- Services Section -->
<section class="service_section_2 commonSection">
    <div class="container">
        <div class="row">
            <!-- feature item -->
            <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'features',
                    'showposts' => 10,
                    'orderby'          => 'post_date',
                    'order'            => 'ASC',
                    'post_status' => 'publish',
                    'has_password' => false,
                    'post__not_in' => array(get_the_ID())
                ));
                if ($the_query->have_posts()) :
                    // the loop
                    while ($the_query->have_posts()) : $the_query->the_post();?>
                        <div class="col-lg-4 col-sm-6 col-md-4" style="padding-bottom: 20px;">
                        
                            <div class="icon_box_2 text-center" >
                                <h3> <?php echo the_title(); ?> </h3>
                                <p> <?php echo get_post_meta(get_the_ID(), 'dataeg_features_descripcion', true); ?> </p>
                                <div class="iconWrap">
                                    <i class="<?php echo get_post_meta(get_the_ID(), 'dataeg_features_codes', true); ?> "></i>
                                </div>
                                <a  href="<?php echo esc_url(get_permalink(get_post_meta(get_the_ID(), 'dataeg_features_url', true))); ?>"> 
                                    discover more
                                </a>
                            </div>
                
                        </div>
                        <?php 
                    endwhile;
                    wp_reset_postdata();
                endif; 
            ?> <!-- feature item -->

                  

        </div>
    </div>
</section>
<!-- Services Section -->

<?php get_footer(); ?>