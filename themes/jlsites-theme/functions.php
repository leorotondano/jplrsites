<?php
	function jlsites_enqueue_styles() {
		wp_enqueue_style( 'jlsites-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );
		wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri() . '/fonts/font-awesome-4.6.1/css/font-awesome.min.css' );
	}

	add_action( 'wp_enqueue_scripts', 'jlsites_enqueue_styles' );