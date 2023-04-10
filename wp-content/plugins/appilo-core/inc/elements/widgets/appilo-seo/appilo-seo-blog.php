<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_blog extends Widget_Base {

   public function get_name() {
      return 'appilo-seo-blog';
   }

   public function get_title() {
      return __( 'Appilo SEO Blog', 'appilo' );
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'blog', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_number',
            [
                'label' => __( 'Number Of Post', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '3', 'appilo' ),
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label' => __( 'Post Category', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'App SEO', 'appilo' ),
            ]
        );
        $this->add_control(
            'posted_by',
            [
                'label' => __( 'Posted By', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Posted By:', 'appilo' ),
            ]
        );
        $this->add_control(
            'posted_by_color',
            [
                'label' => __( 'Posted By Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-text .appseo-blog-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_hover_color',
            [
                'label' => __( 'Posted By Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text:hover .appseo-blog-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_admin_color',
            [
                'label' => __( 'Posted User Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-text .appseo-blog-meta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_admin_hover_color',
            [
                'label' => __( 'Posted User Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text:hover .appseo-blog-text .appseo-blog-meta a' => 'color: {{VALUE}}',
                ],
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
                'label' => __( 'Post Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __( 'Post Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text:hover .appseo-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Post Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-text h3',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-img .appseo-post-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_hover_color',
            [
                'label' => __( 'Post Meta Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text:hover .appseo-blog-img .appseo-post-meta' => 'color: {{VALUE}}',
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
                        'min' => 25,
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
                    'size' => 25,
                ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-img .appseo-post-meta' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_post_meta_bg',
                'label' => __( 'Post Meta BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-blog-img-text .appseo-blog-img .appseo-post-meta',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_post_meta_hover_bg',
                'label' => __( 'Post Meta Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-blog-img-text:hover .appseo-blog-img .appseo-post-meta',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_post_bg',
                'label' => __( 'Post BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-blog-img-text:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_post_hover_bg',
                'label' => __( 'Post Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-blog-img-text:hover:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .appseo-blog-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-blog-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    echo ' <section  class="appseo-blog-section">
            <div class="container">
                <div class="appseo-blog-item">
                    <div class="row justify-content-center">';
                        foreach($recent_posts as $post) {
                            echo ' <div class="col-lg-4 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="appseo-blog-img-text">
                                <div class="appseo-blog-img position-relative">';
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'full' );
                                        }
                                    echo'<div class="appseo-post-meta text-center">
                                        <span>'.get_the_time('j').'</span>
                                       '.get_the_time('F, y').'
                                    </div>
                                </div>
                                <div class="appseo-blog-text appseo-headline">
                                    <div class="appseo-blog-meta">
                                        <span>'.$settings['posted_by'].'</span> <a href="#">'.get_the_author_posts_link().'</a>
                                    </div>
                                    <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
                                </div>
                            </div>
                        </div>';
                        };
                        wp_reset_query();
                    echo'</div>
                </div>
            </div>
        </section>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_blog );
?>