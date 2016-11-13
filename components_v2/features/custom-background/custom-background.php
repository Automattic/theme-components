// components_theme file:functions.php location:setup

<?php

// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'components_custom_background_args', array(
	'default-color' => 'ffffff',
	'default-image' => '',
) ) );
