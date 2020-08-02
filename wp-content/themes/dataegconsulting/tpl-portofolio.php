<?php /* Template Name: PORTOFOLIO */ ?>
 
<?php
get_header(); ?>

<!-- Page Banner -->
<?php get_template_part( 'template-parts/header-servicios' ); ?>
<!-- Page Banner -->

<!-- Portfolio Section -->
<section class="commonSection porfolioPage">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="folio_mixing">
                    <?php
                        $terms = get_terms("tagportfolio");
                        $count = count($terms);
                        echo '<ul id="portfolio-filter">';
                        echo '<li class="active" data-filter="All" title=""> <a href="#all" title="">All</a></li>';
                            
                        if ( $count > 0 ){
                            
                            foreach ( $terms as $term ) {
                                
                                $termname = strtolower($term->name);
                                $termname = str_replace(' ', '-', $termname);
                                echo '<li class="filter" data-filter="'.$termname.'" title="" rel="'.$termname.'"> '.$term->name.'</li>';
                            }
                        }
                        echo "</ul>";
                    ?>
                </div>
            </div>
        </div>
        <?php 
        $loop = new WP_Query(array('post_type' => 'projects', 'posts_per_page' => -1));
        $count =0;
    ?>
        <div class="row" id="Grid">
            
            <div class="custom" id="portfolio-list">

            <?php if ( $loop ) : 
                
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <?php
                $terms = get_the_terms( $post->ID, 'tagportfolio' );
                        
                if ( $terms && ! is_wp_error( $terms ) ) : 
                    $links = array();

                    foreach ( $terms as $term ) 
                    {
                        $links[] = $term->name;
                    }
                    $links = str_replace(' ', '-', $links); 
                    $tax = join( " ", $links );     
                else :  
                    $tax = '';  
                endif;
                ?>
                    
                    <?php $infos = get_post_custom_values('_url'); ?>

                    <div class="col-lg-4 col-sm-6 col-md-4 mix <?php echo strtolower($tax); ?>">
                    <div class="singlefolio">
                    <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'dataeg_projects_imagen_proyecto_id', 1), ''); ?>
                        
                            
                        <div class="folioHover">
                            <a class="cate" href="#"><?php echo strtolower($tax); ?></a>
                            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: ?>
                
                <li class="error-not-found">Sorry, no portfolio entries for while.</li>
                    
            <?php endif; ?>

            </div>
        </div>    
    </div>
</section>
            
<script>
    jQuery(document).ready(function() { 
        jQuery("#portfolio-list").filterable();
    });
</script>
             
 
<?php get_footer(); ?>