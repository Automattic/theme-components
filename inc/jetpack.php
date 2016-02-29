<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package components
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function components_jetpackcomponentsetup() {
	// Add theme support for Infinite Scroll.
	add_themecomponentsupport( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'components_infinitecomponentscroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_themecomponentsupport( 'jetpack-responsive-videos' );
}
add_action( 'aftercomponentsetup_theme', 'components_jetpackcomponentsetup' );

/**
 * Custom render function for Infinite Scroll.
 */
function components_infinitecomponentscroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( iscomponentsearch() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
