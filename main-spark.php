<?php
/**
* Template Name: Main Spark Template
 */

get_header('spark'); ?>

    <div class="container-fluid">
        <div class="row">

            <section class="content-area col-sm-12">
                <header class="entry-header">
    	            <?php the_title( '<h1>', '</h1>' ); ?>
                    <?php if( is_page('deals')) : ?>
                        <?php get_template_part( 'template-parts/content', 'deals-subtitles' );?>
                    <?php endif; ?>
                </header><!-- .entry-header -->
            </section>

        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container">
        <div class="row">

            <section id="primary" class="content-area col-sm-12">      
                <main id="main" class="site-main" role="main">

                    <?php
                        while ( have_posts() ) : the_post();
                        endwhile; // End of the loop.
                    ?>
                    <?php  the_content(); ?>

                </main><!-- #main -->
            </section><!-- #primary -->

        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container-fluid">
        <div class="row">
            <?php if( is_page('rec') || is_page('med')) : ?>

                <?php get_template_part( 'template-parts/content', 'order-online-cta' );?>

            <?php endif; ?>
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

    <?php get_template_part( 'template-parts/content', 'coupons' );?>

    <?php get_template_part( 'template-parts/content', 'events' );?>

    <div class="container-fluid very-dark-bg">
        <div class="row deals-rewards">
            <div class="col">
              <?php get_template_part( 'template-parts/content', 'rewards-signup' );?>
            </div><!-- .col -->
       </div><!-- .row -->
    </div><!-- .container -->

    <?php get_template_part( 'template-parts/content', 'westword-ad-modal-r2' );?>


<?php endif; ?>


<?php
get_footer('spark');
