<?php
/**
 * The template used for displaying hero content
 *
 * @package Components
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="components-hero">
		<?php the_post_thumbnail( 'components-hero' ); ?>
	</div><!-- .components-hero -->
<?php endif; ?>
