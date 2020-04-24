<?php
/**
* Template Name: Home
 */

get_header('spark'); ?>

    <div class="container">
        <div class="row">
			<?php
			    get_template_part( 'template-parts/content', 'home-mobile-banner' );
			?>

        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row">
			<?php
			    get_template_part( 'template-parts/content', 'home-carousel' );
			?>

        </div><!-- .row -->
    </div><!-- .container -->


    <?php
        get_template_part( 'template-parts/content', 'warnings-notices' );
    ?>

    <div class="container">
        <div class="row">
					<?php
						get_template_part( 'template-parts/content', 'page-home' );
					?>

        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row">
            <div id="card-home" class="col col-md-3 card ">

	                <?php
	                    dealoFDay();
	                ?>

            </div><!-- .col -->

					<?php
					    get_template_part( 'template-parts/content', 'rewards-signup' );
					?>

        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row">

                    <?php
                    get_template_part( 'template-parts/content', 'testimonial' );
                    ?>

        </div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer('spark');
