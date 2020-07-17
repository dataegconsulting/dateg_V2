<section class="commonSection ready">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-8 col-md-9">
                <h2 class="sec_title white">Pídenos un presupuesto ahora.</h2>
            </div>
            <div class="col-lg-3 col-sm-4 col-md-3 text-right">
                <?php $contacto = get_page_by_title('Contacto'); ?>
                <a class="common_btn" href="<?php echo get_permalink($contacto->ID); ?>"><span>Pedir Presupuesto</span></a>
            </div>
        </div>
    </div>
</section>