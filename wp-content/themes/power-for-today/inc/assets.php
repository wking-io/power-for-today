<?php
/**
 * Add all assets for theme
 *
 * @package second-mile
 */

if ( ! function_exists( 'pft_scripts' ) ) :

	function pft_scripts() {
		
		if ( is_home() ) :
			wp_enqueue_script('pft_main');
		endif;

	}

endif;

add_action('wp_enqueue_scripts', 'pft_scripts');

if ( ! function_exists( 'pft_styles' ) ) :

	function pft_styles() {
			wp_enqueue_style('pft_fonts', 'https://use.typekit.net/zpg4miq.css', false, 'all');
	    wp_enqueue_style('pft_main');
	}

endif;

add_action('wp_enqueue_scripts', 'pft_styles');
