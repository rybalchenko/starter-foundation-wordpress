<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>

<div class="row">
	<!--HOME PAGE SLIDER-->
	<?php echo home_slider_template(); ?>
	<!--END of HOME PAGE SLIDER-->
</div>


<div class="row">
	<div class="columns">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			   <?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<i class="fa fa-user"></i>
	</div>
</div>

<?php get_footer(); ?>
