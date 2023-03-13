<?php
/**
* Template Name: App Docs
 */

get_header(); ?>
<style type="text/css">
	
	.entry-content {
		margin: 3rem auto;
		width: 75%;
	}

	.entry-header-blog h1 {
		color: #000;
	}
	
</style>
<div class="container-fluid blog">
    <div class="row">

			<section id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page-app-docs' );
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container-fluid-blog -->
<?php
	get_footer();
?>
