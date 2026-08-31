<?php
/**
 * About Us — How we work (manifesto rows).
 *
 * @package skifftech
 */

$skt_principles = array(
	array(
		'n'     => '01',
		'title' => 'Weekly demos, or it didn&rsquo;t happen.',
		'desc'  => 'You see working software every week &mdash; progress you can click, not progress reports.',
	),
	array(
		'n'     => '02',
		'title' => 'Senior engineers. Actually senior.',
		'desc'  => 'The experience you&rsquo;re promised is the experience that shows up &mdash; no juniors hidden behind senior invoices.',
	),
	array(
		'n'     => '03',
		'title' => 'Your IP, from day one.',
		'desc'  => 'Code, designs, and documentation belong to you contractually from the first commit &mdash; backed by an NDA.',
	),
	array(
		'n'     => '04',
		'title' => 'We say no to scope we can&rsquo;t ship.',
		'desc'  => 'An honest &ldquo;that will take longer&rdquo; beats an optimistic promise that breaks &mdash; estimates you can plan a business on.',
	),
	array(
		'n'     => '05',
		'title' => 'Your hours are our hours.',
		'desc'  => 'Wherever you are in the world, we align our working day for real-time standups, reviews, and quick answers.',
	),
	array(
		'n'     => '06',
		'title' => 'We stay after launch.',
		'desc'  => 'Shipping is the midpoint, not the finish line &mdash; we maintain and grow what we build.',
	),
);
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-head reveal">
      <span class="eyebrow">How we work</span>
      <h2 class="sa-h2">Principles we practice, not adjectives we claim.</h2>
    </div>

    <div class="sa-manif reveal">
      <?php foreach ( $skt_principles as $skt_p ) : ?>
        <div class="sa-row">
          <span class="n"><?php echo esc_html( $skt_p['n'] ); ?></span>
          <div>
            <h3><?php echo wp_kses_post( $skt_p['title'] ); ?></h3>
            <p><?php echo wp_kses_post( $skt_p['desc'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
