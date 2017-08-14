<?php

/*
	==================
	Include Scripts
	==================
*/
	
function driv_elite_script_enqueue() {
	//css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/driven-elite.css', array(), '1.0.0', 'all');
	
	//js
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/driven-elite.js', array(), '1.0.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'driv_elite_script_enqueue');


/*
	==================
	Active Menus
	==================
*/

function driv_elite_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'driv_elite_theme_setup');


/*
	========================
	Theme Support Functions
	========================
*/
add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support('post-formats', array('aside', 'gallery', 'image', 'video'));

/*
	========================
	Sidebar Functions
	========================
*/

function driv_elite_theme_widget_setup() {
	register_sidebar(
		array(
			'name' 	=>	'sidebar',
			'id' 	=>	'sidebar-1',
			'class'	=>	'custom',
			'description'	=>	'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action('widgets_init', 'driv_elite_theme_widget_setup');