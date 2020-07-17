<?php
/*
* Template Name: CONTACTOS
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

<!-- Our Client 2 Section -->
<section class="commonSection client_2" style="padding: 120px 0px 0px 0px;!important">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"> 
                <h2 class="sec_title">Contáctanos</h2> 
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="singleClient_2  text-center">
                    <h3><i class="fa fa-map-marker cyan" style="font-size:65px;"></i></h3>
                    <p>Malabo II - Guinea Ecuatorial</p> 
                </div>
            </div>  
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="singleClient_2  text-center">
                    <h3><i class="fa fa-phone cyan" style="font-size:65px;"></i></h3>
                    <p>(+240) 222 626 697</p> 
                </div>
            </div> 
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="singleClient_2  text-center">
                    <h3><i class="fa fa-envelope cyan" style="font-size:65px;"></i></h3>
                    <p>soporte@dataeg.com</p> 
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- Our Client 2 Section -->

<!-- Contact Section -->
<section class="commonSection ContactPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="sec_title">¿Cómo te podemos ayudar?</h2>
                <p class="sec_desc">
                Necesitamos tus datos de contacto para poder podernos en contacto contigo.
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



 

<?php get_footer(); ?>