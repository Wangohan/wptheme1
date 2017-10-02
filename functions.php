<?php

function wptheme_scripts() {
	
	wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'wptheme_scripts' );
