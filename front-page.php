<?php 
/**
* Template Name: Home
 */

get_header(); ?>

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

    <div class="container">
        <div class="row home-cards">

            <div class="col-sm-12 col-md-4 online-cta-home card card-home">
                <?php
                    get_template_part( 'template-parts/content', 'flash-sale' );
                ?>
            </div><!-- .col -->

            <div id="card-home" class="col-sm-12 col-md-4 card card-home">
                <?php
                    dealoFDay();
                ?>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 rewards-signup card card-home">
				<?php
				    get_template_part( 'template-parts/content', 'rewards-signup' );
				?>
            </div><!-- .col -->
           
        </div><!-- .row -->

    </div><!-- .container -->

    <div class="container">
        <div class="row home-cards">
            <div class="col-sm-12 col-md-4 card card-home">
                <?php
                    get_template_part( 'template-parts/content', 'review-carousel' );
                ?>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 card card-home">
               <?php
                    get_template_part( 'template-parts/content', 'product-spotlight' );
                ?>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 pre-order-home card card-home">
                <?php
                    get_template_part( 'template-parts/content', 'order-online-cta-home' );
                ?>   
            </div><!-- .col -->
                    
        </div><!-- .row -->      
    </div><!-- .container -->

<?php
get_footer();
