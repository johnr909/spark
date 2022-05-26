<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spark */

 get_header(); ?>

<div class="container-fluid blog">
    <div class="row">

        <section class="content-area col-sm-12">
            <header class="entry-header-blog">
            	<?php 
            		global $wp;
					$current_slug = add_query_arg( array(), $wp->request ); 
				?>
            		<h1>
            			<?php
            				if( $current_slug === 'resources' ) {
								_e( 'Resources', 'spark' ); 
							} 
						?>
					</h1>
            </header><!-- .entry-header -->
        </section>

    </div><!-- .row -->
</div><!-- .container-fluid-blog -->

<div class="container-fluid blog">
	<div class="row">

		<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blog-list' );			

					endwhile;

					\sparkt\spark_pagination();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

		<?php	get_sidebar(); ?>
 </div><!-- .row -->
</div><!-- .container-fluid -->

<?php
get_footer();
