<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 
'black-friday-bg-banner-1920w-350h.webp'; ?>"
                 class="d-block w-100" alt="our monthly specials">
            <div class="carousel-caption rooster-caption d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-black-friday-cta' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 
'hiker-mtns-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="our monthly specials">
            <div class="carousel-caption rooster-caption d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-rooster-ad' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item"data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'taylor-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="marijuana plant close-up">
            <div class="carousel-caption d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'valdivia-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="marijuana leaf close-up">
            <div class="carousel-caption d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item bud-burst" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'bud-burst-beauty-1920w-350h.jpg'; ?>"
                 class="d-block w-100" alt="marijuana leaf close-up">
            <div class="carousel-caption d-md-block">
                <?php
                    get_template_part( 'template-parts/content', 'home-carousel-buttons' );
                ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->
    </div><!-- .carousel-inner -->


</div><!-- #carousel -->
