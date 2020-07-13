<section class="rev_slider">
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider" data-version="5.4.5">
            <ul>        
                <!-- slider item -->
                <?php
                    $the_query = new WP_Query(array(
                        'post_type' => 'sliders',
                        'showposts' => 40,
                        'post_status' => 'publish',
                        'has_password' => false,
                        'post__not_in' => array(get_the_ID())
                    ));
                    if ($the_query->have_posts()) :
                        // the loop
                        while ($the_query->have_posts()) : $the_query->the_post();
                            ?>

                            <!-- MINIMUM SLIDE STRUCTURE -->
                            <li data-transition="random" data-masterspeed="1000">
                                <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                                <img src="<?php echo get_post_meta(get_the_ID(),'dataeg_sliders_imagen_slider', true);?>" class="rev-slidebg">
                                <div class="tp-caption tp-resizeme normalWraping layer_1" 

                                    data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                    data-x="center" 
                                    data-y="center" 
                                    data-hoffset="0" 
                                    data-voffset="['-124', '-110', '-100', '-50']" 
                                    data-width="100%"
                                    data-height="['auto]"
                                    data-whitesapce="['normal']"
                                    data-fontsize="20"
                                    data-lineheight="36"
                                    data-fontweight="400"
                                    data-letterspacing="2"
                                    data-color="#FFF"
                                    data-textAlign="center">
                                    </div>
                                <div class="tp-caption tp-resizeme normalWraping layer_2" 
                                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                                    data-x="center" 
                                    data-y="center" 
                                    data-hoffset="0" 
                                    data-voffset="['12', '20', '10', '25']" 
                                    data-width="100%"
                                    data-height="['auto]"
                                    data-whitesapce="['normal']"
                                    data-word-wrap="['normal']"
                                    data-white-break="['break-all']"
                                    data-fontsize="20"
                                    data-lineheight="['112', '80', '65', '50']"
                                    data-fontweight="700"
                                    data-letterspacing="['4.4', '4.4', '2', '1']"
                                    data-color="#FFF"
                                    data-textAlign="center"><?php echo the_title(); ?>
                                </div>
                                <div class="tp-caption tp-resizeme normalWraping layer_3"
                                    data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                    data-x="center"
                                    data-y="center" 
                                    data-hoffset="0" 
                                    data-voffset="['212', '200', '150', '140']" 
                                    data-width="100%"
                                    data-height="['auto]"
                                    data-whitesapce="['normal']"
                                    data-fontsize="16"
                                    data-lineheight=""
                                    data-fontweight="400"
                                    data-textAlign="center"
                                    ><a href="#" class="common_btn"><span>DISCOVER MOREs</span></a>
                                </div>
                            </li>
                            <?php 
                        endwhile;
                        wp_reset_postdata();
                    endif; 
                ?>
                <!-- slider item -->
            </ul><!-- END SLIDES LIST -->
        </div>
    </div>
</section>