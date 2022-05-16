<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Spark
 */

get_header(); ?>

<div class="container-fluid">
    <div class="row">

        <section class="content-area col-sm-12">
            <header class="entry-header">
            </header><!-- .entry-header -->
        </section>

    </div><!-- .row -->
</div><!-- .container-fluid -->

<div class="container">
    <div class="row">

    	<section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

    			<section class="error-404 not-found">
    				<header class="page-header">
    					<h1 class="page-title">
                            <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'spark' ); ?>
                        </h1>
    				</header><!-- .page-header -->

    				<div class="page-content">
    					<p>
                            <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the menu links or a search?', 'spark' ); ?>
                        </p>

    					<?php get_search_form(); ?>

    				</div><!-- .page-content -->
    			</section><!-- .error-404 -->

    		</main><!-- #main -->
    	</section><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer();
