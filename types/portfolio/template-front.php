<?php
/**
 * Template Name: Front Page
 *
 * @package theme-portfolio
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'components/content', 'page' ); ?>
			<?php get_template_part( 'components/portfolio' ); ?>
		</main>
	</div>

<?php get_footer(); ?>
