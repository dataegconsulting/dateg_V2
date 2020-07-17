<!-- tags -->
<div class="bg-white px-4 py-5 box-shadow mb-5">
    <h4 class="mb-4">TAGS</h4>
    <ul class="list-inline tag-list">
        <?php
        $tags = get_tags();
        if ($tags) :
            foreach ($tags as $tag) : ?>
                <li class="list-inline-item"><a class="hover-ripple" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>