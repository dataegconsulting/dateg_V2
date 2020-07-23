<section class="commonSection funfact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h1 data-counter="<?php echo dataeg_get_config('num_proyectos_realizados');?>" class="timer"><span class="countSpan"></span><?php echo dataeg_get_config('num_proyectos_realizados');?></h1>
                    <h3><?php echo dataeg_get_config('proyectos_realizados');?></h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h1 data-counter="<?php echo dataeg_get_config('num_experiencia');?>" class="timer"><span class="countSpan"></span><?php echo dataeg_get_config('num_experiencia');?></h1>
                    <h3><?php echo dataeg_get_config('experiencia');?></h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                <div class="singlefunfact text-center">
                    <h1 data-counter="<?php echo dataeg_get_config('num_premios');?>" class="timer"><span class="countSpan"></span><?php echo dataeg_get_config('num_premios');?></h1>
                    <h3><?php echo dataeg_get_config('premios');?></h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 noPadding ">
                <div class="singlefunfact text-center">
                    <h1 data-counter="<?php echo dataeg_get_config('num_clientes_felices'); ?>" class="timer"><span class="countSpan"></span><?php echo dataeg_get_config('num_clientes_felices');?></h1>
                    <h3><?php echo dataeg_get_config('clientes_felices'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="commonSection trustClient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="CL_content">
                    <?php 
                    $image = dataeg_get_config('logo_confianza');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?> 
                    
                    <div class="abc_inner">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 col-md-5">
                            </div>
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="abci_content" style="padding: 86px 0 1px 100px;">
                                    <h2 style="font-size: 21px; letter-spacing: 2px; line-height: 35px;"><?php echo dataeg_get_config('title_confianza');?></h2>
                                    <p> <?php echo dataeg_get_config('texto_confianza');?></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>