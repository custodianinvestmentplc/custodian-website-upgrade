<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crypto_blog extends Widget_Base
{

    public function get_name()
    {
        return 'crypto_blog';
    }

    public function get_title()
    {
        return __('Crypto Blog', 'appilo');
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
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Recent Crypto currency Blog', 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo' ),
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
        $this->end_controls_section();

        $this->start_controls_section(
            'section_tvdsc',
            [
                'label' => __( 'Section Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .crypto-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-section .cr-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-blog-section .cr-section-title h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title.text-center p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-section-title.text-center p',
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
            'blog_title_color',
            [
                'label' => __('Blog Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-inner-items .thx-inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_title_typography',
                'label' => __( 'Blog Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-blog-inner-items .thx-inner-text h3',
            ]
        );

        $this->add_control(
            'blog_title_hover_color',
            [
                'label' => __( 'Blog Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-inner-items .thx-inner-text h3:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'content_color',
            [
                'label' => __('Content Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-inner-items .thx-inner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Content_typography',
                'label' => __( 'Content Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-blog-inner-items .thx-inner-text p',
            ]
        );
        $this->add_control(
            'Admin_Name_color',
            [
                'label' => __('Admin Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-inner-items .thx-author-area .thx-author-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'admin_name_typography',
                'label' => __( 'Admin Name Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-blog-inner-items .thx-author-area .thx-author-text h4',
            ]
        );
        $this->add_control(
            'Date_color',
            [
                'label' => __('Date Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-inner-items .thx-author-area .thx-author-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Date_typography',
                'label' => __( 'Date Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .cr-blog-inner-items .thx-author-area .thx-author-text span',
            ]
        );

        $this->add_control(
            'slide_active_button_color',
            [
                'label' => __('Active Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-slider .owl-dots .owl-dot.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slide_active_button_Border_color',
            [
                'label' => __('Active Button Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-slider .owl-dots .owl-dot:before' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'slide_inactive_button__color',
            [
                'label' => __('Inactive Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-blog-slider .owl-dots .owl-dot' => 'background-color: {{VALUE}}',
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

        <!-- Start of Blog section
    ============================================= -->
        <div id="cr-blog" class="cr-blog-section">
            <div class="container crypto-container-1200">
                <div class="cr-section-title text-center cr-headline">
                    <h2><?php echo $settings['title']?></h2>
                    <p><?php echo $settings['sub_title']?></p>
                </div>
                <div class="cr-blog-content">
                    <div class="cr-blog-slider owl-carousel">

                        <?php
                            if ($wp_query->have_posts()) {
                            while ($wp_query->have_posts()) {

                            $wp_query->the_post();
                        ?>

                        <div class="cr-blog-inner-items">
                            <div class="thx-inner-item">
                                <div class="thx-inner-img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full');
                                    }
                                    ?>
                                </div>
                                <div class="thx-inner-text cr-headline pera-content">
                                    <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                   <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                                    <div class="thx-author-area d-flex align-items-center">
                                        <div class="thx-author-img">
                                            <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                        </div>
                                        <div class="thx-author-text">
                                            <h4><a href="#"><?php echo get_the_author_meta('display_name'); ?></a></h4>
                                            <span><?php echo get_the_date(); ?></span>
                                        </div>
                                    </div>
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
            </div>
        </div>
        <!-- End of Blog section
            ============================================= -->

<?php
    }


    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new crypto_blog());