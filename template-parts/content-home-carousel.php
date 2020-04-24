<div id="carousel" class="carousel slide carousel-fade"" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'sun-over-cannabis-1200w-500h.jpg'; ?>"
                 class="d-block w-100" alt="..."
                 width="1200" height="500">
            <div class="carousel-caption d-none d-md-block">
	            <?php
	                get_template_part( 'template-parts/content', 'home-carousel-buttons' );
	            ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item"data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'trikes-1200w-500h.jpg'; ?>"
                 class="d-block w-100" alt="..."
                 width="1200" height="500">
            <div class="carousel-caption d-none d-md-block">
	            <?php
	                get_template_part( 'template-parts/content', 'home-carousel-buttons' );
	            ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

        <div class="carousel-item" data-interval="5000">
            <img src="<?php echo get_template_directory_uri() . '/inc/assets/images/' . 'glass-leaf-1200w-500h.jpg'; ?>"
                 class="d-block w-100" alt="..."
                 width="1200" height="500">
            <div class="carousel-caption d-none d-md-block">
	            <?php
	                get_template_part( 'template-parts/content', 'home-carousel-buttons' );
	            ?>
            </div><!-- .carousel-caption -->
        </div><!-- .carousel-item -->

    </div><!-- .carousel-inner -->


</div><!-- #carousel -->