<!-- Portfolio Section -->
<section class="commonSection porfolio" style="padding: 220px 0px 100px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title" style="letter-spacing: 6px; color: #cf2e2e;"><strong>PROYECTOS</strong></h4>
                <h2 class="sec_title" style="color:#1e3e55; padding-top: 15px;">
                    <strong>Por qué explicartelo,  cuando<br> te lo podemos enseñar.
                             
                    </strong>
                </h2> 
                <p class="sec_desc">
                Llevamos más de 05 años especializados en crear diseños web personalizados y <br>
                adaptados a las necesidades de cada uno de nuestros clientes. <br>
                Trabajamos con todo tipo de clientes y sectores.
                </p>
            </div>
        </div>

        <div class="row">
            <?php
                $terms = get_terms("tagportfolio");
                $count = count($terms);                        
                if ( $count > 0 ){                        
                    foreach ( $terms as $term ) {                            
                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                    }
                }   
                $loop = new WP_Query(array('post_type' => 'projects', 'posts_per_page' => 6));
                $count =0;
            
                if ( $loop ) :                 
                    while ( $loop->have_posts() ) : $loop->the_post(); 

                        $terms = get_the_terms( $post->ID, 'tagportfolio' );
                    
                        if ( $terms && ! is_wp_error( $terms ) ) : 
                            $links = array();

                            foreach ( $terms as $term ){
                                $links[] = $term->name;
                            }
                            $links = str_replace(' ', '-', $links); 
                            $tax = join( " ", $links );     
                        else :  
                            $tax = '';  
                        endif;
                        $infos = get_post_custom_values('_url'); ?>

                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="singlefolio">
                                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'dataeg_projects_imagen_proyecto_id', 1), ''); ?>
                                <div class="folioHover">
                                    <a class="cate" href="<?php the_permalink() ?>"><?php echo strtolower($tax); ?></a>
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>

                        <?php 
                    endwhile; else:                
                        echo'<li class="error-not-found">Sorry, no portfolio entries for while.</li>';  
                endif; 
            ?>
        </div>
    </div>
</section>
<!-- Portfolio Section -->
 
