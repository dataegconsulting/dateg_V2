<?php 
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
         <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), ''); ?> 
            <section class="pageBanner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat center center / cover; ">
            <div class="block-bg-overlay style-color-jevc-bg" style="opacity: 0.8; background-color: #142138;"></div> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_content text-center"> 
                                <h2><?php the_title();?> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php 
        endwhile; endif;?>    