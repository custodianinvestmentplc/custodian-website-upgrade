<?php
function appilo_drop_cat($tax) {
    $categories_obj = get_categories('taxonomy='.$tax.'');
    $categories = array();
    foreach ($categories_obj as $pn_cat) {
        $categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
    }
    return $categories;
}

function appilo_drop_posts($post_type){
    $args = array(
        'numberposts' => -1,
        'post_type'   => $post_type
    );
    $posts = get_posts( $args );
    $list = array();
    foreach ($posts as $cpost){
        //  print_r($cform);
        $list[$cpost->ID] = $cpost->post_title;
    }
    return $list;
}
function appilo_single_category($default = true) {
    if ( 'post' == get_post_type() ) {
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
            foreach($categories as $category) {
                $output .= '<a href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.'</a>'.$separator;
            }
            $cat= trim($output, $separator);
            return $cat;
        }
    }
}
