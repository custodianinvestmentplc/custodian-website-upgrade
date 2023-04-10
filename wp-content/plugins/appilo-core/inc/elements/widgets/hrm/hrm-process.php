<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_process extends Widget_Base {

    public function get_name() {
        return 'hrm-process';
    }

    public function get_title() {
        return __( 'HRM Process', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-sitemap';
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
            'title_txt',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Process', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-process-section .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-process-section .pm-title-tag',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_bg_bg',
                'label' => __( 'After BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-process-section .pm-title-tag',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'What Is Appilo', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-process-section .pm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-process-section .pm-section-title h2',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box',
            [
                'label' => __( 'Process Step', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_number',
            [
                'label' => __( 'Step', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '01', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Communications', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/icon/pf1.png',
                ],
            ]
        );
        $repeater->add_control(
            'f_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Process Steps', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_number' => __( '01', 'appilo' ),
                    ],
                    [
                        'f_number' => __( '01', 'appilo' ),
                    ],
                    [
                        'f_number' => __( '01', 'appilo' ),
                    ],
                    [
                        'f_number' => __( '01', 'appilo' ),
                    ],
                    [
                        'f_number' => __( '01', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ f_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_styles',
            [
                'label' => __( 'Process Steps Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-process-icon-text .pm-process-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-process-icon-text .pm-process-text h3',
            ]
        );
        $this->add_control(
            'f_num_color_c',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-process-icon-text .pm-process-icon span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_num_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-process-icon-text .pm-process-icon span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-process-icon-text .pm-process-icon span',
            ]
        );
        $this->add_control(
            'f_icon_c_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-process-icon-text .pm-process-icon i' => 'color: {{VALUE}}',
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
                'selectors' => [
                    '{{WRAPPER}} .pm-process-icon-text .pm-process-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbcasds',
            [
                'label' => __( 'Steps Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'step_bg',
                'label' => __( 'Step BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-process-icon-text .pm-process-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Steps Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-process-icon-text .pm-process-icon',
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
        $this->add_control(
            'about_img_1', [
                'label' => __( 'Process Arrow', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/shape/pp1.png',
                ],
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-process-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-process-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo ' <!-- Start of process  section
        ============================================= -->                            
        <section  class="pm-process-section position-relative">
            <div class="pm-process-line position-absolute"><img src="' . $settings['about_img_1']['url'] . '" alt></div>
            <div class="container">
                <div class="pm-section-title pm-headline text-center">
                    <span class="pm-title-tag">' . $settings['title_txt'] . '</span>
                    <h2>' . $settings['heading_txt'] . '</h2>
                </div>
                <div class="pm-process-wrapper">';

        if ( $settings['feature_list'] ) {
            foreach ($settings['feature_list'] as $feature) {
                echo '<div class="pm-process-icon-text">
                        <div class="pm-process-icon position-relative text-center">';
                if ($feature['f_image']['url']) {
                    echo '<img src="' . $feature['f_image']['url'] . '" alt>';
                }if ($feature['f_icon']) {
                    \Elementor\Icons_Manager::render_icon($feature['f_icon'], ['aria-hidden' => 'true']);
                }
                            echo'<span>'.$feature['f_number'].'</span>
                        </div>
                        <div class="pm-process-text text-center pm-headline text-capitalize">
                            <h3>'.$feature['f_title'].'</h3>
                        </div>
                    </div>';
            }
        }
                echo'</div>
            </div>
        </section>
    <!-- End of process section
        ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_process );
?>