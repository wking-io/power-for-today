<?php

if ( ! function_exists( 'pft_setup' ) ) :
function pft_setup() {
	load_theme_textdomain( 'power-to-fly', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'menu-main' => esc_html__( 'Primary', THEME_NAME ),
		'menu-footer' => esc_html__( 'Footer', THEME_NAME ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', apply_filters( 'pft_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_filter( 'show_admin_bar', '__return_false' );
}

endif;

add_action( 'after_setup_theme', 'pft_setup' );
