<?php

if ( ! function_exists( 'msnav_get_options' ) ) {
    function msnav_get_options( $option = '', $default = null ) {
        $options = get_option( '_msnav' ); // Attention: Set your unique id of the framework
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}

function get_multi_sites(){
    $blogList = get_sites();
    $list = array();
    $i     = 0;
    foreach ( $blogList as $blog ) {
        if ( $i == 0 ) {
            $default = $blog->blog_id;
            $i ++;
        }
        $list[ $blog->blog_id ] = $blog->path;
    }
    return $list;
}

function get_mega_menu_template($type){
    global $switched;
    $site = msnav_get_options('get_site_list', 1);
    // Get current blog
    $original_blog_id = get_current_blog_id();
    switch_to_blog($site);
    $type = $type ? $type :'appilo_megamenu';
    global $post;
    $args = array('numberposts' => -1,'post_type' => $type,);
    $posts = get_posts($args);
    $post_data = array(
        ''  => __( 'Select', 'appilo' ),
    );
    foreach ($posts as $post_single) {
        $post_data[$post_single->ID] = get_the_title($post_single->ID);
    }
    // Switch back to the current blog
    switch_to_blog( $original_blog_id );

    wp_reset_postdata();

    return $post_data;

}
function masnav_replace_menu_class($menu) {
    $menu = str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'] ,$menu);
    return $menu;
}
add_filter('wp_nav_menu','masnav_replace_menu_class');

function multi_nav_walker_filter($args = array()) {
    $args['walker'] = new \Multi_Nav_Walker();
    return $args;
}
add_filter('wp_nav_menu_args', 'multi_nav_walker_filter');

/**
function msnav_print_template($template_id) {
    global $switched;
    $site = msnav_get_options('get_site_list', 1);
    // Get current blog
    $original_blog_id = get_current_blog_id();
    switch_to_blog($site);

    $opt = msnav_get_options('set_menu_template');
    if ($template_id) {
        echo do_shortcode('[PRINT_ELEMENTOR id="' . $template_id . '"]');
    } else {
        // nothing
    }
    switch_to_blog( $original_blog_id );
}
function get_global_menu($term){

global $switched;
$site = msnav_get_options('get_site_list', 1);
// Get current blog
$original_blog_id = get_current_blog_id();
switch_to_blog($site);
if ( ! empty( $term ) ) {
$options = array();
$query = new WP_Term_Query(wp_parse_args( array(
'taxonomy' => $term,
'hide_empty' => false,
)));

if (!is_wp_error($query) && !empty($query->terms)) {
foreach ($query->terms as $item) {
$options[$item->slug] = $item->name;
}
}
}
// Switch back to the current blog
switch_to_blog( $original_blog_id );

return $options;

}

function get_menu_location(){
$locations = get_registered_nav_menus();
$list = array();
foreach ( $locations as $key => $value ) {
$list[ $key ] = $value;
}
return $list;
}


function set_global_menu(){

$menu_switch = msnav_get_options('set_menu');

$menu_slug = msnav_get_options('set_menu_list');

$main_menu = get_term_by( 'slug', $menu_slug, 'nav_menu' );

$locations = get_theme_mod('nav_menu_locations');

$locations['main_menu'] = $main_menu->term_id;
if ($menu_switch == '1') {
return set_theme_mod('nav_menu_locations', $locations);
}else {
return null;
}
}

function msnav_get_post_types() {
$post_types = get_post_types([], 'objects');
$posts = array();
foreach ($post_types as $post_type) {
$posts[$post_type->name] = $post_type->labels->singular_name;
}
return $posts;
}
 **/