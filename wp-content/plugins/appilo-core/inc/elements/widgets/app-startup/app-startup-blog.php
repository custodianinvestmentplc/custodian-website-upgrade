<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_blog extends Widget_Base {

   public function get_name() {
      return 'app-startup-blog';
   }

   public function get_title() {
      return __( 'App Startup Blog', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post-slider';
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
            'post_number',
            [
                'label' => __( 'Number Of Post', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '5', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label' => __( 'Post Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'App Startup', 'appilo' ),
            ]
        );
        $this->add_control(
            'posted_by',
            [
                'label' => __( 'Posted By', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'by', 'appilo' ),
            ]
        );
        $this->add_control(
            'posted_by_color',
            [
                'label' => __( 'Posted By Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-post-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'posted_by_font',
                'label' => __( 'Posted By Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-post-meta',
            ]
        );
        $this->add_control(
            'read_more',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );
        $this->add_control(
            'read_more_color',
            [
                'label' => __( 'Read More Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'read_more_font',
                'label' => __( 'Read More Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-read-more',
            ]
        );
        $this->add_control(
            'rmb',
            [
                'label' => __( 'Read More Before', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'read_more_before',
                'label' => __( 'Read More Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-read-more:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'read_more_after',
                'label' => __( 'Read More After', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text .str-read-more:after',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Post Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Post Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-text h3',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'post_meta_align',
            [
                'label' => __( 'Post Meta Align', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 280,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-img-text .str-blog-meta' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'nvb',
            [
                'label' => __( 'Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_color',
                'label' => __( 'Nav Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-area .owl-dots .owl-dot',
            ]
        );
        $this->add_control(
            'nav_b_c',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-area .owl-dots .owl-dot:after' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'bha',
            [
                'label' => __( 'Blog Hover', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_post_hover_bg',
                'label' => __( 'Post Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .str-blog-section .str-blog-img-text:before',
            ]
        );
        $this->add_responsive_control(
            'item_padding_sda',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section .str-blog-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-blog-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $post_count= $settings['post_number'];
        $post_category= $settings['post_category'];

        global $post;
        $args = array(
            'post_type' => 'post',
            'numberposts' => $post_count,
            'category_name' => $post_category,);
        $recent_posts = get_posts( $args );

    echo ' <!-- Start of blog  section
            ============================================= -->  
            <section  class="str-blog-section">
                <div class="container">
                    <div id="str-blog-slide" class="str-blog-area owl-carousel">';

                    foreach($recent_posts as $post) {
                        echo '<div class="str-blog-img-text position-relative">
                            <div class="str-blog-thumb">';
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' );
                                    }
                            echo'</div>
                            <div class="str-blog-meta text-center text-uppercase">
                                '.get_the_time('j F').'
                            </div>
                            <div class="str-blog-text str-headline">
                                <span class="str-post-meta">'.$settings['posted_by'].' '.get_the_author_posts_link().'</span>
                                <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
                                <div class="str-read-more">
                                    <a href="'.get_permalink().'">'.$settings['read_more'].'</a>
                                </div>
                            </div>
                        </div>';
                    };
                    wp_reset_query();
                    echo'</div>
                </div>
            </section>
        <!-- Start of blog  section
            ============================================= -->        ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_blog );
?>