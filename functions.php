<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
    ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
    //     'id'            => 'sidebar-1',
    //     'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
    //     'before_widget' => '<section id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
    //     'id'            => 'footer-1',
    //     'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
    //     'before_widget' => '<section id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
    //     'id'            => 'footer-2',
    //     'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
    //     'before_widget' => '<section id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
    //     'id'            => 'footer-3',
    //     'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
    //     'before_widget' => '<section id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</section>',
    //     'before_title'  => '<h3 class="widget-title">',
    //     'after_title'   => '</h3>',
    // ) );

	/*--------------------------------------------------------------
## Spark  Widgets
--------------------------------------------------------------*/

// Header/Footer blocks
// 
	register_sidebar(array(
		'name' => esc_html__( 'Header Location', 'wp-bootstrap-starter' ),
		'id' => 'header-location',
		'before_widget' => '<div class="col-sm-2 header">',
		'after_widget' => '</div><!-- .col header -->',
	) );

	register_sidebar(array(
		'name' => esc_html__( 'Header Phone', 'wp-bootstrap-starter' ),
		'id' => 'header-phone',
		'before_widget' => '<div class="col-sm-2 header">',
		'after_widget' => '</div><!-- .col header -->',
	) );

	register_sidebar(array(
		'name' => esc_html__( 'Header Footer Location', 'wp-bootstrap-starter' ),
		'id' => 'header-footer-location',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-4 header-footer">',
		'after_widget' => '</div><!-- .col header-footer left-->',
	) );

	register_sidebar(array(
		'name' => esc_html__( 'Header Footer Phone', 'wp-bootstrap-starter' ),
		'id' => 'header-footer-phone',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-2 header-footer">',
		'after_widget' => '</div><!-- .col header-footer right-->',
	) );

	register_sidebar(array(
		'name' => esc_html__( 'Header Footer Email', 'wp-bootstrap-starter' ),
		'id' => 'header-footer-email',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 header-footer">',
		'after_widget' => '</div><!-- .col header-footer left-->',
	) );

	register_sidebar(array(
		'name' => esc_html__( 'Header Footer Store Hours', 'wp-bootstrap-starter' ),
		'id' => 'header-footer-store-hours',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 header-footer">',
		'after_widget' => '</div><!-- .col header-footer right-->',
	) );


//	Warning
	register_sidebar(array(
		'name' => esc_html__( 'Warning', 'wp-bootstrap-starter' ),
		'id' => 'warning',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

//	Notice
	register_sidebar(array(
		'name' => esc_html__( 'Notice', 'wp-bootstrap-starter' ),
		'id' => 'notice',
		'before_widget' => '<div class="notice">',
		'after_widget' => '</div><!-- .notice -->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

//	Rewards Signup
	register_sidebar(array(
		'name' => esc_html__( 'Rewards Signup', 'wp-bootstrap-starter' ),
		'id' => 'rewards',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

//	Testimonials
	register_sidebar(array(
		'name' => 'Testimonial 1',
		'id' => 'testimonial 1',
		'before_widget' => '<div class="col-md testimonial">',
		'after_widget' => '</div><!-- .col-md .testimonial -->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'Testimonial 2',
		'id' => 'testimonial 2',
		'before_widget' => '<div class="col-md testimonial">',
		'after_widget' => '</div><!-- .col-md .testimonial -->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'Testimonial 3',
		'id' => 'testimonial 3',
		'before_widget' => '<div class="col-md testimonial">',
		'after_widget' => '</div><!-- .col-md .testimonial -->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );


//	Daily Deals
	register_sidebar(array(
		'name' => 'deal-sunday',
		'id' => 'sunday',
		'before_widget' => '<div id="Sunday">',
		'after_widget' => '</div><!-- #Sunday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-monday',
		'id' => 'monday',
		'before_widget' => '<div id="Monday">',
		'after_widget' => '</div><!-- #Monday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-tuesday',
		'id' => 'tuesday',
		'before_widget' => '<div id="Tuesday">',
		'after_widget' => '</div><!-- #Tuesday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-wednesday',
		'id' => 'wednesday',
		'before_widget' => '<div id="Wednesday">',
		'after_widget' => '</div><!-- #Wednesday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-thursday',
		'id' => 'thursday',
		'before_widget' => '<div id="Thursday">',
		'after_widget' => '</div><!-- #Thursday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-friday',
		'id' => 'friday',
		'before_widget' => '<div id="Friday">',
		'after_widget' => '</div><!-- #Friday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'deal-saturday',
		'id' => 'saturday',
		'before_widget' => '<div id="Saturday">',
		'after_widget' => '</div><!-- #Saturday-->',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

// Coupons
	register_sidebar(array(
		'name' => 'Coupon 1',
		'id' => 'coupon-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'Coupon 2',
		'id' => 'coupon-2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'Coupon 3',
		'id' => 'coupon-3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar(array(
		'name' => 'Coupon 4',
		'id' => 'coupon-4',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

//	Events
	register_sidebar(array(
		'name' => 'Events',
		'id' => 'events',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }

    wp_enqueue_style( 'wp-bootstrap-starter-karma-overpass', 'https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&family=Overpass:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,800&display=swap' );

	//Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (is_page('deals') ||  is_front_page() ) {
		wp_enqueue_script( 'wp-bootstrap-starter-spark', get_template_directory_uri() . '/inc/assets/js/spark.js', array(), '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
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

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

function dealoFDay() {
	date_default_timezone_set( 'America/Denver' );

	$dayofweek = date( 'l' );
//                 echo $dayofweek . '<br>';
//                echo date("l jS \of F Y h:i:s A") . "<br>";

	switch ( $dayofweek ) {
		case "Sunday":
			dynamic_sidebar( 'deal-sunday' );
			break;
		case "Monday":
			dynamic_sidebar( 'deal-monday' );
			break;
		case "Tuesday":
			dynamic_sidebar( 'deal-tuesday' );
			break;
		case "Wednesday":
			dynamic_sidebar( 'deal-wednesday' );
			break;
		case "Thursday":
			dynamic_sidebar( 'deal-thursday' );
			break;
		case "Friday":
			dynamic_sidebar( 'deal-friday' );
			break;
		case "Saturday":
			dynamic_sidebar( 'deal-saturday' );
			break;
		default:
			echo "<a href='/deals/'>Deals</a>";
	}
}