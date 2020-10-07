<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

 get_header('spark'); ?>
<div class="container-fluid blog">
	<div class="row">
			<section id="primary" class="content-area col-sm-12 col-lg-8">
				<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					    the_post_navigation();
							// wp_bootstrap_pagination();			    

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</section><!-- #primary -->

			<?php get_sidebar('spark'); ?>

 </div><!-- .row -->
</div><!-- .container-fluid -->
<?php	get_footer('spark'); ?>
