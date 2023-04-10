<?php

	class Appilo_MegaMenu {
		
		function __construct() {
			
			add_action('init', array(&$this,'appilo_megamenu_cpt'));
			add_action('init', array(&$this,'appilo_megamenu_taxonomy'));				
		}
	  
		function appilo_megamenu_cpt() {
			$labels = array(
				'name' => __('Mega Menu', 'appilo'),
				'singular_name' => __('Mega Menus', 'appilo'),
				'add_new' => __('Add Mega menu', 'appilo'),
				'add_new_item' => __('Add Mega menu', 'appilo'),
				'edit_item' => __('Edit Mega menu', 'appilo'),
				'new_item' => __('New Mega menu', 'appilo'),
				'all_items' => __('All Mega menu', 'appilo'),
				'view_item' => __('View Mega menu', 'appilo'),
				'search_items' => __('Search Mega menu', 'appilo'),
				'not_found' => __('No Mega menu found', 'appilo'),
				'not_found_in_trash' => __('No portfolio found in the trash', 'appilo'),
				'parent_item_colon' => '',
				'menu_name' => __('Mega Menu', 'appilo')
			);
			$args = array(
				'labels' => $labels,
				'public' => true,
				'menu_icon' => 'dashicons-editor-justify',
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
				'has_archive' => false,
			);
			register_post_type('appilo_megamenu', $args);
		}
		
		function appilo_megamenu_taxonomy() {
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
				'rewrite' => array('slug' => 'appilo_megamenu_cat'),
			);
			register_taxonomy('appilo_megamenu_cat', 'appilo_megamenu', $args);
		}
					
	}  

    new Appilo_MegaMenu();