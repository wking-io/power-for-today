<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package second-mile
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Language" content="en">
		<meta name="google" content="notranslate">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

<body <?php body_class( 'font-sans text-black w-5/6 max-w-5xl mx-auto mt-20' ); ?>>
	<a class="skip-link screen-reader-text visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', THEME_NAME ); ?></a>

	<header class="flex justify-between items-end mb-12" role="banner">
		<h1 class="font-bold uppercase tracking-wide">
			<a class="hover:underline" href="<?php echo home_url(); ?>">Power For Today</a>
		</h1>

		<nav class="" role="navigation">
			<p class=""><a class="hover:underline" href="#articles">Articles</a></p>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
