<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class prysm_testimonial_slider extends Widget_Base
{

    public function get_name()
    {
        return 'prysm-testimonial-slider';
    }

    public function get_title()
    {
        return __('Prysm Testimonial Slider', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-blockquote';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'testi_lists',
            [
                'label' => __('Testimonial List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'name',
            [
                'label' => __('Name', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Alex D. Denz', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt s gravida----', 'appilo'),
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'testimonial_list',
            [
                'label' => __('Testimonial List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => 'Alex D. Denz',
                    ],
                    [
                        'name' => 'Alex D. Denz',
                    ],
                    [
                        'name' => 'Alex D. Denz',
                    ],

                ],
                'title_field' => '{{{name}}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Content', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-clients-slider .pr1-client-single .pr1-pera-txt span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-clients-slider .pr1-client-single .pr1-pera-txt span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'des_bg',
                'label' => __('Des BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-clients-slider .pr1-client-single .pr1-pera-txt',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border_color',
                'label' => __('Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-clients-slider .pr1-client-single .pr1-pera-txt',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-pera-txt p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr1-clients-slider .pr1-client-single span.quote-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'icon_border',
                'label' => __('Icon Border', 'appilo'),
                'selector' => '{{WRAPPER}} .pr1-clients-slider .pr1-client-single span.quote-icon',
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __('Nav Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg',
                'label' => __('Nav BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-clients-slider-wrapper .slick-dots li button',
            ]
        );
        $this->add_control(
            'mbcasdslogo_h',
            [
                'label' => __('Nav Active Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_h_bg',
                'label' => __('Nav Active BG', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-clients-slider-wrapper .slick-dots li.slick-active button',
            ]
        );
        $this->add_control(
            'mbcasdslogo_h-img',
            [
                'label' => __('Image Background', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_h_bg_img',
                'label' => __('Image Background', 'appilo'),
                'types' => ['classic'],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pr1-clients-slider .pr1-client-single .pr1-clients-thumb',
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();


        echo '<!-- Testimonial Section -->   
        <section class="pr1-testimonial-section">
                <div class="pr1-clients-slider-wrapper">
                    <div class="pr1-clients-slider">';
        if ($settings['testimonial_list']) {
            foreach ($settings['testimonial_list'] as $testimonial) {

                echo '<div class="pr1-client-single">
                            <div class="pr1-clients-quote">
                                <span class="quote-icon"><i class="fas fa-quote-left"></i></span>
                                <div class="pr1-pera-txt">
                                    <p>' . $testimonial['info'] . '<span class="client-name">' . $testimonial['name'] . '</span></p>
                                    
                                </div>
                            </div>
                            <div class="pr1-clients-thumb">
                                <img src="' . $testimonial['image']['url'] . '" alt="">
                            </div>
                        </div>';
            }
        }

        echo '</div>
                </div>

        </section>';
    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new prysm_testimonial_slider);
?>