<?php 
	//include css and javascript libraries
	function enqueue_linares_scripts() {
	    wp_enqueue_style('cdn_bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", $deps = array(), "3.3.7", "all" );
	    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_linares_scripts' );
?>