
<?php
    if ( is_page(array( 'diseno-paginas-web' ) ) ) {    

        $image_id = dataeg_get_config('logo_web_header');
        $subheading = dataeg_get_config('subheading');
        $description = dataeg_get_config('description');
        if(!empty($image_id)): ;?>
        <!-- Page Banner -->
        <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
            <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a> - Servicios</h4>
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->
        <?php 
        endif;  
    } 
    elseif ( is_page(array( 'diseno-web-wordpress' ) ) ) {    

        $image_id = dataeg_get_config('logo_wordpress_header');
        $subheading_wordpress = dataeg_get_config('subheading_wordpress');
        $description_wordpress = dataeg_get_config('description_wordpress');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center">
                                <h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a> - Servicios</h4>
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'diseno-tiendas-online' ) ) ) {    

        $image_id = dataeg_get_config('logo_tienda_header');
        $subheading_tienda = dataeg_get_config('subheading_tienda');
        $description_tienda = dataeg_get_config('description_tienda');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center">
                                <h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a> - Servicios</h4>
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 
    
    elseif ( is_page(array( 'marketing-online' ) ) ) {    

        $image_id = dataeg_get_config('logo_marketing_header');
        $subheading_marketing = dataeg_get_config('subheading_marketing');
        $description_marketing = dataeg_get_config('description_marketing');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center">
                                <h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a> - Servicios</h4>
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'acerca-de-data-eg' ) ) ) {    

        $image_id = dataeg_get_config('logo_acerca_header');
        $subheading_acerca = dataeg_get_config('subheading_acerca');
        $description_acerca = dataeg_get_config('description_acerca');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center">
                                
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'blog' ) ) ) {    

        $image_id = dataeg_get_config('logo_blog_header');
        $subheading_blog = dataeg_get_config('subheading_blog');
        $description_blog = dataeg_get_config('description_blog');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center"> 
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 

    elseif ( is_page(array( 'contacto' ) ) ) {    

        $image_id = dataeg_get_config('logo_contacto_header');
        $subheading_contacto = dataeg_get_config('subheading_contacto');
        $description_contacto = dataeg_get_config('description_contacto');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center"> 
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
            <?php 
        endif;  
    } 
    
    elseif ( is_page(array( 'portafolio' ) ) ) {    

        $image_id = dataeg_get_config('logo_portofolio_header');
        $subheading_portofolio = dataeg_get_config('subheading_portofolio');
        $description_portofolio = dataeg_get_config('description_portofolio');
        if(!empty($image_id)): ;?>
            <!-- Page Banner -->
            <section class="pageBanner" style="background: url('<?php echo $image_id["url"]; ?>') no-repeat center center / cover;">
                <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.5; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center"> 
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Banner -->
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