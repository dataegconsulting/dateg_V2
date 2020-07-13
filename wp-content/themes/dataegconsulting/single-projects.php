<?php get_header(); ?>

<!-- Page Banner -->
<?php get_template_part( 'vc_templates/pagebanner' ); ?>
<!-- Page Banner -->

 
<!-- Portfolio Detail Section -->
<section class="commonSection porfolioDetail">
    <div class="container">
        <?php 
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-lg-8 col-sm-7 col-md-8">
                            <div class="portDetailThumb">
                                <?php the_post_thumbnail(
                                    array(730, 493),
                                    array(
                                        'class' => 'img-fluid w-100',
                                    )
                                );?>
                            </div>
                            <div class="portDetailThumb">
                                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'dataeg_projects_imagen_proyecto_id', 1), ''); ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-5 col-md-4">
                            <div class="singlePortfoio_content">
                                <h3>Estilos de diseño</h3>
                                <p><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_descripcion_proyecto', true); ?> </p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Cliente:</h4>
                                <p><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_cliente_proyecto', true); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Categoría:</h4>
                                <p><a href="#"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_categoria_proyecto', true); ?></a></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Feha:</h4>
                                <p><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_fecha_proyecto', true); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Follow:</h4>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>    
    </div>
</section>
<!-- Portfolio Detail Section -->

<!-- Related Portfolio Section -->
<section class="commonSection relatedPortfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title">our portfolio</h4>
                <h2 class="sec_title">related work</h2>
                <p class="sec_desc">
                    We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="related_slider">
                <?php
            $the_query = new WP_Query(array(
                'post_type' => 'projects',
                'showposts' => -1,
                'post_status' => 'publish',
                'has_password' => false,
                'post__not_in' => array(get_the_ID())
            ));
            if ($the_query->have_posts()) :
                // the loop
                while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <div class="singlefolio">
                        <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'dataeg_projects_imagen_proyecto_id', 1), ''); ?>
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;
        wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Portfolio Section -->


<?php get_footer(); ?>