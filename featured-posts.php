<?php
/**
* Template Name: Featured Posts
 */
/**
 * The template for displaying feautered posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header('spark'); 
?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
            <h1>Featured Posts?</h1>
            <?php get_template_part('template-parts/content', 'featured-posts'); ?>
		</main><!-- #main -->
	</section><!-- #primary -->

    <?php get_sidebar('spark'); ?>
 </div><!-- .row -->
</div><!-- .container-fluid -->
<?php get_footer('spark'); ?>
