<?php

// namespace sparkt;

/**
 * Spark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spark 
 **/

require get_template_directory() . '/vendor/autoload.php';
/**
 *  Composer loads in a many files with global functions via the autoload/files options
 *  to reduce the number of include/require statements so see the compposer.json for details. 
 *  
 *  What gets loaded in:
 *  "inc/theme-setup.php": Loads basic theme setup/options
 *  "inc/excerpts.php": For excerpts
 *  "inc/dashboard-welcome.php": Loads the dashboard welcome message
 *  "inc/widgets.php": Registers and loads widgets
 *  "inc/load-assets.php": Enque front-end assets like Bootstrap, jQuery and Font Awesome via CDN or locally
 *  "inc/password-form.php": Output a password form if needed
 *  "inc/deal-of-day.php": The highlighted daily deal function 
 *  "inc/custom-header.php": Custom Header feature
 *	"inc/template-tags.php" Custom template tags for this theme
 *	"inc/extras.php": Theme-independent utility global functions
 *	"inc/customizer.php", Full-fledged Customizer API implementations
 *	"inc/numeric-slug.php", Adds support for numeric URL slugs like '/420', can be toggled on/off as necessary
 *	"inc/disable-emojis.php", Removes those pesky HTTP emoji calls
 *	"inc/spark-pagination.php" A full-featured paginator
 *
 */

// The below are files yet to be successfully autoloaded by Composer.

/**
 * Load plugin compatibility file which itself links to files in /inc/plugin-compatibility/jetpack
 * and /inc/plugin-compatibility/woocommerce
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load a custom WordPress Nav Walker class.
 */
require_once( get_template_directory() . '/inc/src/navwalker.php' );

/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme via a simple 'Script_Loader class.
 */
require get_template_directory() . '/inc/src/script_loader.php';
$loader = new \sparkt\Script_Loader();

add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
