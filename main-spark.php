<?php
/**
* Template Name: Main Spark Template
 */

get_header('spark'); ?>

    <div class="container-fluid">
        <div class="row">

        <section id="primary" class="content-area col-sm-12">
            <main id="main" class="site-main" role="main">
                <header class="entry-header">
		            <?php the_title( '<h1>', '</h1>' ); ?>
                    <?php if( is_page('deals')) : ?>
                        <?php get_template_part( 'template-parts/content', 'deals-subtitles' );?>
                    <?php endif; ?>
                </header><!-- .entry-header -->


                    <?php
                        while ( have_posts() ) : the_post();
                        endwhile; // End of the loop.
                    ?>
                    <?php  the_content(); ?>

            </main><!-- #main -->
        </section><!-- #primary -->

        </div><!-- .row -->
    </div><!-- .container-fluid -->

<?php if( is_page('rec')) : ?>

    <?php get_template_part( 'template-parts/content', 'rec-page' );?>

<?php endif; ?>


<?php if( is_page('med')) : ?>

    <?php get_template_part( 'template-parts/content', 'med-page' );?>

<?php endif; ?>


<?php if( is_page('deals')) : ?>

	<?php get_template_part( 'template-parts/content', 'daily-deals' );?>

    <div class="container-fluid">
        <div class="row">
			<?php get_template_part( 'template-parts/content', 'rewards-signup' );?>
        </div><!-- .row -->
    </div><!-- .container -->

    <?php get_template_part( 'template-parts/content', 'coupons' );?>

    <?php get_template_part( 'template-parts/content', 'events' );?>

<?php endif; ?>


<?php
get_footer('spark');
