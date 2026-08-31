<?php
/**
 * Blog Article — Lead image.
 *
 * @package skifftech
 */

$skt_thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>
<section class="ct-section" style="padding-block:clamp(34px,4.5vw,48px)">
  <div class="ct-wrap">
    <figure class="reveal">
      <div class="ar-figure">
        <?php if ( $skt_thumb_url ) : ?>
          <img src="<?php echo esc_url( $skt_thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
        <?php else : ?>
          <div class="ph"><span>Lead image 21:9</span></div>
        <?php endif; ?>
      </div>
    </figure>
  </div>
</section>
