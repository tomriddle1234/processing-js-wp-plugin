<?php
/*
Plugin Name: Processing.js
Plugin URI: http://vfxware.com/processing-js/
Description: Processing.js is the sister project of the popular Processing visual programming language, designed for the web. Processing.js makes your data visualizations, digital art, interactive animations, educational graphs, video games, etc. work using web standards and without any plug-ins. 
Version: 1.4.8
Author: Jianming Guo
Original Author: Ramoonus
Author URI: http://www.vfxware.com/
License: GPL2
*/


/* Javascript */
function rw_processing() {
	wp_deregister_script( 'processing' ); 
	wp_enqueue_script( 'processing', plugins_url( '/js/processing-1.4.8.min.js', __FILE__ ), false, '1.4.8' );
}

add_action( 'init', 'rw_processing' );

/* Shortcode */
function rw_processing_sc( $attr, $content ) {
	// open
	$output = '<script type="text/processing" data-processing-target="processingcanvas">';
	// return content
	
        $filteredcontent = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $content);
	$output = $output.$filteredcontent ;
	// close
	$output = $output.'</script>';
	$output = $output.'<canvas id="processingcanvas"></canvas>';
	return $output;
}

add_shortcode( "processing", "rw_processing_sc" );
add_shortcode( "processingjs", "rw_processing_sc" );

/* Remove WordPress Auto P */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_content', 'wptexturize' );
// return after processing
add_filter( 'the_content', 'wpautop', 99 );
add_filter( 'the_content', 'shortcode_unautop',100 );
add_filter( 'the_content', 'wptexturize', 99 );
?>
