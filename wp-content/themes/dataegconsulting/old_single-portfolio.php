<?php  get_header(); ?> 

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

    <!-- Portfolio Detail Section -->
    <section class="commonSection porfolioDetail">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-sm-7 col-md-8">
                    <div class="portDetailThumb">
                        <?php 
                            the_post_thumbnail(
                                array(770, 532),
                                array(
                                    'class' => '',
                                )
                            );
                        ?>
                    </div>
                    <div class="portDetailThumb">
                        <img src="<?php the_field('portfolio_imagen'); ?>"/>
                    </div>
                </div>
                <?php 
                    while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4 col-sm-5 col-md-4">
                            <div class="singlePortfoio_content">
                                <h3><?php the_field('portfolio_titulo'); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Cliente :</h4> 
                                <p><?php the_field('portfolio_cliente'); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Categoría :</h4>
                                <p><?php the_field('portfolio_categoria'); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Fecha :</h4>
                                <p><?php the_field('portfolio_fecha'); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Estado :</h4>
                                <p><?php the_field('portfolio_stado'); ?></p>
                            </div>
                            <div class="singlePortfoio_content">
                                <h4>Follow:</h4>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Youtube</a></li>
                                </ul>
                            </div>
                        </div>      
                        <?php 
                    endwhile;
                ?> 
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="nextprevPagination">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-6 text-left">
                                <a class="prevFolio" href="#"><i class="fa fa-angle-left"></i>Previous</a>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-6 text-right">
                                <a class="nextFolio" href="#">Next<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Portfolio Detail Section -->
			
<?php get_footer(); ?>

