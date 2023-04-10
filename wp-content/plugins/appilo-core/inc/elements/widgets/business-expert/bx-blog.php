<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_blog extends Widget_Base
{

    public function get_name()
    {
        return 'bx-blog';
    }

    public function get_title()
    {
        return __('Business Expert Blog', 'appilo');
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
                    '{{WRAPPER}} .apbc-blog-column .apbc-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-blog-column .apbc-headline h5',
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
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_t',
                'label' => __('Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-readmore-btn a',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'post_meta',
            [
                'label' => __( 'Post Meta Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_meta_color',
            [
                'label' => __('Post Meta Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-blog-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_tscfe',
            [
                'label' => __( 'Category Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'cat_color',
            [
                'label' => __('Category Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-img-wrapper .apbc-blog-category' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cat_bg_color',
            [
                'label' => __('Category Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-img-wrapper .apbc-blog-category' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );

        $this->add_control(
            'cat_hover_color',
            [
                'label' => __('Category Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-img-wrapper .apbc-blog-category:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'cat_bg_hover_color',
            [
                'label' => __('Category Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-blog-content .apbc-blog-column .apbc-img-wrapper .apbc-blog-category:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
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



        echo '<div class="apbc-blog-content">
                <div class="row">';

        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {

                $wp_query->the_post();

                echo '<div class="col-lg-4 col-md-6">
                        <div class="apbc-blog-column wow fadeInUp">
                            <div class="apbc-img-wrapper">';
                             if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                        echo '<span class="apbc-blog-category">' . appilo_single_category() . '</span>
                            </div>
                            <div class="apbc-blog-meta">
                                <span><i class="fas fa-user"></i>' . get_the_author_meta('display_name') . '</span>
                                <span><i class="fas fa-comments"></i>Comments</span>
                            </div>
                            <div class="apbc-headline">
                                <a href="' . get_the_permalink() . '"><h5>' . get_the_title() . '</h5></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="' . get_the_permalink() . '">'.$settings['read_more'].' <i class="fas fa-arrow-right"></i></a>
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

Plugin::instance()->widgets_manager->register_widget_type(new bx_blog());