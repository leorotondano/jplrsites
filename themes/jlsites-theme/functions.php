<?php
	// -------- Enqueue Scripts -------- //
	function jlsites_enqueue_styles() {
		wp_enqueue_style( 'jlsites-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );
		wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri() . '/fonts/font-awesome-4.6.1/css/font-awesome.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'jlsites_enqueue_styles' );

	
	// -------- Sidebars -------- //
	function jlsites_widgets_init() {    

		register_sidebar(array(
	        'name' => __('Publicações', 'jlsites-theme'),
	        'id' => 'jlsitesTheme_publicacoes',
	        'before_widget' => '',
	        'after_widget' => '',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}
	add_action('widgets_init', 'jlsites_widgets_init');

?>