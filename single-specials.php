<?php
/**
 * The template for displaying all single specials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header('spark'); ?>
    <div class="container-fluid">
        <div class="row">

            <section class="content-area col-sm-12">
                <header class="entry-header">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header><!-- .entry-header -->
            </section>

        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container">
        <div class="row">
            <?php
                while ( have_posts() ) : the_post();
                endwhile;   
                $westword_ad_image_path = get_option('westword_ad_image_path');
                $westword_ad_run_dates =  get_option('westword_ad_run_dates');
            ?>     
            <div class="col-lg-12">
                <?php echo "<h2 class='h1'>Today's specials for " . date('m/d') . '</h2>'; ?>
            </div>

            <div class="col-lg-6">
                <?php 
                    $specialsTitle = get_post_meta($post->ID, 'specialsTitle', true);
                    $specialsDescription = get_post_meta($post->ID, 'specialsDescription', true);
                    echo '<h3>' . $specialsTitle . '</h3>';
                    echo  '<p class="mb-0">' . $specialsDescription . '</p>';
                    the_post_thumbnail( 'medium_large' ); 
                ?>
            </div>

            <div class="col-md-6">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("more-deals") ) : ?>
                <?php endif; ?>
            </div>

            <div class="col-md-12">
                <a class="d-block mx-auto specials-btn btn btn-primary btn-lg rec-button" 
                   href="<?php echo get_site_url() . '/rec'; ?>" role="button">Pre-Order Now</a>
            </div>

            <div class="col-lg-12">
                <h3>Our Westword Ad</h3>
                <p class="mb-0">Run Dates: <?php echo $westword_ad_run_dates; ?></p>
                <img 
                    class="d-block mx-auto"
                    src="<?php echo $westword_ad_image_path; ?>" 
                    alt="Westword Ad for <?php echo $westword_ad_run_dates; ?>" 
                    loading="lazy">
            </div>

            <div class="col-md-12">
                <a class="d-block mx-auto specials-btn btn btn-primary btn-lg rec-button" 
                   href="<?php echo get_site_url() . '/rec'; ?>" role="button">Pre-Order Now</a>
            </div>

        </div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer('spark');
