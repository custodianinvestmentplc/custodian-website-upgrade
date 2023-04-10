<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_startup_contact extends Widget_Base {

    public function get_name() {
        return 'app-startup-contact';
    }

    public function get_title() {
        return __( 'App Startup Contact', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-flash';
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
            'contacts',
            [
                'label' => __( 'Contact Box', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Office address', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '2 Holt Street, Surry Hills, Australia.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'img', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-startup/icon/gt1.png',
                ],
            ]
        );
        $this->add_control(
            'contact_list',
            [
                'label' => __( 'Contact List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Office address', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Office address', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Office address', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ title }}}',
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-text span',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 52,
                ],
                'selectors' => [
                    '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'ib',
            [
                'label' => __( 'Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
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
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text .str-get-touch-icon',
            ]
        );
        $this->add_control(
            'itbg',
            [
                'label' => __( 'Item BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text',
            ]
        );
        $this->add_control(
            'snh',
            [
                'label' => __( 'Item Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hover_bg',
                'label' => __( 'Item Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text',
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .str-get-in-touch-section .str-get-touch-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .str-get-in-touch-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<!-- Start of get in touch  section
            ============================================= -->            
            <section  class="str-get-in-touch-section">
                <div class="container">
                    <div class="str-get-in-touch-content">
                        <div class="row">';

                    if ( $settings['contact_list'] ) {
                        foreach ($settings['contact_list'] as $contact) {
                            echo '<div class="col-lg-4 '.$contact['_id'].'">
                                <div class="str-get-touch-icon-text">
                                    <div class="str-get-touch-icon text-center float-left">';
                                         \Elementor\Icons_Manager::render_icon($contact['icon'], ['aria-hidden' => 'true']);
                                        echo'<img src="'.$contact['img']['url'].'" alt>
                                    </div>
                                    <div class="str-get-touch-text str-headline">
                                        <h3>'.$contact['title'].'</h3>
                                        <span>'.$contact['info'].'</span>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                        echo'</div>
                </div> 
            </div>
        </section>';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_startup_contact );
?>