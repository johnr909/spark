<?php
/**
 * Spark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package spark 
 **/

if ( ! function_exists( 'spark_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function spark_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'spark', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'spark' ),
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
	add_theme_support( 'custom-background', apply_filters( 'spark_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'spark_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spark_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spark_content_width', 1170 );
}
add_action( 'after_setup_theme', 'spark_content_width', 0 );


/**
 * Add Welcome message to dashboard
 */
function dashboard_welcome() {
 
    if( !get_option( 'triggered_welcome' ) ) {
        $message = sprintf( __( 'Welcome to the Spark WP Bootstrap Starter Theme', 'spark' ) );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                <p>%1$s</p>
            </div>',
            $message
        );
        add_option( 'triggered_welcome', '1', '', 'yes' );
    }

}

add_action( 'admin_notices', '\sparkt\dashboard_welcome' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spark_widgets_init() {
   
/*--------------------------------------------------------------
## Spark  Widgets
--------------------------------------------------------------*/
// blog sidebar
	register_sidebar( array(
		'name' => esc_html__( 'basic sidebar jjr', 'spark' ),
		'id' => 'sidebar-jjr',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

//	Westword Weekly Ad Image
	register_sidebar( array(
		'name' => esc_html__( 'Westword Weekly Ad Image', 'spark' ),
		'id' => 'wwwadi',
		'before_widget' => '<div class="wwwadi">',
		'after_widget' => '</div><!-- .wwwadi -->',
	) );

// Header/Footer blocks
	register_sidebar( array(
		'name' => esc_html__( 'Header Location Phone', 'spark' ),
		'id' => 'header-location',
		'before_widget' => '<div class="col col-md-5 col-lg-4 text-right header">',
		'after_widget' => '</div><!-- .col header -->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Location', 'spark' ),
		'id' => 'header-footer-location',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-4 footer">',
		'after_widget' => '</div><!-- .col footer left-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Phone', 'spark' ),
		'id' => 'header-footer-phone',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-2 footer">',
		'after_widget' => '</div><!-- .col footer right-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Email', 'spark' ),
		'id' => 'header-footer-email',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 footer">',
		'after_widget' => '</div><!-- .col footer left-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Store Hours', 'spark' ),
		'id' => 'header-footer-store-hours',
		'before_widget' => '<div class="col-xs-12 col-sm-6 col-lg-3 footer">',
		'after_widget' => '</div><!-- .col footer right-->',
	) );

//	Warning
	register_sidebar( array(
		'name' => esc_html__( 'Warning', 'spark' ),
		'id' => 'warning',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

//	Notice
	register_sidebar( array(
		'name' => esc_html__( 'Notice', 'spark' ),
		'id' => 'notice',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

//	Rewards Signup
	register_sidebar( array(
		'name' => esc_html__( 'Rewards Signup', 'spark' ),
		'id' => 'rewards',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

	//	Product Spotlight
	register_sidebar( array(
		'name' => esc_html__( 'Product Spotlight', 'spark' ),
		'id' => 'products',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );


	//	Education Callout
	register_sidebar( array(
		'name' => esc_html__( 'Education Callout', 'spark' ),
		'id' => 'edu',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

//	Daily Deals
	register_sidebar( array(
		'name' => esc_html__( 'deal-sunday', 'spark' ),
		'id' => 'sunday',
		'before_widget' => '<div id="Sunday">',
		'after_widget' => '</div><!-- #Sunday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'deal-monday', 'spark' ),
		'id' => 'monday',
		'before_widget' => '<div id="Monday">',
		'after_widget' => '</div><!-- #Monday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'deal-tuesday', 'spark' ),
		'id' => 'tuesday',
		'before_widget' => '<div id="Tuesday">',
		'after_widget' => '</div><!-- #Tuesday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'deal-wednesday', 'spark' ),
		'id' => 'wednesday',
		'before_widget' => '<div id="Wednesday">',
		'after_widget' => '</div><!-- #Wednesday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__('deal-thursday', 'spark'),
		'id' => 'thursday',
		'before_widget' => '<div id="Thursday">',
		'after_widget' => '</div><!-- #Thursday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__('deal-friday', 'spark'),
		'id' => 'friday',
		'before_widget' => '<div id="Friday">',
		'after_widget' => '</div><!-- #Friday-->',
	) );

	register_sidebar( array(
		'name' => esc_html__('deal-saturday', 'spark'),
		'id' => 'saturday',
		'before_widget' => '<div id="Saturday">',
		'after_widget' => '</div><!-- #Saturday-->',
	) );

// Coupons
	register_sidebar( array(
		'name' => esc_html__( 'Coupon 1', 'spark' ),
		'id' => 'coupon-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		) );

	register_sidebar( array(
		'name' => esc_html__( 'Coupon 2', 'spark' ),
		'id' => 'coupon-2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		) );

	register_sidebar( array(
		'name' => esc_html__( 'Coupon 3',  'spark' ),
		'id' => 'coupon-3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		) );

	register_sidebar( array(
		'name' => esc_html__( 'Coupon 4', 'spark' ),
		'id' => 'coupon-4',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );

//	Events
	register_sidebar(array(
		'name' => esc_html__( 'Events', 'spark' ),
		'id' => 'events',
	) );

//	More Deals
	register_sidebar(array(
		'name' => esc_html__( 'More Deals', 'spark' ),
		'id' => 'more-deals',
		'before_widget' => '<div id="more-deals">',
		'after_widget' => '</div>',
	) );

//	Westword vote for us CTA
	register_sidebar( array(
		'name' => esc_html__( 'Westword Vote CTA', 'spark' ),
		'id' => 'vote4us',
		'before_widget' => '<div id="vote4us">',
		'after_widget' => '</div>',
	) );

	//	June Flash sale CTA
	register_sidebar( array(
		'name' => esc_html__( 'Flash Sale CTA', 'spark' ),
		'id' => 'flash-sale',
		'before_widget' => '<div id="flash-sale">',
		'after_widget' => '</div>',
	) );


}

add_action( 'widgets_init', 'spark_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spark_load_assets() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'spark-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'spark-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'spark-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'spark-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	$rand = mt_rand( 1, 999999 );

	function spark_load_site_styles() {
		$siteURL = get_bloginfo('wpurl');
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

function password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "spark" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "spark" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "spark" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'spark_password_form' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

add_filter( 'the_password_form', '\sparkt\password_form' );

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
 * Load `async` and `defer` support for scripts registered or enqueued file
 */
require_once( get_template_directory() . '/inc/src/navwalker.php' );

require get_template_directory() . '/inc/class-script-loader.php';
/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme.
 */

require get_template_directory() . '/inc/src/script_loader.php';
$loader = new \sparkt\Script_Loader();

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'Spark_Navwalker' )) {
    require_once( get_template_directory() . '/inc/spark-navwalker.php' );
}

/**
 * Disable WordPress emojis.
 */
require_once( get_template_directory() . '/inc/disable-emojis.php' );

/**
 * Load pagination.
 */
require get_template_directory() . '/inc/spark-pagination.php';


function dealoFDay() {
	date_default_timezone_set( 'America/Denver' );

	$dayofweek = date( 'l' );

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

// elipsis/read more links for the blog
function excerpt_more( $more ) {
    return ' [.....]';
}

add_filter( 'excerpt_more', '\sparkt\excerpt_more', 21 );

function excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a href="'. get_permalink( $post->ID ) . '" class="btn btn-primary readmore-btn">continue reading</a>';
    return $excerpt;
}

add_filter( 'the_excerpt', '\sparkt\excerpt_more_link', 21 );

// hide the WordPress version in browser source 
function wp_version_remove_version() {
	return '';
}

add_filter('the_generator', 'wp_version_remove_version');

/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme.
 */
$loader = new Spark_Script_Loader();
add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
