<?php
	get_search_form();

	the_widget( 'WP_Widget_Recent_Posts' );

	// Only show the widget if site has multiple categories.
	if ( components_categorized_blog() ) :
?>
	<div class="widget widget_categories">
		<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'components' ); ?></h2>
		<ul>
		<?php
			wp_list_categories( array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => 1,
				'title_li'   => '',
				'number'     => 10,
			) );
		?>
		</ul>
	</div><!-- .widget -->

<?php
	endif;

	/* translators: %1$s: smiley */
	$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'components' ), convert_smilies( ':)' ) ) . '</p>';
	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

	the_widget( 'WP_Widget_Tag_Cloud' );
?>
