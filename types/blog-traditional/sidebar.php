<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package theme-traditional
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">

	<?php if ( has_nav_menu ( 'social' ) ) : ?>
		<?php wp_nav_menu( array(
			'theme_location' => 'social',
			'depth' => 1,
			'link_before' => '<span class="screen-reader-text">',
			'link_after' => '</span>',
			'container_class' => 'social-links',
		) ); ?>
	<?php endif; ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
