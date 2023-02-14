<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'couture_netnus_lite_above_slider' ); ?>

<div id="first-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4">
        <div class="product-cat">
					<strong class="product-category"><?php echo esc_html_e('Popular Category','couture-netnus-lite'); ?></strong>
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
            $count = count($product_categories);?>
            <ul>
	            <?php if ( $count > 0 ){
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
	        	</ul>
					<?php }else { echo '<p>'.esc_html('Please Install WooCommerce Plugin for Product category.','couture-netnus-lite').'<p>'; }?>
      	</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<?php if( get_theme_mod('couture_netnus_lite_slider_hide_show',false) != false){ ?>	
					<section id="slider">
				  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
					    <?php $couture_netnus_lite_slider_pages = array();
			      	for ( $count = 1; $count <= 4; $count++ ) {
				        $mod = intval( get_theme_mod( 'couture_netnus_lite_slider' . $count ));
				        if ( 'page-none-selected' != $mod ) {
				          $couture_netnus_lite_slider_pages[] = $mod;
				        }
			      	}
			      	if( !empty($couture_netnus_lite_slider_pages) ) :
				        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $couture_netnus_lite_slider_pages,
			          	'orderby' => 'post__in'
				        );
		        	$query = new WP_Query( $args );
			        if ( $query->have_posts() ) :
			          $i = 1;
					    ?>     
					    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
					          	<a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
					          	<div class="carousel-caption">
						            <div class="inner_carousel">
						              	<h1><?php the_title();?></h1>
						              	<div class="read-btn">
									        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php esc_html_e('Shop Now','couture-netnus-lite'); ?><span class="screen-reader-text"><?php esc_html_e('Shop Now','couture-netnus-lite'); ?></span></a>
							    		</div>
						            </div>			            
					          	</div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
					    </div>
					    <?php else : ?>
					    	<div class="no-postfound"></div>
				        <?php endif;
					    endif;?>
					    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					      <span class="carousel-control-prev-icon" aria-hidden="true"><?php esc_html_e('PREV','couture-netnus-lite'); ?></span>
					      <span class="screen-reader-text"><?php esc_html_e('PREV','couture-netnus-lite'); ?></span>
					    </a>
					    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					      <span class="carousel-control-next-icon" aria-hidden="true"><?php esc_html_e('NEXT','couture-netnus-lite'); ?></span>
					      <span class="screen-reader-text"><?php esc_html_e('NEXT','couture-netnus-lite'); ?></span>
					    </a>
				  	</div>  
				  	<div class="clearfix"></div>
					</section>
				<?php }?>
			</div>
		</div>
	</div>
</div>


<?php do_action( 'couture_netnus_lite_below_slider' ); ?>

<section id="our-products">	
	<div class="container">
		<div class="row">
			<div id="sidebar" class="col-lg-3 col-md-4">
				<?php dynamic_sidebar('homepage-sidebar'); ?>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="blocks-sec">
					<div class="row">
						<div class="col-lg-5 col-md-6">
							<?php $couture_netnus_lite_block_page1 = array();
							$mod = absint( get_theme_mod( 'couture_netnus_lite_block1'));
							if ( 'page-none-selected' != $mod ) {
						    $couture_netnus_lite_block_page1[] = $mod;
							}
							if( !empty($couture_netnus_lite_block_page1) ) :
						    $args = array(
							    'post_type' => 'page',
							    'post__in' => $couture_netnus_lite_block_page1,
							    'orderby' => 'post__in'
						    );
						    $query = new WP_Query( $args );
						    if ( $query->have_posts() ) :
									while ( $query->have_posts() ) : $query->the_post(); ?>
									    <div class="blocks">
									    	<div class="row">
									    		<div class="col-lg-5 col-md-12"><?php the_post_thumbnail(); ?></div>
									    		<div class="col-lg-7 col-md-12">
											    	<div class="block-text">
												    	<strong><a href="<?php esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></strong>
												    	<p><?php $excerpt = get_the_excerpt(); echo esc_html( couture_netnus_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('couture_netnus_lite_slider_excerpt_number','8')))); ?></p>
												    </div>
											    </div>
										    </div>
									    </div>
									<?php endwhile; ?>
							  	<?php else : ?>
							    	<div class="no-postfound"></div>
							  	<?php endif;
							endif;?>
					    <div class="clearfix"></div>
						</div>
						<div class="col-lg-7 col-md-6">
							<?php $couture_netnus_lite_block_page2 = array();
							$mod = absint( get_theme_mod( 'couture_netnus_lite_block2' ));
							if ( 'page-none-selected' != $mod ) {
						    $couture_netnus_lite_block_page2[] = $mod;
							}
							if( !empty($couture_netnus_lite_block_page2) ) :
						    $args = array(
							    'post_type' => 'page',
							    'post__in' => $couture_netnus_lite_block_page2,
							    'orderby' => 'post__in'
						    );
						    $query = new WP_Query( $args );
						    if ( $query->have_posts() ) :
									while ( $query->have_posts() ) : $query->the_post(); ?>
									    <div class="blocks">
									    	<div class="row">
									    		<div class="col-lg-6 col-md-12"><?php the_post_thumbnail(); ?></div>
									    		<div class="col-lg-6 col-md-12">
									    			<div class="block-text">
												    	<strong><a href="<?php esc_url(get_permalink()); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></strong>
												    	<p><?php $excerpt = get_the_excerpt(); echo esc_html( couture_netnus_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('couture_netnus_lite_slider_excerpt_number','10')))); ?></p>
												    </div>
											    </div>
										    </div>
									    </div>
									<?php endwhile; ?>
							  	<?php else : ?>
							    	<div class="no-postfound"></div>
							  	<?php endif;
							endif;?>
					    <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="pro-title">
	        <?php if( get_theme_mod('couture_netnus_lite_maintitle') != ''){ ?>
            <strong><?php echo esc_html(get_theme_mod('couture_netnus_lite_maintitle','')); ?></strong>
	        <?php }?>
		    </div>
		    <div class="category">		    			
		    	<?php $couture_netnus_lite_store_pages = array();
					$mod = absint( get_theme_mod( 'couture_netnus_lite_page' ));
					if ( 'page-none-selected' != $mod ) {
					  $couture_netnus_lite_store_pages[] = $mod;
					}
					if( !empty($couture_netnus_lite_store_pages) ) :
					  $args = array(
					    'post_type' => 'page',
					    'post__in' => $couture_netnus_lite_store_pages,
					    'orderby' => 'post__in'
					  );
					  $query = new WP_Query( $args );
					  if ( $query->have_posts() ) :
					    $count = 0;
							while ( $query->have_posts() ) : $query->the_post(); ?>
						    <div class="pro-image">
					        <p><?php the_content(); ?></p>
					        <div class="clearfix"></div>
						    </div>
							<?php $count++; endwhile; ?>
					  <?php else : ?>
				      <div class="no-postfound"></div>
					  <?php endif;
					endif;
					wp_reset_postdata()?>
			    <div class="clearfix"></div>
		    </div>	
			</div>
    </div>	
	</div>
</section>

<?php do_action( 'couture_netnus_lite_below_product' ); ?>

<div class="container lz-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>