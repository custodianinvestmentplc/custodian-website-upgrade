<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class smm_blog extends Widget_Base {

   public function get_name() {
      return 'smm-blog';
   }

   public function get_title() {
      return __( 'SMM Blog', 'appilo' );
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
                'default' => __( 'SMM', 'appilo' ),
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
            'read_more',
            [
                'label' => __( 'Read More', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read More', 'appilo' ),
            ]
        );
        $this->add_control(
            'readmore_color',
            [
                'label' => __( 'Read More Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'readmore_hover_color',
            [
                'label' => __( 'Read More Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'readmore_fonts',
                'label' => __( 'Read More Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-text a',
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
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_title_hover_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text:hover h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-text h3 a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'title_border',
                'label' => __( 'Title Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-text h3',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __( 'Post Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text .smm-date-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_hover_color',
            [
                'label' => __( 'Post Meta Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text .smm-date-meta' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_categ_color',
            [
                'label' => __( 'Category Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-img-text .smm-blog-text .smm-blog-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'post_cate_fonts',
                'label' => __( 'Category Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-text .smm-blog-tag',
            ]
        );
        $this->add_control(
            'post_overlay',
            [
                'label' => __( 'Post Overlay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'post_overlaya',
                'label' => __( 'Overlay', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-img:before',
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
                'selector' => '{{WRAPPER}} .smm-blog-section .smm-blog-img-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text .smm-blog-text',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_shadow',
                'label' => __( 'Blog Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-blog-img-text:hover',
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Content Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-blog-section .smm-blog-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .smm-blog-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    echo '<!-- Start of blog section
    ============================================= -->
    <section  class="smm-blog-section">
        <div class="container">
            <div class="smm-blog-wrapper">
                <div class="row">';
                    if( $wp_query->have_posts() ) {
                        while( $wp_query->have_posts() ) {
                            $wp_query->the_post();
                  echo '<div class="col-lg-4 col-md-6  wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="smm-blog-img-text">
                            <div class="smm-blog-img">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            echo '</div>
                            <div class="smm-blog-text smm-headline">
                                <span class="smm-blog-tag">'.appilo_single_category().'</span>
                                <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                <div class="sm-blog-blottom clearfix">
                                    <span class="smm-date-meta float-left"><a href="'.get_month_link(get_the_date('Y'), get_the_date('m')).'"><i class="fas fa-calendar-alt"> </i>' . get_the_time('j F y') . '</a></span>
                                    <a class="smm-blog-more float-right" href="' . get_the_permalink() . '">'.$settings['read_more'].'</a>
                                </div>
                            </div>
                            </div>
                        </div>';
                        }
                        wp_reset_postdata();
                       }
                echo'</div>
            </div>
        </div>
    </section>
<!-- End of blog section
    ============================================= --> ';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new smm_blog );
?>