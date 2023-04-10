<?php
namespace Elementor;

if ( ! function_exists('msnav_insert_elementor') ){

	function msnav_insert_elementor($atts){
	    if(!class_exists('Elementor\Plugin')){
	        return '';
	    }
	    if(!isset($atts['id']) || empty($atts['id'])){
	        return '';
	    }

	    $post_id = $atts['id'];

	    $response = Plugin::instance()->frontend->get_builder_content_for_display($post_id);
	    return $response;
	}

}

add_shortcode('PRINT_ELEMENTOR','Elementor\msnav_insert_elementor');