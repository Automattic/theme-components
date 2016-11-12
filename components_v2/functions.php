<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package components
 */

if ( ! function_exists( 'components_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

 endif;

 /**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function components_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'components_content_width', 640 );
}
add_action( 'after_setup_theme', 'components_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function components_scripts() {
	wp_enqueue_style( 'components-style', get_stylesheet_uri() );

	wp_enqueue_script( 'components-js', get_template_directory_uri() . '/assets/js/components.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'components_scripts' );
