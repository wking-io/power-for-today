<?php
/**
 * Add favicon to head
 *
 * @package second-mile
 */

function pft_favicon() {
    $root = get_stylesheet_directory_uri() . '/favicons/';
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $root . 'apple-touch-icon.png">
    <link rel="icon" type="image/png" href="' . $root . 'favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="' . $root . 'favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="' . $root . 'site.webmanifest">';
}

add_action( 'wp_head', 'pft_favicon' );
