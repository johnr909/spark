<?php
/*Custom Post type start*/

function post_type_reviews() {

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
	'name' => _x('reviews', 'plural'),
	'singular_name' => _x('review', 'singular'),
	'menu_name' => _x('reviews', 'admin menu'),
	'name_admin_bar' => _x('reviews', 'admin bar'),
	'add_new' => _x('Add New', 'add new'),
	'add_new_item' => __('Add New reviews'),
	'new_item' => __('New reviews'),
	'edit_item' => __('Edit reviews'),
	'view_item' => __('View reviews'),
	'all_items' => __('All reviews'),
	'search_items' => __('Search reviews'),
	'not_found' => __('No reviews found.'),	
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'reviews'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	
register_post_type('reviews', $args);
}
/*Custom Post type end*/

add_action('init', 'post_type_reviews');
