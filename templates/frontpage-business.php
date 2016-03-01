<?php
/**
 * Template Name: Front Page
 *
 * @package components
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<?php get_template_part( 'components/features/hero-image/content', 'hero' ); ?>
			<?php get_template_part( 'components/features/testimonials/content', 'testimonials' ); ?>
	
		</main>
	</div>

<?php get_footer(); ?>
