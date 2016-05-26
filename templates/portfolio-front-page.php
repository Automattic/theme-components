<?php
/**
 * Template Name: Front Page
 *
 * @package Components
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/page/content', 'page' ); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'components/features/portfolio/portfolio' ); ?>

		</main>
	</div>

<?php get_footer(); ?>
