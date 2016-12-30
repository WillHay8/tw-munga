<?php
@ini_set( 'upload_max_size' , '5M' );
@ini_set( 'post_max_size', '5M');
@ini_set( 'max_execution_time', '120' );

function twmunga_setup(){
 	add_theme_support('title-tag');

 	add_theme_support('post-thumbnails');

 	register_nav_menus(array(
 		'top' => __('Top Navigation Menu'),
 		'footer-left' => __('Footer Menu - Left Column'),
 		'footer-right' => __('Footer Menu - Right Column')
 		));

 	add_theme_support('html5');

 	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'custom-header' );

	register_sidebar(array('name' => 'main-sidebar'));
	register_sidebar(array('name' => 'footer-contact'));

 }

 add_action('after_setup_theme', 'twmunga_setup');

 function twmunga_scripts(){
 	wp_enqueue_style('twmunga-style', get_stylesheet_uri());
 	wp_enqueue_script('jquery', 'jquery');
 	wp_enqueue_script( 'twmunga-script', get_template_directory_uri() . '/js/functions.js', array('jquery'));
 }



 add_action( 'wp_enqueue_scripts', 'twmunga_scripts' );

 function twmunga_the_custom_logo(){
 	if(function_exists('the_custom_logo')){
 		the_custom_logo();
 	}
 }

 add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}