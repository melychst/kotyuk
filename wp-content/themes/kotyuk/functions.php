<?php
function setup_theme() {
	add_theme_support("menus");
	add_theme_support("html5");
	add_theme_support("post-thumbnails");

	register_nav_menus(array(
		"maim-menu" => "Main Menu",
	));
}


add_action("after_setup_theme", "setup_theme");
require_once get_template_directory().'/inc/scripts.php';


add_filter('excerpt_length', function($length){
	return 28;
});

add_filter('excerpt_more', function($more) {
    return ' ...';
});


add_action('init', 'register_testimonial_post');
function register_testimonial_post() {

	$arg = array(
			'labels'             => array(
			'name'               => __("Testimonials"),
			'singular_name'      => __("Testimonial"),
			'add_new'            => __("Add testimonial"),
			'add_new_item'       => __("Add new testimonial"),
			'edit_item'          => __("Edit testimonial"),
			'new_item'           => __("New testimonial"),
			'view_item'          => __("View testimonial"),
			'search_items'       => __("Find testimonial"),
			'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail')
	);
	register_post_type('testimonial', $arg);
}

add_action('init', 'register_testimonial_tax');

function register_testimonial_tax() {
	
	$labels = array(
		'name' => _x( 'Category testimonials', 'taxonomy general name' ),
		'singular_name' => _x( 'Category testimonial', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Testimonials' ),
		'all_items' => __( 'All Testimonials' ),
		'parent_item' => __( 'Parent Testimonial' ),
		'parent_item_colon' => __( 'Parent Testimonial:' ),
		'edit_item' => __( 'Edit Testimonial' ),
		'update_item' => __( 'Update Testimonial' ),
		'add_new_item' => __( 'Add New Testimonial' ),
		'new_item_name' => __( 'New Testimonial Name' ),
		'menu_name' => __( 'Category testimonials' ),
	);

	register_taxonomy('category_testimonial', array('testimonial'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'category_testimonial' ),
	));	
}

?>