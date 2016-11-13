// components_theme file:inc/jetpack.php location:setup

<?php
function components_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}
?>

// components_theme file:sidebar.php location:bottom

<?php components_social_menu() ?>
