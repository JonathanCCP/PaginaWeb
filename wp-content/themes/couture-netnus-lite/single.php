<?php
/**
 * The template for displaying all single posts
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

get_header(); ?>

<div class="container">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
	    $couture_netnus_lite_layout_option = get_theme_mod( 'couture_netnus_lite_theme_options','Right Sidebar');
	    if($couture_netnus_lite_layout_option == 'Left Sidebar'){ ?>
	    	<div class="row">
		        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
		        <div id="post_section" class="content_area col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
						) );

					endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="clearfix"></div>
		<?php }else if($couture_netnus_lite_layout_option == 'Right Sidebar'){ ?>
			<div class="row">
				<div id="post_section" class="content_area col-lg-8 col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
						) );

					endwhile; // End of the loop.
					?>
				</div>
				<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>
		<?php }else if($couture_netnus_lite_layout_option == 'One Column'){ ?>
			<div id="post_section" class="content_area">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
					) );

				endwhile; // End of the loop.
				?>
			</div>
		<?php }else if($couture_netnus_lite_layout_option == 'Three Columns'){ ?>	
			<div class="row">
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
				<div id="post_section" class="content_area col-lg-6 col-md-6">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
						) );

					endwhile; // End of the loop.
					?>
				</div>
				<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
			</div>
		<?php }else if($couture_netnus_lite_layout_option == 'Four Columns'){ ?>
			<div class="row">
				<div id="sidebar" class="col-lg-3"><?php dynamic_sidebar('sidebar-1'); ?></div>
				<div id="post_section" class="content_area col-lg-3">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
						) );

					endwhile; // End of the loop.
					?>
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

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/post/content' );

							endwhile;					
						else :

							get_template_part( 'template-parts/post/content', 'none' );

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
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'couture-netnus-lite' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'couture-netnus-lite' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'couture-netnus-lite' ) . '</span> ',
						) );

					endwhile; // End of the loop.
					?>
				</div>
				<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>
		<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();
