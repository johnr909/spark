<?php
/**
 * The template for displaying the spark footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

	</div><!-- #content -->

	<div class="container-fluid foot-social">
		<div class="row">
			<div class="col"></div>
			<div class="col align-self-end">
				<p class="text-right">
					<a href="https://www.facebook.com/SPARKDispensary"><i class="fab fa-facebook"></i></a>
					<a href="https://www.facebook.com/SPARKDispensary"><i class="fab fa-instagram"></i></a>
			</p>				
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->


<div class="container-fluid foot">
    <div class="row">
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Location") ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Phone") ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Email") ) : ?>
	    <?php endif;?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Store Hours") ) : ?>
	    <?php endif;?>
    </div><!-- .row -->
    <div class="row foot-bottom">
		<div class="col">&copy Copyright <?php echo date('Y') ;?> Spark Dispensary
        </div>
    </div><!-- .row -->
</div><!-- .container-fluid -->


<?php wp_footer(); ?>

<?php //if ( is_front_page() || is_page('deals'))  : ?>
	<!-- <script id="join-script" name="https://enrollnow.vip/login/2429" src="https://cdn.springbig.cloud/production/files/join_modal_button.js?m=2429"></script> -->
<?php // endif;?>
</body>
</html>