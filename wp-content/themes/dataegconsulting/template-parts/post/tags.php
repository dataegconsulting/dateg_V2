 
<aside class="widget">
    <h3 class="widget_title">Etiquetas:</h3>
    <div class="meipaly_tagcloude_widget">
        <?php
        $tags = get_tags();
        if ($tags) :
            foreach ($tags as $tag) : ?>
                <a  href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?>, </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</aside>