<?php get_header();?>

        <!-- Revolution Slider -->
        <?php echo get_template_part('headers/slider');?>
        <!-- Revolution Slider -->   

        <!-- About Agency Section -->
        <?php get_template_part( 'template-parts/about' ); ?>
        <!-- About Agency Section -->

        <!-- Services Section -->
        <?php get_template_part( 'template-parts/servicios', 'destacados' ); ?>
        <!-- Services Section -->

        <!-- Como las HAcemos -->
        <?php get_template_part( 'template-parts/como', 'hacemos' ); ?>
        <!-- Como las HAcemos -->
        
        <!-- Trust Clients Section -->
        <?php get_template_part( 'template-parts/clientes', 'confianza' ); ?>
        <!-- Trust Clients Section -->

        <!-- Portfolio Section -->
        <?php get_template_part( 'template-parts/portofolio', 'home' ); ?>
        <!-- Portfolio Section -->  
 
        <!-- Testimonial Section -->
        <section class="commonSection testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-sm-12 text-center">
                        <div class="testimonial_content">
                            <div class="testi_icon"><i class="mei-team"></i></div>
                            <h2>Estamos listos para hacer tu   <span>nueva página web</span></h2>
                            <p>
                            Sabemos que requieres una página web que proyecte lo grande que es tu negocio, cuenta con ello,  
                            <br> nosotros te ayudamos a que tu página web sea tu mejor aliado en internet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section -->

        <!-- Blog Section --> 
        <?php echo get_template_part('template-parts/blog', 'destacados');?>
        <!-- Blog Section -->




        


<?php get_footer();?>