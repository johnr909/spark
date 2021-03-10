<?php
class Specials_Options {
	public function __construct() {
		add_action('admin menu', array($this, 'create_specials_options_page'));
	}

	public function create_specials_options_page() {
	$page_title = 'Specials Options Title';
	$menu_title = 'Specials Options Menu';
	$capability = 'manage_options';
	$slug = 'specials options fields';
	$callback = array($this, 'specials_options_page_content');
	// $icon = 'dashicons-admin-plugin';
	// $position = 100;

	add_menu_page('options-general.php', $page_title, $menu_title, $capability, $slug, $callback);
	}

	public function specials_options_page_content() { ?>
		<div class="wrap">
			<h2>setting page</h2>
			<form action="options.php" method="post">
				<?php
					settings_field('specials options');
					do_settings_sections('special options block');
					submit_button();
				?>
			</form>
		</div>
	<?php
	}
}

new Specials_Options();



// function register_specials_options_submenu_page() {
//   add_submenu_page( 'edit.php?post_type=specials', 'Specials Options', 'Specials Options', 'manage_options', 
//   	'specials-options-submenu-page', 'specials_options_submenu_page_callback' ); 
// }

// function specials_options_submenu_page_callback() {
// 	include 'specials-settings-form.php';
// 	wp_nonce_field( basename( __FILE__ ), 'specials_options_meta_box_nonce' );
// }

// add_action('admin_menu', 'register_specials_options_submenu_page');
?>
