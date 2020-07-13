<?php 
/** Template Name: Especial */
get_header();?>

        <!-- About Agency Section -->
        <section class="commonSection ab_agency">
            <div class="container">
                <div class="row">
                    <?php 
                        // Check rows exists.
                        if( have_rows('section') ):
                        
                            // Loop through rows.
                            while( have_rows('section') ) : the_row();?>
                                

                               
                          
                    <div class="col-lg-6 col-sm-6 col-md-6 PR_79">
                        <h4 class="sub_title">¡ Hola, Bienvenido! SOMOS DATA EG CONSULTING</h4>
                        <h2 class="sec_title MB_45"><?php the_title(); ?></h2>
                        <p class="sec_desc"><?php the_sub_field('hola'); ?></p>
                        <a class="common_btn red_bg" href="#"><span>CONTÁCTANOS</span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="ab_img1">
                            <img src="images/home_1/2.jpg" alt=""/>
                        </div>
                        <div class="ab_img2">
                            <img src="images/home_1/1.jpg" alt=""/>
                        </div>
                    </div>
                    <?php endwhile;

                        // No value.
                        else : echo 'nothing found';
                            // Do something...
                        endif; 
                    ?>
                </div>
            </div>
        </section>
        <!-- About Agency Section -->
        <?php get_footer();?>