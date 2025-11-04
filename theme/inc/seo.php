<?php
/**
 * Basic SEO meta tags and structured data.
 */

add_action( 'wp_head', function () {
    $description = get_bloginfo( 'description', 'display' );
    $site_name   = get_bloginfo( 'name' );
    $url         = home_url( add_query_arg( [], $_SERVER['REQUEST_URI'] ?? '' ) );
    $image       = get_site_icon_url() ?: '';

    echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( wp_get_document_title() ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta property="og:image" content="' . esc_url( $image ) . '" />' . "\n";
    }

    $organization = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => $site_name,
        'url'         => home_url(),
        'logo'        => $image ?: home_url(),
        'sameAs'      => [],
        'description' => $description,
    ];

    $data = [ $organization ];

    if ( is_singular() ) {
        $breadcrumbs = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => __( 'Home', 'cwv-minimal' ),
                    'item'     => home_url(),
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => single_post_title( '', false ),
                    'item'     => get_permalink(),
                ],
            ],
        ];

        $data[] = $breadcrumbs;
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
} );
