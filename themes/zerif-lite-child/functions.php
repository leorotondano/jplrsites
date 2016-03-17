<?php
	function theme_enqueue_styles() {

		$parent_style = 'parent-style';		
		
		/*TODO: rever necessidade de carregar css's do pai*/
		wp_enqueue_style( 'bootstrap-child-style', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style( 'bootstrap-rtl-child-style', get_template_directory_uri() . '/css/bootstrap-rtl.css' );
		wp_enqueue_style( 'custom-editor-child-style', get_template_directory_uri() . '/css/custom-editor-style.css' );
		wp_enqueue_style( 'font-awesome-child-style', get_template_directory_uri() . '/css/font-awesome.min.css' );	
		wp_enqueue_style( 'ie-child-style', get_template_directory_uri() . '/css/ie.css' );
		wp_enqueue_style( 'pixeden-icons-child-style', get_template_directory_uri() . '/css/pixeden-icons.css' );		
		wp_enqueue_style( 'responsive-child-style', get_template_directory_uri() . '/css/responsive.css' );		
		wp_enqueue_style( 'style-mobile-child-style', get_template_directory_uri() . '/css/style-mobile.css' );		
		wp_enqueue_style( 'zerif_customizer_custom_css-child-style', get_template_directory_uri() . '/css/zerif_customizer_custom_css.css' );		
		
		
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );			
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style )
		);
	}
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );