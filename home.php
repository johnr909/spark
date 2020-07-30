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

    <div class="container">
        <div class="row home-cards">
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

            <div class="col-sm-12 col-md-4 online-cta-home card card-home">
                <?php
                    get_template_part( 'template-parts/content', 'product-spotlight' );
                ?>
            </div><!-- .col -->           
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row home-cards">
            <div class="col-sm-12 col-md-4 card card-home">
                <?php
                    get_template_part( 'template-parts/content', 'testimonial-carousel' );
                ?>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 card card-home">
               <?php
                    get_template_part( 'template-parts/content', 'education-callout' );
                ?>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 pre-order-home card card-home">
                <h5 class="rewards-title text-center">Pre-Order Online</h5>
                <div style="width: 10rem;" class="mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/hand.svg'; ?>" width="40%" height="40%" class="d-block mx-auto" alt="laptop">
                </div>
                <p class="rewards-text green-text mt-2 text-center">It's soooo easy!</p>
                <a href="/rec" class="d-block mx-auto mt-3 mb-3 btn-join btn btn-lg btn-primary">Pre-Order Rec</a>
                <a href="/med" class="d-block mx-auto mb-3 btn-join btn btn-lg btn-secondary">Pre-Order Med</a>    
            </div><!-- .col -->
                    
        </div><!-- .row -->      
    </div><!-- .container -->

<?php
get_footer('spark');
