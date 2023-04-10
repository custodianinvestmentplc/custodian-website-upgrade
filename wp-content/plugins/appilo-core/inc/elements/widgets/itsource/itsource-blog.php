<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_blog extends Widget_Base
{

    public function get_name()
    {
        return 'itsource-blog';
    }

    public function get_title()
    {
        return __('iTsource Blog', 'appilo');
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
                'default' => 2,
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
                    '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text h3',
            ]
        );
        $this->add_control(
            'post_title_h_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text h3:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_auth_color',
            [
                'label' => __('Author & Date Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text .it-nw-blog-meta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'read_more_color',
            [
                'label' => __('Read More Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text .blog-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'read_more_font',
                'label' => __('Read More Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text .blog-more',
            ]
        );
        $this->add_control(
            'read_more_hover_color',
            [
                'label' => __('Read More Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nw-blog-innerbox .it-nw-blog-inner-text .blog-more:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_inactive_color',
            [
                'label' => __('Nav Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nx-testimonial-slider .owl-dots .owl-dot, .it-nw-blog-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'nav_active_color',
            [
                'label' => __('Nav Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-nx-testimonial-slider .owl-dots .owl-dot.active, .it-nw-blog-slider .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-nw-blog-innerbox',
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
        echo '<div class="it-nw-blog-content">
				<div class="it-nw-blog-slider owl-carousel">';

        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {

                $wp_query->the_post();
                echo '<div class="it-nw-blog-innerbox">
						<div class="it-nw-blog-inner-img">';

                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }

                echo '</div>
						<div class="it-nw-blog-inner-text headline">
							<div class="it-nw-blog-meta d-flex justify-content-between">
								<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '"><i class="far fa-user"></i>' . get_the_author_meta('display_name') . '</a>
								<a href="#"><i class="fas fa-calendar-alt"></i> ' . get_the_time('j F, Y') . '</a>
							</div>
							<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
							<a class="blog-more" href="' . get_permalink() . '">' . $settings['read_more'] . '<i class="fas fa-arrow-right"></i></a>
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_blog());