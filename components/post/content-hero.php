<?php
/**
 * The template used for displaying hero content.
 *
 * @package components
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="components-hero">
		<?php the_post_thumbnail( 'components-hero' ); ?>
	</div><!-- .hero -->
<?php endif; ?>
