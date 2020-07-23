<?php /* Template Name: SERVICIO PAGE */ ?>
 
<?php
get_header(); ?>


<!-- Page Banner -->
<?php get_template_part( 'template-parts/header-servicios' ); ?>
<!-- Page Banner -->
 

 

<section class="commonSection featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12  col-md-7">
                <div class="features_content">
                    <?php 
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <?php the_content();?>  <?php
                            endwhile;
                        else : ?>
                            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p> 
                            <?php 
                        endif;
                    ?>
                    <h2 class="sec_title" style="color:#1e3e55; padding-top: 15px;"><strong><?php the_field('title_services_header'); ?></strong></h2>
                    <?php 
                        if( have_rows('page_services') ):                         
                            while( have_rows('page_services') ): the_row(); ?>
                                <div class="singleFeature2" >
                                    <div class="f_count2"><i class="<?php the_sub_field('icono_servicio'); ?>" style="font-size: 45px!important;"></i></div>
                                    <h3><?php the_sub_field('title_servicio'); ?></h3>
                                    <p><?php the_sub_field('description_servicio'); ?></p>
                                </div>
                                <?php 
                            endwhile;  
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-5 noPaddingRight">
                <div class="features_img">  
                    <?php
                        if ( is_page(array( 'diseno-paginas-web' ) ) ) {    
                            $image = dataeg_get_config('logo_web_page');
                            if( !empty( $image ) ): 
                                echo '<img src = "'.$image["url"].'">'; 
                            endif;   
                        } 
                        
                        elseif ( is_page(array( 'diseno-web-wordpress' ) ) ) {   
                            $image = dataeg_get_config('logo_wordpress_page');
                            if( !empty( $image ) ): 
                                echo '<img src = "'.$image["url"].'">';
                            endif;  
                        } 

                        elseif ( is_page(array( 'diseno-tiendas-online' ) ) ) { 
                            $image = dataeg_get_config('logo_tienda_page');
                            if( !empty( $image ) ): 
                                echo '<img src = "'.$image["url"].'">';
                            endif; 
                        } 

                        elseif ( is_page(array( 'marketing-online' ) ) ) {   
                            $image = dataeg_get_config('logo_marketing_page');
                            if( !empty( $image ) ): 
                                echo '<img src = "'.$image["url"].'">';
                            endif; 
                        } 

                        else { 
                            echo  'Nada para Monstrar'; 
                        }   
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- feature -->
<section class="commonSection  bg-gray" style="padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title" style="letter-spacing: 6px; color: #cf2e2e;"><strong><?php the_field('pie_services_caracteristica'); ?></strong></h4>
                <h2 class="sec_title" style="color:#1e3e55; padding-top: 15px;"><strong><?php the_field('pie_services_title'); ?></strong></h2>
                <p class="sec_desc">
                <?php the_field('pie_services_description'); ?>
                </p>
            </div>  
        </div>

        <div class="row">
            <?php 
                if( have_rows('pie_services') ):                         
                    while( have_rows('pie_services') ): the_row(); ?>
                        <div class="col-md-6 mb-r wow fadeInRight" style="margin-bottom:15px;">
                        <div class="singleFeature2" >
                            <div class="f_count2"><i class="<?php the_sub_field('icono_pie'); ?>" style="font-size: 45px!important;"></i></div>
                            <h3><?php the_sub_field('title_pie'); ?></h3>
                            <p><?php the_sub_field('description_pie'); ?></p>
                        </div>
                        </div>
                    <?php 
                    endwhile;  
                endif;
            ?>
        </div>
    </div>
</section>
<!-- /feature -->

<?php get_footer(); ?>