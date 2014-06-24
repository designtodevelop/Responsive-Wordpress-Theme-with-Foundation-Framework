<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Shortcodes
function foundation_add_alerts( $atts, $content = null ) {
	extract( shortcode_atts( array( 
		'type'  => '',     
		'shape' => '',     
		'close' => 'true', 
		'class' => ''
	 ), $atts ) );
	 
	$class_array[] = ( $shape ) ? $shape : '';
	$class_array[] = ( $type ) ? $type : '';
	$class_array[] = ( $class ) ? $class : '';
	$class_array = array_filter( $class_array );
	$classes = implode( ' ', $class_array );
	 
	$output  = '<div class="alert-box ' . $classes . '">';
	$output .= do_shortcode( $content );
	$output .= ( 'false' != $close ) ? '<a class="close" href="">&times;</a>' : '';
	$output .= '</div>';
		
	return $output;
}

function register_shortcodes() {
   add_shortcode('alert', 'foundation_add_alerts');
}
add_action('init', 'register_shortcodes');

?>