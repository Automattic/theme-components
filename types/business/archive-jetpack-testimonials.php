<?php
/**
 * The template for displaying the Testimonials archive page.
 *
 * @package component_s
 */

get_header(); ?>

	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

	<?php get_template_part( 'components/content', 'hero' ); ?>

	<?php if ( '' != $jetpack_options['page-content'] ) : // only display if content not empty ?>

	<div class="content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<article class="hentry">
					<div class="entry-content">
						<?php echo convert_chars( convert_smilies( wptexturize( stripslashes( wp_filter_post_kses( addslashes( $jetpack_options['page-content'] ) ) ) ) ) ); ?>
					</div>
				</article>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .content-wrapper -->

	<?php endif; ?>

	<?php if ( have_posts() ) : ?>

		<div id="grid-view" class="grid-area">
			<div class="grid-wrapper clear">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="grid">
						<?php get_template_part( 'components/content', 'testimonial' ); ?>
					</div><!-- .grid -->

				<?php endwhile; ?>

			</div><!-- .grid-wrapper -->
		</div><!-- #quaternary -->

	<?php
		the_posts_navigation();
		endif;
		wp_reset_postdata();
	?>

<?php get_footer(); ?>