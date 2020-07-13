<?php
/*
* Template Name: COMO LAS HACEMOS
*/
get_header(); ?>
<section class="commonSection featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12  col-md-5">
                <div class="features_content">
                    <h4 class="sub_title">¿POR QUÉ DEBES ELIGIRNOS?</h4>
                    <h2 class="sec_title">Nos esforzamos para garantizar TU ÉXITO</h2>
 
                    <?php if( have_rows('procesos') ): 
                        
                            while( have_rows('procesos') ): the_row(); 
                           
                            ?>
                        <div class="singleFeature">
                            <div class="f_count"><?php the_sub_field('count_procesos'); ?></div>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('texte'); ?></p>
                        </div>
                        <?php 
                    endwhile;  endif; ?>

                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-md-7 noPaddingRight">
                <div class="features_img"> 
                    <img src="<?php echo get_template_directory_uri();?>/img/Eliginos.jpg" alt=""/>
                    <div class="img_details">
                        <h4>LIBERTAD TOTAL DE DISEÑO <br> PARA TODO EL MUNDO.  </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>