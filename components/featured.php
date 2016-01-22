<?php
/**
 * The template for displaying featured content
 *
 * @Package Components
 */
$featured_posts = theme_magazine_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
		<?php
			foreach ( $featured_posts as $post ) {
				setup_postdata( $post );
	
				 // Include the featured content template.
				get_template_part( 'components/content', 'featured' );
			}
	
			wp_reset_postdata();
		?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content -->
