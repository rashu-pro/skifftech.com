<?php
/**
 * Blog — Post grid + pagination.
 *
 * @param array $args {
 *     @type WP_Query $query The paginated grid query (featured post excluded).
 *     @type int       $paged Current page number.
 * }
 *
 * @package skifftech
 */

$skt_query = ! empty( $args['query'] ) ? $args['query'] : null;
$skt_paged = ! empty( $args['paged'] ) ? (int) $args['paged'] : 1;

if ( ! $skt_query ) {
	return;
}
?>
<section class="ct-section" id="posts">
  <div class="ct-wrap">
    <?php if ( $skt_query->have_posts() ) : ?>
      <div class="bl-grid">
        <?php
        $skt_i = 0;
        while ( $skt_query->have_posts() ) :
			$skt_query->the_post();
			$skt_cats      = get_the_category();
			$skt_cat       = $skt_cats ? $skt_cats[0]->name : '';
			$skt_thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
			$skt_i++;
			?>
          <a class="bl-card reveal" href="<?php the_permalink(); ?>" style="transition-delay:<?php echo esc_attr( min( $skt_i * 0.06, 0.3 ) ); ?>s">
            <div class="bl-card-media">
              <?php if ( $skt_thumb_url ) : ?>
                <img src="<?php echo esc_url( $skt_thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
              <?php else : ?>
                <div class="ph"><span>Image 16:10</span></div>
              <?php endif; ?>
            </div>
            <div class="bl-card-body">
              <div class="bl-meta">
                <?php if ( $skt_cat ) : ?><span class="bl-cat"><?php echo esc_html( $skt_cat ); ?></span><span class="dot">&middot;</span><?php endif; ?>
                <span><?php echo esc_html( get_the_date( 'd M Y' ) ); ?></span><span class="dot">&middot;</span>
                <span><?php echo esc_html( skifftech_reading_time( get_the_ID() ) ); ?></span>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
              <span class="rd">Read article <span class="arrow">&rarr;</span></span>
            </div>
          </a>
        <?php endwhile; ?>
      </div>

      <?php if ( $skt_query->max_num_pages > 1 ) : ?>
        <?php
        $skt_links = paginate_links(
			array(
				'base'      => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
				'format'    => '',
				'current'   => $skt_paged,
				'total'     => $skt_query->max_num_pages,
				'prev_text' => '<span class="arrow">&larr;</span> Prev',
				'next_text' => 'Next <span class="arrow">&rarr;</span>',
				'type'      => 'array',
				'end_size'  => 1,
				'mid_size'  => 1,
			)
		);
        ?>
        <?php if ( $skt_links ) : ?>
          <nav class="bl-pag reveal" aria-label="Article pagination">
            <?php
            foreach ( $skt_links as $skt_link ) {
				if ( false !== strpos( $skt_link, 'dots' ) ) {
					echo '<span class="bl-gap">&hellip;</span>';
					continue;
				}
				$skt_replacements = array(
					'page-numbers current' => 'bl-pg num is-cur',
					'prev page-numbers'    => 'bl-pg prev',
					'next page-numbers'    => 'bl-pg next',
					'page-numbers'         => 'bl-pg num', // fallback: plain numbered link
				);
				echo wp_kses_post( str_replace( array_keys( $skt_replacements ), array_values( $skt_replacements ), $skt_link ) );
			}
            ?>
          </nav>
        <?php endif; ?>
      <?php endif; ?>
    <?php else : ?>
      <p class="bl-empty">No articles published yet &mdash; check back soon.</p>
    <?php endif; ?>
  </div>
</section>
<?php wp_reset_postdata(); ?>
