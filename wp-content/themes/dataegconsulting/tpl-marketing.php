<?php /* Template Name: MARKETING ONLINE */ ?>
 
<?php
get_header(); ?>

<!-- Page Banner -->
<?php get_template_part( 'template-parts/header-servicios' ); ?>
<!-- Page Banner -->

<section class="commonSection  bg-gray" style="padding-top:100px;  background:#EBEFF4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title" style="letter-spacing: 6px; color: #cf2e2e;">SERVICIOS DE MARKETING ONLINE</strong></h4>
                <h2 class="sec_title" style="color:#1e3e55; padding-top: 15px;"><strong>
                    Somos una agencia de Marketing Online<br> experta en Posicionamiento Web, <br>
                Google AdWords y Remarketing.</strong></h2>
                <p class="sec_desc">
                (Servicios exclusivos para páginas web y tiendas online desarrolladas en WordPress)
                </p>
            </div>  
        </div>
    </div>
</section> 

<!-- Trust Clients Section -->
<section class="commonSection trustClient" style="padding-top:0px; margin-top:-75px;background:#EBEFF4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="CL_content">
                    <?php 
                        $image = get_field('posicionamiento_images');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            
                        };
                    ?>
                    <div class="abc_inner">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="abci_content" style="padding: 71px 0px 1px 44px!important; margin-left: 29px!important;">
                                    <h4 class="has-vivid-red-color has-text-color sub_title"><strong><?php the_field('posicionamiento_sub_titulo'); ?></strong></h4>
                                    <h2 style="font-size: 33px; line-height: 40px;"><?php the_field('posicionamiento_titulo'); ?> </h2>
                                    <p> <?php the_field('posicionamiento_content'); ?> </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trust Clients Section -->

<!-- Featured Section -->
<section class="commonSection featured" style="padding:100px 0; margin-top: 0px!important; background:#EBEFF4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12  col-md-5">
                <div class="features_content" style="padding: 71px 0!important;">
                <h4 class="has-vivid-red-color has-text-color sub_title"><strong><?php the_field('adwords_sub_title'); ?></strong></h4> 
                    <h2 class="sec_title"><?php the_field('adwords_title'); ?></h2>
                    <p class="sec_desc"><?php the_field('adwords_content'); ?></p>
                     
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-md-7 noPaddingRight">
                <div class="features_img">
                    <?php 
                        $image = get_field('adwords_images');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            
                        };
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section -->

<!-- Trust Clients Section -->
<section class="commonSection trustClient" style="padding-top:45px; margin-top:-65px; padding-bottom: 80px; background:#EBEFF4;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="CL_content">
                    <?php 
                        $image = get_field('remarketing_images');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            
                        };
                    ?>
                    <div class="abc_inner">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 col-md-5">
                            </div>
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="abci_content" style="padding: 71px 0px 100px 44px!important; margin-left: 106px!important;">
                                    <h4 class="has-vivid-red-color has-text-color sub_title"><strong><?php the_field('remarketing_sub_title'); ?></strong></h4>
                                    <h2 style="font-size: 33px; line-height: 40px;"><?php the_field('remarketing_title'); ?> </h2>
                                    <p> <?php the_field('remarketing_content'); ?> </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trust Clients Section -->

<?php get_footer(); ?>