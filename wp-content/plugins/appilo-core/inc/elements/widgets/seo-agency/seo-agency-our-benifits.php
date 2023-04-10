<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_agency_our_benefit extends Widget_Base
{

    public function get_name()
    {
        return 'seo-agency-our-benefit';
    }

    public function get_title()
    {
        return __('Seo Agency Our Benefit', 'appilo');
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
            'info', [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit facilisis.', 'appilo'),
                'label_block' => true,
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
                    '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .column-top .icon-wrapper span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .column-top .icon-wrapper span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'heading-color',
            [
                'label' => __('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .column-top .apldg2-headline h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_typography',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .column-top .apldg2-headline h6',
            ]
        );
        $this->add_control(
            'info-color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .apldg2-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-ct-content .apldg2-ct-column .apldg2-pera-txt p',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="apldg2-ct-content">
            <div class="row">
                    <div class="apldg2-ct-column wow fadeInUp">
                        <div class="column-top">
                            <div class="icon-wrapper">
                                <span><?php Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?></span>
                            </div>
                            <div class="apldg2-headline">
                                <h6><?php echo esc_html($settings['heading']) ?></h6>
                            </div>
                        </div>
                        <div class="apldg2-pera-txt">
                            <p><?php echo esc_html($settings['info']) ?></p>
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

Plugin::instance()->widgets_manager->register_widget_type(new seo_agency_our_benefit());
