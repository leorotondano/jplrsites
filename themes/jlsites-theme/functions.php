<?php
	
	// error_reporting(E_ALL);
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);


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
	        'id' => 'jlsites-theme-publicacoes',
	        'before_widget' => '<div class="publicacoes">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}
	add_action('widgets_init', 'jlsites_widgets_init');

	// -------- Custom Controls -------- //

	function jlsites_customize_register($wp_customize) {

		$wp_customize->add_section('jlsites_controls', array(
			'title' => __('JLSites Controls', 'jlsites'),
			'priority' => 100
		) );

		$wp_customize->add_setting('jlsites_has_publicacoes_setting', array(
			'default' => false,
			'transport' => 'refresh'
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jlsites_has_publicacoes_control', array(
			'label' => __('Exibir Publicações?', 'jlsites'),
			'section' => 'jlsites_controls',
			'settings' => 'jlsites_has_publicacoes_setting',
			'type' => 'checkbox'
		) ) );

	}

	add_action('customize_register', 'jlsites_customize_register');

?>