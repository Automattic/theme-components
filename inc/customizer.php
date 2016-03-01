<?php
/**
 * components Theme Customizer.
 *
 * @package Components
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function components_customize_register( $wp_customize ) {
	$wp_customize->getcomponentsetting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->getcomponentsetting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->getcomponentsetting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'components_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function components_customize_preview_js() {
	wp_enqueuecomponentscript( 'components_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'components_customize_preview_js' );
