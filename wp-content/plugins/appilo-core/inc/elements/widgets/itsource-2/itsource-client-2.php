<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_client_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_client_2';
    }

    public function get_title()
    {
        return __('ItSource Client 2', 'appilo');
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
            'itsource_client_content',
            [
                'label' => __('ITsource Client Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our happy clients all over worlds', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'number',
            [
                'label' => esc_html__('Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('1,287,633', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'it_client_details',
            [
                'label' => __( 'Client Details', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'logo',
            [
                'label' => esc_html__( 'Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'hover_logo',
            [
                'label' => esc_html__( 'Hover Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'Background Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Client List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                ],

            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_Client',
            [
                'label' => __('Client Style', 'appilo'),
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
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-client-area .thx-it-client-number h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Title_typo',
                'label' => esc_html__('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-client-area .thx-it-client-number h3',
            ]
        );
        $this->add_control(
            'number_color',
            [
                'label' => esc_html__('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-client-area .thx-it-client-number h3 strong' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Number_typo',
                'label' => esc_html__('Number Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-client-area .thx-it-client-number h3 strong',
            ]
        );
        $this->add_control(
            'client_logo_bg',
            [
                'label' => esc_html__('Logo BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-client-area .thx-it-client-item-list li' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'client_logo_hover_bg',
            [
                'label' => esc_html__('Logo Hover BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-client-area .thx-it-client-item-list li:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();



    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <!-- Start of Client section
            ============================================= -->
        <div class="thx-it-client-area">
            <div class="container container-1200">
                <div class="thx-it-client-number headline-1 text-center">
                    <h3><?php echo $settings['title']; ?> <strong class="thx-it-counter"><?php echo $settings['number']; ?></strong></h3>
                </div>
                <div class="row">
                    <div class="thx-it-client-item-list ul-li clearfix">
                        <ul>
                        <?php foreach ($settings['list'] as $item):; ?>
                            <li>
                                <div class="thx-it-client-img-bg">
                                    <div class="c-img-1">
                                        <img src="<?php echo $item['logo']['url']; ?>" alt="">
                                    </div>
                                    <div class="c-hover-img">
                                        <img src="<?php echo $item['hover_logo']['url']; ?>" alt="">
                                    </div>
                                    <div class="c-hover-bg">
                                        <img src="<?php echo $item['bg_img']['url']; ?>" alt="">
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Client section
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

Plugin::instance()->widgets_manager->register_widget_type(new itsource_client_2());
?>