<?php
/**
 * Custom header implementation
 */

function couture_netnus_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'couture_netnus_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1300,
		'height'                 => 75,
		'wp-head-callback'       => 'couture_netnus_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'couture_netnus_lite_custom_header_setup' );

if ( ! function_exists( 'couture_netnus_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see couture_netnus_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'couture_netnus_lite_header_style' );
function couture_netnus_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-home-page .main-top, .site-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'couture-netnus-lite-style', $custom_css );
	endif;
}
endif; // couture_netnus_lite_header_style
