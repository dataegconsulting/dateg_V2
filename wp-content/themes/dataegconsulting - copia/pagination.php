<?php
            $args = array(
            'post_type'=> 'post',
            'category_name'  => 'blog',
              'orderby' => 'post_date',
            'posts_per_page'=>'1',
            'paged' => get_query_var('paged')
           );
            query_posts( $args ); 
            while (have_posts()) : the_post(); ?>

         <?php  the_title(); ?>

       <?php endwhile; ?>

<?php // Wordpress Pagination
                $big = 999999999; // need an unlikely integer
                $links = paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text'    => '<',
                    'next_text'    => '>',
                    'type' => 'array'
                ) );
                if(!empty($links)){ ?>
                <ul class="pagination">
                        <?php

                        foreach($links as $link){
                            ?>
                            <li><?php echo $link; ?></li>
                            <?php
                        }
                        wp_reset_query(); ?>
                    </ul>
                    <?php } ?>



                    =========================


                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array( 
                            'posts_per_page' => 1, 
                            'paged' => $paged, 
                            'category_name' => 'blog'
                        );
                        $cpt_query = new WP_Query($args);
                    ?>
                    <?php if ($cpt_query->have_posts()) : while ($cpt_query->have_posts()) : $cpt_query->the_post(); ?>

                    <?php  the_title(); ?>
                    <?php endwhile; endif; ?>