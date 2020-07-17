        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - Services</h4>
                            <h2>Service Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Services Details Section -->
        <section class="commonSection service_detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="serviceArea">
                            <?php echo get_the_post_thumbnail('', 'img-fluid'); ?>
                            <h2><?php the_title(); ?> </h2>
                            <?php the_content(); ?> 
                        </div>
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </section>
        <!-- Services Details Section -->

        <?php $paquets = get_post_meta(get_the_ID(), 'dta_group_paquetes', true);
            if ($paquets) { ?>
                <!-- feature -->
                <section class="bg-gray" style="padding-bottom:100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 order-lg-1 order-2 section" style="padding-top:100px; padding-bottom:10px;">
                                <div class="section-title-border"></div>
                                <?php $titulo = get_post_meta(get_the_ID(), 'dta_group_intro_paquets', true); ?>

                                <h4 class="section-title-sm" style="margin-bottom: 40px;"> <?php echo $titulo; ?> </h4>
                            </div>
                        </div>

                        <div class="row">
                            <?php 
                                foreach ($paquets as $paquet) :
                                    setup_postdata($paquet);
                                    ?>
                                    <div class="col-md-6 mb-r wow fadeInRight" style="margin-bottom:15px;">
                                        <div class="col-1 col-md-2 float-left">
                                            <i class="fa <?php echo $paquet['codes_paquet']; ?> icon " style="font-size: 30px!important;"></i>
                                        </div>
                                        <div class="col-10 col-md-9 col-lg-10 float-right">
                                            <h4 class="feature-title"> <?php echo $paquet['titulo_paquet']; ?> </h4>
                                            <p class="grey-text"><?php echo $paquet['desc_paquet']; ?></p>
                                        </div>
                                    </div>
                                    <?php 
                                endforeach;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </section>
                <!-- /feature -->
                <?php
            } else {
                echo " ";
            }
        ?>