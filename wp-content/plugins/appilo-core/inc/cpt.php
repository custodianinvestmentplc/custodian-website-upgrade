<?php

	class Appilo_custom_post_type {
		
		function __construct() {
			
			add_action('init', array(&$this,'create_post_type'));
			add_action('init', array(&$this,'create_post_taxonomy'));				
		}
	  
		function create_post_type() {
			$labels = array(
				'name' => __('Header & Footer', 'appilo'),
				'singular_name' => __('Header & footer', 'appilo'),
				'add_new' => __('Add header & footer', 'appilo'),
				'add_new_item' => __('Add header & footer', 'appilo'),
				'edit_item' => __('Edit header & footer', 'appilo'),
				'new_item' => __('New header & footer', 'appilo'),
				'all_items' => __('All header & footer', 'appilo'),
				'view_item' => __('View header & footer', 'appilo'),
				'search_items' => __('Search header & footer', 'appilo'),
				'not_found' => __('No header & footer found', 'appilo'),
				'not_found_in_trash' => __('No portfolio found in the trash', 'appilo'),
				'parent_item_colon' => '',
				'menu_name' => __('Header & Footer', 'appilo')
			);
			$args = array(
				'labels' => $labels,
				'public' => true,
				'menu_icon' => 'dashicons-align-wide',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
				'has_archive' => false,
			);
			register_post_type('appilo_template', $args);
		}
		
		function create_post_taxonomy() {
			$labels = array(
				'name' => __('Category', 'appilo'),
				'singular_name' => __('Category', 'appilo'),
				'search_items' => __('Search categories', 'appilo'),
				'all_items' => __('Categories', 'appilo'),
				'parent_item' => __('Parent category', 'appilo'),
				'parent_item_colon' => __('Parent category:', 'appilo'),
				'edit_item' => __('Edit category', 'appilo'),
				'update_item' => __('Update category', 'appilo'),
				'add_new_item' => __('Add category', 'appilo'),
				'new_item_name' => __('New category', 'appilo'),
				'menu_name' => __('Category', 'appilo'),
			);
			$args = array(
				'labels' => $labels,
				'hierarchical' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'rewrite' => array('slug' => 'appilo_template_cat'),
			);
			register_taxonomy('appilo_template_cat', 'appilo_template', $args);
		}
					
	}  

    new Appilo_custom_post_type();

