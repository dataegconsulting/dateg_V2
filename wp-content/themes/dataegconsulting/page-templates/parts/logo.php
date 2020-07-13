<?php
    $logo = dataeg_get_config('media-logo');
?>

<?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
    
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
        <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
    </a>

<?php else: ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
        <img src="<?php echo esc_url_raw( get_template_directory_uri().'/img/logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?>">
    </a>
<?php endif; ?>