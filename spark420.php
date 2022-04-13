<?php
/**
* Template Name: Spark 420
*/

get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <?php
                get_template_part( 'template-parts/content', '420-carousel' );
            ?>
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

        <?php get_template_part('template-parts/content', 'vendorcards420'); ?>

        <div class="row">

            <div class="col-lg-6">
                <div class="vendor-card-420 text-center">vendor cards go here...</div>
            </div>

            <div class="col-lg-6">
                <div class="vendor-card-420 text-center">vendor cards go here...</div>
            </div>

            <div class="col-lg-6">
                <div class="vendor-card-420 text-center">vendor cards go here...</div>
            </div>

            <div class="col-lg-6">
                <div class="vendor-card-420 text-center">vendor cards go here...</div>
            </div>

        </div><!-- .row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="deal-card-420">deal cards go here...</div>
            </div>

            <div class="col-lg-12">
                <div class="deal-card-420">deal cards go here...</div>
            </div>

            <div class="col-lg-12">
                <div class="deal-card-420">deal cards go here...</div>
            </div>

            <div class="col-lg-12">
                <div class="deal-card-420">deal cards go here...</div>
            </div>


            

        </div><!-- .row -->

    </div><!-- .container -->
    
<?php get_footer();
