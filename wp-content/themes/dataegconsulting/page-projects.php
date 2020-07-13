<?php get_header(); ?>

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - portfolio</h4>
                            <h2>portfolio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->
        
<!-- project details --> 
<section class="section">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="col-lg-8">
                        <h2> <?php the_title(); ?></h2>
                        <p class="mb-5"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_descripcion_proyecto', true); ?></p>
                        <div class="row no-gutters bg-secondary p-sm-5 p-4 mb-5">
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="border-md-right border-muted ml-4">
                                    <h5 class="text-white text-uppercase">CLIENTE</h5>
                                    <span class="text-light"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_cliente_proyecto', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="border-md-right border-muted ml-4">
                                    <h5 class="text-white text-uppercase">CategorÍA</h5>
                                    <span class="text-light"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_categoria_proyecto', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="border-md-right border-muted ml-4">
                                    <h5 class="text-white text-uppercase">FECHA</h5>
                                    <span class="text-light"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_fecha_proyecto', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="ml-4">
                                    <h5 class="text-white text-uppercase">ESTADO</h5>
                                    <span class="text-light"><?php echo get_post_meta(get_the_ID(), 'dataeg_projects_stado_proyecto', true); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- project image -->
                        <?php the_post_thumbnail(
                            array(730, 493),
                            array(
                                'class' => 'img-fluid w-100',
                            )
                        );
                        ?><br><br>
                        <?php the_content(); ?>
                        <div class="mb-5">
                            <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'dataeg_projects_imagen_proyecto_id', 1), 'img-fluid w-100'); ?>
                        </div>
                    </div>
                <?php endwhile;
        endif; ?>

            <!-- sidebar -->
            <aside class="col-lg-4">
                <!-- quick contact -->
                <div class="contacto-vertical bg-white px-4 py-5 box-shadow mb-5">
                    <h4 class="mb-4">Contacto</h4>

                    <?php echo do_shortcode('[contact-form-7 id="911" title="Formulario de contacto  vertical"]'); ?>
                </div>
                <?php get_template_part('template', 'parts/download'); ?>
            </aside>
        </div>
    </div>
</section>
<!-- /project details -->

<?php get_footer(); ?>