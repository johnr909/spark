<?php
/**
 * The header for the spark theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	  <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="<?php echo esc_url('https://www.googletagmanager.com/gtag/js?id=UA-175453544-1', 'wp-bootstrap-starter'); ?>"></script>
		<script><?php esc_js("window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-175453544-1');", 'wp-bootstrap-starter'); ?>
		</script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11', 'wp-bootstrap-starter'); ?>">
<?php wp_head(); ?>
</head>

<?php 
    // get the slug for CSS styling

        $slug = get_post_field('post_name', get_post()); 

        if($slug == '') {
            global $post;
            $slug = $post->ID;
        }
?> 
<body <?php body_class();?> id="<?php echo $slug;?>">
   
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e('Skip to content', 'wp-bootstrap-starter'); ?>
    </a>

    <?php if (is_front_page()) : ?>

        <div class="container-fluid container-fluid-info">
            <div class="row">
                <?php
                    get_template_part('template-parts/content', 'warnings');
                ?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->

    <?php endif;?>

    <?php if ( is_front_page()) : ?>

        <div class="container-fluid container-fluid-info">
            <div class="row">
                <?php
                    get_template_part('template-parts/content', 'notices');
                ?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    <?php endif;?>       

    <header id="masthead" class="site-header navbar-static-top sticky-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container-fluid-info">
            <div class="row justify-content-end">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Location Phone") ) : ?>
                <?php endif;?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->

     
        <div class="container-fluid jr-nav-container">

            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">

                    <?php if (get_theme_mod( 'wp_bootstrap_starter_logo')): ?>
                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                             alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                             class="navbar-brand-img">

                    </a>
                    <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
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
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                ?>

            </nav>

        </div><!-- .container-fluid -->
	</header><!-- #masthead -->

<div id="content" class="site-content">
