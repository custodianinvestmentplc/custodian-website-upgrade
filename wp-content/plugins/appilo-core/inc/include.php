<?php

//Theme Options
$appilo_theme_options_list = glob(APPILO_INC_FILE.'inc/theme-options/*.php');

//Loop through the array that glob returned.
foreach($appilo_theme_options_list as $appilo_theme_options){
    include ($appilo_theme_options);
}

//Footer Widget load function
function appilo_footer_widget($footer_widget, $footer_area){

    $theme_footer_layout = get_theme_mod('theme_footer_builder', 'footer1');

    if ( $theme_footer_layout == $footer_widget) {
        $footer_widget_load = glob(APPILO_INC_FILE . "inc/footer-widgets/$footer_area/*.php");

        //Loop through the array that glob returned.
        foreach ($footer_widget_load as $wp_custom_widget) {
            include($wp_custom_widget);
        }
    }

}
//Recent Post
include (APPILO_INC_FILE. 'inc/footer-widgets/recent-posts-thumb/recent-post-thumb.php');

//Footer Widget Area Data
$footer_widgets = [
    [
        'area' => 'appilo-main',
        'name' => 'footer1',
    ],
    [
        'area' => 'topapp',
        'name' => 'footer2',
    ],
    [
        'area' => 'appilo-saas',
        'name' => 'footer7',
    ],
    [
        'area' => 'saas-classic',
        'name' => 'footer8',
    ],
    [
        'area' => 'app-showcase',
        'name' => 'footer9',
    ],
    [
        'area' => 'appilo-seo',
        'name' => 'footer10',
    ],
    [
        'area' => 'app-startup',
        'name' => 'footer11',
    ],
    [
        'area' => 'digital-agency',
        'name' => 'footer12',
    ],
    [
        'area' => 'cloud-hosting',
        'name' => 'footer14',
    ],
    [
        'area' => 'cloud-hosting',
        'name' => 'footer15',
    ],
    [
        'area' => 'cloud-hosting',
        'name' => 'footer16',
    ],
    [
        'area' => 'hrm',
        'name' => 'footer17',
    ],
    [
        'area' => 'crm',
        'name' => 'footer18',
    ],
    [
        'area' => 'smm',
        'name' => 'footer19',
    ],
    [
        'area' => 'software',
        'name' => 'footer20',
    ],
    [
        'area' => 'medical',
        'name' => 'footer22',
    ],

];

// Footer widget load dynamically
foreach ($footer_widgets as $item){
    $name = $item['name'];
    $area = $item['area'];

    appilo_footer_widget($name, $area);
}

function appilo_post_type($type='') {

    $type = $type ? $type :'elementor_library';
    global $post;
    $args = array('numberposts' => -1,'post_type' => $type,);
    $posts = get_posts($args);
    $categories = array(
        ''  => __( 'Select', 'appilo' ),
    );
    foreach ($posts as $pn_cat) {
        $categories[$pn_cat->ID] = get_the_title($pn_cat->ID);
    }
    return $categories;
}

function appilo_get_meta($opt) {
    $options = get_post_meta(get_the_ID(), 'appilo_meta', 'true');
    if (isset($options[$opt])) {
        return $options[$opt];
    }
}

function appilo_render_footer(){
    $meta_switch = appilo_get_meta('footer_switch');
    $meta_footer = appilo_get_meta('meta_footer');

    $builder_switch = get_theme_mod('footer_builder_switch');
    $cust_footer = get_theme_mod('elementor_footer');

    if ($meta_switch){
        $print_footer = $meta_footer;
    }elseif ($builder_switch){
        $print_footer = $cust_footer;
    }else{
        $print_footer = '';
    }

    echo do_shortcode('[INSERT_ELEMENTOR id="'.$print_footer.'"]');

}

function appilo_render_header(){

    $header_switch = appilo_get_meta('header_switch');
    $meta_header = appilo_get_meta('meta_header');

    $builder_switch = get_theme_mod('header_builder_switch');

    $cust_header = get_theme_mod('elementor_header');

    if ($header_switch){
        $print_header = $meta_header;
    }elseif ($builder_switch){
        $print_header = $cust_header;
    }else{
        $print_header = '';
    }

    echo do_shortcode('[INSERT_ELEMENTOR id="'.$print_header.'"]');

}