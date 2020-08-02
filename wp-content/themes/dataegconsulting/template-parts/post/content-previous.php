<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>
 

<div class="row">
    <div class="col-lg-12">
        <div class="nextprevPagination">
            <div class="row">

                <?php // Get previous post.
                    $prev_post = get_previous_post(); 
                    if ( ! empty( $prev_post ) ) : ?>
                    <div class="col-lg-6 col-sm-6 col-xs-6 text-left">
                         
                        <h4>
                            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="next"> 
                            <i class="fa fa-angle-left"></i> <?php echo $prev_post->post_title; ?>
                            </a>
                        </h4>
                    </div>
                <?php endif; ?>

                <?php // Get Next post.
                    $next_post = get_next_post(); 
                    if ( ! empty( $next_post ) ) : ?>
                    <div class="col-lg-6 col-sm-6 col-xs-6 text-right">
                        
                        <h4>
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>" rel="prev">
                                <?php echo $next_post->post_title; ?> <i class="fa fa-angle-right"></i>
                            </a>
                        </h4>
                    </div>
                <?php endif; ?>
 
            </div>
        </div>
    </div>
</div>