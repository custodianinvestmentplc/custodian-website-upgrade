<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_challenge_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_challenge_2';
    }

    public function get_title()
    {
        return __('ItSource Challenge 2', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-scroll';
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'it_section_bg_images',
            [
                'label' => __( 'Section BG images', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'left_more_options',
            [
                'label' => esc_html__( 'Left BG image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'left_background',
                'label' => esc_html__( 'Left Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-challenge-section:before',
                'exclude' => ['color'],
            ]
        );
        $this->add_control(
            'Right_more_options',
            [
                'label' => esc_html__( 'Right BG image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'right_background',
                'label' => esc_html__( 'Right Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-challenge-section:after',
                'exclude' => ['color'],
            ]
        );
        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'challange_bg_img',
            [
                'label' => esc_html__( 'Right BG Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'itsource_challenge_tab_content',
            [
                'label' => __( 'ItSource Challenge Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_title',
            [
                'label' => esc_html__('Tab Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Mission & Vision', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tag_title',
            [
                'label' => esc_html__('Tag Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Challenges', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Managed IT Services For Your Industry & Support.', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_img',
            [
                'label' => esc_html__( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'youtube_link',
            [
                'label' => esc_html__( 'Youtube Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Tab List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => esc_html__( 'Mission & Vision', 'appilo' ),
                    ],
                    [
                        'tab_title' => esc_html__( 'Our Challenges', 'appilo' ),
                    ],
                    [
                        'tab_title' => esc_html__( 'Technology', 'appilo' ),
                    ],
                    [
                        'tab_title' => esc_html__( 'Careers With Us', 'appilo' ),
                    ],
                    [
                        'tab_title' => esc_html__( 'How We Work', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ tab_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_tab_challenge',
            [
                'label' => __('Challenge Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
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
            'Tab_title_color',
            [
                'label' => esc_html__('Tab Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-challenge-section .custom_tab_button li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tab_Title_typo',
                'label' => esc_html__('Tab Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-challenge-section .custom_tab_button li',
            ]
        );
        $this->add_control(
            'active_tab_circle_bg',
            [
                'label' => esc_html__('Active Tab Circle BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-challenge-section .custom_tab_button li a:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_Title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title .site-tag',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-challenge-section .tab-content .title-style-one h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-challenge-section .tab-content .title-style-one h2',
            ]
        );
        $this->add_control(
            'play_icon_color',
            [
                'label' => esc_html__('Video Play Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-challenge-section .tab-content .thx-it-challenge-tab-video i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'play_icon_BG_color',
            [
                'label' => esc_html__('Video Play Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-challenge-section .tab-content .thx-it-challenge-tab-video' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();



    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <!-- Start of challenge section
            ============================================= -->
        <div id="challenge" class="thx-it-challenge-section relative-position">
            <div class="container container-1200">
                <div class="thx-it-challenge-contnet">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="custom_tab_button   clearfix ul-li-block wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <ul id="tabs" class="nav text-uppercase nav-tabs">
                                <?php
                                $i = 0;
                                foreach ($settings['list'] as $item):;

                                    $i++;
                                    if ( 1 == $i ){
                                        $active = 'active';
                                    }else{
                                        $active = '';
                                    }
                                ?>
                                    <li class="nav-item"><a href="#" data-target="#<?php echo $item['_id']; ?>" data-toggle="tab" class="text-capitalize <?php echo $active; ?>"><?php echo $item['tab_title']; ?></a></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                            <!-- /tab_button -->
                        </div>
                        <div class="col-lg-7">
                            <div id="tabsContent" class="tab-content relative-position">
                                <!-- tab-pane -->
                            <?php
                            $i = 0;
                            foreach ($settings['list'] as $item):;
                            $i++;
                                if ( 1 == $i ){
                                    $active = 'active';
                                    $show = 'show';
                                }else{
                                    $active = '';
                                    $show = '';
                                }
                            ?>

                                <div id="<?php echo $item['_id']; ?>" class="tab-pane fade <?php echo $active .' '.$show; ?>">
                                    <div class="section-title title-style-one headline-1">
                                        <span class="site-tag"><?php echo $item['tag_title']; ?></span>
                                        <h2><?php echo $item['title']; ?></h2>
                                    </div>
                                    <div class="thx-it-challenge-tab-img relative-position">
                                        <div class="challeng-tab-details-img">
                                            <img src="<?php echo $item['tab_img']['url']; ?>" alt="">
                                        </div>
                                        <div class="thx-it-challenge-tab-video text-center">
                                            <a class="video_lightbox" href="<?php echo $item['youtube_link']['url']; ?>"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php  endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thx-it-challenge-img-bg"><img src="<?php echo $settings['challange_bg_img']['url']; ?>" alt=""></div>
        </div>
        <!-- End of challenge section
            ============================================= -->

        <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_challenge_2());
?>