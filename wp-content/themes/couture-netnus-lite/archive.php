<?php
/**
 * The template for displaying archive pages
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : ?>
		<header role="banner" class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
	<?php endif; ?>

	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
	    	$couture_netnus_lite_layout_option = get_theme_mod( 'couture_netnus_lite_theme_options','Right Sidebar');
	    	if($couture_netnus_lite_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
		        	<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div id="post_section" class="content_area col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format());

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif; 
						?>
						<div class="navigation">
			                <?php
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
						if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif; 
						?>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php }else if($couture_netnus_lite_layout_option == 'One Column'){ ?>	
				<div id="post_section" class="content_area">
					<?php
					if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif; 
					?>
					<div class="navigation">
		                <?php
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
						if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;
							
							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php
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
						if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif; 
						?>
						<div class="navigation">
			                <?php
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
								if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/grid-layout' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/grid-layout', 'none' );

								endif; 
							?>
							<div class="navigation">
				                <?php
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
						if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif; 
						?>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'couture-netnus-lite' ),
			                        'next_text'          => __( 'Next page', 'couture-netnus-lite' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'couture-netnus-lite' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();
