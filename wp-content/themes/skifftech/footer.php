<?php
/**
 * The template for displaying the footer — V6 dark gold design.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skifftech
 */
?>

<footer id="ftr">
  <div class="wrap">

    <div class="foot-top">

      <div class="foot-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="https://skifftech.com/wp-content/uploads/2022/05/skiff-logo-new-version-white.png"
               alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        </a>
        <p>Your end-to-end product engineering partner &mdash; software that scales with your business.</p>
      </div>

      <div class="foot-col">
        <h5>Services</h5>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Custom Software</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Consultency</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Data Analysis</a>
        <!-- <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Digital Marketing</a> -->
      </div>

      <div class="foot-col">
        <h5>Company</h5>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/team-members/' ) ); ?>">Team</a>
        <a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">Blog</a>
        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a>
      </div>

      <div class="foot-col">
        <h5>Contact</h5>
        <a href="https://maps.google.com/?q=1103+CDA+Avenue+East+Nasirabad+Chittagong" target="_blank" rel="noopener">
          1103, CDA Avenue,<br>East Nasirabad, Panchlaish, Chittagong
        </a>
        <a href="mailto:info@skifftech.com">info@skifftech.com</a>
        <a href="tel:+8801767839243">+880 1767 839243</a>
      </div>

    </div><!-- .foot-top -->

    <div class="foot-bot">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Skiff Technologies. All rights reserved.</span>
      <div class="socials">
        <a href="https://www.facebook.com/skiff.technologies" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 9h3V6h-3c-2 0-3 1-3 3v2H8v3h3v6h3v-6h3l1-3h-4V9z"/></svg>
        </a>
        <a href="https://www.linkedin.com/company/skiff-technologies/?originalSubdomain=bd" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h4v16H4zM6 2a2 2 0 110 4 2 2 0 010-4zM10 9h4v2a4 4 0 014-2c3 0 4 2 4 5v6h-4v-5c0-1-1-2-2-2s-2 1-2 2v5h-4z"/></svg>
        </a>
        <!-- <a href="https://twitter.com/skifftech" aria-label="X (Twitter)" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h4l4 6 4-6h4l-6 8 6 8h-4l-4-6-4 6H4l6-8z"/></svg>
        </a> -->
      </div>
    </div><!-- .foot-bot -->

  </div><!-- .wrap -->
</footer><!-- #ftr -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
