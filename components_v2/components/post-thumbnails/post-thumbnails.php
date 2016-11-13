// components_theme file:functions.php location:setup

<?php

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );

// Add default featured image size.
add_image_size( 'components-featured-image', 640, 9999 );
