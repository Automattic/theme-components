<?php if ( is_active_sidebar( 'sidebar-1' ) || has_nav_menu( 'menu-1' ) || has_nav_menu( 'social' ) ) : ?>
			<button class="menu-toggle animated" aria-expanded="false" ><span class="screen-reader-text"><?php esc_html_e( 'Show', 'components' ); ?></span><span class="action-text"><?php esc_html_e( 'Show', 'components' ); ?></span></button>
			<div class="slide-panel animated closed">
				<?php components_social_menu(); ?>

				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
					</nav><!-- #site-navigation -->
				<?php endif; ?>


				<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
					get_sidebar();
				} ?>
			</div>
		<?php endif; ?>