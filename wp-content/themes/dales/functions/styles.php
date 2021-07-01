<?php
// ***********************************************************************//
/* Styles

These .htaccess rules are required to make the JS / CSS work. 
This is because it's using a query-less cache busting method.

Add them in if the css or the js stops working.

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)\.(\d+)\.(bmp|css|cur|gif|ico|jpe?g|m?js|png|svgz?|webp|webmanifest)$ $1.$3 [L]
</IfModule>

*/
// ***********************************************************************//

// Load the theme stylesheet from the CSS folder instead, datestamped to avoid refreshing cache
function load_styles() {
	$timestamp = filemtime( get_template_directory() . '/dist/theme.css');
	wp_enqueue_style('frontend-stylesheet', get_template_directory_uri() . '/dist/theme.' . $timestamp . '.css', null, null);
}


add_action('wp_enqueue_scripts', 'load_styles');