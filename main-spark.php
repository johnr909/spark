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

<?php if( is_page('12days')) : ?>
    <div class="container-fluid">
        <div class="row">
    
            <?php get_template_part( 'template-parts/content', 'advent-cal' );?>

        </div><!-- .row -->
    </div><!-- .container-fluid -->
<?php endif; ?>

<?php if( is_page('monthly-specials')) : ?>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4 mx-auto">
                <?php get_template_part( 'template-parts/content', 'order-online-cta-home' );?>
            </div>
            <div class="col-sm-12 col-md-5 mx-auto">
                <?php get_template_part( 'template-parts/content', 'rewards-signup' );?>
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
<?php endif; ?>

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

<?php if( is_page('rec') || is_page('med')) : ?>
    <div class="container-fluid">
        <div class="row">     

            <?php get_template_part( 'template-parts/content', 'order-online-cta' );?>
            
        </div><!-- .row -->
    </div><!-- .container-fluid -->
<?php endif; ?>

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
