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

				<?php get_template_part( 'content', 'page' ); ?>

<!-- BEGIN HOME SECTION -->
<div id="home">
	<div class="fixed_bg_home" style="background-image: url(<?php the_field('home_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<h1><?php the_field('home_header'); ?></h1>
			<h4><?php the_field('home_subheader'); ?></h4>
		</div>
	</div>
	</div>
	</div>

	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg">
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12">
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
		<div class="col-xs-12">
			<h1><?php the_field('services_header'); ?></h1>
			<h4><?php the_field('services_subheader'); ?></h4>
		</div>
	</div>
	</div>
	</div>

	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
dsfslakj
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
dafssj;afs
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="services_box">
ef;alsjf;ld
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- END OF SCROLLING BREAK SECTION -->
</div>
<!-- END OF SERVICES SECTION -->

<!-- START OF ABOUT SECTION -->
<div id="about">
	<div class="fixed_bg" style="background-image: url(<?php the_field('about_bg_image'); ?>);">   <!-- FIXED IMAGE -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1><?php the_field('about_header'); ?></h1>
			<h4><?php the_field('about_subheader'); ?></h4>
		</div>
	</div>
	</div>
	</div>
	<!-- START OF SCROLLING BREAK SECTION -->
	<div class="flat_bg">
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="circle">

			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<ul class="about_list">
				<li>Recommended book: Antifragile</li>
				<li>Recommended book: Antifragile</li>
				<li>Recommended book: Antifragile</li>
			</ul>
		</div>
	</div>
	</div>
	</div>
	<!-- END OF SCROLLING BREAK SECTION -->
</div>
<!-- END OF ABOUT SECTION -->

<!-- START OF CONTACT SECTION -->
<div id="contact">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
hi there
</div>
</div>
</div>
</div>
<!-- END OF CONTACT SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
