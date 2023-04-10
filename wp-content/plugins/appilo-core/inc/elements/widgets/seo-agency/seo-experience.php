<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class seo_experience extends Widget_Base
{

    public function get_name()
    {
        return 'seo-experience';
    }

    public function get_title()
    {
        return __('Seo Agency Experience', 'appilo');
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
            'project_content',
            [
                'label' => __( 'Project Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'img',
            [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'number',
            [
                'label' => __( 'Experience', 'appilo' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'step' => 1,
                'default' => 25,
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'style-tab',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'exp_number_heading',
            [
                'label' => __( 'Experience Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'exp_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content span.number-txt',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'exp_typo',
                'label' => __( 'Experience Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content span.number-txt',
            ]
        );
        $this->add_control(
            'exp_icon_heading',
            [
                'label' => __( 'Plus Icon Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content .plus-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'icon_typo',
                'label' => __( 'Plus Icon Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content .plus-icon',
            ]
        );
        $this->add_responsive_control(
            'icon_alignment_1',
            [
                'label' => __( 'Vertical', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content .plus-icon' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_alignment_2',
            [
                'label' => __( 'Horizontal', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .apldg2-skills-area .apldg2-skills-left .apldg2-sk-content .plus-icon' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $img = $settings['img'];
        $number = $settings['number'];
        $icon = $settings['icon'];

        ?>
        <div class="apldg2-skills-area">
            <div class="apldg2-skills-left wow fadeInLeft">
                <div class="apldg2-sk-content">
                    <img src="<?php echo esc_url($img['url'])?>" alt="">
                    <span class="number-txt"><?php echo esc_html($number)?></span>
                    <span class="plus-icon">
                        <?php \Elementor\Icons_Manager::render_icon( $icon, [ 'aria-hidden' => 'true' ] ); ?>
                    </span>
                </div>
            </div>
        </div>

        <?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new seo_experience());