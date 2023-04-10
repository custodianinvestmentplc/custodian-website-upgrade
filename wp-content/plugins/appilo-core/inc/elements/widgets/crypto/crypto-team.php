<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crypto_team extends Widget_Base
{

    public function get_name()
    {
        return 'crypto_team';
    }

    public function get_title()
    {
        return __('Crypto Team', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-number-field';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'crypto_team_content',
            [
                'label' => __('Team Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_1',
            [
                'label' => __('Shape 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_2',
            [
                'label' => __('Shape 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Motivated Team', 'appilo'),
            ]
        );

        $this->add_control(
            'info',
            [
                'label' => esc_html__('Information', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('The main reason for using lorem ipsum text is that it keeps people from focusing on the actual text.', 'appilo'),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'team_member_img',
            [
                'label' => __('Member Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'member_name',
            [
                'label' => esc_html__('Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Jane Cooper', 'appilo'),
            ]
        );

        $repeater->add_control(
            'member_info',
            [
                'label' => esc_html__('Member Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Investor in firm', 'appilo'),
            ]
        );

        $repeater->add_control(
            'social_1',
            [
                'label' => esc_html__('Social Name 1', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Twitter', 'appilo'),
            ]
        );

        $repeater->add_control(
            'social_1_link',
            [
                'label' => esc_html__( 'Social Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

        $repeater->add_control(
            'social_2',
            [
                'label' => esc_html__('Social Name 2', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Dribbble', 'appilo'),
            ]
        );

        $repeater->add_control(
            'social_2_link',
            [
                'label' => esc_html__( 'Social Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

        $repeater->add_control(
            'social_3',
            [
                'label' => esc_html__('Social Name 3', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Behance', 'appilo'),
            ]
        );

        $repeater->add_control(
            'social_3_link',
            [
                'label' => esc_html__( 'Social Link 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Team List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => esc_html__('Jane Cooper', 'appilo'),
                    ],
                    [
                        'member_name' => esc_html__('Jenny Wilson', 'appilo'),
                    ],
                    [
                        'member_name' => esc_html__('Eleanor Pena', 'appilo'),
                    ],
                    [
                        'member_name' => esc_html__('Leslie Alexander', 'appilo'),
                    ],
                    [
                        'member_name' => esc_html__('Robert Fox', 'appilo'),
                    ],
                    [
                        'member_name' => esc_html__('Floyd Miles', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('More Member', 'appilo'),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_team_section',
            [
                'label' => __('Team Style', 'appilo'),
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
                    '{{WRAPPER}} .crypto-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Title Typo', 'appilo'),
                'selector' => '{{WRAPPER}} .cr-section-title h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-section-title.text-center p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Info Typo', 'appilo'),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-section-title.text-center p',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team_member_style',
            [
                'label' => __( 'Team Member Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'member_name_color',
            [
                'label' => esc_html__('Member Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-inner-item .thx-inner-text h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Member Name Typo', 'appilo'),
                'name' => 'Member_Name_typography',
                'selector' => '{{WRAPPER}} .cr-team-inner-item .thx-inner-text h3',
            ]
        );

        $this->add_control(
            'Member_Info_color',
            [
                'label' => esc_html__('Member Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-inner-item .thx-inner-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Member Info Typo', 'appilo'),
                'name' => 'Member_Info_typography',
                'selector' => '{{WRAPPER}} .cr-team-inner-item .thx-inner-text p',
            ]
        );

        $this->add_control(
            'Member_social_name_color',
            [
                'label' => esc_html__('Social Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-inner-item .thx-inner-text .social-link a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Social Name Typo', 'appilo'),
                'name' => 'Social_Name_typography',
                'selector' => '{{WRAPPER}} .cr-team-inner-item .thx-inner-text .social-link a',
            ]
        );

        $this->add_control(
            'team_member_bg',
            [
                'label' => esc_html__('Box BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-inner-item .thx-inner-item' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'team_member_hover_bg',
            [
                'label' => esc_html__('Box Hover BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-inner-item .thx-inner-item:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'button_style',
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
                'label' => esc_html__('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-content .cr-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_color',
            [
                'label' => esc_html__('Button Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-content .cr-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Typo', 'appilo'),
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .cr-team-content .cr-btn a',
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
                'label' => esc_html__('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-content .cr-btn a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_hover_bg_color',
            [
                'label' => esc_html__('Button Hover Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-team-content .cr-btn a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        ?>

        <!-- Start of Team section
            ============================================= -->
        <div id="cr-team" class="cr-team-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>"
                                                           alt=""></span>
            <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_2']['url']; ?>"
                                                           alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-section-title text-center cr-headline wow fadeFromUp" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <h2><?php echo $settings['title']; ?></h2>
                    <p><?php echo $settings['info']; ?></p>
                </div>
                <div class="cr-team-content">
                    <div class="row">

                        <?php foreach ($settings['list'] as $item) : ?>

                            <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <div class="cr-team-inner-item">
                                    <div class="thx-inner-item d-flex align-items-center">
                                        <div class="thx-inner-img">
                                            <img src="<?php echo $item['team_member_img']['url']; ?>" alt="">
                                        </div>
                                        <div class="thx-inner-text cr-headline pera-content">
                                            <h3><?php echo $item['member_name']; ?></h3>
                                            <p><?php echo $item['member_info']; ?></p>
                                            <div class="social-link">

                                                <?php if ($item['social_1']): ?>
                                                    <a href="<?php echo $item['social_1_link']['url']; ?>">
                                                        <?php echo $item['social_1']; ?>
                                                    </a>
                                                <?php endif; ?>

                                                <?php if ($item['social_2']): ?>
                                                    <a href="<?php echo $item['social_2_link']['url']; ?>">
                                                        <?php echo $item['social_2']; ?>
                                                    </a>
                                                <?php endif; ?>

                                                <?php if ($item['social_3']): ?>
                                                    <a href="<?php echo $item['social_3_link']['url']; ?>">
                                                        <?php echo $item['social_3']; ?>
                                                    </a>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                    <div class="cr-btn d-flex justify-content-center wow fadeFromUp" data-wow-delay="1200ms"
                         data-wow-duration="1500ms">
                        <a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['button_link']['url']; ?>">
                            <?php echo $settings['button_text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Team section
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

Plugin::instance()->widgets_manager->register_widget_type(new crypto_team());
?>