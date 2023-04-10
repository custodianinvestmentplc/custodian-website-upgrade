<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_about extends Widget_Base
{

    public function get_name()
    {
        return 'resume_about';
    }

    public function get_title()
    {
        return __('Resume/CV About', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'hero_shapes',
            [
                'label' => __('Shapes', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_1',
            [
                'label' => __( 'Shape', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'user_img_content',
            [
                'label' => __( 'User Image', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'hero_texts',
            [
                'label' => __( 'Text Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'About Ramon', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '5 Year’s Exprience on Product Design.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'appilo' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab_section',
            [
                'label' => __( 'Tabs', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'tab_title',
            [
                'label' => __( 'Tab Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Main Skills', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'tab_desc',
            [
                'label' => __( 'Tab Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul>
                                     <li>
                                    <strong>User Experience Design - UI/UX</strong>
                                    <span>Delight the user and make it work.</span>
                                    </li>
                                  </ul>', 'appilo' ),
            ]
        );
        $this->add_control(
            'tab_list',
            [
                'label' => __('Tab Title', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => 'Main Skills',
                    ],[
                        'tab_title' => 'Awards',
                    ],[
                        'tab_title' => 'Education',
                    ],

                ],
                'title_field' => '{{{ tab_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_section',
            [
                'label' => __( 'Button', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => __( 'Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Download CV', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => __( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_bg_style',
            [
                'label' => __('Section Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-title',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-text',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'tab_style',
            [
                'label' => __( 'Tab Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'tab_title_active_color',
            [
                'label' => __('Title Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-expertise .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tab_title_inactive_color',
            [
                'label' => __('Title Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-expertise .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tab_title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-expertise .nav-link',
            ]
        );
        $this->add_control(
            'active_tab_bg_heading',
            [
                'label' => __( 'Active Tab Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'active_tab_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient'],
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-right .apihu-port-about-expertise .nav-link.active',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
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
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __('Button Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a',
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_border_heading',
            [
                'label' => __( 'Button Border Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_border_1_color',
            [
                'label' => __('Border 1 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a' => 'border-image: linear-gradient(to right, {{VALUE}}, #ff0076) 1',
                ],
            ]
        );
        $this->add_control(
            'btn_border_2_color',
            [
                'label' => __('Border 2 Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a' => 'border-image: linear-gradient(to right, #590fb7, {{VALUE}}) 1',
                ],
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
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __('Background Color', 'appilo'),
                'types' => ['gradient'],
                'selector' =>
                    '{{WRAPPER}} .apihu-port-about-area .apihu-port-about-btn a:before',

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $shape1 = $settings['shape_1']['url'];
        $image = $settings['image']['url'];
        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $info = $settings['info'];
        $btn_text = $settings['btn_text'];
        $btn_url = $settings['btn_url']['url'];
        ?>
        <!-- About Start -->
        <div class="apihu-port-about-area" id="apihu-port-resume">
            <img src="<?php echo $shape1; ?>" alt="" class="apihu-port-about-shape">

            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apihu-port-about-left wow slideInLeft">
                            <div class="apihu-port-about-img">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apihu-port-about-right">
                            <h3 class="apihu-port-about-subtitle"><?php echo __($sub_title); ?></h3>
                            <h2 class="apihu-port-about-title"><?php echo __($title); ?></h2>
                            <p class="apihu-port-about-text"><?php echo __($info); ?></p>
                            <div class="apihu-port-about-expertise">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <?php
                                    $i = 0;
                                    foreach ($settings['tab_list'] as $tab):;
                                    $i++;
                                    if ($i == 1){
                                        $active = 'active';
                                    }else{
                                        $active = '';
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $active; ?>" id="pills-home-tab" data-toggle="pill" href="#<?php echo __($tab['_id']); ?>" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo esc_html($tab['tab_title']); ?></a>
                                    </li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                <?php
                                $i = 0;
                                    foreach ($settings['tab_list'] as $tab):;
                                    $i++;
                                    if ($i == 1){
                                        $active = 'active';
                                        $show = 'show';
                                    }else{
                                        $active = '';
                                        $show = '';
                                    }
                                ?>
                                    <div class="tab-pane fade <?php echo $show.' '.$active; ?>" id="<?php echo __($tab['_id']); ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <ul>
                                            <?php echo $tab['tab_desc']; ?>
                                        </ul>
                                    </div>
                                    <?php
                                        endforeach;
                                    ?>

                                </div>
                            </div>
                            <div class="apihu-port-about-btn">
                                <a href="<?php echo $btn_url; ?>"><?php echo __($btn_text); ?><i class="fas fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_about());
