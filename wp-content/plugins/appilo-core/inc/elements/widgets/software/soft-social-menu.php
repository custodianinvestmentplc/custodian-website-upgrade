<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class software_social_menu extends Widget_Base {

    public function get_name() {
        return 'software-social-menu';
    }

    public function get_title() {
        return __( 'Social + Menu', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-menu-bar';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'social_lists',
            [
                'label' => __( 'Social List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'social_title',
            [
                'label' => __( 'Social List Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Follow Us On:', 'appilo' ),
            ]
        );
        $this->add_control(
            'social_title_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            's_icon',
            [
                'label' => __( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            's_link', [
                'label' => __( 'Social Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'social_list',
            [
                'label' => __( 'Social List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        's_link' =>'#',
                    ],
                    [
                        's_link' =>'#',
                    ],
                    [
                        's_link' =>'#',
                    ],
                    [
                        's_link' =>'#',
                    ],

                ],
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => __( 'Social Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .sm-side_inner_content .side_contact .social_widget li',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'menu_lists',
            [
                'label' => __( 'Menu List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'menu_text',
            [
                'label' => __( 'Menu Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Company', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'link', [
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
        $this->add_control(
            'menu_list',
            [
                'label' => __( 'Menu List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'menu_text' =>'Company',
                    ],
                    [
                        'menu_text' =>'Company',
                    ],
                    [
                        'menu_text' =>'Company',
                    ],
                    [
                        'menu_text' =>'Company',
                    ],
                ],
                'title_field' => '{{{ menu_text }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'sidebar_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-contact span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-footer-contact span',
            ]
        );
        $this->add_control(
            'menu_color',
            [
                'label' => __( 'Menu Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-top-menu li a, 
                    {{WRAPPER}} .soft-m-footer-top-menu li a:visited' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'menu_h_color',
            [
                'label' => __( 'Menu Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-top-menu li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'menu_typo',
                'label' => __( 'Menu Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-footer-top-menu li a, 
                    {{WRAPPER}} .soft-m-footer-top-menu li a:visited',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-contact a svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-footer-contact a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mbcasdslogo',
            [
                'label' => __( 'Social Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'social_bg',
                'label' => __( 'Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-footer-contact a',
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-contact a:hover svg' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-footer-contact a:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'mbcasdslogaso',
            [
                'label' => __( 'Social Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'social_h_bg',
                'label' => __( 'Social Hover BG', 'appilo' ),
                'types' => [  'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-footer-contact a:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'social_border',
                'label' => __( 'Social Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-footer-contact a',
            ]
        );
        $this->add_responsive_control(
            'social_border_radius',
            [
                'label' => __( 'Social Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-contact a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'label' => __( 'Section Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-footer-top-content',
            ]
        );
        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => __( 'Section Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-top-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label' => __( 'Section Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-top-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-footer-top-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<section  class="soft-m-social-menu">
    <div class="soft-m-footer-top">
        <div class="container">
            <div class="soft-m-footer-top-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="soft-m-footer-contact">
                            <span>' . $settings['social_title'] . '</span>';
                        if ( $settings['social_list'] ) {
                            foreach ($settings['social_list'] as $social) {
                                $social_link = get_that_link($social['s_link']);
                            echo '<a '.$social_link.'>';\Elementor\Icons_Manager::render_icon($social['s_icon'], ['aria-hidden' => 'true']);echo'</a>';
                            }
                        }
                    echo'</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="soft-m-footer-top-menu ul-li">
                            <ul>';
                        if ( $settings['menu_list'] ) {
                            foreach ($settings['menu_list'] as $menu) {
                                $menu_link = get_that_link($menu['link']);
                            echo '<li><a '.$menu_link.'>' . $menu['menu_text'] . '</a></li>';
                            }
                        }
                    echo'</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new software_social_menu );
?>