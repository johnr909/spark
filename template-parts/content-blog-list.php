<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<section>
	<div class="page-content">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	    <div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
	    </div><!-- .post-thumbnail -->

	    <div class="entry-content">

				<?php	the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p><?php wp_bootstrap_starter_posted_on(); ?></p>
				<?php the_excerpt(); ?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php wp_bootstrap_starter_entry_footer(); ?>
	    </footer><!-- .entry-footer -->

	  </article>

	</div><!-- .page-content -->
</section>
