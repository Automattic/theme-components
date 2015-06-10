		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'link_before' => '<span class="screen-reader-text">',
				'link_after' => '</span>',
				'container_class' => 'social-links',
			) ); ?>
		<?php endif; ?>