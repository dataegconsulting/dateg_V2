<?php /* Template Name: ACERCA DE DATA EG */ ?>
<?php get_header(); ?>


<!-- Page Banner -->
<?php get_template_part( 'template-parts/pagebanner' ); ?>
<!-- Page Banner -->

<!-- Agency Section -->
<section class="commonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <h4 class="sub_title">CONOCERNOS</h4>
                <h2 class="sec_title">CONSTRUYA MEJOR SITIO WEB MUCHO MÁS RÁPIDO CON AGENCIA DATA EG</h2>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="agency_img1">
                    <img src="<?php echo get_template_directory_uri();?>/img/acerca/acerca2.jpg" alt=""/>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                <div class="agency_img2">
                    <img src="<?php echo get_template_directory_uri();?>/img/acerca/acerca1.jpg" alt=""/>
                </div>
                <div class="compay_date">
                    <h5>la empresa comenzó</h5>
                    <h2>2015</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Agency Section -->

<!-- Our Work Section -->
 
<section class="commonSection our_work">
    <div class="videoWrap_2">
        <img src="<?php echo get_template_directory_uri();?>/img/acerca/acerca3.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="ab_detail_wrap">
                    <h4 class="sub_title">EL ÚNICO DISEÑO QUE NECESITAS</h4>
                    <h2 class="sec_title"><?php the_field('mision_title'); ?></h2>
                    <p class="sec_desc"> <?php the_field('mision_content'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Our Work Section -->

<!-- Why Choose Section -->
<section class="commonSection chooseUs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title">Nuestros Valores</h4>
                <h2 class="sec_title">Nuestros Valores</h2>
                <p class="sec_desc">
                En  DATA EG nos reinventamos diariamente para seguir siendo una Agencia Digital de categoría mundial
                </p>
            </div>
        </div>
        <div id="tabs">
            <?php
            if( have_rows('general') ):
                $i = 1; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="chooseUs_title">
                            <?php
                                while ( have_rows('general') ) : the_row();
                                    $title = get_sub_field('tab_title');
                                    $content = get_sub_field('tab_content');
                                    $images = get_sub_field('tab_images');
                                    ?>
                                    <li <?php if($i == 1) echo 'class= "active"';?> >
                                            <a  href="#tes_tab_<?php echo sanitize_title($title); ?>"  data-toggle="tab" ><?php echo $title; ?></a>
                                    </li>
                                    <?php   $i++; 
                                endwhile;
                            ?>
                        </ul>
                    </div>

                </div>
                <div class="row">
                    <div class="tab-content clearfix">
                        <?php $i = 1; // Set the increment variable                            
                        // loop through the rows of data for the tab content
                        while ( have_rows('general') ) : the_row();
                            $title = get_sub_field('tab_title');
                            $content = get_sub_field('tab_content');
                            $images = get_sub_field('tab_images'); ?>
                            <div class="tab-pane fade <?php if($i == 1) echo 'active in';?>" id="tes_tab_<?php echo sanitize_title($title); ?>"> 
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <div class="wh_choose">
                                        <p style="text-align:center">
                                        <?php echo $content; ?>
                                        </p> 
                                    </div>
                                </div> 
                            </div>
                            <?php   $i++; 
                        endwhile;?>
                    </div>
                </div>
                <?php
            endif;?>
        </div>
    </div>
</section>
<!-- Why Choose Section -->


<?php get_footer(); ?>