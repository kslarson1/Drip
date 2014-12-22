<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Drip
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300|Roboto+Slab:300,400' rel='stylesheet' type='text/css'>    <!-- Add Google Fonts -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'drip' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'drip' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
