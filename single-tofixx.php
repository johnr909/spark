<?php
/**
 * The template for displaying all single specials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

 get_header('spark'); ?>

<div class="container-fluid blog">
    <div class="row">

        <section class="content-area col-sm-12">
            <header class="entry-header-blog">
	            <?php the_title( '<h2 class="text-center text-white">', '</h2>' ); ?>
            </header><!-- .entry-header -->
        </section>

    </div><!-- .row -->
</div><!-- .container-fluid-blog -->

<div class="container-fluid blog">
	<div class="row">
			<section id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">
					<?php
						while ( have_posts() ) : the_post();
							
					?>
							<div class="col-lg-6">
								<?php 
									echo "<h1>Today's specials for " . date('m/d/Y') . '</h1>';
									the_title('<h2>','</h2>');
									the_post_thumbnail( 'medium_large' ); 
								?>
							</div>

							<div class="col-md-6">
								<?php	
									$specialsTitle = get_post_meta($post->ID, 'specialsTitle', true);
							    $specialsDescription = get_post_meta($post->ID, 'specialsDescription', true);

							    echo '<br>the specials title is: ' . $specialsTitle . '<br><br>';
							    echo '<br>the specials description is: ' . $specialsDescription . '<br><br>';
								?>
							</div>

							<div class="row">
								<div class="col-md-12">
			    				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("more-deals") ) : ?>
			    				<?php endif; ?>
	              </div>
	            </div>

							<?php // get_template_part( 'template-parts/content', get_post_format() );	

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</section><!-- #primary -->

			<?php // get_sidebar('spark'); ?>

 </div><!-- .row -->
</div><!-- .container-fluid -->
<?php	get_footer('spark'); ?>
