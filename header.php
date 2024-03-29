<?php
/**
 * The header for the spark theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spark */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script defer src="<?php echo esc_url( 'https://www.googletagmanager.com/gtag/js?id=UA-175453544-1', 'spark' ); ?>"></script>

	<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){ dataLayer.push( arguments );}
      gtag( 'js', new Date() );
      gtag( 'config', 'UA-175453544-1' );
    </script>

    <script>
    (function() {
      var surf = document.createElement( 'script' );
      surf.setAttribute( 'src','//cdn.surfside.io/v1.0.0/wave.min.js' );
      surf.setAttribute( "type","text/javascript" );
      surf.setAttribute( 'id','surfside' );
      surf.setAttribute( 'accountId','9b18f' )
      surf.setAttribute( 'sourceId','598b4' )
      surf.setAttribute( 'platform','dutchie' );
      var sync = document.createElement( 'img' );
      sync.setAttribute( 'src','//edge.surfside.io/id/uid?' );
      sync.setAttribute( 'height','1' );
      sync.setAttribute( 'width','1' );
      sync.setAttribute( 'display','none' );
      document.head.appendChild( surf,sync );
      })();
    </script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="<?php echo esc_url( 'http://gmpg.org/xfn/11', 'spark' ); ?>">
<?php wp_head(); ?>
</head>

<?php 
    // get the slug for CSS styling
    $slug = get_post_field( 'post_name', get_post() ); 

    if( $slug == '' ) {
        global $post;
        $slug = $post->ID;
    }
?> 
<body <?php body_class();?> id="<?php _e( $slug, 'spark' );?>">
   
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'spark' ); ?>
    </a>

    <?php if ( is_front_page() ) : ?>

        <div class="container-fluid container-fluid-info">
            <div class="row">
                <?php
                    get_template_part( 'template-parts/content', 'warnings' );
                ?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->

    <?php endif;?>

    <?php if ( is_front_page() ) : ?>

        <div class="container-fluid container-fluid-info">
            <div class="row">
                <?php
                    get_template_part( 'template-parts/content', 'notices' );
                ?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    <?php endif;?>       

    <header id="masthead" class="site-header navbar-static-top sticky-top <?php echo \sparkt\bg_class(); ?>" 
            role="banner">

        <div class="container-fluid-info">
            <div class="row justify-content-end">
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Header Location Phone' ) ) : ?>
                <?php endif;?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->

     
        <div class="container-fluid jr-nav-container">

            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">

                    <?php if ( get_theme_mod( 'spark_logo' ) ): ?>
                    <a href="<?php echo esc_url(  home_url( '/' ), 'spark' ); ?>">
                        <img src="<?php echo esc_url( get_theme_mod( 'spark_logo' ), 'spark'); ?>"
                             alt="<?php echo esc_attr( get_bloginfo( 'name' ), 'spark'); ?>"
                             width="225" height="59" class="navbar-brand-img">

                    </a>
                    <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' ), 'spark'); ?>">
                        <?php esc_url( bloginfo( 'name' ), 'spark' ); ?></a>
	                <?php endif; ?>

                </div><!-- .navbar-brand -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                        aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'navwalker::fallback',
                    'walker'          => new navwalker()
                    ));
                ?>

            </nav>

        </div><!-- .container-fluid -->
	</header><!-- #masthead -->

<div id="content" class="site-content">
