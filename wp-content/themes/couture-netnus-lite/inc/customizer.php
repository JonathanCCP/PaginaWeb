<?php
/**
 * couture-netnus-lite: Customizer
 *
 * @subpackage couture-netnus-lite
 * @since 1.0
 */

function couture_netnus_lite_customize_register( $wp_customize ) {

	$wp_customize->add_setting('couture_netnus_lite_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('couture_netnus_lite_logo_padding',array(
		'label' => __('Logo Padding','couture-netnus-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('couture_netnus_lite_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'couture_netnus_lite_sanitize_float'
	));
	$wp_customize->add_control('couture_netnus_lite_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','couture-netnus-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('couture_netnus_lite_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'couture_netnus_lite_sanitize_float'
	));
	$wp_customize->add_control('couture_netnus_lite_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','couture-netnus-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('couture_netnus_lite_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'couture_netnus_lite_sanitize_float'
	));
	$wp_customize->add_control('couture_netnus_lite_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','couture-netnus-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('couture_netnus_lite_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'couture_netnus_lite_sanitize_float'
	));
	$wp_customize->add_control('couture_netnus_lite_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','couture-netnus-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('couture_netnus_lite_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'couture_netnus_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('couture_netnus_lite_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','couture-netnus-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('couture_netnus_lite_show_tagline',array(
		'default' => true,
		'sanitize_callback' => 'couture_netnus_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('couture_netnus_lite_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','couture-netnus-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_panel( 'couture_netnus_lite_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'couture-netnus-lite' ),
		'description' => __( 'Description of what this panel does.', 'couture-netnus-lite' ),
	) );

	$wp_customize->add_section( 'couture_netnus_lite_theme_options_section', array(
    	'title'      => __( 'General Settings', 'couture-netnus-lite' ),
		'priority'   => 30,
		'panel' => 'couture_netnus_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('couture_netnus_lite_theme_options',array(
      'default' => 'Right Sidebar',
      'sanitize_callback' => 'couture_netnus_lite_sanitize_choices'	        
	));
	$wp_customize->add_control('couture_netnus_lite_theme_options', array(
		'type' => 'radio',
		'label' => __('Do you want this section','couture-netnus-lite'),
		'section' => 'couture_netnus_lite_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','couture-netnus-lite'),
		   'Right Sidebar' => __('Right Sidebar','couture-netnus-lite'),
		   'One Column' => __('One Column','couture-netnus-lite'),
		   'Three Columns' => __('Three Columns','couture-netnus-lite'),
		   'Four Columns' => __('Four Columns','couture-netnus-lite'),
		   'Grid Layout' => __('Grid Layout','couture-netnus-lite')
		),
	));

	$wp_customize->add_section( 'couture_netnus_lite_header' , array(
    	'title'      => __( 'Header Settings', 'couture-netnus-lite' ),
		'priority'   => null,
		'panel' => 'couture_netnus_lite_panel_id'
	) );

	$wp_customize->add_setting( 'couture_netnus_lite_sale_text', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( 'couture_netnus_lite_sale_text', array(
		'label' => __('Add sale text', 'couture-netnus-lite' ),
		'section'  => 'couture_netnus_lite_header',
		'type'     => 'text'
	));

	$wp_customize->add_setting('couture_netnus_lite_sale_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'couture_netnus_lite_sale_image',array(
		'label' => __('Sale Image','couture-netnus-lite'),
		'description'=> __('Image size (445px x 75px)','couture-netnus-lite'),
		'section' => 'couture_netnus_lite_header',
		'settings' => 'couture_netnus_lite_sale_image'
	)));

	$wp_customize->add_setting( 'couture_netnus_lite_sale_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control( 'couture_netnus_lite_sale_url', array(
		'label' => __('Add Sale Image url', 'couture-netnus-lite' ),
		'section'  => 'couture_netnus_lite_header',
		'type'     => 'url'
	));

	//home page slider
	$wp_customize->add_section( 'couture_netnus_lite_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'couture-netnus-lite' ),
		'priority'   => null,
		'panel' => 'couture_netnus_lite_panel_id'
	) );

	$wp_customize->add_setting('couture_netnus_lite_slider_hide_show',array(
		'default' => false,
		'sanitize_callback' => 'couture_netnus_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('couture_netnus_lite_slider_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider','couture-netnus-lite'),
	   'section' => 'couture_netnus_lite_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'couture_netnus_lite_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'couture_netnus_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'couture_netnus_lite_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'couture-netnus-lite' ),
        	'description'=> __('Image size (825px x 480px)','couture-netnus-lite'),
			'section'  => 'couture_netnus_lite_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Trending Product
	$wp_customize->add_section('couture_netnus_lite_products',array(
		'title'	=> __('Featured Products','couture-netnus-lite'),
		'description'=> __('This section will appear below the slider.','couture-netnus-lite'),
		'panel' => 'couture_netnus_lite_panel_id',
	));	

	$wp_customize->add_setting( 'couture_netnus_lite_block1', array(
		'default'           => '',
		'sanitize_callback' => 'couture_netnus_lite_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'couture_netnus_lite_block1', array(
		'label'    => __( 'Select Page for block 1', 'couture-netnus-lite' ),
		'section'  => 'couture_netnus_lite_products',
		'type'     => 'dropdown-pages'
	));

	$wp_customize->add_setting( 'couture_netnus_lite_block2', array(
		'default'           => '',
		'sanitize_callback' => 'couture_netnus_lite_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'couture_netnus_lite_block2', array(
		'label'    => __( 'Select Page for block 2', 'couture-netnus-lite' ),
		'section'  => 'couture_netnus_lite_products',
		'type'     => 'dropdown-pages'
	));
	
	$wp_customize->add_setting('couture_netnus_lite_maintitle',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('couture_netnus_lite_maintitle',array(
		'label'	=> __('Featured Products Title','couture-netnus-lite'),
		'section'=> 'couture_netnus_lite_products',
		'setting'=> 'couture_netnus_lite_maintitle',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'couture_netnus_lite_page', array(
		'default'           => '',
		'sanitize_callback' => 'couture_netnus_lite_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'couture_netnus_lite_page', array(
		'label'    => __( 'Select Product Page', 'couture-netnus-lite' ),
		'section'  => 'couture_netnus_lite_products',
		'type'     => 'dropdown-pages'
	));

	$wp_customize->add_setting('couture_netnus_lite_product_section_padding',array(
      'default' => '',
      'sanitize_callback'	=> 'couture_netnus_lite_sanitize_float'
   ));
   $wp_customize->add_control('couture_netnus_lite_product_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','couture-netnus-lite'),
      'section' => 'couture_netnus_lite_products',
   ));

	//Footer
    $wp_customize->add_section( 'couture_netnus_lite_footer', array(
    	'title' => __( 'Footer Text', 'couture-netnus-lite' ),
		'priority'   => null,
		'panel' => 'couture_netnus_lite_panel_id'
	) );

    $wp_customize->add_setting('couture_netnus_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('couture_netnus_lite_footer_copy',array(
		'label'	=> __('Footer Text','couture-netnus-lite'),
		'section'	=> 'couture_netnus_lite_footer',
		'setting'	=> 'couture_netnus_lite_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'couture_netnus_lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'couture_netnus_lite_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'couture_netnus_lite_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'couture-netnus-lite' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'couture-netnus-lite' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'couture_netnus_lite_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'couture_netnus_lite_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'couture_netnus_lite_customize_register' );

function couture_netnus_lite_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}
	return 'light';
}

function couture_netnus_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

function couture_netnus_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function couture_netnus_lite_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function couture_netnus_lite_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Couture_Netnus_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Couture_Netnus_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Couture_Netnus_Lite_Customize_Section_Pro(
				$manager,
				'couture_netnus_lite_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Ecommerce Pro', 'couture-netnus-lite' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'couture-netnus-lite' ),
					'pro_url'  => esc_url('https://netnus.com/product/couture-pro-ecommerce-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'couture-netnus-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'couture-netnus-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Couture_Netnus_Lite_Customize::get_instance();