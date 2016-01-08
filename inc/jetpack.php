<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package theme-magazine
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @since theme-magazine 1.0
 */
function theme_traditional_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'theme_traditional_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function theme_traditional_jetpack_setup
add_action( 'after_setup_theme', 'theme_traditional_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 *
 * @since theme-magazine 1.0
 */
function theme_traditional_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function theme_traditional_infinite_scroll_render

/**
 * Add support for the Site Logo
 *
 * @since theme-magazine 1.0
 */
function theme_traditional_site_logo_init() {
	add_image_size( 'theme-magazine-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'theme-magazine-logo' ) );
}
add_action( 'after_setup_theme', 'theme_traditional_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 *
 * @since theme-magazine 1.0
 */
function theme_traditional_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
* Add theme support for Responsive Videos.
 *
 * @since theme-magazine 1.0
*/
add_theme_support( 'jetpack-responsive-videos' );

/**
 * Featured Posts
 */
function theme_magazine_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'theme_magazine_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function theme_magazine_get_featured_posts() {
	return apply_filters( 'theme_magazine_get_featured_posts', false );
}
