<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package component_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'component_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<!-- SLUSH : compoonents/branding/branding.php -->

		<!-- SLUSH : compoonents/site-logo/site-logo.php -->

		<!-- SLUSH : compoonents/top-navigation/top-navigation.php -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
