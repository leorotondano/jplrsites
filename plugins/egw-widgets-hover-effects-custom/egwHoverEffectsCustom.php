<?php

function fs_get_wp_config_path()
{
    $base = dirname(__FILE__);
    $path = false;

    if (@file_exists(dirname(dirname($base))."/wp-config.php"))
    {
        $path = dirname(dirname($base))."/";
    }
    else
    if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php"))
    {
        $path = dirname(dirname(dirname($base)))."/";
    }
    else
    $path = false;

    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}
require_once fs_get_wp_config_path() . 'wp-content/plugins/egw-widgets-hover-effects/egwHoverEffects.php';

/*
Plugin Name: EGW Hover Effects Custom
Plugin URI:http://localhost
Description: Customização da widget egw hover effects
Author: JP e Léo
Version:1.0
Author URI: http://jlsites.com.br/

License: You should have purchased a license from http://www.codegrape.com/
*/

$egw_customSetup = new egw_custom_Setup();

class egw_custom_Setup {
	
	protected $load_egw_backend = false;
	
	public function __construct() {
		add_action('widgets_init', array($this, 'action_widgets_init'));			
	}

	function action_widgets_init() {
		register_widget( 'EGW_Hover_Effects_Custom_Widget' );
	}	
}


class EGW_Hover_Effects_Custom_Widget extends EGW_Hover_Effects_Widget {

	protected $widget_id = 'egw-custom';

	/**
	 * Default constructor.
	 */
	function __construct() {
		$widget_ops = array('description' => __('Widget customizada da egw', 'egw-custom'));
		//parent::__construct($this->widget_id, 'EGW Hover Effects Custom', $widget_ops);		
		WP_Widget::__construct( $this->widget_id, 'Custom teste', $widget_ops );		
	}

	/**
	* \see WP_Widget::form
	*/
	function form($instance) {				
		include 'includes/back-end.php';
		parent::form($instance);
	}
	
	/**
	 * \see WP_Widget::widget
	 */
	function widget($args, $instance) {
		echo '<div class="egw_hover_custom_wrapper" data-scrollreveal="enter left after 0s over 1s">';
		echo '<span class="custom-egw-hover-external-title">';
		echo $instance['TituloExterno'];
		echo '</span>';
		parent::widget($args, $instance);
		echo '</div>';		
	}

	/**
	* \see WP_Widget::update
	*/
	public function update($new_instance, $old_instance) {
		return parent::update($new_instance, $old_instance);
	}	
}
?>
