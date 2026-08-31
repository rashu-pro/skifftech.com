<?php
/**
 * Blog Article — Previous / next post navigation.
 *
 * @package skifftech
 */

$skt_prev = get_previous_post();
$skt_next = get_next_post();

if ( ! $skt_prev && ! $skt_next ) {
	return;
}
?>
<section class="ct-section" style="padding-top:0">
  <div class="ct-wrap">
    <div class="ar-nav reveal">
      <?php if ( $skt_prev ) : ?>
        <a href="<?php echo esc_url( get_permalink( $skt_prev ) ); ?>"><div class="k">&larr; Previous</div><div class="t"><?php echo esc_html( get_the_title( $skt_prev ) ); ?></div></a>
      <?php else : ?>
        <span></span>
      <?php endif; ?>
      <?php if ( $skt_next ) : ?>
        <a href="<?php echo esc_url( get_permalink( $skt_next ) ); ?>" class="nx"><div class="k">Next &rarr;</div><div class="t"><?php echo esc_html( get_the_title( $skt_next ) ); ?></div></a>
      <?php endif; ?>
    </div>
  </div>
</section>
