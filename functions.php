<?php 

///////////////////////////////////
//REGISTER & INCLUDES SCRIPTS // //
///////////////////////////////////
	/**
	 * Child Theme Style*/
	function linares_css(){
	    // Dependencies
	    $bootstrap_css 	= "bootstrap-css";
	    //$parent_style 	= "parent-style";

	    //Enqueue Frameworks
	    wp_enqueue_style("bootstrap-css", 
	    	"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", 
	    	array(),
	    	"3.3.7", 
	    	"all" //media
	    );
	    
	    //wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css" );
	    wp_enqueue_style( "child-style",
	        get_stylesheet_directory_uri() . "/style.css",
	        array(),//$parent_style
	        "0.1",
	        "all"
	    );
	}

	/**
	 * Child Theme Scripts*/
	function linares_js(){
		//Dependencies
		$bootstrap_js = "bootstrap-js";
		wp_register_script($bootstrap_js,
			"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
			array(), 
			"3.3.7", 
			true 
		);

		wp_register_script("linares_style_javascript",
			get_stylesheet_directory_uri() . "/assets/js/style.js",
			array(
				"jquery", 
				$bootstrap_js
			), 
			"0.1",
			true
		);

		wp_enqueue_script("linares_style_javascript" );
		wp_enqueue_script($bootstrap_js);
	}

	add_action( "wp_enqueue_scripts", "linares_css" );
	add_action( "wp_enqueue_scripts", "linares_js" );

////////////////////
//UNREGISTER SUFF///
////////////////////