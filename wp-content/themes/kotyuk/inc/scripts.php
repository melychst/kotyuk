<?php

function register_scripts() {
	wp_enqueue_script("jquery");
	wp_enqueue_script('scripts', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), '1');
}

function register_styles() {
	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts.css' );
 	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' ); 	
  	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize_.css' );
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/css/styles.css' );  	
}

add_action("wp_enqueue_scripts", "register_scripts");
add_action("wp_enqueue_scripts", "register_styles");

?>