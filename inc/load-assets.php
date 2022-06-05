<?php

namespace sparkt;

/**
 * Enqueue scripts and styles.
 */

function load_assets() {
  // load Bootstrap CSS from a CDN or locally
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'spark-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'spark-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else { 
        wp_enqueue_style( 'spark-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'spark-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
    
    // load the site's main font
    wp_enqueue_style( 'spark-muli', 'https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap' );

    // enque jQuery
    wp_enqueue_script('jquery');

    // load Bootstrap JS from a CDN or locally
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script( 'spark-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
      wp_enqueue_script( 'spark-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script( 'spark-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script( 'spark-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }

    // load the theme's main JS file
    wp_enqueue_script('spark-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );

    // add the async attribute to script tags
    wp_script_add_data( 'spark-themejs', 'async', true );

    // add JS skip links functionality
    wp_enqueue_script( 'spark-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20220515', true );
      
    // add the async attribute
    wp_script_add_data( 'spark-skip-link-focus-fix', 'async', true );

    // conditionally load comment styles
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // conditionally load spark.js 
    if (is_page('deals') ||  is_front_page() ) {
        wp_enqueue_script( 'starter-spark', get_template_directory_uri() . '/inc/assets/js/spark.js', array(), null, true );
        // add the async attribute
        wp_script_add_data( 'starter-spark', 'async', true );
    }

    // the Westword tracking pixel is loaded from footer-spark.php since it's format
    // does not fit well with wp_enque_scripts: JR 12-22-20
}

add_action( 'wp_enqueue_scripts', '\sparkt\load_assets' );

/**
 * Add Preload for CDN scripts and stylesheet
 */
function preload_cdn_assets( $hints, $relation_type ){
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

add_filter( 'wp_resource_hints', '\sparkt\preload_cdn_assets', 10, 2 );

function get_theme_mods() {

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

}

add_action( 'wp_enqueue_scripts', '\sparkt\get_theme_mods' );

// load non-minified CSS for dev and test environments and minified for production
function load_site_styles() {
    $siteURL = get_bloginfo('wpurl');
    $rand = mt_rand( 1, 999999 );

    if($siteURL === 'https://spark.test' ||  $siteURL === 'http://test.sparkdispensary.com' || $siteURL === 'https://sparkdispensary.site') {
      wp_enqueue_style( 'spark-style', get_template_directory_uri() .'/inc/assets/dist/css/allstyles.css', '', $rand );
    }

    else {
      wp_enqueue_style( 'spark-style-min', get_template_directory_uri() .'/inc/assets/dist/css/allstyles.min.css', '', $rand );
    }
}

add_action( 'after_setup_theme', '\sparkt\load_site_styles', 100);
