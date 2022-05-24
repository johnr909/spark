<?php
/**
* Template Name: Featured Posts
 */
/**
 * The template for displaying featured posts
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spark
 */

get_header(); 
?>

<div class="container-fluid-blog blog">
    <div class="row">

        <section class="content-area col-sm-12">
            <header class="entry-header-blog">
            </header><!-- .entry-header -->
        </section>

    </div><!-- .row -->
</div><!-- .container-fluid-blog -->

<div class="container-fluid blog">
	<div class="row">
		<section id="primary" class="content-area col-sm-12 col-lg-8">
			<main id="main" class="site-main" role="main">
	            <h1>
                    <?php _e( 'Featured Posts', 'spark' ); ?>
                </h1>
	            <?php get_template_part(  'template-parts/content', 'featured-posts' ); ?>
			</main><!-- #main -->
		</section><!-- #primary -->

    <?php get_sidebar(); ?>
 </div><!-- .row -->
</div><!-- .container-fluid -->
<?php get_footer(); ?>
