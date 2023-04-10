<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class gym_blog extends Widget_Base {

   public function get_name() {
      return 'gym-blog';
   }

   public function get_title() {
      return __( 'Gym Blog', 'appilo' );
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
            'blog_page',
            [
                'label' => __( 'Go To Blog', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Go To Blog', 'appilo' ),
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
                    '{{WRAPPER}} .app-gym-blog-innerbox .app-gym-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-blog-innerbox .app-gym-blog-text h3',
            ]
        );
        $this->add_control(
            'post_title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox:hover .app-gym-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __( 'Author Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox .app-gym-blog-text .blog-ath' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_h_color',
            [
                'label' => __( 'Author Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox:hover .app-gym-blog-text .blog-ath' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_date_color',
            [
                'label' => __( 'Date Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox .app-gym-blog-text .blog-date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_date_h_color',
            [
                'label' => __( 'Date Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox:hover .app-gym-blog-text .blog-date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'blog_btn',
            [
                'label' => __( 'Blog Page Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_btn_typo',
                'label' => __( 'Blog Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-blog-btn a',
            ]
        );
        $this->add_control(
            'btn_brdr_border',
            [
                'label' => __( 'Button Border', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'blog_btn_border',
                'label' => __( 'Background', 'plugin-domain' ),
                'types' => [ 'gradient', ],
                'selector' => '{{WRAPPER}} .app-gym-blog-btn a:before',
            ]
        );
        $this->add_control(
            'post_bg',
            [
                'label' => __( 'Post Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'post_bgf',
                'label' => __( 'Background', 'appilo' ),
                'types' => [  'classic','gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-gym-blog-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'p_b',
                'label' => __( 'Box Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-blog-innerbox',
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-gym-blog-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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



echo '<div class="app-gym-blog-post">';
        if( $wp_query->have_posts() ) {
            while( $wp_query->have_posts() ) {
                $wp_query->the_post();
      echo '<div class="app-gym-blog-innerbox position-relative wow fadeFromUp" data-wow-delay="'.appilo_animate('50').'" data-wow-duration="1500ms">
                <div class="app-gym-blog-img position-absolute">
                    <a href="' . get_the_permalink() . '">';
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    }
                    echo '</a>
                </div>
                <div class="app-gym-blog-text app-gym-headline">
                    <div class="app-gym-blog-meta">
                        <span class="blog-ath text-uppercase">'.get_the_author_posts_link().'</span>
                        <span class="blog-date"><a href="#">' . get_the_time('M j, Y') . '</a></span>
                    </div>
                    <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                </div>
            </div>';
            }
            wp_reset_postdata();
           }
    echo'</div>
        <div class="app-gym-blog-btn">
            <a href="' . get_post_type_archive_link( 'post' ) . '">' . $settings['blog_page'] . '</a>
        </div>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new gym_blog );
?>