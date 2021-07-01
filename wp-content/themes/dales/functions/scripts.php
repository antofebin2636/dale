<?php


function theme_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'theme', get_template_directory_uri() . '/dist/theme.js', array(), $_SERVER['REQUEST_TIME'], true );
    wp_enqueue_script('theme');

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );