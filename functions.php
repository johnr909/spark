<?php

// namespace sparkt;

/**
 * Spark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spark 
 **/

/**
 * load basic theme setup/options
 */
require_once get_template_directory() . '/inc/theme-setup.php';

/**
 * for simple, theme-level utilitis
 */
require_once get_template_directory() . '/inc/theme-utils.php';

/**
 * for excerpts
 */
require_once get_template_directory() . '/inc/excerpts.php';

/**
 * load the dashboard welcome message
 */
require_once get_template_directory() . '/inc/dashboard-welcome.php';

/**
 * register and load widgets
 */
require_once get_template_directory() . '/inc/widgets.php';

/**
 * enque front-end assets like Bootstrap, jQuery and Font Awesome 
 * via CDN or locally
 */
require_once get_template_directory() . '/inc/load-assets.php';

/**
 * to output a password form if needed
 */
require_once get_template_directory() . '/inc/password-form.php';

/**
 * the highlighted daily deal function 
 */
require_once get_template_directory() . '/inc/daily-deal.php';

/**
 * the highlighted daily deal function 
 */
require_once get_template_directory() . '/inc/daily-deal.php';


require get_template_directory() . '/vendor/autoload.php';
/**
 * Composer loads in a few files with global functions via the autoload/files options
 * to reduce the number of include/require statements so see the compposer.json for details. 
 *  What gets loaded in:
 *  "inc/custom-header.php": Custom Header feature
 *	"inc/template-tags.php" Custom template tags for this theme
 *	"inc/extras.php": Theme-independent utility global functions
 *	"inc/customizer.php", Full-fledged Customizer API implementations
 *	"inc/numeric-slug.php", Adds support for numeric URL slugs like '/420', can be toggled on/off as necessary
 *	"inc/disable-emojis.php", Removes those pesky HTTP emoji calls
 *	"inc/spark-pagination.php" A full-featured paginator
 *
 */

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load a custom WordPress nav walker.
 */
require_once( get_template_directory() . '/inc/src/navwalker.php' );

/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme.
 */
require get_template_directory() . '/inc/src/script_loader.php';
$loader = new \sparkt\Script_Loader();

add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
