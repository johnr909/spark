<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4 blog-sidebar" role="complementary">
	<h3>Spark Sidebar</h3>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-jjr") ) : ?>
  <?php endif;?>
</aside><!-- #secondary -->
