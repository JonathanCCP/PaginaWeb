<?php
/**
 * couture-netnus-lite functions and definitions
 *
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function couture_netnus_lite_setup() {
	
	load_theme_textdomain( 'couture-netnus-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
	    'default-color'          => '',
	    'default-image'          => '',
	    'default-repeat'         => '',
	    'default-position-x'     => '',
	    'default-attachment'     => '',
	    'wp-head-callback'       => '_custom_background_cb',
	    'admin-head-callback'    => '',
	    'admin-preview-callback' => ''
	));

	add_image_size( 'couture-netnus-lite-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'couture-netnus-lite' ),
		'primary' => __( 'Primary Menu', 'couture-netnus-lite' ),
		'responsive-menu' => __( 'Responsive Menu', 'couture-netnus-lite' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', couture_netnus_lite_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'couture_netnus_lite_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'couture_netnus_lite_setup' );

// Notice after Theme Activation
function couture_netnus_lite_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Netnus!!', 'couture-netnus-lite' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Couture Netnus Lite theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'couture-netnus-lite' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=couture_netnus_lite_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'couture-netnus-lite' ) .'</a></p>';
	echo '</div>';
}

function couture_netnus_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'couture-netnus-lite' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'couture-netnus-lite' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'couture-netnus-lite' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'couture-netnus-lite' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'couture-netnus-lite' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'couture-netnus-lite' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'couture-netnus-lite' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Home Page Sidebar', 'couture-netnus-lite' ),
		'id' => 'homepage-sidebar',
		'description' => __( 'Add widgets here to appear in your homepage.', 'couture-netnus-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'couture_netnus_lite_widgets_init' );

function couture_netnus_lite_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800';
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function couture_netnus_lite_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'couture-netnus-lite-fonts', couture_netnus_lite_fonts_url(), array(), null );
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );	
	// Theme stylesheet.
	wp_enqueue_style( 'couture-netnus-lite-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'couture-netnus-lite-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'couture-netnus-lite-style' ), '1.0' );
		wp_style_add_data( 'couture-netnus-lite-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'couture-netnus-lite-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'couture-netnus-lite-style' ), '1.0' );
	wp_style_add_data( 'couture-netnus-lite-ie8', 'conditional', 'lt IE 9' );
	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	$custom_css = '';

	$couture_netnus_lite_logo_top_padding = get_theme_mod('couture_netnus_lite_logo_top_padding');
	$couture_netnus_lite_logo_bottom_padding = get_theme_mod('couture_netnus_lite_logo_bottom_padding');
	$couture_netnus_lite_logo_left_padding = get_theme_mod('couture_netnus_lite_logo_left_padding');
	$couture_netnus_lite_logo_right_padding = get_theme_mod('couture_netnus_lite_logo_right_padding');

	$couture_netnus_lite_product_section_padding = get_theme_mod('couture_netnus_lite_product_section_padding');

	$custom_css = '
		.logo {
			padding-top: '.esc_attr($couture_netnus_lite_logo_top_padding).'px;
			padding-bottom: '.esc_attr($couture_netnus_lite_logo_bottom_padding).'px;
			padding-left: '.esc_attr($couture_netnus_lite_logo_left_padding).'px;
			padding-right: '.esc_attr($couture_netnus_lite_logo_right_padding).'px;
		}
		#our-products {
			padding-top: '.esc_attr($couture_netnus_lite_product_section_padding).'px;
			padding-bottom: '.esc_attr($couture_netnus_lite_product_section_padding).'px;
		}
	';
	wp_add_inline_style( 'couture-netnus-lite-style',$custom_css );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-js', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'couture-netnus-lite-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'couture_netnus_lite_scripts' );

function couture_netnus_lite_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'couture_netnus_lite_front_page_template' );

function couture_netnus_lite_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function couture_netnus_lite_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function couture_netnus_lite_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

//footer Link
define('COUTURE_NETNUS_LITE_LIVE_DEMO',__('https://netnus.net/couture/','couture-netnus-lite'));
define('COUTURE_NETNUS_LITE_PRO_DOCS',__('https://netnus.com/Documentation/','couture-netnus-lite'));
define('COUTURE_NETNUS_LITE_BUY_NOW',__('https://netnus.com/product/couture-pro-ecommerce-wordpress-theme/','couture-netnus-lite'));
define('COUTURE_NETNUS_LITE_SUPPORT',__('https://netnus.com/contact/','couture-netnus-lite'));
define('COUTURE_NETNUS_LITE_CREDIT',__('https://netnus.com/product/couture-pro-ecommerce-wordpress-theme/','couture-netnus-lite'));

if ( ! function_exists( 'couture_netnus_lite_credit' ) ) {
	function couture_netnus_lite_credit(){
		echo "<a href=".esc_url(COUTURE_NETNUS_LITE_CREDIT)." target='_blank'>".esc_html__('Couture Ecommerce Netnus','couture-netnus-lite')."</a>";
	}
}

/* Excerpt Limit Begin */
function couture_netnus_lite_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'couture_netnus_lite_loop_columns');
if (!function_exists('couture_netnus_lite_loop_columns')) {
	function couture_netnus_lite_loop_columns() {
		return 3; // 3 products per row
	}
}

function couture_netnus_lite_sanitize_checkbox( $input ) {
	
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );