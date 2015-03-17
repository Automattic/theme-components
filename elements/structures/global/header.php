<!DOCTYPE html>
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'atomic_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
  		<?php //elements/structures/global/branding.php ?>
  		<?php //elements/buildings/navigation/nav-primary.php ?>
	</header><!-- #masthead -->

	<?php //elements/structures/global/customheader.php ?>

	<div id="content" class="site-content">


