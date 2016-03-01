<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Components
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function components_jetpackcomponentsetup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'components_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

	// Add theme support for site logos
	add_image_size( 'components-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'components-logo' ) );
}
add_action( 'after_setup_theme', 'components_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function components_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}

/**
 * Return early if Site Logo is not available.
 */
function components_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

function components_social_menu() {
    if ( ! function_exists( 'jetpack_social_menu' ) ) {
        return;
    } else {
        jetpack_social_menu();
    }
}