<aside class="widget recent_posts">
    <h3 class="widget_title">Últimas Noticias</h3>
    <div class="meipaly_post_widget">
        <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post) : ?>
                <div class="mpw_item"> 
                    <a href=" <?php echo get_permalink($post['ID']) ?>">
                        <?php echo $post['post_title'] ?>
                    </a>
                </div>
                <?php 
            endforeach;
            wp_reset_query(); 
        ?>
    </div>
</aside>