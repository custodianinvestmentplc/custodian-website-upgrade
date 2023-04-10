<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_blog extends Widget_Base
{

    public function get_name()
    {
        return 'seo_agency_blog';
    }

    public function get_title()
    {
        return __('SEO Agency Blog', 'appilo');
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
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-headline h5',
            ]
        );

        $this->add_control(
            'post_hover_title_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-headline h5:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'description_heading',
            [
                'label' => __( 'Description Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'post_desc_color',
            [
                'label' => __('Description Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typo',
                'label' => __('Description Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-pera-txt p',
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
            'date_color',
            [
                'label' => __('Date Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .thumb-wrapper .blog-date span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'date_bg',
            [
                'label' => __('Date Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .thumb-wrapper .blog-date' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'date_hover_style',
            [
                'label' => __( 'Date Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'date_hover_color',
            [
                'label' => __('Date Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single:hover .thumb-wrapper .blog-date span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'date_hover_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .thumb-wrapper .blog-date::before',
            ]
        );
        $this->add_control(
            'admin_comment_color',
            [
                'label' => __('Admin & Comment Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-blog-meta span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_tscfe',
            [
                'label' => __( 'Button Style', 'webangon' ),
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
            'btn_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-readmore-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-readmore-btn a',
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
            'btn_hover_color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-readmore-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .apldg2-blog-single .blog-content-wrapper .apldg2-readmore-btn a::before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_nav_style',
            [
                'label' => __( 'Slider Nav Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_c',
            [
                'label' => __('Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .slick-dots li.slick-active' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_inactive',
            [
                'label' => __('Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-blog-area .apldg2-blog-slider .slick-dots li button' => 'background-color: {{VALUE}}',
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
        ?>

        <!-- Blog Area -->
        <div class="apldg2-blog-area">
            <div class="apldg2-blog-slider">
            <?php
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {

                     $wp_query->the_post();
            ?>
                <div class="apldg2-blog-single">
                    <div class="thumb-wrapper">
                        <a href="#">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            ?>
                        </a>
                        <div class="blog-date">
                            <span class="date"><?php echo get_the_date('m') ?></span>
                            <span class="month"><?php echo get_the_date('M') ?></span>
                        </div>
                    </div>
                    <div class="blog-content-wrapper">
                        <div class="apldg2-blog-meta">
                            <span><i class="far fa-user"></i> <?php echo get_the_author_meta('display_name'); ?></span>
                            <span><i class="far fa-comments"></i>
                                <?php
                                if (get_comments_number() == 0){
                                    echo '05 Comments';
                                }else{
                                    echo get_comments_number() . ' Comments';
                                }
                                 ?>
                            </span>
                        </div>
                        <div class="apldg2-headline">
                            <a href="<?php the_permalink();?>"><h5><?php the_title();?></h5></a>
                        </div>
                        <div class="apldg2-pera-txt">

                            <p>
                                <?php
                                   echo wp_trim_words(get_the_excerpt(), 15, '');
                                ?>
                            </p>
                        </div>
                        <div class="apldg2-readmore-btn">
                            <a href="<?php the_permalink();?>"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    wp_reset_postdata();
                }

                ?>
            </div>
        </div>
        <!-- Blog Area End -->



<?php
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_blog());