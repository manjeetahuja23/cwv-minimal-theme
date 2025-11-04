<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link" href="#main">Skip to main content</a>
<header role="banner" class="site-header">
  <div class="container">
    <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php bloginfo('name'); ?>
    </a>
    <button id="nav-toggle" aria-expanded="false" aria-controls="primary-menu">Toggle navigation ☰</button>
    <?php
      wp_nav_menu( [
        'theme_location' => 'primary',
        'container'      => 'nav',
        'container_id'   => 'primary-menu',
        'menu_class'     => 'menu',
        'fallback_cb'    => '__return_empty_string',
        'aria_label'     => 'Primary'
      ] );
    ?>
  </div>
</header>
<main id="main" role="main" class="container">
