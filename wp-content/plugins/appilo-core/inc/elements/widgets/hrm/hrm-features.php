<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_features extends Widget_Base {

    public function get_name() {
        return 'hrm-features';
    }

    public function get_title() {
        return __( 'HRM Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-gallery-masonry';
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
                'default' => __( 'Features #01', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-title-tag',
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
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-title-tag',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'CRM for sales teams', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-section-title h2',
            ]
        );
        $this->add_control(
            'about_txt',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free CRM system for your sales team with all the essential tools sales funnel, pipeline management, sales reports, 360-degree customer view, support for repeat sales', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-intregation-details' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-intregation-details',
            ]
        );
        $this->add_control(
            'about_img_1', [
                'label' => __( 'Feature Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/feature/fp1.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box',
            [
                'label' => __( 'Feature Item', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free CRM system for your sales team', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'f_icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-eye',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'Free CRM system for your sales team', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'Free CRM system for your sales team', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'Free CRM system for your sales team', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'Free CRM system for your sales team', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ f_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_styles',
            [
                'label' => __( 'Features Item Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-item-content .pm-f-process-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-item-content .pm-f-process-text',
            ]
        );
        $this->add_control(
            'f_icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_icon_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-item-content .pm-f-process-icon',
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
                    '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-item-content .pm-f-process-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-item-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_responsive_control(
            'feature_style',
            [
                'label' => __( 'Features Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'pm-image-left',
                'options' => [
                    'pm-content-left'  => __( 'Content Left', 'appilo' ),
                    'pm-image-left' => __( 'Image Left', 'appilo' ),
                ],
            ]
        );
        $this->add_responsive_control(
            'image_animation',
            [
                'label' => __( 'Image Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'fadeInLeft',
                'options' => [
                    'fadeInLeft'  => __( 'Fade From Left', 'appilo' ),
                    'fadeInRight' => __( 'Fade From Right', 'appilo' ),
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_shadow',
                'label' => __( 'Image Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process .pm-f-process-img',
            ]
        );
        $this->add_control(
            'mbcasd',
            [
                'label' => __( 'Feature Box After BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bga_color',
                'label' => __( 'Main After BG', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process:after',
            ]
        );
        $this->add_responsive_control(
            'feature_box_overflow',
            [
                'label' => __( 'After BG Overflow', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'overflow-hidden',
                'options' => [
                    'overflow-visible'  => __( 'Visible', 'appilo' ),
                    'overflow-hidden' => __( 'Hidden', 'appilo' ),
                ],
            ]
        );
        $this->add_responsive_control(
            'box_after',
            [
                'label' => __( 'Display Box After BG', 'elementor' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none'  => __( 'None', 'appilo' ),
                    'block' => __( 'Block', 'appilo' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process:after' => 'display: {{VALUE}} !important',
                ],
                'default' => '',
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Feature Box Background', 'appilo' ),
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
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-feature-section-2 .pm-feature-content-2 .pm-feature-process',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<section   class="pm-feature-section-2 ' . $settings['feature_box_overflow'] . '"> <div class="pm-feature-content-2">
        <div class="container">
            <div class="pm-feature-process position-relative">
                <div class="row">
                    <div class="col-md-12">
                 <div class="pm-feature-item2 ' . $settings['feature_style'] . '">
                            <div class="pm-section-title pm-headline">
                                <span class="pm-title-tag">' . $settings['title_txt'] . '</span>
                                <h2>' . $settings['heading_txt'] . '</h2>
                            </div>
                            <div class="pm-feature-item-details">
                                ' . $settings['about_txt'] . '  
                            </div>
                            <div class="pm-feature-process-list">';
                        if ( $settings['feature_list'] ) {
                            foreach ($settings['feature_list'] as $feature) {
                                echo '<div class="pm-feature-item-content wow fadeFromUp" data-wow-delay="'.$feature['f_animate_delay'].'" data-wow-duration="1500ms">
                                    <div class="pm-f-process-icon text-center float-left">';
                                            \Elementor\Icons_Manager::render_icon($feature['f_icon'], ['aria-hidden' => 'true']);
                                    echo'</div>
                                    <div class="pm-f-process-text">
                                        '.$feature['f_title'].'
                                    </div>
                                </div>';
                            }
                        }
                            echo'</div>
                        </div>
                    </div>
                    <div class="pm-f-process-img ' . $settings['feature_style'] . ' position-absolute wow ' . $settings['image_animation'] . '" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="' . $settings['about_img_1']['url'] . '" alt>
                    </div>
            </div>
        </div>
    </div>
   </div>';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_features );
?>