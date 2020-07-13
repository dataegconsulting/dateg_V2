<?php
/*
* Template Name: Quienes Somos
*/
get_header(); ?>

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - contact</h4>
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Contact Section -->
        <section class="commonSection ContactPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">Contact with us</h4>
                        <h2 class="sec_title">write us a message</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                    <?php 
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?> 
                                <?php the_content(); ?>

                                <p><?php the_field('somos_titulo'); ?></p>
                            <?php endwhile;
                        endif; 
                    ?>
                    </div>
                </div>
            </div>
        </section>


 

<?php get_footer(); ?>