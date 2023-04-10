<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_blog extends Widget_Base {

   public function get_name() {
      return 'dia-blog';
   }

   public function get_title() {
      return __( 'Digital Agency Blog', 'appilo' );
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
                'default' => __( 'Digital Agency', 'appilo' ),
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
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-author-area .dia-author-name span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_hover_color',
            [
                'label' => __( 'Posted By Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-author-area .dia-author-name span:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_admin_color',
            [
                'label' => __( 'Posted User Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-author-area .dia-author-name span a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'posted_by_admin_hover_color',
            [
                'label' => __( 'Posted User Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-author-area .dia-author-name span a:hover' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __( 'Post Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-blog-text:hover h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Post Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-blog-text h3',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-date-meta, {{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-blog-text .dia-blog-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_hover_color',
            [
                'label' => __( 'Post Meta Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-img-text .dia-date-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Blog BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-blog-section .dia-blog-content',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-blog-section .dia-blog-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    echo '    <!-- Start of blog section
        ============================================= -->
        <section  class="dia-blog-section">
                <div class="dia-blog-content">
                    <div class="row">';
                        foreach($recent_posts as $post) {
                            echo '<div class="col-lg-4 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="dia-blog-img-text">
                                <div class="dia-blog-img">';
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'full' );
                                        }
                                    echo'</div>
                                <div class="dia-blog-text">
                                    <span class="dia-blog-tag"><a href="'.get_permalink().'">'.$settings['post_category'].'</a></span>
                                    <h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
                                </div>
                                <div class="dia-blog-meta">
                                    <div class="dia-author-area d-inline-block">
                                        <div class="dia-athur-img float-left">
                                            '.get_avatar( get_the_author_meta('email'), '' ).'
                                        </div>
                                        <div class="dia-author-name">
                                            <span>'.$settings['posted_by'].' '.get_the_author_posts_link().'</span>
                                        </div>
                                    </div>
                                    <div class="dia-date-meta float-right">
                                        <a href="'.get_month_link(get_the_date('Y'), get_the_date('m')).'"> '.get_the_time('j F, y').'</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        };
                        wp_reset_query();
                    echo'</div>
                </div>
        </section>
    <!-- End of Blog section
        ============================================= -->  ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_blog );
?>