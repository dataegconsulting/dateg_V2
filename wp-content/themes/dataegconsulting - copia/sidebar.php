<div class="col-lg-4 col-sm-4 sidebar">
   

    <aside class="widget categories">
    <h3 class="widget_title">Services</h3>
        <?php
        if (!is_active_sidebar('sidebar_widget')) {
            return;
        }
        dynamic_sidebar('sidebar_widget');
        ?>
    </aside>

    <aside class="widget categories">
        <?php
        if (!is_active_sidebar('sidebar_help')) {
            return;
        }
        dynamic_sidebar('sidebar_help');
        ?>
    </aside>


 
</div>
