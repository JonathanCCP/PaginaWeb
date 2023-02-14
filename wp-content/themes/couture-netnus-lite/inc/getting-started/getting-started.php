<?php
//about theme info
add_action( 'admin_menu', 'couture_netnus_lite_gettingstarted' );
function couture_netnus_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'couture-netnus-lite'), esc_html__('About Theme', 'couture-netnus-lite'), 'edit_theme_options', 'couture_netnus_lite_guide', 'couture_netnus_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function couture_netnus_lite_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'couture_netnus_lite_admin_theme_style');

//guidline for about theme
function couture_netnus_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'couture-netnus-lite' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Couture Netnus Lite WordPress Theme', 'couture-netnus-lite' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'couture-netnus-lite' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'couture-netnus-lite' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'couture-netnus-lite' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'couture-netnus-lite' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'couture-netnus-lite' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'couture-netnus-lite' ); ?> <a href="<?php echo esc_url( COUTURE_NETNUS_LITE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'couture-netnus-lite' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Couture Netnus lite is a multipurpose WooCommerce WordPress theme designed for shopping online stores. Couture includes a lot of pre-designed layouts for home page, product page to give you best selections in customization topped off with full Elementor & WooCommerce plugin compatibility. Couture is suitable for the eCommerce websites such as fashion, electronic, organic, sneaker, shoes, glasses, accessories, supermarket, furniture … or anything you want. The Couture Netnus Lite is highly interactive with a number of pages to display stunning demos! The different shortcodes keep you away from indulging in the source code. The social media integration removes the need to have additional social media plugins. The SEO friendly nature of the theme guarantees to bring your site on top of search engines. Built on Bootstrap, using optimized codes, the theme is clean and extremely lightweight.', 'couture-netnus-lite')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Ecommerce Theme', 'couture-netnus-lite' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'couture-netnus-lite'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( COUTURE_NETNUS_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'couture-netnus-lite'); ?></a>
			<a href="<?php echo esc_url( COUTURE_NETNUS_LITE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'couture-netnus-lite'); ?></a>
			<a href="<?php echo esc_url( COUTURE_NETNUS_LITE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'couture-netnus-lite'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/couture-netnus-lite.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'couture-netnus-lite'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'couture-netnus-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'couture-netnus-lite'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>