<?php
/**
 * About Us — How we work (manifesto rows).
 *
 * @package skifftech
 */

$skt_ab_principles = array(
	array(
		'h' => 'Weekly demos, or it didn&rsquo;t happen.',
		'p' => 'You see working software every week &mdash; progress you can click, not progress reports.',
	),
	array(
		'h' => 'Senior engineers. Actually senior.',
		'p' => 'The experience you&rsquo;re promised is the experience that shows up &mdash; no juniors hidden behind senior invoices.',
	),
	array(
		'h' => 'Your IP, from day one.',
		'p' => 'Code, designs, and documentation belong to you contractually from the first commit &mdash; backed by an NDA.',
	),
	array(
		'h' => 'We say no to scope we can&rsquo;t ship.',
		'p' => 'An honest &ldquo;that will take longer&rdquo; beats an optimistic promise that breaks &mdash; estimates you can plan a business on.',
	),
	array(
		'h' => 'Your hours are our hours.',
		'p' => 'Wherever you are in the world, we align our working day for real-time standups, reviews, and quick answers.',
	),
	array(
		'h' => 'We stay after launch.',
		'p' => 'Shipping is the midpoint, not the finish line &mdash; we maintain and grow what we build.',
	),
);
?>
<section class="ab-section">
  <div class="ab-wrap">
    <div class="ab-head reveal">
      <span class="eyebrow">How we work</span>
      <h2 class="ab-h2">Principles we practice, not adjectives we claim.</h2>
    </div>

    <div class="ab-manif reveal">
		<?php foreach ( $skt_ab_principles as $skt_ab_index => $skt_ab_principle ) : ?>
      <div class="ab-row">
        <span class="n"><?php echo esc_html( str_pad( $skt_ab_index + 1, 2, '0', STR_PAD_LEFT ) ); ?></span>
        <div>
          <h3><?php echo wp_kses_post( $skt_ab_principle['h'] ); ?></h3>
          <p><?php echo wp_kses_post( $skt_ab_principle['p'] ); ?></p>
        </div>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>
