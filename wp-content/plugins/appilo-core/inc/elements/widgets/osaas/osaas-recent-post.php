<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_rcp extends Widget_Base {

   public function get_name() {
      return 'osaas-rcp';
   }

   public function get_title() {
      return __( 'Osaas Recent Posts', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-footer' ];
	}
   public function get_icon() { 
        return 'eicon-posts-group';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Recent Posts', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'default' => 'category',
                'options' => [
                    'category' => __('Category', 'appilo'),
                    'individual' => __('Individual', 'appilo'),
                ],
            ]
        );

        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' => appilo_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'category',
                ],
                'default' => __( 'osaas', 'appilo' ),
            ]
        );

        $this->add_control(
            'id_query',
            [
                'label' => __('Posts', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' => appilo_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'individual',
                ],
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'appilo'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Style Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .osaas-footer-rcp .news-widget .post h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .osaas-footer-rcp .news-widget .post h6 a',
            ]
        );
        $this->add_control(
            'post_title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .osaas-footer-rcp .news-widget .post h6 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __( 'Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .osaas-footer-rcp .news-widget .post .post-info li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihaa',
                'label' => __( 'Meta Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .osaas-footer-rcp .news-widget .post .post-info li',
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Content Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .osaas-footer-rcp .news-widget .post' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if($settings['query_type'] == 'category'){
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $cat,
                    ) ,
                ) ,
            );
        }

        if($settings['query_type'] == 'individual'){
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'post__in' =>$id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new \WP_Query($query_args);

    echo '<div class="osaas-footer-rcp">
<div class="footer-widget news-widget">
            <!-- Footer Column -->
            <div class="widget-content">';
                    if( $wp_query->have_posts() ) {
                        while( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                  echo '<div class="post">
                    <div class="thumb"><a href="' . get_the_permalink() . '">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            echo '</a></div>
                    <ul class="post-info">
                        <li><span class="icon fa fa-calendar"></span>' . get_the_time('j M Y') . '</li>
                        <li><span class="icon fa fa-user"></span>'.get_the_author_posts_link().'</li>
                    </ul>
                    <h6><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h6>
                </div>';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>
        </div>
        </div>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_rcp );
?>