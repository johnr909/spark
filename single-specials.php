<?php
/**
 * The template for displaying all single specials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header('spark'); ?>

    <div class="container">
        <div class="row">
            <?php
                while ( have_posts() ) : the_post();
                endwhile;   
                $westword_ad_image_path = get_option('westword_ad_image_path');
                $westword_ad_run_dates =  get_option('westword_ad_run_dates');
            ?>     
            <div class="col-lg-12">
                <?php echo "<h1>Today's specials for " . date('m/d/Y') . '</h1>'; ?>
            </div>

            <div class="col-lg-4">
                <?php 
                    the_post_thumbnail( 'medium_large' ); 
                ?>
            </div>

            <div class="col-md-8">
                <?php 
                    $specialsTitle = get_post_meta($post->ID, 'specialsTitle', true);
                    $specialsDescription = get_post_meta($post->ID, 'specialsDescription', true);
                    echo '<h2>' . $specialsTitle . '</h2>';
                    echo  '<p>' . $specialsDescription . '</p>';
                ?>
            </div>


            <div class="col-md-12">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("more-deals") ) : ?>
                <?php endif; ?>
            </div>

            <div class="col-lg-12">
                <h3>Our Westword Ad</h3>
                <p>Run Dates <?php echo $westword_ad_run_dates; ?></p>
                <img 
                    src="<?php echo $westword_ad_image_path; ?>" 
                    alt="Westword Ad for <?php echo $westword_ad_run_dates; ?>" 
                    loading="lazy">
            </div>


        </div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer('spark');
