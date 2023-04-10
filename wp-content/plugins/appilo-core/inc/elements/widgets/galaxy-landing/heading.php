<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_heading extends Widget_Base {

    public function get_name() {
        return 'galaxy-heading';
    }

    public function get_title() {
        return __( 'Section Heading', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-editor-h3';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'features', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_text',
            [
                'label' => __( 'Heading Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Awesome international app design', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_text_color',
            [
                'label' => __( 'Heading Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .galaxy .heading-element .section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_text_style',
                'label' => __( 'Heading Text Style', 'appilo' ),
                'selector' => '{{WRAPPER}} .galaxy .heading-element .section-title h2',
            ]
        );
        $this->add_control(
            'heading_align',
            [
                'label' => __( 'Heading Align', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'center',
                'options' => [
                    'text-left'  => __( 'Left', 'appilo' ),
                    'text-center' => __( 'Center', 'appilo' ),
                    'text-right' => __( 'Right', 'appilo' ),
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'heading_border_bg',
                'label' => __( 'Border Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .heading-element .section-title h2:after',
            ]
        );
        $this->add_control(
            'heading_info',
            [
                'label' => __( 'Heading Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_info_color',
            [
                'label' => __( 'Heading Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .heading-element .section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_info_style',
                'label' => __( 'Heading Info Style', 'appilo' ),
                'selector' => '{{WRAPPER}} .heading-element .section-title p',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( 'text-left' === $settings['heading_align'] ) {
            echo '<style>
                .heading-element .section-title h2:after{
                        left: 0;
                        -webkit-transform: none;
                        transform: none;
                }
            </style>';
        }
        echo '<!-- start section-title -->
                <div class="heading-element" >
                    <div class="section-title">
                        <h2 class="'.$settings['heading_align'].'">'.$settings['heading_text'].'</h2>
                        <p class="'.$settings['heading_align'].'">'.$settings['heading_info'].'</p>
                    </div> 
                </div>
            <!-- end section-title -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_heading );
?>