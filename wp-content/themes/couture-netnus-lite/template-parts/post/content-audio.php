<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage couture-netnus-lite
 * @since 1.0
 * @version 1.4
 */

?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>

<article class="article_content col-md-12 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
  <header role="banner" class="entry-header">
    <?php   
      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } elseif ( is_front_page() && is_home() ) {
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }
    ?>
  </header>

  <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  <?php endif; ?>

  <div class="entry-content">
    <?php
    /* translators: %s: Name of current post */
    if ( is_single() ) :
      the_content();
    else :
      the_excerpt(); ?>
      <div class="continue-btn">
        <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'Continue Reading', 'couture-netnus-lite' ); ?>"><?php esc_html_e('Continue Reading','couture-netnus-lite'); ?><span class="screen-reader-text"><?php esc_html_e('Continue Reading','couture-netnus-lite'); ?></span>
        </a>
      </div>
    <?php endif;
    

    wp_link_pages( array(
      'before'      => '<div class="page-links">' . __( 'Pages:', 'couture-netnus-lite' ),
      'after'       => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
    ) );
    ?>
  </div>

  <?php
  if ( is_single() ) {
    couture_netnus_lite_entry_footer();
  }
  ?>

</article>