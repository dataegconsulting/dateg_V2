<section class="commonSection ab_agency" id="about">
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
                        <h4 class="sub_title"style="color: #cf2e2e;"><strong>¡ Hola, Bienvenido! SOMOS DATA EG CONSULTING</strong></h4>
                        <h2 class="sec_title MB_45" style="color:#1e3e55; padding-top: 15px;"><strong><?php the_title();?></strong></h2>
                        <?php the_content();?> 
                        <a class="common_btn red_bg" href="#"><span>CONTÁTANOS</span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="ab_img2">
                             
                        </div>
                        <div class="ab_img1">
                            <img src="<?php echo get_template_directory_uri();?>/img/about/about-dataeg.jpg" alt=""/>
                        </div>
                    </div>
                    <?php 
                endwhile;  
            ?>
        </div>
    </div>
</section>