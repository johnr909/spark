<?php
/**
* Template Name: Specials
 */
/**
 * The template for displaying all specials
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

get_header('spark'); 
?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
<h1></h1>

<?php
 /**
 * Setup query to show the ‘specials’ post type with ‘10’ posts.
 */
    $args = array(  
        'post_type' => 'specials',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
    );

    $loop = new WP_Query($args); 
        
    while ($loop->have_posts()) : $loop->the_post(); 
        print the_title(); 
        the_content();
        ?>



<!-- <table> -->
<?php 
	$specialsTitle = get_post_meta($post->ID, 'specialsTitle', true);
	$specialsDescription = get_post_meta($post->ID, 'specialsDescription', true);

	echo '<br>the specials title is: ' . $specialsTitle . '<br><br>';
	echo '<br>the specials description is: ' . $specialsDescription . '<br><br>';



endwhile;
wp_reset_postdata();
?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer('spark');
?>
