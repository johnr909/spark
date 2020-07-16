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
                <h5 class="rewards-title">&nbsp;&nbsp;Product Spotlight</h5>
                <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/Binske-gummies-r4.jpg'; ?>" class="card-img-top" alt="Binske gummies">
                <p class="mt-3">Binske is an artisanal brand that prides itself on high-quality ingredients, consistency and style. Embracing a hands-on, homegrown culture, Binske sources the best raw ingredients from around the world to flavor their gummies and other edibles. Artists are employed to create unique pieces of art for each product package.</p>
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
                <h5 class="rewards-title">Education Callout</h5>
                <img src="
                <?php echo get_template_directory_uri() . '/inc/assets/images/sativa-indica-r2.jpg'; ?>
                " class="card-img-top" alt="sativa and indica plants">
                <p class="mt-3">Whether you're "Canna-Curious" or a seasoned imbiber, 
                    <a href="/resources#cannabis101">learn about strains, flavors, effects 
                    and more</a>.</p>
            </div><!-- .col -->

            <div class="col-sm-12 col-md-4 pre-order-home card card-home">
                <h5 class="rewards-title">Pre-Order Online</h5>
                <div style="width: 10rem;" class="mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/hand.svg'; ?>" width="40%" height="40%" class="d-block mx-auto" alt="laptop">
                </div>
                <p class="rewards-text green-text mt-2 text-center">It's soooo easy!</p>
                <a href="/rec" class="d-block mx-auto btn-join btn btn-lg btn-primary">     Pre-Order Rec</a>
                <a href="/med" class="d-block mx-auto btn-join btn btn-lg btn-secondary">     Pre-Order Med</a>    
            </div><!-- .col -->
                    
        </div><!-- .row -->      
    </div><!-- .container -->

<?php
get_footer('spark');
