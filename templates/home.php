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
<div class="container-fluid">
<div class="row">
<div class="col-xs-8 col-xs-offset-2">
hi there
</div>
</div>
</div>
</div>
<!-- END OF HOME SECTION -->

<!-- START OF SERVICES SECTION -->
<div id="services">
<div class="container-fluid">
<div class="row">
<div class="col-xs-8 col-xs-offset-2">
hi there
</div>
</div>
</div>
</div>
<!-- END OF SERVICES SECTION -->

<!-- START OF ABOUT SECTION -->
<div id="about">
<div class="container-fluid">
<div class="row">
<div class="col-xs-8 col-xs-offset-2">
hi there
</div>
</div>
</div>
</div>
<!-- END OF ABOUT SECTION -->

<!-- START OF CONTACT SECTION -->
<div id="contact">
<div class="container-fluid">
<div class="row">
<div class="col-xs-8 col-xs-offset-2">
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
