<section class="commonSection ab_agency">
    <div class="container">
        <div class="row">
            <?php
                $query = new WP_Query(array(
                    'category_name' => 'featured-intro',
                    'posts_per_page' => 40,
                    'post_status' => 'publish',
                    'has_password' => false,
                ));
            
                // the loop
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 PR_79">
                        <h4 class="sub_title">¡ Hola, Bienvenido! SOMOS DATA EG CONSULTING</h4>
                        <h2 class="sec_title MB_45"><?php the_title();?></h2>
                        <?php the_content();?> 
                        <a class="common_btn red_bg" href="#"><span>CONTÁTANOS</span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="ab_img1">
                        <?php the_post_thumbnail(
                            array(770, 305),
                            array(
                                'class' => '',
                            )
                        );
                        ?>
                        </div>
                        <div class="ab_img2">
                        <?php the_post_thumbnail(
                            array(770, 305),
                            array(
                                'class' => '',
                            )
                        );
                        ?>
                        </div>
                    </div>
                    <?php 
                endwhile;  
            ?>
        </div>
    </div>
</section>