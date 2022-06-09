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
 *  to reduce the number of include/require statements so see the composer.json for details. 
 *  
 *  What gets loaded in:
 *  "inc/theme-setup.php": Loads basic theme setup/options
 *  "inc/excerpts.php": For excerpts
 *  "inc/dashboard-welcome.php": Loads the dashboard welcome message
 *  "inc/widgets.php": Registers and loads widgets
 *  "inc/load-assets.php": Enques front-end assets like Bootstrap, jQuery and Font Awesome via CDN or locally
 *  "inc/password-form.php": Outputs a password form if needed
 *  "inc/deal-of-day.php": The highlighted daily deal function 
 *  "inc/custom-header.php": The custom header feature
 *	"inc/template-tags.php" Custom template tags for this theme
 *	"inc/extras.php": Theme-independent, global utility functions
 *	"inc/customizer.php", Full-fledged Customizer API implementation
 *	"inc/numeric-slug.php", Adds support for numeric URL slugs like '/420', can be toggled on/off as necessary
 *	"inc/disable-emojis.php", Removes those pesky HTTP emoji calls
 *	"inc/spark-pagination.php" A full-featured paginator
 *
 */

// The below are files *yet to be successfully autoloaded by Composer.

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

/**
 * Enqueue scripts and styles.
 */
function spark_load_assets() {
  // load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'bootstrap-css-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'fontawesome-css-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'bootstrap-css-local', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'fontawesome-css-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
  // load bootstrap css
  // load AItheme styles
  // load WP Bootstrap Starter styles
  
  function spark_load_site_styles() {
    $siteURL = get_bloginfo('wpurl');
    $rand = mt_rand( 1, 999999 );
    if($siteURL === 'https://spark.test' ||  $siteURL === 'http://test.sparkdispensary.com' || $siteURL === 'https://sparkdispensary.site') {
      wp_enqueue_style( 'spark-style', get_template_directory_uri() .'/inc/assets/dist/css/allstyles.css', '', $rand );
    }

    else {
      wp_enqueue_style( 'spark-style-min', get_template_directory_uri() .'/inc/assets/dist/css/allstyles.min.css', '', $rand );
    }
  }

  // this didn't work" add_action('loadload', 'spark_load_site_styles', 1);
  spark_load_site_styles();

    if( get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default' ) {
        wp_enqueue_style( 'spark-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'poppins-lora' ) {
        wp_enqueue_style( 'spark-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather' ) {
        wp_enqueue_style( 'spark-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins' ) {
        wp_enqueue_style( 'spark-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto' ) {
        wp_enqueue_style( 'spark-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans' ) {
        wp_enqueue_style( 'spark-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'oswald-muli' ) {
        wp_enqueue_style( 'spark-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans' ) {
        wp_enqueue_style( 'spark-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if( get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto' ) {
        wp_enqueue_style( 'spark-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if( get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default' ) {
        wp_enqueue_style( 'spark-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }

    wp_enqueue_style( 'spark-muli', 'https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap' );

  wp_enqueue_script('jquery');

    // load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script( 'spark-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
      wp_enqueue_script( 'spark-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script( 'spark-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script( 'spark-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }

  wp_enqueue_script('spark-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
  // add the async attribute
  wp_script_add_data( 'spark-themejs', 'async', true );

  wp_enqueue_script( 'spark-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20220515', true );
  
  // add the async attribute
  wp_script_add_data( 'spark-skip-link-focus-fix', 'async', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  if (is_page('deals') ||  is_front_page() ) {
    wp_enqueue_script( 'starter-spark', get_template_directory_uri() . '/inc/assets/js/spark.js', array(), null, true );
    // add the async attribute
    wp_script_add_data( 'starter-spark', 'async', true );
  }

  // the Westword tracking pixel is loaded from footer-spark.php since it's format
  // does not fit well with wp_enque_scripts JR 12-22-20
}
add_action( 'wp_enqueue_scripts', 'spark_load_assets' );

/**
 * Add Preload for CDN scripts and stylesheet
 */
function spark_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'spark_preload', 10, 2 );
