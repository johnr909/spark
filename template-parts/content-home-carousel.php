<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item carousel-item1 active" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'westword-bg-vote-1920w-350h.jpg'; ?>"
                 class="d-block mx-auto" alt="Westword vote background">
            <div class="carousel-caption ww-vote-caption d-none d-md-block">
            
                <div class="ww-vote-bestof mx-auto white-bg">
                    <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'westword-vote-logo.jpg'; ?>"
                         width="50%" height="50%" class="d-block mx-auto" alt="Westword vote logo">
                    <p class="best dark-text mt-0 mb-0 text-center text-uppercase font-weight-bold">Best Dispensary Bargains</p>
                    <a href="https://bestofdenver2021.com/" target="_blank"
                       class="ww-vote-btn mt-1 mb-1 text-center text-uppercase font-weight-bold white-text">vote for us</a>  
                    <p class="ww-vote-text mt-0 mb-1 text-center text-uppercase font-weight-bold">the best of denver&reg; 2021 reader's choice award</p>
                </div>
	            
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item carousel-item2" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'rebel-blasts-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="Rebel Blast edibles">
            <div class="carousel-caption d-none d-md-block carousel-text">
	            <p class="lead lead-dark">Rebel edibles BOGO 50% off all month</p>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item carousel-item3" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'valdivia-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="marijuana leaf close-up">
            <div class="carousel-caption d-none d-md-block">
	            <?php
	                get_template_part( 'template-parts/content', 'home-carousel-buttons' );
	            ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item carousel-item4 bud-burst " data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'bud-burst-beauty-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="marijuana leaf close-up">
            <div class="carousel-caption d-none d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->
    </div><!-- .carousel-inner -->


</div><!-- #carousel -->
