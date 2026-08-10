<?php
/**
 * Dedicated Development Team — FAQ accordion.
 *
 * @package skifftech
 */

$skt_ddt_faqs = array(
	array(
		'q' => 'Who manages the team day to day?',
		'a' => 'We do. A dedicated project manager runs standups, sprint planning, and delivery tracking, and is your single point of contact. You set priorities and review progress &mdash; without managing individual tickets.',
	),
	array(
		'q' => 'How is this different from staff augmentation?',
		'a' => 'Augmentation adds individual engineers to a team you already manage. A dedicated team is a complete, self-managing unit &mdash; devs, PM, and QA &mdash; that we run for you. If you have strong in-house leads and just need capacity, augmentation fits; if you want delivery handled, this is the model.',
	),
	array(
		'q' => 'How quickly can the team start?',
		'a' => 'Most teams are assembled within one to two weeks. After you&rsquo;ve met and approved the members, a short onboarding and sprint zero get everyone aligned before real sprint work begins.',
	),
	array(
		'q' => 'Do I get to approve the team members?',
		'a' => 'Always. We propose the team; you interview and approve every person on it. Nobody joins your team without your yes &mdash; and the same applies to any later additions.',
	),
	array(
		'q' => 'Can the team change as our roadmap evolves?',
		'a' => 'Yes &mdash; that&rsquo;s the point of the model. Add a designer for a redesign phase, bring in DevOps for launch, or scale engineer count up and down as the roadmap shifts, all inside the same engagement.',
	),
	array(
		'q' => 'How do we stay across progress?',
		'a' => 'The team works in your channels and tools, with weekly demos and clear sprint reports. You see the same boards and builds the team does &mdash; full visibility, no black box.',
	),
	array(
		'q' => 'Who owns the code and IP?',
		'a' => 'You do, fully. All work product and intellectual property belong to you, assigned contractually from day one &mdash; including everything produced during build&ndash;operate&ndash;transfer engagements.',
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
		<?php foreach ( $skt_ddt_faqs as $skt_ddt_faq ) : ?>
      <div class="sa-faq-item">
        <button type="button" class="sa-faq-q" aria-expanded="false"><?php echo wp_kses_post( $skt_ddt_faq['q'] ); ?><span class="pm"></span></button>
        <div class="sa-faq-a"><p><?php echo wp_kses_post( $skt_ddt_faq['a'] ); ?></p></div>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>
