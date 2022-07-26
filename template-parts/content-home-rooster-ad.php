<div id="carousel-text" class="carousel-text">
    <h1><?php _e( 'Spark Dispensary', 'spark'); ?></h1>
    <p class="lead text-center white-text rooster-text">
            <?php _e('Spark up your world!', 'spark'); ?>
    </p>
    <p class="cta text-center dark-text">
        <a class="rooster-link white-text" 
            href="<?php echo esc_url('/monthly-specials', 'spark'); ?>">
            <?php 
                _e('Check out our ', 'spark'); echo date('F'); _e(' deals!' ,'spark'); 
            ?>
      </a>
    </p>
    <p class="cta text-center green-text">
        <?php _e( 'Save time, pre-order online!', 'spark' ); ?></p>
    <a class="btn btn-primary btn-lg rec-button" 
       href="<?php echo esc_url( '/rec', 'spark' ); ?>" role="button">
       <?php _e( 'Rec Menu', 'spark' ); ?></a>
    <a class="btn btn-secondary btn-lg med-button" 
       href="<?php echo esc_url( '/med', 'spark' ); ?>" role="button">
       <?php _e( 'Med Menu', 'spark' ); ?></a>
</div><!-- #carousel-text -->
