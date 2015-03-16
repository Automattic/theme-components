<?php

if ( ! function_exists( 'the_archive_title' ) ) :
/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
function the_archive_title( $before = '', $after = '' ) {
  if ( is_category() ) {
    $title = sprintf( __( 'Category: %s', 'atomic_s' ), single_cat_title( '', false ) );
  } elseif ( is_tag() ) {
    $title = sprintf( __( 'Tag: %s', 'atomic_s' ), single_tag_title( '', false ) );
  } elseif ( is_author() ) {
    $title = sprintf( __( 'Author: %s', 'atomic_s' ), '<span class="vcard">' . get_the_author() . '</span>' );
  } elseif ( is_year() ) {
    $title = sprintf( __( 'Year: %s', 'atomic_s' ), get_the_date( _x( 'Y', 'yearly archives date format', 'atomic_s' ) ) );
  } elseif ( is_month() ) {
    $title = sprintf( __( 'Month: %s', 'atomic_s' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'atomic_s' ) ) );
  } elseif ( is_day() ) {
    $title = sprintf( __( 'Day: %s', 'atomic_s' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'atomic_s' ) ) );
  } elseif ( is_tax( 'post_format' ) ) {
    if ( is_tax( 'post_format', 'post-format-aside' ) ) {
      $title = _x( 'Asides', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
      $title = _x( 'Galleries', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
      $title = _x( 'Images', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
      $title = _x( 'Videos', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
      $title = _x( 'Quotes', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
      $title = _x( 'Links', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
      $title = _x( 'Statuses', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
      $title = _x( 'Audio', 'post format archive title', 'atomic_s' );
    } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
      $title = _x( 'Chats', 'post format archive title', 'atomic_s' );
    }
  } elseif ( is_post_type_archive() ) {
    $title = sprintf( __( 'Archives: %s', 'atomic_s' ), post_type_archive_title( '', false ) );
  } elseif ( is_tax() ) {
    $tax = get_taxonomy( get_queried_object()->taxonomy );
    /* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
    $title = sprintf( __( '%1$s: %2$s', 'atomic_s' ), $tax->labels->singular_name, single_term_title( '', false ) );
  } else {
    $title = __( 'Archives', 'atomic_s' );
  }

  /**
   * Filter the archive title.
   *
   * @param string $title Archive title to be displayed.
   */
  $title = apply_filters( 'get_the_archive_title', $title );

  if ( ! empty( $title ) ) {
    echo $before . $title . $after;
  }
}
endif;
