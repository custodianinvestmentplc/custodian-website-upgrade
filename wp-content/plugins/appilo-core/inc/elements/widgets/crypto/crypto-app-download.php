<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crypto_app_download extends Widget_Base
{

    public function get_name()
    {
        return 'crypto_app_download';
    }

    public function get_title()
    {
        return __('Crypto App Download', 'appilo');
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
            'crypto_app_download_content',
            [
                'label' => __('App Download Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'bg_img',
            [
                'label' => __('Background Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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
            'shape_3',
            [
                'label' => __('Shape 3', 'appilo'),
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
                'default' => esc_html__('Trade on The Mobile App', 'appilo'),
            ]
        );

        $this->add_control(
            'info',
            [
                'label' => esc_html__('Information', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small.', 'appilo'),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'button_img',
            [
                'label' => __('Button Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'btn_sub_title',
            [
                'label' => esc_html__('Button Sub Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get it On', 'appilo'),
            ]
        );

        $repeater->add_control(
            'store_name',
            [
                'label' => esc_html__('Store Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Google Play', 'appilo'),
            ]
        );

        $repeater->add_control(
            'btn_link',
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

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Button List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'store_name' => esc_html__('Google Play', 'appilo'),
                    ],
                    [
                        'store_name' => esc_html__('App Store', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ store_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'style_app_download_section',
            [
                'label' => __('App download Style', 'appilo'),
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
                    '{{WRAPPER}} .cr-app-download-text-wrapper h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Title Typo', 'appilo'),
                'selector' => '{{WRAPPER}} .cr-app-download-text-wrapper h2',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => esc_html__('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-app-download-text-wrapper p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Info Typo', 'appilo'),
                'name' => 'Info_typography',
                'selector' => '{{WRAPPER}} .cr-app-download-text-wrapper p',
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
                    '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn .btn-text span,{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn .btn-text h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_color',
            [
                'label' => esc_html__('Button Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Sub Title Typo', 'appilo'),
                'name' => 'button_sub_title_typography',
                'selector' => '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn .btn-text span',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Store Name Typo', 'appilo'),
                'name' => 'button_store_name_typography',
                'selector' => '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn .btn-text h4',
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
                    '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn a:hover span,{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn a:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_hover_bg_color',
            [
                'label' => esc_html__('Button Hover Background Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-app-download-text-wrapper .cr-app-download-btn a:hover' => 'background-color: {{VALUE}};',
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

        <!-- Start of app download section
            ============================================= -->
        <div id="cr-app-download" class="cr-app-download-section">
            <div class="container crypto-container-1200">
                <div class="cr-app-download-content cr-headline pera-content position-relative" data-background="<?php echo $settings['bg_img']['url']; ?>">
                    <span class="cr-shape2 position-absolute"><img src="<?php echo $settings['shape_1']['url']; ?>" alt=""></span>
                    <div class="cr-shape1 position-absolute">
                        <img src="<?php echo $settings['shape_2']['url']; ?>" alt="">
                    </div>
                    <div class="cr-app-download-img position-absolute">
                        <img src="<?php echo $settings['shape_3']['url']; ?>" alt="">
                    </div>
                    <div class="cr-app-download-text-wrapper">
                        <h2><?php echo $settings['title']; ?></h2>
                        <p><?php echo $settings['info']; ?></p>
                        <div class="cr-app-download-btn d-flex">

                            <?php foreach ($settings['list'] as $item ): ?>

                            <a class="d-flex align-items-center" href="<?php echo $item['btn_link']['url']; ?>">
                                <img src="<?php echo $item['button_img']['url']; ?>" alt="">
                                <div class="btn-text cr-headline">
                                    <span><?php echo $item['btn_sub_title']; ?></span>
                                    <h4><?php echo $item['store_name']; ?></h4>
                                </div>
                            </a>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of app download section
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

Plugin::instance()->widgets_manager->register_widget_type(new crypto_app_download());
?>