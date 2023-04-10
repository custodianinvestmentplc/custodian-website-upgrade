<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class nft_blog extends Widget_Base
{

    public function get_name()
    {
        return 'nft_blog';
    }

    public function get_title()
    {
        return __('NFT Blog', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-post';
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
        'shape_1',
        [
            'label' => esc_html__( 'Shape Image', 'appilo' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Recent NFTs. Postk', 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'after_title_img',
            [
                'label' => esc_html__( 'After Title Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Secure, Rewarding, Lowest Fees and Unlimited Rewards. We Have it all to provide the best experience to buy your first Bitcoin.', 'appilo' ),
            ]
        );

        $this->add_control(
            'blog_button',
            [
                'label' => __( 'Blog Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'More Post', 'appilo' ),
            ]
        );
        $this->add_control(
            'blog_btn_link',
            [
                'label' => esc_html__( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
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
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-section-title h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-section-title p',
            ]
        );
        $this->add_control(
            'blog_btn_style',
            [
                'label' => esc_html__( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-content .nft-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typography',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-top-content .nft-btn a',
            ]
        );
        $this->add_control(
            'btn_border_color',
            [
                'label' => __( 'Button Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-content .nft-btn a' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'blog_btn_background',
                'label' => esc_html__( 'Blog Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-content .nft-btn a',
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-top-content .nft-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'blog_btn_hover_background',
                'label' => esc_html__( 'Blog Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-top-content .nft-btn a:before',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'blog_tab_style',
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
                    '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_title_typography',
                'label' => __( 'Blog Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text h3',
            ]
        );

        $this->add_control(
            'blog_title_hover_color',
            [
                'label' => __( 'Blog Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text h3:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'meta_color',
            [
                'label' => __('Meta Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-blog-inner-item .nft-category-list, {{WRAPPER}} .nft-blog-inner-item .thx-inner-meta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Meta_typography',
                'label' => __( 'Meta Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-blog-inner-item .nft-category-list, {{WRAPPER}} .nft-blog-inner-item .thx-inner-meta a',
            ]
        );
        $this->add_control(
        'meta_bg_color',
        [
            'label' => esc_html__( 'Meta Background', 'appilo' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
         );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'Meta_background',
                'label' => esc_html__( 'Meta Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .nft-blog-inner-item .nft-category-list,{{WRAPPER}} .nft-blog-inner-item .thx-inner-meta a i',
            ]
        );
        $this->add_control(
            'read_more_btn_color',
            [
                'label' => __('Read More Btn Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text .nft-read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'read_more_btn_typography',
                'label' => __( 'Read More Btn Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text .nft-read-more',
            ]
        );
        $this->add_control(
            'read_more_hover_color',
            [
                'label' => __('Read More Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-blog-inner-item .thx-inner-text .nft-read-more:hover' => 'color: {{VALUE}}',
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
        <div id="nft-blog" class="nft-blog-section position-relative">
            <span class="nft-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
            <div class="container nft-container-1200">
                <div class="nft-top-content d-flex justify-content-between align-items-center">
                    <div class="nft-section-title  nft-headline pera-content">
                        <h2><?php echo $settings['title']?> <span class="right-icon"><img src="<?php echo $settings['after_title_img']['url']; ?>"></span></h2>
                        <p><?php echo $settings['sub_title']?></p>
                    </div>
                    <div class="nft-btn">
                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['blog_btn_link']['url']; ?>"><?php echo $settings['blog_button']?></a>
                    </div>
                </div>
                <div class="nft-blog-content">
                    <div class="row">
                        <?php
                            if ($wp_query->have_posts()) {
                                while ($wp_query->have_posts()) {
                                $wp_query->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="nft-blog-inner-item">
                                <div class="thx-inner-item">
                                    <div class="thx-inner-img position-relative"><?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        }
                                        ?>
                                        <div class="nft-category-list">
                                            <?php echo get_the_category_list(' '); ?>
                                        </div>
                                    </div>
                                    <div class="thx-inner-meta">
                                        <a href="#"><i class="fas fa-clock"> </i><?php echo get_the_date('jS M, Y'); ?></a>
                                        <a href="#"><i class="fas fa-comment"> </i><?php echo get_comments_number(); ?></a>
                                    </div>
                                    <div class="thx-inner-text nft-headline">
                                        <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                                        <a class="nft-read-more" href="<?php echo get_the_permalink(); ?>"><?php _e('Read More', 'appilo'); ?> <i class="fas fa-arrow-right"></i></a>
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

Plugin::instance()->widgets_manager->register_widget_type(new nft_blog());