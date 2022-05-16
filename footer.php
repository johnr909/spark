<?php
/**
 * The template for displaying the spark footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spark
 */
 ?>

	</div><!-- #content -->

	<div class="container-fluid foot-social">
		<div class="row">
			<div class="col"></div>
			<div class="col align-self-end">
				<p class="text-right green-text">
					<?php _e( 'Connect With Us', 'spark' ); ?>
						<a href="<?php echo esc_url( 'https://instagram.com/sparkdispensary?igshid=1ptbuszy3kt61', 'spark' ); ?>" class="d-inline-block mt-3 mr-2 mb-2 ml-3"><i class="fab fa-instagram"></i>
					</a>
			</p>				
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->

<div class="container-fluid foot">
    <div class="row">
	    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Location' ) ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Phone' ) ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Email' ) ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Store Hours' ) ) : ?>
	    <?php endif;?>
    </div><!-- .row -->
    <div class="row foot-bottom">
		<div class="col">
			<?php _e( '&copy Copyright', 'spark' ); _e( date( 'Y'), 'spark' ); _e( 'Spark Dispensary', 'spark' ); ?>
        </div>
    </div><!-- .row -->
</div><!-- .container-fluid -->

<?php wp_footer(); ?>
<script src ="<?php echo esc_url( 'https://up.pixel.ad/assets/up.js?um=1', 'spark' ); ?>"></script>
<script type="text/javascript">
	cntrUpTag.track( 'cntrData', 'a91da65f88ee6470' );
</script>
</body>
</html>
