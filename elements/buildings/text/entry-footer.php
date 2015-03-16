<?php

if ( ! function_exists( 'atomic_s_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function atomic_s_entry_footer() {
  // Hide category and tag text for pages.
  if ( 'post' == get_post_type() ) {
    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( __( ', ', 'atomic_s' ) );
    if ( $categories_list && atomic_s_categorized_blog() ) {
      printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'atomic_s' ) . '</span>', $categories_list );
    }

    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', __( ', ', 'atomic_s' ) );
    if ( $tags_list ) {
      printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'atomic_s' ) . '</span>', $tags_list );
    }
  }

  if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    echo '<span class="comments-link">';
    comments_popup_link( __( 'Leave a comment', 'atomic_s' ), __( '1 Comment', 'atomic_s' ), __( '% Comments', 'atomic_s' ) );
    echo '</span>';
  }

  edit_post_link( __( 'Edit', 'atomic_s' ), '<span class="edit-link">', '</span>' );
}
endif;
