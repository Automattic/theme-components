<?php
/**
 * The Template for displaying all single projects.
 *
 * @package Components
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'portfolio-single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>