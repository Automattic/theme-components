<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package theme-traditional
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme_traditional' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php
		// You can upload a custom header and it'll output in a smaller logo size.
		$header_image = get_header_image();

		if ( ! empty( $header_image ) ) { ?>
			<div id="header-image" class="custom-header">
				<div class="header-wrapper">
					<?php get_template_part( 'components/branding/branding' ); ?>
				</div><!-- .header-wrapper -->
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			</div><!-- #header-image .custom-header -->
		<?php } else { ?>
			<?php get_template_part( 'components/branding/branding' ); ?>
		<?php } ?>
	</header><!-- #masthead -->

	<?php get_template_part( 'components/site-logo/site-logo' ); ?>

	<?php get_template_part( 'components/top-navigation/top-navigation' ); ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
