<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_integration extends Widget_Base {

    public function get_name() {
        return 'hrm-integration';
    }

    public function get_title() {
        return __( 'HRM Integration', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-text-field';
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
                'default' => __( 'Integrations', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-title-tag',
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
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-title-tag',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The world’s most popular free CRM by number of users', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-section-title h2',
            ]
        );
        $this->add_control(
            'about_txt',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free CRM system for your sales team with all the essential tools – sales funnel, pipeline management, sales reports, 360-degree customer view, support for repeat sales and sales automation.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intregation-details' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intregation-details',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'about_img',
            [
                'label' => __( 'Integration Images', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'about_img_1', [
                'label' => __( 'Integration Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/intregation/in5.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_2', [
                'label' => __( 'Integration Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/intregation/in1.jpg',
                ],
            ]
        );
        $this->add_control(
            'about_img_3', [
                'label' => __( 'Integration Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/intregation/in2.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_4', [
                'label' => __( 'Integration Image 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/intregation/in3.png',
                ],
            ]
        );
        $this->add_control(
            'about_img_5', [
                'label' => __( 'Integration Image 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/intregation/in4.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box',
            [
                'label' => __( 'Integration Item', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'WordPress Supported', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'f_link', [
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
                    'value' => 'fab fa-wordpress',
                    'library' => 'brand',
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
                        'f_title' => __( 'WordPress Supported', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'WordPress Supported', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'WordPress Supported', 'appilo' ),
                    ],
                    [
                        'f_title' => __( 'WordPress Supported', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ f_title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style',
            [
                'label' => __( 'Integration Item Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a .pm-inft-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'f_title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a:hover .pm-inft-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'f_title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a .pm-inft-text',
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
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a .pm-inft-icon i',
            ]
        );
        $this->add_control(
            'f_icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a:hover .pm-inft-icon i' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a .pm-inft-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbasc',
            [
                'label' => __( 'Integration Item Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_item_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a',
            ]
        );
        $this->add_control(
            'mbascas',
            [
                'label' => __( 'Integration Item Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_item_h_bg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a:before',
            ]
        );
        $this->add_responsive_control(
            'item_padding',
            [
                'label' => __( 'Item Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'f_icon_after_color',
            [
                'label' => __( 'Icon After Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section .pm-intregation-text .pm-intr-feature-inner a:after' => 'color: {{VALUE}}',
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
        $this->add_control(
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background Color', 'appilo' ),
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
                'selector' => '{{WRAPPER}} .pm-intregation-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-intregation-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<!-- Start of integrations section
        ============================================= -->
        <section  class="pm-intregation-section">
            <div class="container">
                <div class="pm-intregation-wrapper">
                    <div class="row ' . $settings['style_switcher'] . '">
                        <div class="col-lg-6 col-md-12">
                            <div class="pm-intregation-img position-relative">
                                <div class="intr-circle-shape position-absolute"><img src="' . $settings['about_img_1']['url'] . '" alt></div>
                                <div class="intr-img-top">
                                    <div class="intr-img-item">
                                        <img src="' . $settings['about_img_2']['url'] . '" alt>
                                    </div>
                                    <div class="intr-img-item">
                                        <img src="' . $settings['about_img_3']['url'] . '" alt>
                                    </div>
                                </div>
                                <div class="intr-img-bottom">
                                    <div class="intr-img-item">
                                        <img src="' . $settings['about_img_4']['url'] . '" alt>
                                    </div>
                                    <div class="intr-img-item">
                                        <img src="' . $settings['about_img_5']['url'] . '" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="pm-intregation-text">
                                <div class="pm-section-title pm-headline">
                                    <span class="pm-title-tag">' . $settings['title_txt'] . '</span>
                                    <h2>' . $settings['heading_txt'] . '</h2>
                                </div>
                                <div class="pm-intregation-details">
                                    ' . $settings['about_txt'] . ' 
                                </div>
                                <div class="pm-intregation-feature">';

                            if ( $settings['feature_list'] ) {
                                foreach ($settings['feature_list'] as $feature) {
                                    $target = $feature['f_link']['is_external'] ? ' target="_blank"' : '';
                                    $nofollow = $feature['f_link']['nofollow'] ? ' rel="nofollow"' : '';

                                    echo '<div class="pm-intr-feature-inner position-relative wow fadeFromUp" data-wow-delay="'.$feature['f_animate_delay'].'" data-wow-duration="1500ms">
                                        <a ' . $target . $nofollow . ' href=" '.$feature['f_link']['url'].'">
                                            <div class="pm-inft-icon float-left">';
                                                \Elementor\Icons_Manager::render_icon($feature['f_icon'], ['aria-hidden' => 'true']);
                                            echo'</div>
                                            <div class="pm-inft-text">
                                                '.$feature['f_title'].'
                                            </div>
                                        </a>
                                    </div>';
                                }
                            }
                                echo'</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of integrations section
        ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_integration );
?>