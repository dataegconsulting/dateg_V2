<?php get_header(); ?>

<!-- Page Banner -->
<?php get_template_part( 'template-parts/pagebanner' ); ?>
<!-- Page Banner -->

<!-- Blog Detail Section -->
<section class="commonSection blogDetails">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <?php 
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <?php the_post_thumbnail(
                                        array(770, 305),
                                        array(
                                            'class' => '',
                                        )
                                    );
                                    ?>
                                </div>
                                <div class="blog_headings">
                                    <span class="blog_date" style="width: 120px!important;"><?php echo get_the_date('j F, Y'); ?></span>
                                    <h2><?php the_title(); ?></h2>
                                    <p class="blog_metas">
                                        <a href="#">By layerdrops</a>-<a href="#">30 Likes</a>-<a href="#">2 Comments</a>
                                    </p>
                                </div>
                            
                                <div class="blog_details"> <?php the_content(); ?> </div>

                                <div class="blog_tagitems">
                                    <span>Tags:</span><a href="#">Business</a>, <a href="#">Agency</a>, <a href="#">Digital</a>, <a href="#">Technology</a>
                                </div>
                            </div>
                            <?php 
                        endwhile;
                    endif;
                ?> 
            </div>
            

            <div class="col-lg-4 col-sm-4 sidebar">

                <aside class="widget search-widget">
                    <form method="post" action="#" class="searchform">
                        <input type="search" placeholder="Search here..." name="s" id="s">
                    </form>
                </aside>

                <?php get_template_part('template-parts/sidebar/noticias', 'lateral'); ?>

                <aside class="widget categories">
                    <h3 class="widget_title">Servicios</h3>
                   
                </aside>

                <aside class="widget">
                    <h3 class="widget_title">Tags:</h3>
                    <div class="meipaly_tagcloude_widget">
                        <a href="#">Business,</a> <a href="#">Agency,</a> <a href="#">Digital,</a> <a href="#">Technology,</a>
                        <a href="#">Parallax,</a> <a href="#">Innovative,</a> <a href="#">Professional,</a>
                        <a href="#">Experience,</a>
                    </div>
                </aside>

            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->

<?php get_footer(); ?>