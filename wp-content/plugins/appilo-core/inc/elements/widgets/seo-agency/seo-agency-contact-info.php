<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_contact_info extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-contact-info';
    }

    public function get_title()
    {
        return __('Seo Agency Contact Info', 'appilo');
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
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-light-bulb',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'heading', [
                'label' => __('Heading', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('We\'re committed to create a change that matters', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
        'info_url',
            [
                'label' => __( 'Link', 'appilo' ),
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
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-content .icon-wrapper span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-content .icon-wrapper span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'heading-color',
            [
                'label' => __('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-content .apldg2-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typography',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-content .apldg2-headline h5',
            ]
        );
        $this->add_control(
            'btn-icon-color',
            [
                'label' => __('Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-readmore a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn-icon-bg',
            [
                'label' => __('Button Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-readmore a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn-hover-style',
            [
                'label' => __( 'Button Hover Style', 'Appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn-hover-color',
            [
                'label' => __('Button Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-readmore a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn-hover-background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-contact-info .ct-info-top .ct-info-left .ct-info-readmore a::after',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="apldg2-contact-info">
            <div class="ct-info-top">
                <div class="row align-items-center">
                        <div claSs="ct-info-left">
                            <div class="ct-info-content">
                                <div class="icon-wrapper">
                                    <span>
                                        <?php Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
                                    </span>
                                </div>
                                <div class="apldg2-headline">
                                    <h5><?php echo esc_html($settings['heading']) ?></h5>
                                </div>
                            </div>
                            <div class="ct-info-readmore">
                                <a href="<?php echo esc_url($settings['info_url']['url']); ?>"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_contact_info());
