<?php
/**
 * Theme setup and helpers.
 */

define( 'CWV_MINIMAL_VERSION', '1.0.0' );

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

    register_nav_menus(
        [
            'primary' => __( 'Primary Menu', 'cwv-minimal' ),
        ]
    );
} );

add_action('wp_enqueue_scripts', function () {
  // Main theme stylesheet (style.css)
  wp_enqueue_style('cwv-style', get_stylesheet_uri(), [], '1.0');

  // Minimal additional CSS
  wp_enqueue_style('cwv-main', get_stylesheet_directory_uri() . '/assets/css/main.css', [], '1.0');

  // Minimal JS
  wp_enqueue_script('cwv-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], '1.0', true);
});

add_filter( 'wp_get_attachment_image_attributes', function ( $attr ) {
    if ( empty( $attr['loading'] ) ) {
        $attr['loading'] = 'lazy';
    }

    return $attr;
} );

function cwv_minimal_fallback_menu() {
    echo '<nav class="site-nav" aria-label="' . esc_attr__( 'Primary navigation', 'cwv-minimal' ) . '">';
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'cwv-minimal' ) . '</a></li>';
    wp_list_pages(
        [
            'title_li' => '',
            'echo'     => 1,
        ]
    );
    echo '</ul>';
    echo '</nav>';
}

require get_template_directory() . '/inc/seo.php';
