<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_blog_style extends Widget_Base {

   public function get_name() {
      return 'appilo-blog-style';
   }

   public function get_title() {
      return __( 'Blog Style', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Blog Style', 'appilo' ),
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
        $this->add_control(
            'read_more',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );

        $this->add_control(
            'section_color',
            [
                'label' => __( 'Color Control', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'blog_bg',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-style-one .single-blog-post .text-box ul.meta-info li:after, 
                {{WRAPPER}} .blog-style-one .single-blog-post .text-box:after, 
                {{WRAPPER}} .blog-style-one .single-blog-post .text-box a.read-more, 
                {{WRAPPER}} .blog-style-one .single-blog-post .text-box h3:hover, 
                {{WRAPPER}} .blog-style-one .single-blog-post .text-box a.read-more i',
            ]
        );
        $this->add_control(
            'nav_colors',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_icon_color',
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-style-one .owl-theme .owl-nav [class*=owl-] i',
            ]
        );
        $this->add_control(
            'nav_as_bg',
            [
                'label' => __( 'Nav Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg_color',
                'label' => __( 'Nav BG Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-style-one .owl-theme .owl-nav [class*=owl-]',
            ]
        );
        $this->add_control(
            'nav_colors_hover',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_icon_hover_color',
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-style-one .owl-theme .owl-nav [class*=owl-]:hover i',
            ]
        );
        $this->add_control(
            'nav_a1_bg',
            [
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg_hover_color',
                'label' => __( 'Nav Hover BG Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .blog-style-one .owl-theme .owl-nav [class*=owl-]:hover',
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
        echo '<section class="blog-style-one" >
                <div class="container">
                    <div class="blog-carousel owl-theme owl-carousel">';

                foreach($recent_posts as $post) :
                        echo ' <div class="item">
                            <div class="single-blog-post">
                                <div class="img-box">
                                    '.get_the_post_thumbnail($post['ID'], 'full').'
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <ul class="meta-info">
                                        <li><a href="#">'.$post_category.'</a></li>
                                        <li><a href="'.esc_url(get_month_link(get_the_date('Y'), get_the_date('m'))).'">'.get_the_time('F j, Y').'</a></li>
                                        <li><a href="#">'.get_the_author_posts_link().'</a></li>
                                    </ul><!-- /.meta-info -->
                                    <a href="'.get_permalink($post['ID']).'"><h3>'.$post['post_title'].'</h3></a>
                                    <p>'.wp_trim_words($post['post_content'] , 20) .'</p>
                                    <a href="'.get_permalink($post['ID']).'" class="read-more">'.$settings['read_more'].' <i class="fa fa-angle-right"></i></a>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-blog-post -->
                        </div><!-- /.col-md-4 -->';
                endforeach; wp_reset_query();

                   echo '</div><!-- /.blog-carousel -->
                </div><!-- /.container -->
        </section><!-- /.blog-style-one -->';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_blog_style );
?>