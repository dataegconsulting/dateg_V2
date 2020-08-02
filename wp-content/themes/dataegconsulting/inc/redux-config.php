<?php
    /**
     * ReduxFramework Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux_Framework_ta_config' ) ) {

        class Redux_Framework_ta_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
             * Simply include this function in the child themes functions.php file.
             * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
             * so you must use get_template_directory_uri() if you want to use any of the built in icons
             * */
            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'dataeg' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'dataeg' ),
                    'icon'   => 'el el-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                );

                return $sections;
            }

            /**
             * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
             * */
            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }

            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            public function setSections() {

				//Theme Style Sheets 
                $styles = array(
                    'red.css'       => 'Red',
                    'yellow.css'    => 'Yellow',
                    'purple.css'    => 'Purple',
                );

				// Array of social options
                $social_options = array(
                    'Twitter'       => 'Twitter',
                    'Facebook'      => 'Facebook',
                    'Google Plus'   => 'Google Plus',
                    'Instagram'     => 'Instagram',
                    'LinkedIn'      => 'LinkedIn',
                    'Tumblr'        => 'Tumblr',
                    'Pinterest'     => 'Pinterest',
                    'Dribbble'      => 'Dribbble',
                    'Flickr'        => 'Flickr',
					'DeviantArt'    => 'DeviantArt',
                    'Skype'         => 'Skype',
                    'YouTube'       => 'YouTube',
                    'Vimeo'         => 'Vimeo',
                    'GitHub'        => 'GitHub',
                    'RSS'           => 'RSS',
					'SoundCloud'    => 'SoundCloud',
                );

                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'dataeg' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'dataeg' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'dataeg' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'dataeg' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'dataeg' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'dataeg' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'dataeg' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'dataeg' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

                // Menu Header Popup
                $this->sections[] = array(
                    'icon' => 'el el-website',
                    'title' => esc_html__('Menu Header Popup', 'dataeg'),
                    'fields' => array(
                        
                        array(
                            'id' => 'media-logo',
                            'type' => 'media',
                            'title' => esc_html__('Logo Upload', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        array(
                            'id' => 'media-mobile-logo',
                            'type' => 'media',
                            'title' => esc_html__('Mobile Logo Upload', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        array(
                            'id'         => 'menu_popup_social',
                            'type'       => 'repeater',
                            'title'      => esc_html__( 'Enlaces de Redes Sociales', 'dataeg' ),
                            'fields'     => array(
                            
                                array(
                                    'id' => 'menu_popup_social_title',
                                    'type' => 'text',
                                    'title' => esc_html__('Title', 'dataeg'),
                                ),
                                array(
                                    'id' => 'menu_popup_social_icon',
                                    'type' => 'text',
                                    'title' => esc_html__('Font Icon', 'dataeg'),
                                ),
                                array(
                                    'id' => 'menu_popup_social_link',
                                    'type' => 'text',
                                    'title' => esc_html__('Link', 'dataeg'),
                                )
                            ),
                        ),
                        array(
                            'id'         => 'menu_contact_info',
                            'type'       => 'repeater',
                            'title'      => esc_html__( 'Contactos', 'dataeg' ),
                            'fields'     => array(
                                array(
                                    'id' => 'menu_contact_info_title',
                                    'type' => 'text',
                                    'title' => esc_html__('Title', 'dataeg'),
                                )
                            ),
                        ),
                    )
                );

                // Clientes Fun Fact  
                $this->sections[] = array(
                    'title'         => __( 'Clientes Fun Fact  ', 'dataeg' ),
                    'heading'       => __( 'Clientes Fun Fact   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(

                        array(
                            'title'     => __( 'Header Fun Fact  ', 'dataeg' ),
                            'subtitle'  => __( 'Select to enable/disable display Header Fun Fact  .', 'dataeg' ),
                            'id'        => 'disable_clientes',
                            'default'   => true,
                            'on'        => __( 'Enable', 'dataeg' ),
                            'off'       => __( 'Disable', 'dataeg' ),
                            'type'      => 'switch',
                        ),

                        array(
                            'title'     => __( 'PROYECTOS REALIZADOS', 'dataeg' ), 
                            'id'        => 'proyectos_realizados',
                            'type'      => 'text',
                            'default'   => 'PROYECTOS REALIZADOS',
                        ),
                        array(
                            'title'     => __( 'NUMEROS PROYECTOS REALIZADOS', 'dataeg' ), 
                            'id'        => 'num_proyectos_realizados',
                            'type'      => 'text',
                            'default'   => '23',
                        ),
                        
                        array(
                            'title'     => __( 'AÑOS DE EXPERIENCIA', 'dataeg' ), 
                            'id'        => 'experiencia',
                            'type'      => 'text',
                            'default'   => 'AÑOS DE EXPERIENCIA',
                        ),
                        array(
                            'title'     => __( 'NUMEROS AÑOS DE EXPERIENCIA', 'dataeg' ), 
                            'id'        => 'num_experiencia',
                            'type'      => 'text',
                            'default'   => '2',
                        ),
                        
                        array(
                            'title'     => __( 'PREMIOS GANADOS', 'dataeg' ), 
                            'id'        => 'premios',
                            'type'      => 'text',
                            'default'   => 'PREMIOS GANADOS',
                        ),
                        array(
                            'title'     => __( 'NUMEROS PREMIOS GANADOS', 'dataeg' ), 
                            'id'        => 'num_premios',
                            'type'      => 'text',
                            'default'   => '2',
                        ),
                        
                        array(
                            'title'     => __( 'CLIENTES FELICES', 'dataeg' ), 
                            'id'        => 'clientes_felices',
                            'type'      => 'text',
                            'default'   => 'CLIENTES FELICES',
                        ),
                        array(
                            'title'     => __( 'NUMEROS CLIENTES FELICES', 'dataeg' ), 
                            'id'        => 'num_clientes_felices',
                            'type'      => 'text',
                            'default'   => '2',
						),
                       
 
                      
                        
					),
                );

                // Cliente de confianza 
                $this->sections[] = array(
                    'title'         => __( 'Cliente de confianza  ', 'dataeg' ),
                    'heading'       => __( 'Cliente de confianza   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(

                        array(
                            'title'     => __( 'Header Fun Fact  ', 'dataeg' ),
                            'subtitle'  => __( 'Select to enable/disable display Header Cliente de confianza  .', 'dataeg' ),
                            'id'        => 'disable_confianza',
                            'default'   => true,
                            'on'        => __( 'Enable', 'dataeg' ),
                            'off'       => __( 'Disable', 'dataeg' ),
                            'type'      => 'switch',
                        ),

                        array(
                            'title'     => __( 'TIULO', 'dataeg' ), 
                            'id'        => 'title_confianza',
                            'type'      => 'text',
                        ),
                        array(
                            'title'     => __( 'DESCRIPCIÓN', 'dataeg' ), 
                            'id'        => 'texto_confianza',
                            'type'      => 'editor', 
                        ),
                        
                        array(
                            'id' => 'logo_confianza',
                            'type' => 'media',
                            'title' => esc_html__('Logo Upload', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Diseño Web 
                $this->sections[] = array(
                    'title'         => __( 'Settings Diseño Web  ', 'dataeg' ),
                    'heading'       => __( 'Settings Diseño Web   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_web_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_web_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Diseño Web Wordpress  
                $this->sections[] = array(
                    'title'         => __( 'Settings Diseño Web Wordpress  ', 'dataeg' ),
                    'heading'       => __( 'Settings Diseño Web Wordpress   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_wordpress',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_wordpress',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_wordpress_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_wordpress_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );


                // Settings Tienda Online  
                $this->sections[] = array(
                    'title'         => __( 'Settings Tienda Online  ', 'dataeg' ),
                    'heading'       => __( 'Settings Tienda Online   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_tienda',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_tienda',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_tienda_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_tienda_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Marketing Online  
                $this->sections[] = array(
                    'title'         => __( 'Settings Marketing Online  ', 'dataeg' ),
                    'heading'       => __( 'Settings Marketing Online   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_marketing',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_marketing',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_marketing_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_marketing_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Acerce de  
                $this->sections[] = array(
                    'title'         => __( 'Settings Acerce de DATA EG  ', 'dataeg' ),
                    'heading'       => __( 'Settings Acerce de DATA EG   ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_acerca',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_acerca',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_acerca_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_acerca_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Blog Noticias  
                $this->sections[] = array(
                    'title'         => __( 'Settings Blog Noticias    ', 'dataeg' ),
                    'heading'       => __( 'Settings Blog Noticias    ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_blog_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_blog_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Contacto  
                $this->sections[] = array(
                    'title'         => __( 'Settings Contacto    ', 'dataeg' ),
                    'heading'       => __( 'Settings Contacto    ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_contacto_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_contacto_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );

                // Settings Portofolio  
                $this->sections[] = array(
                    'title'         => __( 'Settings Portofolio    ', 'dataeg' ),
                    'heading'       => __( 'Settings Portofolio    ', 'dataeg' ), 
                    'icon'          => 'el el-website',
                    'fields'    => array(
                        
                        array(
                            'title'     => __( 'Sub Heading', 'dataeg' ), 
                            'id'        => 'subheading_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'title'     => __( 'Descripción', 'dataeg' ), 
                            'id'        => 'description_blog',
                            'type'      => 'text',
                        ),

                        array(
                            'id' => 'logo_portofolio_header',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Header', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),

                        array(
                            'id' => 'logo_portofolio_page',
                            'type' => 'media',
                            'title' => esc_html__('Subir Imagen de Page', 'dataeg'),
                            'subtitle' => esc_html__('Upload a .png or .gif image that will be your logo.', 'dataeg'),
                        ),
                        
                    ),
                );
            }
            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'ta_option',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'DATA EG Panel', 'dataeg' ),
                    'page_title'           => __( 'DATA EG Panel', 'dataeg' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => '',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-admin-settings',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => 'consulting_options',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => false,
                    // Show the time the page took to load, etc
                    'update_notice'        => true,
                    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
                    'customizer'           => true,
                    // Enable basic customizer support
                    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                    // OPTIONAL -> Give you extra features
                    'page_priority'        => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'          => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'     => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'            => '',
                    // Specify a custom URL to an icon
                    'last_tab'             => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'            => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'        => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'           => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'             => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'          => false,
                    // REMOVE

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );

            }

            public function validate_callback_function( $field, $value, $existing_value ) {
                $error = true;
                $value = 'just testing';

                $return['value'] = $value;
                $field['msg']    = 'your custom error message';
                if ( $error == true ) {
                    $return['error'] = $field;
                }

                return $return;
            }

            public function class_field_callback( $field, $value ) {
                print_r( $field );
                echo '<br/>CLASS CALLBACK';
                print_r( $value );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_ta_config();
    } else {
        echo "The class named Redux_Framework_ta_config has already been called. <strong>Developers, you need to prefix this class with your company name or you'll run into problems!</strong>";
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ):
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    endif;

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ):
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error = true;
            $value = 'just testing';

            $return['value'] = $value;
            $field['msg']    = 'your custom error message';
            if ( $error == true ) {
                $return['error'] = $field;
            }

            return $return;
        }
    endif;