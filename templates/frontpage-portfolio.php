<?php
/**
 * Template Name: Front Page
 *
 * @package Components
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php get_template_part( 'components/page/content', 'page' ); ?>
			<?php get_template_part( 'components/feature/portfolio/portfolio' ); ?>
		
		</main>
	</div>

<?php get_footer(); ?>
