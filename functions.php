<?php 

function load_style_scripts () 
{
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-3.1.1.min.js');
	// wp_enqueue_script('jquery_ui_my', get_template_directory_uri() . '/js/jquery-ui.min.js');
	wp_enqueue_script('js_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

	wp_enqueue_style('bootstrap_my', get_template_directory_uri() . '/css/bootstrap.min.css');
	// wp_enqueue_style('jquery_ui_css_my', get_template_directory_uri() . '/css/jquery-ui.min.css');
	// wp_enqueue_style('jquery_ui_theme_css_my', get_template_directory_uri() . '/css/jquery-ui.theme.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('OpenSansCond', "https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300");
}

add_action('wp_enqueue_scripts', 'load_style_scripts');

// register_sidebar(array(
	// 'name'          => 'menu',
	// 'id'            => 'menu-header',
// ));

// register_sidebar(array(
	// 'name'          => 'right-page',
	// 'id'            => 'right-page-list',
	// 'before_widget' => '',
	// 'after_widget'  => '',
// ));

add_theme_support( 'post-thumbnails' );



