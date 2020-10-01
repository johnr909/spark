<?php

$args = array(  
        'post_type' => 'reviews',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        'orderby' => 'title', 
        'order' => 'ASC',
        // 'taxonomy' => 'category',
        // 'category_name' => 'featured',
    );

$jjr_featured_posts = new WP_Query( $args );
while ($jjr_featured_posts->have_posts()) : $jjr_featured_posts->the_post(); 
endwhile;
?>
