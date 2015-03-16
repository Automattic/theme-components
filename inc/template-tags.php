<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package atomic_s
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function atomic_s_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'atomic_s_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'atomic_s_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so atomic_s_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so atomic_s_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in atomic_s_categorized_blog.
 */
function atomic_s_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'atomic_s_categories' );
}
add_action( 'edit_category', 'atomic_s_category_transient_flusher' );
add_action( 'save_post',     'atomic_s_category_transient_flusher' );
