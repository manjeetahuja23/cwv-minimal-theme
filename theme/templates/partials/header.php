<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="visually-hidden" href="#main"><?php esc_html_e( 'Skip to main content', 'cwv-minimal' ); ?></a>
<header class="site-header">
  <div class="container">
    <div class="site-branding">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
    </div>
    <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu">
      <span class="visually-hidden"><?php esc_html_e( 'Toggle navigation', 'cwv-minimal' ); ?></span>
      ☰
    </button>
    <?php
    wp_nav_menu(
        [
            'theme_location'       => 'primary',
            'container'            => 'nav',
            'container_class'      => 'site-nav',
            'container_aria_label' => __( 'Primary navigation', 'cwv-minimal' ),
            'menu_id'              => 'primary-menu',
            'fallback_cb'          => 'cwv_minimal_fallback_menu',
        ]
    );
    ?>
  </div>
</header>
<main id="main" class="site-main">
