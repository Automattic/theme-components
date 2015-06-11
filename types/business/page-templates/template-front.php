<?php
/**
 * Template Name: Front Page
 *
 * @package component_s
 */
get_header(); ?>

<!-- SLUSH : add entire template -->
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'compeontns/content', 'hero' ); ?>

	<?php endwhile; ?>

	<?php rewind_posts(); ?>

<!-- SLUSH : components/testimonials/testimonials.php -->

<?php get_footer(); ?>
