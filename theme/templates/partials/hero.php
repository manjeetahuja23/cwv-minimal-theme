<section class="hero" aria-labelledby="hero-title">
  <div class="container">
    <h1 id="hero-title"><?php esc_html_e( 'Fast, minimal WordPress experiences.', 'cwv-minimal' ); ?></h1>
    <p><?php esc_html_e( 'Launch a Core Web Vitals-friendly site with lean markup and accessible patterns.', 'cwv-minimal' ); ?></p>
    <?php $hero_image = get_template_directory_uri() . '/assets/img/hero.svg'; ?>
    <picture>
      <source srcset="<?php echo esc_url( $hero_image ); ?>" type="image/svg+xml" />
      <img src="<?php echo esc_url( $hero_image ); ?>" width="1200" height="675" alt="<?php esc_attr_e( 'Stylized dashboard with performance metrics.', 'cwv-minimal' ); ?>" loading="lazy" decoding="async" />
    </picture>
  </div>
</section>
