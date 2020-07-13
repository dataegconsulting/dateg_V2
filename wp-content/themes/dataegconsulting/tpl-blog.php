<?php /* Template Name: BLOG */ ?>
<?php get_header(); ?>
<!-- Page Banner -->
<?php get_template_part( 'vc_templates/pagebanner' ); ?>
<!-- Page Banner -->
        <!-- Blog Section -->
        <section class="commonSection blogPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        
                        <?php
                            $query = new WP_Query(array(
                                'category_name' => 'blog',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'has_password' => false,
                            ));
                        
                            // the loop
                            while ($query->have_posts()) : $query->the_post(); ?>
                            
                                <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="latestBlogItem">
                                        <div class="lbi_thumb">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(
                                                    array(770, 305),
                                                    array(
                                                        'class' => '',
                                                    )
                                                );
                                                ?>
                                            </a>
                                        </div>
                                        <div class="lbi_details">
                                            <a href="#" class="lbid_date" style="width: 120px!important;"><?php echo get_the_date('j F, Y'); ?></a>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <a class="learnM" href="<?php the_permalink(); ?>">Leer más</a>
                                        </div>
                                    </div>
                                </article>
                                <?php 
                            endwhile;
                            wp_reset_postdata(); 
                        ?>
                        
                        <!-- Paginacion -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="meipaly_paginations text-center">
                                    <a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                                    <span class="current">01</span>
                                    <a href="#">02</a>
                                    <a href="#">5</a>
                                    <a class="next" href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 sidebar">

                        <aside class="widget search-widget">
                            <form method="post" action="#" class="searchform">
                                <input type="search" placeholder="Search here..." name="s" id="s">
                            </form>
                        </aside>

                        <?php get_template_part('vc_templates/noticias', 'lateral'); ?>

                        <aside class="widget categories">
                            <h3 class="widget_title">Servicios</h3>
                            <?php
                            if (!is_active_sidebar('sidebar_widget')) {
                                return;
                            }
                            dynamic_sidebar('sidebar_widget');
                            ?>
                        </aside>

                        <aside class="widget">
                            <h3 class="widget_title">Tags:</h3>
                            <div class="meipaly_tagcloude_widget">
                                <a href="#">Business,</a> <a href="#">Agency,</a> <a href="#">Digital,</a> <a href="#">Technology,</a>
                                <a href="#">Parallax,</a> <a href="#">Innovative,</a> <a href="#">Professional,</a>
                                <a href="#">Experience,</a>
                            </div>
                        </aside>

                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Section -->

<?php get_footer(); ?>