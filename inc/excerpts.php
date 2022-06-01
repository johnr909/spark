<?php 

namespace sparkt;

// elipsis/read more links for the blog
function excerpt_more( $more ) {
    return ' [.....]';
}

add_filter( 'excerpt_more', '\sparkt\excerpt_more', 21 );

function excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a href="'. get_permalink( $post->ID ) . '" class="btn btn-primary readmore-btn">continue reading</a>';
    return $excerpt;
}

add_filter( 'the_excerpt', '\sparkt\excerpt_more_link', 21 );
