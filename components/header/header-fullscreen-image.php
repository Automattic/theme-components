		<?php if ( get_header_image() ) : ?>
			<div class="feature-header" style="background-image: url(<?php header_image(); ?>);">
				<div class="site-branding header-wrapper">
					<div class="header-inner">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div>
				</div><!-- .site-branding -->
			</div>
		<?php else : ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
		<?php endif; ?>
