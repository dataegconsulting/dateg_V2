
<aside class="widget recent_posts">
    <h3 class="widget_title">Últimas Noticias</h3>
    <div class="meipaly_post_widget">
        <?php $recentPosts = new WP_Query();
            $recentPosts->query('offset=2&showposts=5'.'&limit='.$how_many);
        ?>        
        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <div class="mpw_item"> 
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </div>
        <?php endwhile; ?>        
    </div>
</aside>