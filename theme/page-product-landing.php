<?php
/**
 * Template Name: Product Landing
 */

get_template_part( 'templates/partials/header' );
?>
<section class="container">
  <header class="landing-hero" aria-labelledby="landing-title">
    <h1 id="landing-title"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?>
      <p><?php echo esc_html( get_the_excerpt() ); ?></p>
    <?php endif; ?>
  </header>

  <section class="landing-benefits" aria-labelledby="benefits-title">
    <h2 id="benefits-title"><?php esc_html_e( 'Why teams choose this product', 'cwv-minimal' ); ?></h2>
    <ul role="list" class="grid">
      <li><?php esc_html_e( 'Instant setup with optimized defaults.', 'cwv-minimal' ); ?></li>
      <li><?php esc_html_e( 'Accessible components that adapt to any device.', 'cwv-minimal' ); ?></li>
      <li><?php esc_html_e( 'Performance tooling baked into the workflow.', 'cwv-minimal' ); ?></li>
    </ul>
  </section>

  <section class="landing-faq" aria-labelledby="faq-title">
    <h2 id="faq-title"><?php esc_html_e( 'Frequently asked questions', 'cwv-minimal' ); ?></h2>
    <details>
      <summary><?php esc_html_e( 'Does this theme support child themes?', 'cwv-minimal' ); ?></summary>
      <p><?php esc_html_e( 'Yes. Extend layouts and styles using a child theme without touching the core files.', 'cwv-minimal' ); ?></p>
    </details>
    <details>
      <summary><?php esc_html_e( 'Is JavaScript required?', 'cwv-minimal' ); ?></summary>
      <p><?php esc_html_e( 'Critical interactions work without JavaScript, with enhancements where available.', 'cwv-minimal' ); ?></p>
    </details>
  </section>
</section>
<?php
get_template_part( 'templates/partials/cta' );
get_template_part( 'templates/partials/footer' );
