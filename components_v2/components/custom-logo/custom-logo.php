// components_theme file:functions.php location:setup

<?php
/**
 * Add support for core custom logo.
 */
add_theme_support( 'custom-logo', array(
	'height'      => 200,
	'width'       => 200,
	'flex-width'  => true,
	'flex-height' => true,
) );

?>

// components_theme file:header.php location:middle

<?php awesome_the_custom_logo(); ?>
