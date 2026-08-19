<?php
/**
 * End-to-End Product Build — FAQ accordion.
 *
 * @package skifftech
 */

$skt_e2e_faqs = array(
	array(
		'q' => 'Do I need a detailed spec before we start?',
		'a' => 'No &mdash; that&rsquo;s what discovery is for. Bring the vision, the problem, or even just the sketch. The discovery phase turns it into a defined scope, roadmap, and budget before any build commitment.',
	),
	array(
		'q' => 'How is pricing structured?',
		'a' => 'Discovery produces a clear estimate. From there you choose: a fixed price for a fixed scope, or milestone-based pricing where each phase is quoted and approved before it starts. Either way, there are no surprise invoices.',
	),
	array(
		'q' => 'How involved do I need to be?',
		'a' => 'A few hours a week: a weekly demo, priority decisions when they come up, and feedback on what we ship. We handle everything else &mdash; that&rsquo;s the point of the model.',
	),
	array(
		'q' => 'What if requirements change mid-build?',
		'a' => 'They usually do &mdash; building a product teaches you about it. The milestone model is designed for that: each milestone is scoped with what you&rsquo;ve learned so far, so change is absorbed by the process instead of fighting it.',
	),
	array(
		'q' => 'Can you take over a half-built product?',
		'a' => 'Yes. We start with a technical audit of the existing codebase, give you an honest read on what&rsquo;s salvageable, and propose a plan &mdash; whether that&rsquo;s rescue and finish, or rebuild the risky parts.',
	),
	array(
		'q' => 'What happens after launch?',
		'a' => 'Your choice: we stay on for support and iteration under a build-and-grow arrangement, transition into a dedicated team for the long-term roadmap, or hand over cleanly &mdash; documentation, infrastructure, and all &mdash; to your own team.',
	),
	array(
		'q' => 'Who owns the code and IP?',
		'a' => 'You do, fully. All work product and intellectual property belong to you, assigned contractually from day one &mdash; including designs, code, infrastructure configuration, and documentation.',
	),
);
?>
<section class="sa-section" id="safaq">
  <div class="sa-wrap">
    <div class="sa-head sa-head-center reveal">
      <span class="eyebrow">FAQ</span>
      <h2 class="sa-h2">Questions, answered.</h2>
    </div>

    <div class="sa-faq reveal">
		<?php foreach ( $skt_e2e_faqs as $skt_e2e_faq ) : ?>
      <div class="sa-faq-item">
        <button type="button" class="sa-faq-q" aria-expanded="false"><?php echo wp_kses_post( $skt_e2e_faq['q'] ); ?><span class="pm"></span></button>
        <div class="sa-faq-a"><p><?php echo wp_kses_post( $skt_e2e_faq['a'] ); ?></p></div>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>
