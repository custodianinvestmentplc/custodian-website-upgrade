<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-testimonial';
    }

    public function get_title()
    {
        return __('Seo Agency Testimonial', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-number-field';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle', [
                'label' => __('Sub Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Testimonial', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('What Clients Say About Us', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'info', [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.', 'appilo'),
                'label_block' => true,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => __( 'Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Adam Zampa', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'designation',
            [
                'label' => __( 'Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Graphics Designer', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'comment',
            [
                'label' => __( 'Comment', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo' ),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __('Client List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => __('Adam Zampa', 'appilo'),
                    ],
                    [
                        'name' => __('Adam Zampa', 'appilo'),
                    ],
                    [
                        'name' => __('Adam Zampa', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ name }}}',
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
            'icon_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-title-area .apldg2-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typo',
                'label' => __('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-title-area .apldg2-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-title-area .apldg2-headline h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-title-area .apldg2-headline h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-left .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-left .apldg2-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'testimonial_style',
            [
                'label' => __('Testimonial Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'name_color',
            [
                'label' => __('Name Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-feedback-single .apldg2-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_typo',
                'label' => __('Name Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-feedback-single .apldg2-headline h6',
            ]
        );
        $this->add_control(
            'designation_color',
            [
                'label' => __('Designation Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .apldg2-feedback-single .clients-info .apldg2-designation span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typo',
                'label' => __('Designation Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .apldg2-feedback-single .clients-info .apldg2-designation span',
            ]
        );
        $this->add_control(
            'comment_color',
            [
                'label' => __('Comment Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-feedback-single .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'comment_typo',
                'label' => __('Comment Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apldg2-feedback-single .apldg2-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_btn',
            [
                'label' => __( 'Slider Button Style', 'appilo' ),
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
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .slick-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .slick-arrow::after',
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
                    '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .slick-arrow:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-testimonial-area .apldg2-feedback-slider .slick-arrow:hover::after',
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
        <!-- Testimonial Area -->
        <div class="apldg2-testimonial-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="apldg2-feedback-left wow fadeInUp">
                        <div class="apldg2-title-area">
                            <span class="apldg2-subtitle"><?php echo esc_html($settings['subtitle']); ?></span>
                            <div class="apldg2-headline">
                                <h3><?php echo esc_html($settings['title']); ?></h3>
                            </div>
                            <div class="apldg2-pera-txt">
                                <p><?php echo esc_html($settings['info']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apldg2-feedback-slider">
                    <?php foreach ($settings['list'] as $item): ?>
                        <div class="apldg2-feedback-single">
                            <div class="thumb-wrapper">
                                <img src="<?php echo esc_url($item['image']['url']); ?>" alt="">
                            </div>
                            <div class="clients-info">
                                <div class="apldg2-headline">
                                    <h6><?php echo esc_html($item['name']); ?></h6>
                                </div>
                                <div class="apldg2-designation">
                                    <span><?php echo esc_html($item['designation']); ?></span>
                                </div>
                            </div>
                            <div class="apldg2-pera-txt">
                                <p><?php echo esc_html($item['comment']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_testimonial());
