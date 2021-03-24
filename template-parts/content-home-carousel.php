<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" data-interval="9000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'westword-bg-vote-1920w-350h.jpg'; ?>"
                 class="ww-vote-banner d-block mx-auto" alt="Westword vote background">
            <div class="carousel-caption ww-vote-caption">
            
                <div class="ww-vote-bestof mx-auto">
                    <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'westword-vote-logo.jpg'; ?>"
                        class="ww-vote-logo d-block mx-auto" alt="Westword vote logo">
                    <a href="https://bestofdenver2021.com/" target="_blank"
                           class="ww-vote-btn text-uppercase font-weight-bold white-text">vote for spark!</a>
                    <p class="best dark-text text-uppercase font-weight-bold white-text">Best Dispensary Bargains</p>                       
                    <p class="ww-vote-text text-uppercase font-weight-bold white-text">the best of denver<span>&reg;</span> 2021 reader's choice award</p>
                </div>
	            
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'valdivia-1920w-350h.jpg'; ?>"
                 class="d-block" alt="marijuana leaf close-up">
            <div class="carousel-caption">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item bud-burst " data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'bud-burst-beauty-1920w-350h.jpg'; ?>"
                 class="d-block" alt="marijuana leaf close-up">
            <div class="carousel-caption">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->
    </div><!-- .carousel-inner -->


</div><!-- #carousel -->
