<?php 
add_filter( 'wp_unique_post_slug', 'spark_unique_post_slug', 10, 6 ); 

function unique_post_slug( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) { 
	global $wpdb; 
	
	// Don't change non-numeric values
	if ( ! is_numeric( $original_slug ) || $slug === $original_slug ) { 
		return $slug; 
	}

  // Was there any conflict or was a suffix added due to the preg_match() call in wp_unique_post_slug()?
 	$post_name_check = $wpdb->get_var( $wpdb->prepare( "SELECT post_name FROM $wpdb->posts WHERE post_name = %s AND post_type IN ( %s, 'attachment' ) AND ID != %d AND post_parent = %d LIMIT 1", $original_slug, $post_type, $post_ID, $post_parent ) ); 

	 // There really is a conflict due to an existing page so keep the modified slug 
	 if ( $post_name_check ) { 
	 	return $slug; 
	 }

 	// Return our numeric slug 
	return $original_slug;
}

add_filter( 'wp_unique_post_slug', '\sparkt\unique_post_slug', 10, 6 );

// read more at: Enabling Numeric Slug on WordPress: https://russelljohn.net/?p=2042
