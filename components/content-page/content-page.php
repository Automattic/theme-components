<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package theme-modern
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( has_post_thumbnail() && ! post_password_required() ) :
			$featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thememodern-large' );
	?>

	<div class="entry-wrapper">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

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
			<?php edit_post_link( esc_html__( 'Edit', 'theme_traditional' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->


