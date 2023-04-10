<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_partner extends Widget_Base {

    public function get_name() {
        return 'app-showcase-partner';
    }

    public function get_title() {
        return __( 'Partner', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-carousel';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'title_icon',
            [
                'label' => __( 'Title Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-gem',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Trusted by 12,00 companies!', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-partner-text h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-partner-text h4',
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We have more than 1200+ trusted clients around World wide.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-partner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-partner-text p',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'screenshots_items',
            [
                'label' => __( 'Screenshots Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'partner_image', [
                'label' => __( 'Partner Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/partner/p1.png',
                ],
            ]
        );

        $this->add_control(
            'partner_list',
            [
                'label' => __( 'Partner List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'partner_image' => '',
                    ], [
                        'partner_image' => '',
                    ], [
                        'partner_image' => '',
                    ], [
                        'partner_image' => '',
                    ], [
                        'partner_image' => '',
                    ], [
                        'partner_image' => '',
                    ],

                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-partner-text .ei-partner-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-partner-text .ei-partner-icon',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-partner-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Start of Partner  section
    ============================================= -->
<section  class="ei-partner-section">
    <div class="container">
        <div class="ei-partner-content">
            <div id="ei-partner-slide" class="partner-slide-area owl-carousel">';
        if ( $settings['partner_list'] ) {
            foreach ($settings['partner_list'] as $partner) {
                echo '<div class="partner-img dynamic-screenshots-' . $partner['_id'] . '">
                        <img src="' . $partner['partner_image']['url'] . '" alt>
                    </div>';
                    }
                }
            echo'</div>
            <div class="ei-partner-text appeight-headline pera-content">
                <div class="ei-partner-icon text-center float-left">';
                    \Elementor\Icons_Manager::render_icon( $settings['title_icon'], [ 'aria-hidden' => 'true' ] );
                echo'</div>
                <h4>'.$settings['section_title'].'</h4>
                <p>'.$settings['section_info'].'</p>
            </div>
        </div>
    </div>
</section>
<!-- End  of Partner  section
    ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_partner );
?>