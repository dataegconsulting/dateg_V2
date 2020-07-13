<?php
/*
* Template Name: Contactos
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
                            <?php endwhile;
                        endif; 
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->

                <!-- Our Client 2 Section -->
                <section class="commonSection client_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">our offices</h4>
                        <h2 class="sec_title">offices near you</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="singleClient_2">
                            <h3>austin</h3>
                            <p>22 Texas West Hills</p>
                            <p>needhelp@meipaly.com</p>
                            <p>666 888 000</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="singleClient_2">
                            <h3>boston</h3>
                            <p>5 Federal Street Boston</p>
                            <p>needhelp@meipaly.com</p>
                            <p>666 888 000</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="singleClient_2">
                            <h3>new york</h3>
                            <p>8th Broklyn New York</p>
                            <p>needhelp@meipaly.com</p>
                            <p>666 888 000</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="singleClient_2">
                            <h3>baltimore</h3>
                            <p>3 Lombabr 50 baltimore</p>
                            <p>needhelp@meipaly.com</p>
                            <p>666 888 000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Client 2 Section -->

 

<?php get_footer(); ?>