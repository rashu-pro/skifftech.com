<?php
/**
 * Blog Article — Header (breadcrumb, title, meta).
 *
 * @package skifftech
 */

$skt_cats = get_the_category();
$skt_cat  = $skt_cats ? $skt_cats[0]->name : '';
?>
<section class="ct-section ar-hero">
  <div class="ct-wrap">
    <div class="reveal">
      <nav class="ct-crumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( skifftech_get_blog_url() ); ?>">Blog</a>
      </nav>
      <h1><?php the_title(); ?></h1>
      <div class="ar-hmeta">
        <?php if ( $skt_cat ) : ?><span class="cat"><?php echo esc_html( $skt_cat ); ?></span><span class="dot">&middot;</span><?php endif; ?>
        <span><?php echo esc_html( get_the_date( 'd M Y' ) ); ?></span><span class="dot">&middot;</span>
        <span><?php echo esc_html( skifftech_reading_time( get_the_ID() ) ); ?></span>
      </div>
    </div>
  </div>
</section>
