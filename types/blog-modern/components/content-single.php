<?php
/**
 * Template part for displaying single posts.
 *
 * @package theme-modern
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( has_post_thumbnail() && ! post_password_required() ) :
			$featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thememodern-large' );
	?>

		<div class="feature-header" style="background-image: url(<?php echo esc_url( $featuredimage[0] ); ?>);">
			<div class="header-wrapper">
				<header class="header-inner">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
			</div><!-- .site-branding -->
		</div>
		<div class="entry-wrapper">
			<div class="entry-meta">
				<?php theme_traditional_posted_on(); ?>
			</div><!-- .entry-meta -->
	<?php else : ?>
	<div class="entry-wrapper">
		<div class="entry-meta">
			<?php theme_traditional_posted_on(); ?>
		</div><!-- .entry-meta -->
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme_traditional' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php theme_traditional_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->