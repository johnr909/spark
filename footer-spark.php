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
</body>
</html>