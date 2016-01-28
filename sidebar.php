<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Components
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
<?php endif; ?>
