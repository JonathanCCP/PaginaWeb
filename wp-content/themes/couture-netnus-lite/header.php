<?php
/**
 * The header for our theme
 *
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'couture-netnus-lite' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'couture-netnus-lite' ); ?></span></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-10">
						<?php if( get_theme_mod( 'couture_netnus_lite_sale_text','' ) != '') { ?>
							<div class="sale-text">
					        	<i class="far fa-snowflake"></i><span class="col-org"><?php echo esc_html( get_theme_mod('couture_netnus_lite_sale_text','') ); ?></span>
					        </div>
					    <?php } ?>	
					</div>
					<div class="col-lg-7 col-md-2">
						<?php if (has_nav_menu('top')){ ?>
							<div id="top-menu" class="nav sidenav topsidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'couture-netnus-lite' ); ?>">
				                    <?php 
				                    wp_nav_menu( array( 
					                    'theme_location' => 'top',
					                    'container_class' => 'main-menu-navigation clearfix' ,
					                    'menu_class' => 'clearfix',
					                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
					                    'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                    ?>
				                </nav>
				            </div>
				        <?php }?>
					</div>
				</div>
			</div>
		</div>

		<div class="main-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="logo">        
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('couture_netnus_lite_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('couture_netnus_lite_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<div class="col-lg-5 col-md-7">
						<?php if( get_theme_mod('couture_netnus_lite_sale_image') != ''){ ?>
			                <div class="sale-img">
			                	<a href="<?php echo esc_url(get_theme_mod('couture_netnus_lite_sale_url','')); ?>"><img src="<?php echo esc_url(get_theme_mod('couture_netnus_lite_sale_image','')); ?>" alt="<?php esc_attr_e( 'Sale Image','couture-netnus-lite' );?>"></a>
			                </div>
			            <?php }?>
					</div>
					<div class="col-lg-3 col-md-4 col-9">
						<?php if(class_exists('woocommerce')){ ?>
							<div class="search-box">
								<?php get_product_search_form(); ?>
							</div>
						<?php }else { echo '<p>'.esc_html('Please Install WooCommerce Plugin for Product search.','couture-netnus-lite').'<p>'; }?>
					</div>
					<div class="col-lg-1 col-md-1 col-3">
						<?php if(class_exists('woocommerce')){ ?>
						    <div class="cart_icon">
						        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-bag"></i><span class="screen-reader-text"><?php esc_html_e('Cart', 'couture-netnus-lite' ); ?></span></a>
					            <li class="cart_box">
					              <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
					            </li>
						    </div>
						<?php }else { echo '<p>'.esc_html('Please Install Woocommerce Plugin for cart icon.','couture-netnus-lite').'<p>'; }?>
					</div>
				</div>
			</div>
		</div>

		<div class="menu-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8 col-3">
						<?php if (has_nav_menu('responsive-menu')){ ?>
							<div class="toggle-menu responsive-menu">
					            <button onclick="couture_netnus_lite_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','couture-netnus-lite'); ?></span></button>
					        </div>
							<div id="resp-menu" class="nav sidenav primary-menu">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Responsive Menu', 'couture-netnus-lite' ); ?>">
				                    <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'responsive-menu',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                    ?>
				                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="couture_netnus_lite_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','couture-netnus-lite'); ?></span></a>
				                </nav>
				            </div>
				        <?php }?>
				        <?php if (has_nav_menu('primary')){ ?>
							<div id="sidelong-menu" class="nav sidenav primary-menu">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'couture-netnus-lite' ); ?>">
				                    <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                    ?>
				                </nav>
				            </div>
				        <?php }?>
					</div>
					<div class="col-lg-3 col-md-4 col-9">
						<div class="category-box">
							<button class="product-btn"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html_e('Category','couture-netnus-lite'); ?></button>
					        <div class="product-cat">
					        	<?php if(class_exists('woocommerce')){ ?>
						            <?php
						            $args = array(
						              //'number'     => $number,
						              'orderby'    => 'title',
						              'order'      => 'ASC',
						              'hide_empty' => 0,
						              'parent'  => 0
						              //'include'    => $ids
						            );
						            $product_categories = get_terms( 'product_cat', $args );
						            $count = count($product_categories);
						            if ( $count > 0 ){
						                foreach ( $product_categories as $product_category ) {
							                $product_cat_id   = $product_category->term_id;
							                $cat_link = get_category_link( $product_cat_id );
							                if ($product_category->category_parent == 0) { ?>
								                <li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>"><i class="far fa-snowflake"></i>
								                <?php
								            }
							                echo esc_html( $product_category->name ); ?><span class="screen-reader-text"><?php echo esc_html( $product_category->name ); ?></span></a></li>
							                <?php
						                }
						            }?>
					            <?php }else { echo '<p>'.esc_html('Please Install WooCommerce Plugin for Product category.','couture-netnus-lite').'<p>'; }?>
				        	</div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php

	if ( ( is_single() || ( is_page() && ! couture_netnus_lite_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'couture-netnus-lite-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
