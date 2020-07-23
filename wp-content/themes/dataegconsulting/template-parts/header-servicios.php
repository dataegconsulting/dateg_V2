<?php
    if ( is_page(array( 'diseno-paginas-web' ) ) ) {    

        $image_id = dataeg_get_config('logo_web_header');
        if(!empty($image_id)): ;?>
            <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url('<?php echo $image_id["url"]; ?>');">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="pagetitle__subheading">SOLUCIONES</h4>
                            <h1 class="pagetitle__heading"><?php the_title(); ?></h1>
                            <h4 class="pagetitle__desc"><?php the_title(); ?></h4>
                            
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.page-title -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'diseno-web-wordpress' ) ) ) {    

        $image_id = dataeg_get_config('logo_wordpress_header');
        if(!empty($image_id)): ;?>
            <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url('<?php echo $image_id["url"]; ?>');">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="pagetitle__subheading">SOLUCIONES</h4>
                            <h1 class="pagetitle__heading"><?php the_title(); ?></h1>
                            <h4 class="pagetitle__desc"><?php the_title(); ?></h4>
                            
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.page-title -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'diseno-tiendas-online' ) ) ) {    

        $image_id = dataeg_get_config('logo_tienda_header');
        if(!empty($image_id)): ;?>
             <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url('<?php echo $image_id["url"]; ?>');">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="pagetitle__subheading">SOLUCIONES</h4>
                            <h1 class="pagetitle__heading"><?php the_title(); ?></h1>
                            <h4 class="pagetitle__desc"><?php the_title(); ?></h4>
                            
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.page-title -->
            <?php 
        endif;  
    } 
    
    elseif ( is_page(array( 'marketing-online' ) ) ) {    

        $image_id = dataeg_get_config('logo_marketing_header');
        if(!empty($image_id)): ;?>
             <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url('<?php echo $image_id["url"]; ?>');">  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 class="pagetitle__subheading">SOLUCIONES</h4>
                            <h1 class="pagetitle__heading"><?php the_title(); ?></h1>
                            <h4 class="pagetitle__desc"><?php the_title(); ?></h4>
                            
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.page-title -->
            <?php 
        endif;  
    } 
    else { 
        echo '
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center"> 
                            <h2><?php the_title();?> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>'; 
        }   
?>