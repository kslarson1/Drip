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
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">	<!-- Add Font Awesome  -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'drip' ); ?></a>

<header class="main_h">

    <div class="container-fluid">
        <a class="logo" href="#home"><img src="<?php the_field('logo_image'); ?>"</a>

        <div class="mobile-toggle" href="#contact">
            <i class="fa fa-bars fa-2x"></i>
        </div>

        <nav>
            <ul>
                <li><h6><a href="#home">Home</a></h6></li>
                <li><h6><a href="#services">Services</a></h6></li>
                <li><h6><a href="#about">About</a></h6></li>
                <li><h6><a href="#contact">Contact</a></h6></li>
            </ul>
        </nav>

    </div> <!-- / container -->

</header>

	<div id="content" class="site-content">
