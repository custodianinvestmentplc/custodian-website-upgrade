<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_blog extends Widget_Base {

   public function get_name() {
      return 'cloud-hosting-blog';
   }

   public function get_title() {
      return __( 'Cloud Hosting Blog', 'appilo' );
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
                'default' => __( 'Hosting', 'appilo' ),
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
                    '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __( 'Post Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content h3:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Post Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content h3 a',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cate_color',
            [
                'label' => __( 'Category Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content .link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_cate_bg',
                'label' => __( 'Blog Category BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content .link',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-artical-section .artical-wrapper .artical-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border_active',
                'label' => __( 'Border Active', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-artical-section .artical-wrapper:hover .artical-content',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-artical-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'category_name'  => $post_category,);
        $recent_posts = get_posts( $args );

echo '<section  class="host-app-artical-section">
    <div class="container">
        <div class="row justify-content-center">';
        foreach($recent_posts as $post) {
            echo '<div class="col-lg-4 col-md-6">
                <div class="artical-wrapper">
                    <span class="caption">';
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full' );
                            }
                    echo'</span>

                    <div class="artical-content">
                        <a class="link" href="'.get_permalink().'">'.$settings['post_category'].'</a>

                        <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>

                        <span class="text author">'.get_the_author().'</span>
                        <span class="text post float-right">'.get_the_time('j F, y').'</span>
                    </div>
                </div> <!-- artical-wrapper -->
            </div>';
        };  wp_reset_query();
       echo' </div>
    </div>
</section> <!-- artical-section -->';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_blog );
?>