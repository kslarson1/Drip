<?php
/**
 * Template Name: Home
 *
 *
 *
 * @package Drip
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>	

<!-- BEGIN HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-offset-1">
			<h1><?php the_field('home_header'); ?></h1>
				<h3><?php the_field('home_subheader'); ?></h3>
		</div>
	</div>
	</div>
	</div>

	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 center">
			<h3><?php the_field('home_subheader_1'); ?></h3>
			<hr>
			<p><?php the_field('home_text'); ?></p>
		</div>
	</div>
	</div>
	</div>
	<!-- END OF SCROLLING BREAK SECTION -->
</div>
<!-- END OF HOME SECTION -->

<!-- START OF SERVICES SECTION -->
<div id="services">   
	<div class="fixed_bg" style="background-image: url(<?php the_field('services_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h1><?php the_field('services_header'); ?></h1>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
				<div class="center">
					<h3><?php the_field('servicesbox_header_1'); ?></h3>
				</div>
				<hr>
					<p><?php the_field('servicesbox_text_1'); ?></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
				<div class="center">
				<h3><?php the_field('servicesbox_header_2'); ?></h3>
				</div>
				<hr>
				<p><?php the_field('servicesbox_text_2'); ?></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
				<div class="center">
				<h3><?php the_field('servicesbox_header_3'); ?></h3>
				</div>
				<hr>
				<p><?php the_field('servicesbox_text_3'); ?></p>		
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<a class="ghost_button" href="#about">Contact Me</a>
		</div>
	</div>
	</div>
	</div>

	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-lg-6 col-lg-offset-3 center">
			<p><?php the_field('services_subheader'); ?></p>
		</div>
	</div>
	</div>
	</div>
	<!-- END OF SCROLLING BREAK SECTION -->
</div>
<!-- END OF SERVICES SECTION -->

<!-- START OF ABOUT/CONTACT SECTION -->
<div id="about">
	<div class="fixed_bg" style="background-image: url(<?php the_field('about_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-sm-offset-6">
			<h1><?php the_field('about_header'); ?></h1>
			<h6><?php the_field('about_subheader'); ?></h6>
		</div>
	</div>
	</div>
	</div>
	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg_half1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="circle" style="background-image: url(<?php the_field('about_image'); ?>)">
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="center">
			<h2><?php the_field('list_header'); ?></h2>
			<hr>
			</div>
			<ul>
					<!-- START OF REPEATER -->
					<?php

// check if the repeater field has rows of data
if( have_rows('about_list') ):

 	// loop through the rows of data

    while ( have_rows('about_list') ) : the_row(); ?>

       <!--  display a sub field value -->

        <li><?php the_sub_field('list_item'); ?></li>
	<?php
    endwhile;

else :

    // no rows found

endif;

?>
			<!-- END OF REPEATER -->
			</ul>
		</div>
	</div>
	</div>
	<!-- END OF ABOUT HALF -->

	<!-- START OF CONTACT HALF -->
	<div class="flat_bg_half2">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h2><?php the_field('contact_header'); ?></h2>
		</div>
	</div>
	<div class="row">
	<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
	</div>
	</div>
	</div>
<!-- END OF CONTACT HALF -->
</div>
<!-- END OF ABOUT SECTION -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
