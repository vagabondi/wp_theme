<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//load styles
wp_enqueue_style(
	'bootstrap-css',
	'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
);

wp_enqueue_style(
	'main_css',
	get_template_directory_uri() . 'style.css'
);

wp_enqueue_style(
	'fonts',
	'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'
);

//load scripts
wp_enqueue_script(
	'jquery',
	'http://code.jquery.com/jquery-3.1.1.min.js',
	false,
	'3.1.1',
	true
	);

wp_enqueue_script(
	'bootstrap-script',
	'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
	false,
	'3.1.1',
	true
	);

function register_my_menu() {
	register_nav_menu('primary', __('primary'));
}

add_action('init', 'register_my_menu');