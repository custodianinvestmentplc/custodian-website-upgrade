<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_2_blog extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_2_blog';
    }

    public function get_title()
    {
        return __('Itsource Blog 2', 'appilo');
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
            'blog_style',
            [
                'label' => esc_html__( 'Blog Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1'  => esc_html__( 'Style 1', 'appilo' ),
                    'style_2' => esc_html__( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Blog Feed', 'appilo' ),
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'News & Insights', 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'blog_style' => 'style_1',
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
                'max' => 6,
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
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_sub_title_color',
            [
                'label' => __( 'Section Sub Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-one .site-tag' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_sub_title_typography',
                'label' => __( 'Section Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .title-style-one .site-tag',
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'section_title_color',
            [
                'label' => __( 'Section Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title-style-one h2' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typography',
                'label' => __( 'Section Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .title-style-one h2',
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'post_1_title_color',
            [
                'label' => __( 'Post 1 Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text .thx-it-blog-1-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text h3,{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text h3',
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'Excerpt_1_color',
            [
                'label' => __( 'Excerpt 1 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text .thx-it-blog-1-excerpt' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Excerpt_typography',
                'label' => __( 'Excerpt Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text p,{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text p',
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'blog_1_Meta_icon_color',
            [
                'label' => __( 'Blog 1 Meta Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text .thx-it-blog-meta a i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'blog_1_Meta_color',
            [
                'label' => __( 'Blog 1 Meta Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-text .thx-it-blog-meta a' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'blog_tab_style',
            [
                'label' => __('Blog', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'blog_hover_bg_color',
            [
                'label' => __('Blog Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type2:before,{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3:before,{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type4:before' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'category_bg_color',
            [
                'label' => __('Category BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-tag a' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'category_Title_color',
            [
                'label' => __('Category Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-tag a' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'blog_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'category_title_typography',
                'label' => __( 'Category Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-tag a',
                'condition' => [
                    'blog_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'blog_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text h3,
                    {{WRAPPER}} .thx-it-blog-section .thx-it-blog-type2 .thx-it-blog-text h3,
                    {{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_title_typography',
                'label' => __( 'Blog Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text h3,
                 {{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text h3',
            ]
        );
        $this->add_control(
            'blog_excerpt_color',
            [
                'label' => __( 'Blog Excerpt Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_Excerpt_typography',
                'label' => __( 'Blog Excerpt Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text p,
                {{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text p',
            ]
        );
        $this->add_control(
            'meta_color',
            [
                'label' => __('Meta Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text .thx-it-blog-meta a,
                    {{WRAPPER}} .thx-it-blog-section .thx-it-blog-type3 .thx-it-blog-text .thx-it-blog-meta a i,
                    {{WRAPPER}} .thx-it-blog-section .thx-it-blog-type2 .thx-it-blog-meta a,
                    {{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-meta a'=> 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'blog_Meta_typography',
                'label' => __( 'Blog Meta Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-meta a',
            ]
        );
        $this->add_control(
            'meta_icon_color',
            [
                'label' => __('Meta Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text .thx-it-blog-text .thx-it-blog-meta a i'=> 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'blog_hover_info_heading',
            [
                'label' => esc_html__( 'Blog Hover Style', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Title_Hover_color',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text:hover .thx-it-blog-text h3'=> 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Excerpt_Hover_color',
            [
                'label' => __('Excerpt Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text:hover .thx-it-blog-text p'=> 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Meta_Hover_color',
            [
                'label' => __('Meta Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-blog-section-2 .thx-it-blog-img-text:hover .thx-it-blog-text .thx-it-blog-meta a'=> 'color: {{VALUE}} !important',
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

        if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $post_data[] = array(
                'post-img' => get_the_post_thumbnail_url(get_the_ID()),
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'date' => get_the_date('jS F Y'),
                'author' => get_the_author_meta('display_name'),
                'author_url' => get_author_posts_url(get_the_author_meta('ID')),
                'permalink' => get_the_permalink()
            );
        }
        wp_reset_postdata();
    }
        ?>

<?php
    if ("style_1" == $settings['blog_style']){
?>
        <!-- Start of Blog section
	============================================= -->
        <div id="blog" class="thx-it-blog-section">
            <div class="container container-1200">
                <div class="section-title text-center title-style-one headline-1">
                    <span class="site-tag"><?php echo $settings['sub_title']?></span>
                    <h2><?php echo $settings['title']?></h2>
                </div>
                <div class="thx-it-blog-content-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <?php
                                if ($post_data[0]):
                            ?>
                            <div class="thx-it-blog-img-text thx-it-blog-type1">
                                <div class="thx-it-blog-img">
                                    <img src="<?php echo $post_data[0]['post-img']; ?>" alt="">
                                </div>
                                <div class="thx-it-blog-text headline-1 pera-content relative-position">
                                    <h3 class="thx-it-blog-1-title"><a href="<?php echo $post_data[0]['permalink']; ?>"><?php echo $post_data[0]['title']; ?></a></h3>
                                    <p class="thx-it-blog-1-excerpt"><?php echo wp_trim_words($post_data[0]['excerpt'], 15); ?></p>
                                    <div class="thx-it-blog-meta">
                                        <a href="<?php echo $post_data[0]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[0]['author']; ?></a>
                                        <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[0]['date']; ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php
                                if ($post_data[1]):
                            ?>
                            <div class="thx-it-blog-img-text thx-it-blog-type2 relative-position">
                                <div class="thx-it-blog-img">
                                    <img src="<?php echo $post_data[1]['post-img']; ?>" alt="">
                                </div>
                                <div class="thx-it-blog-text headline-1">
                                    <h3><a href="<?php echo $post_data[1]['permalink']; ?>"><?php echo $post_data[1]['title']; ?></a></h3>
                                    <div class="thx-it-blog-meta">
                                        <a href="<?php echo $post_data[1]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[1]['author']; ?></a>
                                        <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[1]['date']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        <?php
                            if ($post_data[2]):
                        ?>
                            <div class="thx-it-blog-img-text thx-it-blog-type3 relative-position">
                                <div class="thx-it-blog-img">
                                    <img src="<?php echo $post_data[2]['post-img']; ?>" alt="">
                                </div>
                                <div class="thx-it-blog-text headline-1 pera-content">
                                    <h3><a href="<?php echo $post_data[2]['permalink']; ?>"><?php echo $post_data[2]['title']; ?></a></h3>
                                    <p><?php echo wp_trim_words($post_data[2]['excerpt'], 15); ?></p>
                                    <div class="thx-it-blog-meta">
                                        <a href="<?php echo $post_data[2]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[2]['author']; ?></a>
                                        <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[2]['date']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php
                            if ($post_data[3]):
                        ?>
                                <div class="thx-it-blog-img-text thx-it-blog-type3 relative-position">
                                    <div class="thx-it-blog-img">
                                        <img src="<?php echo $post_data[3]['post-img']; ?>" alt="">
                                    </div>
                                    <div class="thx-it-blog-text headline-1 pera-content">
                                        <h3><a href="<?php echo $post_data[3]['permalink']; ?>"><?php echo $post_data[3]['title']; ?></a></h3>
                                        <p><?php echo wp_trim_words($post_data[3]['excerpt'], 15); ?></p>
                                        <div class="thx-it-blog-meta">
                                            <a href="<?php echo $post_data[3]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[3]['author']; ?></a>
                                            <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[3]['date']; ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                        </div>

                        <div class="col-lg-4 col-md-6">
                        <?php
                            if ($post_data[4]):
                        ?>
                                <div class="thx-it-blog-img-text thx-it-blog-type3 relative-position">
                                    <div class="thx-it-blog-img">
                                        <img src="<?php echo $post_data[4]['post-img']; ?>" alt="">
                                    </div>
                                    <div class="thx-it-blog-text headline-1 pera-content">
                                        <h3><a href="<?php echo $post_data[4]['permalink']; ?>"><?php echo $post_data[4]['title']; ?></a></h3>
                                        <p><?php echo wp_trim_words($post_data[4]['excerpt'], 15); ?></p>
                                        <div class="thx-it-blog-meta">
                                            <a href="<?php echo $post_data[4]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[4]['author']; ?></a>
                                            <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[4]['date']; ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php
                            if ($post_data[5]):
                        ?>
                                <div class="thx-it-blog-img-text thx-it-blog-type3 relative-position">
                                    <div class="thx-it-blog-img">
                                        <img src="<?php echo $post_data[5]['post-img']; ?>" alt="">
                                    </div>
                                    <div class="thx-it-blog-text headline-1 pera-content">
                                        <h3><a href="<?php echo $post_data[5]['permalink']; ?>"><?php echo $post_data[5]['title']; ?></a></h3>
                                        <p><?php echo wp_trim_words($post_data[5]['excerpt'], 15); ?></p>
                                        <div class="thx-it-blog-meta">
                                            <a href="<?php echo $post_data[5]['author_url']; ?>"><i class="far fa-user"></i> <?php _e('by', 'appilo'); ?> <?php echo $post_data[5]['author']; ?></a>
                                            <a href="!#"><i class="far fa-calendar-alt"></i> <?php echo $post_data[5]['date']; ?></a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start of Blog section
            ============================================= -->
<?php
    }else{ ?>
        <!-- Start of Blog section
	============================================= -->
        <div id="thx-it-blog-2" class="thx-it-blog-section-2">
            <div class="container container-1200">
                <div class="thx-it-blog-content-2">
                    <div class="row">
                        <?php
                        if ($wp_query->have_posts()){
                            while ($wp_query->have_posts()){
                                $wp_query->the_post();
                        ?>
                        <div class="col-lg-4">
                            <div class="thx-it-blog-img-text relative-position wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="thx-it-blog-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                                </div>
                                <div class="thx-it-blog-text headline-2 pera-content relative-position">
                                    <span class="thx-it-blog-tag">
                                        <?php $cate = get_the_category(); ?>
                                        <a href="<?php echo get_category_link($cate[0]->term_id); ?>">
                                            <?php echo $cate[0]->name; ?>
                                        </a>
                                    </span>
                                    <h3>
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </h3>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="thx-it-blog-meta">
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                            <i class="far fa-user"></i> by <?php echo get_the_author_meta('display_name'); ?></a>
                                        <a href="!#"><i class="far fa-calendar-alt"></i><?php  echo get_the_date('jS F Y'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            };
                            wp_reset_query();
                            };
                            ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Blog section
            ============================================= -->
<?php
};
?>

        <?php
    }


    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_2_blog());


