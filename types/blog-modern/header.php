<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package theme-modern
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

		<?php if ( is_active_sidebar( 'sidebar-1' ) || has_nav_menu( 'main' ) || has_nav_menu ( 'social' ) ) : ?>
			<button class="menu-toggle animated" aria-expanded="false" ><span class="screen-reader-text"><?php _e( 'Show', 'coherent' ); ?></span><span class="action-text"><?php _e( 'Show', 'coherent' ); ?></span></button>
			<div class="slide-panel animated closed">
				<?php if ( has_nav_menu ( 'social' ) ) : ?>
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
						'depth' => 1,
						'link_before' => '<span class="screen-reader-text">',
						'link_after' => '</span>',
						'container_class' => 'social-links',
					) ); ?>
				<?php endif; ?>

			<?php if ( has_nav_menu( 'main' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>


			<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
				get_sidebar();
			} ?>
			</div>
		<?php endif; ?>
		<?php if ( is_home() && is_front_page() ) : ?>
			<?php if ( get_header_image() ) : ?>
				<div class="feature-header" style="background-image: url(<?php header_image(); ?>);">
					<div class="site-branding header-wrapper">
						<div class="header-inner">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div>
					</div><!-- .site-branding -->
				</div>
			<?php endif; ?>
			<?php if ( get_header_image() ) : ?>
			<?php endif; ?>
		<?php endif; ?>

	</header><!-- #masthead -->
</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
