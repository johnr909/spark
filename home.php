<?php
/**
* Template Name: Home
 */

get_header('spark'); ?>

    <div class="container-fluid">
        <div class="row">
			<?php
			    get_template_part( 'template-parts/content', 'home-mobile-banner' );
			?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container-fluid">
        <div class="row">
			<?php
			    get_template_part( 'template-parts/content', 'home-carousel' );
			?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container-fluid">
        <div class="row">
			<?php
				get_template_part( 'template-parts/content', 'page-home' );
			?>
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div id="card-home" class="col-sm col-md-3 card ">

	                <?php
	                    dealoFDay();
	                ?>

            </div><!-- .col -->

					<?php
					    get_template_part( 'template-parts/content', 'rewards-signup' );
					?>

        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container-fluid green-bg">
        <div class="row">
            <div class="col">
                <h3 class="lead"><i class="fa fa-cannabis"></i>&nbsp;&nbsp;Reviews</h3>
            </div>
        </div>
        <div class="row">

                    <?php
                    get_template_part( 'template-parts/content', 'testimonial' );
                    ?>

        </div><!-- .row -->
    </div><!-- .container-fluid -->

<?php
get_footer('spark');
