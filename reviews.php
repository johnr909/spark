<?php
/**
* Template Name: Reviews
 */
/**
 * The template for displaying feautered posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); 
?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
<h1></h1>

<?php
 /**
 * Setup query to show the ‘reviews’ post type with ‘10’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
        'post_type' => 'reviews',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'meta_key' => 'spark_review_status', // Filter to display only active reviews
        'meta_value' => 'yes',
    );

    $loop = new WP_Query($args); 
        
    while ($loop->have_posts()) : $loop->the_post(); 
        print the_title(); 
        the_content();
        ?>



<!-- <table> -->
<?php 
	$reviewer = get_post_meta($post->ID, 'jr_reviewer', true);
	$review_status = get_post_meta($post->ID, 'spark_review_status', true);

	echo '<br>the reviewer is: ' . $reviewer . '<br><br>';
	echo '<br>the review status is: ' . $review_status . '<br><br>';



endwhile;
wp_reset_postdata();
?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer('spark');
?>
