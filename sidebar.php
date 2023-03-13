<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spark */
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4 blog-sidebar" role="complementary">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-spark") ) : ?>
  <?php endif;?>
</aside><!-- #secondary -->
