<?php

use Elementor\Plugin as Elementor;

if( ! class_exists( 'Multi_Nav_Walker' ) ) {
    class Multi_Nav_Walker extends Walker_Nav_Menu{

        public $htmenu_Mega = '';
        public $htmenu_menupos = '';
        public $htmenu_menuwidth = '';
        public $htmenu_menuiconcolor = '';
        public $htmenu_menutagcolor = '';
        public $htmenu_menutagbgcolor = '';

        public function start_lvl( &$output,  $depth = 0, $args = array() ) {
            $style = '';
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"sub-menu\" $style >\n";
        }

        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
            global $wp_query;
            $meta = $item->multi_set_menu;
            $buildercontent = $this->multi_print_template( $item->multi_menu_template);
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
            if($item->multi_set_menu == '1'){
                $this->htmenu_Mega = 'yes';
            }else{
                $this->htmenu_Mega = 'no';
            }
            if($depth === 0 && $this->htmenu_Mega=='no'){
                $htmenu_cls = 'no-mega-menu';
            }else{
                $htmenu_cls = '';
            }

            $class_names = $value = '';
            $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
            if( '1' === $item->multi_set_menu ){
                $classes[] = 'multi-mega-menu';
            }
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
            $class_names = ' class="'. esc_attr( $class_names ).' '.$htmenu_cls . '"';

            if($depth ==1){
                $output .= $indent . '<li' . $value . $class_names .'>';
            }else{
                $output .= $indent . '<li' . $value . $class_names .'>';
            }

            $attributes  = ! empty( $item->attr_title ) ? ' title="'.esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target ) ? ' target="'.esc_attr( $item->target) .'"' : '';
            $attributes .= ! empty( $item->xfn ) ? ' rel="'.esc_attr( $item->xfn) .'"' : '';
            $attributes .= ! empty( $item->url ) ? ' href="'.esc_attr( $item->url) .'"' : '';
            $prepend = '';
            $append = '';
            $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description).'</span>' : '';

            if(isset($item->menuposition)){
                $this->htmenu_menupos = $item->menuposition;
            }else{
                $this->htmenu_menupos ='';
            }

            if(isset($item->menuwidth)){
                $this->htmenu_menuwidth = $item->menuwidth;
            }else{
                $this->htmenu_menuwidth ='';
            }

            $htmenu_sv = '';
            $htmenu_ico = '';
            $htmenu_fico = '';
            $htmenu_aspn = '';
            $htmenu_bspn = '';
            $htmenu_ttlc = '';
            $htmenu_menutag = '';
            $htmenu_drop = '';

            if($depth != 0){
                $description = $append = $prepend = "";
                $htmenu_aspn ='<span>';
                $htmenu_bspn ='</span>';
            }

            if($item->disablet){
                $htmenu_sv=1;
            }

            if( $depth ==1 && $htmenu_sv!=1){
                $htmenu_ttlc='menu_title';
            }elseif( $depth ==1 && $htmenu_sv==1){
                $htmenu_ttlc='ttl-hd-cls';
            }

            if ( $args->has_children && $depth === 0){
                $htmenu_drop = '';
            }else{
                if( 'yes' === $this->htmenu_Mega ){
                    $htmenu_drop = '';
                }else{
                    $htmenu_drop = '';
                }
            }

            $item_output = $args->before;
            if($htmenu_sv!=1){
                $item_output .= '<a'. $attributes .' class="'.$htmenu_ttlc.'">';
                $item_output .= $htmenu_menutag. $htmenu_fico. $htmenu_aspn;
                $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
                $item_output .= $htmenu_bspn;
                $item_output .= $description.$args->link_after;
                $item_output .= ' '.$item->subtitle.$htmenu_drop.'</a>';
            }
            $item_output .= $args->after;

            if ( $buildercontent && ( 'yes' === $this->htmenu_Mega ) ) {
                $megamenu_style = '';
                $item_output .= sprintf('<div class="multi-mega-menu-wrapper" %1s><div class="container"> %2s</div></div>', $megamenu_style, $buildercontent );
            }

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }

        public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
            $id_field = $this->db_fields['id'];
            if ( is_object( $args[0] ) ){
                $args[0]->has_children =  !empty ( $children_elements[ $element->$id_field ] ) ;
            }
            parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        }

        private function multi_print_template($template_id) {
            global $switched;
            $site = msnav_get_options('get_site_list', 1);
            // Get current blog
            $original_blog_id = get_current_blog_id();
            switch_to_blog($site);

                static $elementor = null;
                $elementor = Elementor::instance();

                $print_template = $elementor->frontend->get_builder_content_for_display( $template_id );

            switch_to_blog( $original_blog_id );

            return $print_template;
        }

    }
}