<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Components
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'components' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'components/branding/branding' ); ?>

		<?php get_template_part( 'components/site-logo/site-logo' ); ?>

		<?php get_template_part( 'components/primary-navigation/primary-navigation' ); ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
