<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_blog extends Widget_Base {

   public function get_name() {
      return 'hrm-blog';
   }

   public function get_title() {
      return __( 'HRM Blog', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-posts-group';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Blog', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'blog', 'appilo' ),
            ]
        );
        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'appilo'),
                'type' => Controls_Manager::SELECT,
                'default' => '',
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
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-title h3:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-title h3',
            ]
        );
        $this->add_control(
            'post_des_color',
            [
                'label' => __( 'Description Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_des_fonts',
                'label' => __( 'Description Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-title p',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-date-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_hover_color',
            [
                'label' => __( 'Post Meta Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-date-meta:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cate_background',
            [
                'label' => __( 'Category Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'post_cate_bg',
                'label' => __( 'Category BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-meta .pm-title-tag',
            ]
        );
        $this->add_control(
            'post_categ_color',
            [
                'label' => __( 'Category Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-meta .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_cate_fonts',
                'label' => __( 'Category Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-blog-img-text .pm-blog-text .pm-blog-meta .pm-title-tag',
            ]
        );
        $this->add_control(
            'post_background',
            [
                'label' => __( 'Post Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pm-blog-img-text .pm-blog-text',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-blog-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        echo '<!-- Start of blog  section
        ============================================= --> 
        <section  class="pm-blog-section">
            <div class="container">
                <div class="pm-blog-wrapper">';
                    if( $wp_query->have_posts() ) {
                        while( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                            echo '<div class="pm-blog-img-text">
                        <div class="pm-blog-img float-left">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            echo '</div>
                        <div class="pm-blog-text">
                            <div class="pm-blog-meta">
                                <span class="pm-title-tag">'.appilo_single_category().'</span>
                                <span class="pm-date-meta"><a href="'.get_month_link(get_the_date('Y'), get_the_date('m')).'"><i class="fas fa-calendar-alt"></i> ' . get_the_time('j F y') . '</a></span>
                            </div>
                            <div class="pm-blog-title pm-headline pera-content">
                                <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                <p>' . wp_trim_words(get_the_content(), 20) . '</p>
                            </div>
                        </div>
                    </div>';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>
            </div>
        </section>
    <!-- End of blog  section
        ============================================= --> ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_blog );
?>