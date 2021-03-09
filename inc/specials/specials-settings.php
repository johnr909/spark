<?php
//Example from Codex page : http://codex.wordpress.org/Function_Reference/add_submenu_page
//Add this in your functions.php file, or use it in your plugin

add_action('admin_menu', 'register_my_custom_submenu_page');

function register_my_custom_submenu_page() {
  add_submenu_page( 'edit.php?post_type=specials', 'Specials Options', 'Specials Options', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' ); 
}

function my_custom_submenu_page_callback() {
	echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
	echo '<h2>Specials Options Page</h2>';
	include 'specials-settings-form.php';
	echo '</div>';
	wp_nonce_field( basename( __FILE__ ), 'specials_options_meta_box_nonce' );
}
?>
