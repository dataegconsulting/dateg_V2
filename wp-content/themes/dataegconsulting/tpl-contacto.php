<?php
/*
* Template Name: CONTACTOS
*/
get_header(); ?>

<!-- Page Banner -->
<?php get_template_part( 'template-parts/header-servicios' ); ?>
<!-- Page Banner -->

<!-- Our Client 2 Section -->
<section class="commonSection client_2" style="padding: 120px 0px 0px 0px;">
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

<!-- Contact Map Section -->
<section class="gmapsection">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 noPadding">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7962.634761293165!2d8.743285471076929!3d3.7408619283223024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b208bcfcf2fd1d6!2sDATA%20EG!5e0!3m2!1ses!2s!4v1596059689002!5m2!1ses!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Contact Map Section -->

<?php get_footer(); ?>