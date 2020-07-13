<?php 
/* Template Name: Proyecto Team*/
get_header(); ?> 

    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="#">home</a> - portfolio</h4>
                        <h2>portfolio detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->
    
    <!-- Portfolio Section -->
    <section class="commonSection porfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">our portfolio</h4>
                    <h2 class="sec_title">work showcase</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                    </p>
                </div>
            </div>
            <?php
                // Get 'team' posts
                $portfolio_posts = get_posts( array(
                    'post_type' => 'portfolio', 
                    'posts_per_page' => 50, // Unlimited posts
                    'orderby' => 'title', // Order alphabetically by name
                    'order' => 'ASC' // Start with 'A'
                ) );
                if ( $portfolio_posts ):?>
                    <div class="row">
                        <?php 
                            foreach ( $portfolio_posts as $post ): 
                                setup_postdata($post);
                            
                                // Resize and CDNize thumbnails using Automattic Photon service
                                $thumb_src = null;
                                if ( has_post_thumbnail($post->ID) ) {
                                    $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
                                    $thumb_src = $src[0];
                                } ?>
                                <div class="col-lg-4 col-sm-6 col-md-4"> 
                                    <div class="singlefolio">
                                        <?php if ( $thumb_src ): ?>
                                        <img src="<?php echo $thumb_src; ?>" alt="<?php the_field('portfolio_imagen'); ?>" class="">
                                        <?php endif; ?>
                                        <div class="folioHover">
                                            <a class="cate" href="<?php the_permalink();?>"><?php the_field('portfolio_cliente'); ?></a>
                                            <h4><a href="<?php the_permalink();?>"><?php the_field('portfolio_categoria'); ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            endforeach; 
                        ?>
                    </div>
                    <?php 
                endif; 
            ?>
        </div>
    </section>
    <!-- Portfolio Section -->

  
<?php get_footer(); ?>

