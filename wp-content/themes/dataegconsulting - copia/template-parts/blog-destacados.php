        <section class="commonSection blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"> 
                        <h2 class="sec_title">ÚLTIMAS PUBLICACIONES </h2> 
                    </div>
                </div>
                <div class="row">  <!-- blog post -->
                    <?php
                        $posts = new WP_Query(array(
                            'category_name' => 'blog',
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'has_password' => false,
                        ));
                        if ($posts->have_posts()) :
                            // the loop
                            while ($posts->have_posts()) : $posts->the_post(); ?>

                                <div class="col-lg-4 col-sm-6 col-md-4">
                                    <div class="latestBlogItem">
                                    
                                        <div class="lbi_thumb">
                                        <a href="<?php the_permalink();?>">
                                            <?php the_post_thumbnail(
                                                array(350, 250),
                                                array(
                                                'class' => '',
                                                )
                                            );
                                            ?>
                                            </a>
                                        </div>
                                        <div class="lbi_details">
                                            <a href="#" class="lbid_date"><?php echo get_the_date('j F'); ?></a>
                                            <h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a></h2>
                                            <a class="learnM" href="<?php the_permalink();?>">Leer más</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            endwhile; 
                        endif;
                        wp_reset_postdata(); 
                    ?>

                </div>
            </div>
        </section>