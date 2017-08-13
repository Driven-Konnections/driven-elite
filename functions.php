<?php
	
function driv_elite_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/driven-elite.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/driven-elite.js', array(), '1.0.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'driv_elite_script_enqueue');
function driv_elite_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'driv_elite_theme_setup');

add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'video'));