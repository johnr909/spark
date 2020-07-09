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
        <div class="row home-cards">
            <div id="card-home" class="col-sm-4 col-md card card-home">
                <?php
                    dealoFDay();
                ?>
            </div><!-- .col -->

            <div class="col-sm-4 col-md rewards-signup card card-home">
				<?php
				    get_template_part( 'template-parts/content', 'rewards-signup' );
				?>
            </div><!-- .col -->

            <div class="col-sm-4 col-md online-cta-home card card-home">
                <h2 class="rewards-title mt-4">Pre-Order Online</h2>
                <div style="width: 10rem;" class="mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/hand.svg'; ?>" width="40%" height="40%" class="d-block mx-auto" alt="laptop">
                </div>
                <p class="rewards-text green-text mt-4">It's soooo easy!</p>
                <a href="/rec" class="d-block mx-auto btn-join btn btn-lg btn-primary">     Pre-Order Rec</a>
                <a href="/med" class="d-block mx-auto btn-join btn btn-lg btn-secondary">     Pre-Order Med</a>

            </div><!-- .col -->           
        </div><!-- .row -->
    </div><!-- .container-fluid -->

    <div class="container-fluid green-bg">
        <div class="row">
            <div class="col-sm-4 col-md">
                <?php
                    get_template_part( 'template-parts/content', 'testimonial-carousel' );
                ?>
            </div><!-- .col -->

            <div class="col-sm-4 col-md">
                <h3 class="lead text-center">&nbsp;&nbsp;Product Spotlight</h3>
                <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/spotlight-light-grey.svg'; ?>" width="30%" height="30%" class="d-block mx-auto">
                <p class="mt-3">I'm baby deep v art party activated charcoal, XOXO raw denim poutine direct trade DIY. Freegan knausgaard cred artisan biodiesel next level small batch pour-over fanny pack hammock palo santo swag. Pinterest typewriter tousled, cliche banh mi readymade migas raclette gastropub schlitz. Chillwave microdosing kombucha, post-ironic kinfolk swag gochujang tacos kale chips franzen man bun williamsburg readymade glossier truffaut. </p>
            </div><!-- .col -->

            <div class="col-sm-4 col-md">
                <h3 class="lead text-center">Education Callout</h3>
                <img src="
                <?php echo get_template_directory_uri() . '/inc/assets/images/university-light-grey-leaf.svg'; ?>
                " width="30%" height="30%" class="d-block mx-auto">
                <p class="mt-3">Art party mumblecore ennui selvage chillwave synth palo santo listicle prism pork belly gluten-free single-origin coffee tumblr flexitarian. Schlitz helvetica trust fund bushwick raw denim. Narwhal organic poutine, live-edge schlitz church-key kogi XOXO waistcoat post-ironic. Gluten-free 3 wolf moon la croix asymmetrical, hashtag mumblecore 8-bit intelligentsia tumblr church-key shoreditch lomo vegan gochujang.</p>
            </div><!-- .col -->
                    
        </div><!-- .row -->      
    </div><!-- .container-fluid -->

<?php
get_footer('spark');
