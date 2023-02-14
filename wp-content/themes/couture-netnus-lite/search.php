<?php
/**
 * The template for displaying search results pages
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

get_header(); ?>

<div class="container">

	<header role="banner" class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','couture-netnus-lite'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'couture-netnus-lite' ); ?></h1>
		<?php endif; ?>
	</header>

	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
		    $couture_netnus_lite_layout_option = get_theme_mod( 'couture_netnus_lite_theme_options','Right Sidebar');
		    if($couture_netnus_lite_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
			        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div id="post_section" class="content_area col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile; // End of the loop.

							else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
				</div>
				<div class="clearfix"></div>
			<?php }else if($couture_netnus_lite_layout_option == 'Right Sidebar'){ ?>
				<div class="row">
					<div id="post_section" class="content_area col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile; // End of the loop.

							else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($couture_netnus_lite_layout_option == 'One Column'){ ?>
				<div id="post_section" class="content_area">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile; // End of the loop.

						else : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
						<?php
							get_search_form();

					endif;
					?>
					<div class="navigation">
		                <?php
		                    // Previous/next page navigation.
		                    the_posts_pagination( array(
		                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
		                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
		                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
		                    ) );
		                ?>
		                <div class="clearfix"></div>
		            </div>
				</div>
			<?php }else if($couture_netnus_lite_layout_option == 'Three Columns'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-1'); ?></div>	
					<div id="post_section" class="content_area col-lg-6 col-md-6">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile; // End of the loop.

							else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php }else if($couture_netnus_lite_layout_option == 'Four Columns'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
					<div id="post_section" class="content_area col-lg-3">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile; // End of the loop.

							else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			        <div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
		        </div>
		    <?php }else if($couture_netnus_lite_layout_option == 'Grid Layout'){ ?>
		    	<div class="row">
			    	<div id="post_section" class="content_area col-lg-8 col-md-8">
						<div class="row">
							<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/grid-layout', get_post_format() );

								endwhile;

								else :

								get_template_part( 'template-parts/post/grid-layout', 'none' );

							endif;
							?>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
				                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</div>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>	
				</div>	
			<?php } else { ?>
				<div class="row">
					<div id="post_section" class="content_area col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile; // End of the loop.

							else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'couture-netnus-lite' ); ?></p>
							<?php
								get_search_form();

						endif;
						?>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();
