<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . '420-banner1-1920w-350w.jpg'; ?>"
                 class="d-block w-100" alt="our monthly specials">
            <div class="carousel-caption pt-0 pb-0">
                <?php
                    get_template_part( 'template-parts/content', '420-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . '420-banner2-1920w-350w.jpg'; ?>"
                 class="d-block w-100" alt="marijuana leaf close-up">
            <div class="carousel-caption pt-0 pb-0">
                <?php
                    get_template_part( 'template-parts/content', '420-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="3000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . '420-banner3-1920w-350w.jpg'; ?>"
                 class="d-block w-100" alt="marijuana plant close-up">
            <div class="carousel-caption pt-0 pb-0">
                <?php
                    get_template_part( 'template-parts/content', '420-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

    </div><!-- .carousel-inner -->


</div><!-- #carousel -->
