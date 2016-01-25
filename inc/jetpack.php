<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @Package Components
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @since Components 1.0
 */
function components_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'components_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function components_jetpack_setup
add_action( 'after_setup_theme', 'components_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 *
 * @since Components 1.0
 */
function components_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function components_infinite_scroll_render

/**
 * Add support for the Site Logo
 *
 * @since Components 1.0
 */
function components_site_logo_init() {
	add_image_size( 'components-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'components-logo' ) );
}
add_action( 'after_setup_theme', 'components_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 *
 * @since Components 1.0
 */
function components_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
* Add theme support for Responsive Videos.
 *
 * @since Components 1.0
*/
add_theme_support( 'jetpack-responsive-videos' );

/**
 * Featured Posts
 */
function components_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'components_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function components_get_featured_posts() {
	return apply_filters( 'components_get_featured_posts', false );
}
