<?php
function tw-munga_setup(){
 	add_theme_support('title-tag');

 	add_theme_support('post-thumbnails');

 	register_nav_menus(array(
 		'top' => __('top-menu', 'tw-munga'),
 		'footer-menu' => __('footer-menu', 'tw-munga'),
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
 }

 add_action('after_setup_theme', 'tw-munga_setup');