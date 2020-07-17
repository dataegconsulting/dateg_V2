<?php /* Template Name: BLOG */ ?>
<?php get_header(); ?>
<!-- Page Banner -->
<?php get_template_part( 'template-parts/pagebanner' ); ?>
<!-- Page Banner -->

<!-- Blog Section -->
<section class="commonSection blogPage">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type'=> 'post',
                'category_name'  => 'blog',
                'orderby' => 'post_date',
                'posts_per_page'=> 2,
                'paged' => get_query_var('paged')
            );
            query_posts( $args ); 
            while (have_posts()) : the_post(); ?> 

            <div class="col-lg-6 col-sm-12 col-md-6">
                <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(
                                    array(770, 305),
                                    array(
                                        'class' => '',
                                    )
                                );
                                ?>
                            </a>
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date" style="width: 120px!important;"><?php echo get_the_date('j F, Y'); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <a class="learnM" href="<?php the_permalink(); ?>">Leer más</a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endwhile; ?>
        </div>
        <!-- Paginacion -->
        <?php // Wordpress Pagination
        $big = 999999999; // need an unlikely integer
        $links = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text'    => '<i class="fa fa-angle-left"></i>',
            'next_text'    => '<i class="fa fa-angle-right"></i>',
            'type' => 'array'
        ) );
        if(!empty($links)){ ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="meipaly_paginations text-center"> 
                    <?php foreach($links as $link){ ?> 
                    <?php echo $link; ?> 
                    <?php
                        }
                        wp_reset_query(); ?>
                        <?php }   ?>
                </div>
            </div>
        </div>     
    </div>
</section>
<!-- Blog Section -->

<?php get_footer(); ?>