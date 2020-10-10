<?php

$args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'taxonomy' => 'category',
        'category_name' => 'featured',
    );

    $loop = new WP_Query($args); 
        
    while ($loop->have_posts()) : $loop->the_post(); 
        print the_title(); 
        the_content();
    endwhile;
?>
