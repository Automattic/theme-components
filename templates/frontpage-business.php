<?php
/**
 * Template Name: Front Page
 *
 * @package components
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'components/post/content', 'hero' ); ?>
			<?php get_template_part( 'components/testimonials/content', 'testimonials' ); ?>
		</main>
	</div>

<?php get_footer(); ?>
