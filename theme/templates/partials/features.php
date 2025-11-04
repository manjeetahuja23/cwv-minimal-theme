<section class="features" aria-labelledby="features-title">
  <div class="container">
    <h2 id="features-title"><?php esc_html_e( 'Built for performance', 'cwv-minimal' ); ?></h2>
    <ul class="grid" role="list">
      <?php
      $items = [
        __( 'Semantic templates keep content accessible.', 'cwv-minimal' ),
        __( 'Lean CSS ensures sub-2.5s Largest Contentful Paint.', 'cwv-minimal' ),
        __( 'Deferred scripts maintain a low Total Blocking Time.', 'cwv-minimal' ),
      ];
      foreach ( $items as $item ) :
        ?>
        <li class="feature-item">
          <svg width="24" height="24" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false">
            <path fill="currentColor" d="M20 6L9 17l-5-5 1.4-1.4L9 14.2 18.6 4.6z" />
          </svg>
          <p><?php echo esc_html( $item ); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
