<?php
	function jlsites_enqueue_styles() {
		wp_enqueue_style( 'jlsites-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );
	}

	add_action( 'wp_enqueue_scripts', 'jlsites_enqueue_styles' );