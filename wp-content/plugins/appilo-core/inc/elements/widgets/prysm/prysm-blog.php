<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_blog extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-blog';
    }

    public function get_title()
    {
        return __('Prysm Blog', 'appilo');
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
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'appilo'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __('Style Control', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-headline.pr1-blog-title a h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-headline.pr1-blog-title a h5',
            ]
        );
        $this->add_control(
            'post_title_h_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-headline.pr1-blog-title a h5:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __('Author Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_cat_color',
            [
                'label' => __('Category Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-info.pr1-headline span a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button',
            [
                'label' => __('Button', 'appilo'),
                'type' => Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_bg',
                'label' => __('Button BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pr1-blog-column .pr1-readmore-btn a',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-blog-column .pr1-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => __('Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-blog-column .pr1-readmore-btn a',
            ]
        );
        $this->add_control(
            'section_hover_color_h',
            [
                'label' => __('Button Hover', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'button_hover_bg',
                'label' => __('Button Hover BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .pr1-blog-column .pr1-readmore-btn a:hover',
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


        echo '<div class="pr1-blog-content">
            <div class="row">';
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {


                $wp_query->the_post();
                echo '<div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pr1-blog-column wow fadeInUp">
                        <div class="pr1-img-wrapper">';

                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }

                echo ' </div>
                        <div class="pr1-blog-author">
                            <div class="author-img">
                                ' . get_avatar(get_the_author_meta('email'), 32) . '
                            </div>
                            <div class="author-info pr1-headline">
                                <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '"><h6>' . get_the_author_meta('display_name') . '</h6></a>
                                <span>' . appilo_single_category() . '</span>
                            </div>
                        </div>
                        <div class="pr1-headline pr1-blog-title">
                            <a href="' . get_the_permalink() . '"><h5>' . get_the_title() . '</h5></a>
                        </div>
                        <div class="pr1-pera-txt">
                            <p>' . wp_trim_words(get_the_content(), 15) . '</p>
                        </div>
                        <div class="pr1-readmore-btn">
                            <a href="' . get_the_permalink() . '">read more</a>
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

Plugin::instance()->widgets_manager->register_widget_type(new prysm_blog);
?>