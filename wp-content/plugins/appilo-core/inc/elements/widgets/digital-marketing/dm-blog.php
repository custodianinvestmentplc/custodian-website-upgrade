<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class dm_blog extends Widget_Base
{

    public function get_name()
    {
        return 'dm-blog';
    }

    public function get_title()
    {
        return __('Digital Marketing Blog', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-posts-group';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Blog', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
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
                'default' => __('osaas', 'appilo'),
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
            'read_more',
            [
                'label' => __('Read More', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Read More', 'appilo'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab_style',
            [
                'label' => __('Blog', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-blog-innerbox .app-dm-blog-title-btn h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-blog-innerbox .app-dm-blog-title-btn h3',
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __('Post Meta Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-blog-innerbox .app-dm-blog-meta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_c',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => __('Background', 'appilo'),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-dm-btn a',
            ]
        );

        $this->add_control(
            'btn_shape_color',
            [
                'label' => __('Button Shape Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-btn a:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_nav_btn',
            [
                'label' => __( 'Nav Button Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Nav Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-blog-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_active_color',
            [
                'label' => __('Nav Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-dm-blog-slider .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $cat,
                    ),
                ),
            );
        }

        if ($settings['query_type'] == 'individual') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'post__in' => $id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new WP_Query($query_args);


// start blog section


        echo '<div class="app-dm-blog-content">
                <div class="app-dm-blog-slider owl-carousel">';

        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {

                $wp_query->the_post();

                echo '<div class="app-dm-blog-innerbox">
                        <div class="app-dm-blog-img">';
                             if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                        echo '</div>
                        <div class="app-dm-blog-text position-relative">
                            <div class="app-dm-blog-meta">
                                <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '"><i class="fas fa-user"></i> ' . get_the_author_meta('display_name') . '</a>
                                <a href="#"><i class="fas fa-tag"></i>' . appilo_single_category() . '</a>
                            </div>
                            <div class="app-dm-blog-title-btn app-dm-headline">
                                <h3>
                                    <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>
                                </h3>
                                <div class="app-dm-btn">
                                    <a class="d-flex justify-content-center align-items-center" href="' . get_the_permalink() . '" tabindex="0">'.$settings['read_more'].' <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            wp_reset_postdata();
        }
        echo '</div>
            </div>';

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new dm_blog());