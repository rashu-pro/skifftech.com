<?php
/**
 * Blog — Featured post (the most recent article).
 *
 * @param array $args {
 *     @type WP_Post|null $post The featured post.
 * }
 *
 * @package skifftech
 */

$skt_post = ! empty( $args['post'] ) ? $args['post'] : null;

if ( ! $skt_post ) {
	return;
}

$skt_cats = get_the_category( $skt_post->ID );
$skt_cat  = $skt_cats ? $skt_cats[0]->name : '';
$skt_thumb_url = get_the_post_thumbnail_url( $skt_post->ID, 'large' );
?>
<section class="ct-section" style="padding-top:clamp(40px,5vw,58px);padding-bottom:0">
  <div class="ct-wrap">
    <a class="bl-feature reveal" href="<?php echo esc_url( get_permalink( $skt_post ) ); ?>">
      <div class="bl-feature-media">
        <span class="bl-flag">Featured</span>
        <?php if ( $skt_thumb_url ) : ?>
          <img src="<?php echo esc_url( $skt_thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title( $skt_post ) ); ?>" loading="lazy">
        <?php else : ?>
          <div class="ph"><span>Featured image 16:10</span></div>
        <?php endif; ?>
      </div>
      <div class="bl-feature-body">
        <div class="bl-meta">
          <?php if ( $skt_cat ) : ?><span class="bl-cat"><?php echo esc_html( $skt_cat ); ?></span><span class="dot">&middot;</span><?php endif; ?>
          <span><?php echo esc_html( get_the_date( 'd M Y', $skt_post ) ); ?></span><span class="dot">&middot;</span>
          <span><?php echo esc_html( skifftech_reading_time( $skt_post ) ); ?></span>
        </div>
        <h2><?php echo esc_html( get_the_title( $skt_post ) ); ?></h2>
        <p><?php echo esc_html( wp_trim_words( get_the_excerpt( $skt_post ), 32 ) ); ?></p>
        <span class="rd">Read article <span class="arrow">&rarr;</span></span>
      </div>
    </a>
  </div>
</section>
