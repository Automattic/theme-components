<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Top Menu', 'components' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_id' => 'top-menu' ) ); ?>
</nav><!-- #site-navigation -->
