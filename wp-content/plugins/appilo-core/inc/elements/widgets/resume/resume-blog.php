<?php

namespace Elementor;
use WP_Query;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_blog extends Widget_Base
{

    public function get_name()
    {
        return 'resume_blog';
    }

    public function get_title()
    {
        return __('Resume/CV Blog', 'appilo');
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
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Blog', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Latest News & Post', 'appilo' ),
                'label_block' => true,
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
            'section_tvdsc',
            [
                'label' => __( 'Section Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __( 'Section Background Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
            'sub_title_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title',
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
            'post_meta__color',
            [
                'label' => __('Meta Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog .apihu-port-blog-meta-icon-box i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog .apihu-port-blog-meta-single a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_meta_hover__color',
            [
                'label' => __('Meta Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog .apihu-port-blog-meta-single a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'blog_title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog a h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'blog_post_title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog a h3',
            ]
        );
        $this->add_control(
            'blog_title_hover_color_',
            [
                'label' => __('Title Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-blog-area .apihu-port-single-blog a:hover h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            '__slide_btn_style',
            [
                'label' => __( 'Blog Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => '_date_hover_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-blog-area .owl-dots .owl-dot.active',
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
        <!-- Blog Start -->
        <div class="apihu-port-blog-area" id="apihu-port-blog">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-subtitle"><?php echo $settings['sub_title']?></p>
                            <h2 class="apihu-port-section-title"><?php echo $settings['title']?></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 owl-carousel apihu-port-blog-carousel">
                       <?php
                            if ($wp_query->have_posts()) {
                                while ($wp_query->have_posts()) {

                                 $wp_query->the_post();
                       ?>
                        <div class="apihu-port-single-blog">
                            <div class="apihu-port-single-blog-img">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                }
                                ?>
                            </div>
                            <div class="apihu-port-single-blog-text">
                                <div class="apihu-port-single-blog-meta-info">
                                    <div class="apihu-port-blog-meta-single">
                                        <div class="apihu-port-blog-meta-icon-box">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <a href="#"><?php echo get_the_author_meta('display_name'); ?></a>
                                    </div>
                                    <div class="apihu-port-blog-meta-single">
                                        <div class="apihu-port-blog-meta-icon-box">
                                            <i class="fas fa-comment-dots"></i>
                                        </div>
                                        <a href="#">
                                            <?php
                                            if (get_comments_number() == 0){
                                                echo '5 Comments';
                                            }else{
                                                echo get_comments_number() . ' Comments';
                                            }
                                            ?></a>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>">
                                    <h3> <?php the_title();?> </h3>
                                </a>
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
        <!-- Blog End -->

<?php
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_blog());