<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_recent_post extends Widget_Base {

    public function get_name() {
        return 'topapp-recent-post';
    }

    public function get_title() {
        return __( 'Recent Post', 'appilo' );
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
                'label' => __( 'Recent Post', 'appilo' ),
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Bl</span>og', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We want to <span>share our</span> succes <br> by our latest blog.', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and type <br> setting industry. Lorem Ipsum has been the industrys stan <br> dard dummy text ever since the 1500s.', 'appilo' ),
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
                'default' => __( 'Appilo', 'appilo' ),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-section .topapp-sec-title.style-two .title:before, 
                {{WRAPPER}} .blog-section .topapp-sec-title.style-two h2 span:before',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $post_count= $settings['post_number'];
        $post_category= $settings['post_category'];

        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => $post_count, // Number of recent posts thumbnails to display
            'post_status' => 'publish', // Show only the published posts
            'category_name' => $post_category,
        ));
        echo '	<!-- Blog Section -->
                <section class="blog-section" >
                    <div class="auto-container">
                        <!-- Sec Title -->
                        <div class="topapp-sec-title style-two">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="title">'.$settings['section_title'].'</div>
                                    <h2>'.$settings['section_heading'].'</h2>
                                </div>
                                <div class="float-right">
                                    <div class="text">'.$settings['section_info'].'</div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">';
                        foreach($recent_posts as $post) :
                         echo'   <!-- News Block -->
                            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="image">
                                        <a href="'.get_permalink($post['ID']).'">'.get_the_post_thumbnail($post['ID'], 'full').'</a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="icon fas fa-calendar-alt"></span>'.get_the_time('F j, Y').'</li>
                                            <li><span class="icon fas fa-user"></span>'.get_the_author_posts_link().'</li>
                                        </ul>
                                        <h3><a href="'.get_permalink($post['ID']).'">'.$post['post_title'].'</a></h3>
                                        <div class="text">'.wp_trim_words($post['post_content'] , 20) .'</div>
                                        <a class="home-read-more" href="'.get_permalink($post['ID']).'">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>';
                            endforeach; wp_reset_query();
                       echo ' </div>
                    </div>
                </section>
	<!-- End Blog Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_recent_post );
?>