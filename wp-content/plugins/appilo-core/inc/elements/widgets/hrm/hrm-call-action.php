<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hrm_call_action extends Widget_Base {

    public function get_name() {
        return 'hrm-call-action';
    }

    public function get_title() {
        return __( 'HRM Call To Action', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-call-to-action';
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
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Call To Action', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-section-title .pm-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} ..pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-section-title .pm-title-tag',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bgeerewr6465454',
                'label' => __( 'Title Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-section-title .pm-title-tag',
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get This App Now, As a Trail', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-section-title h2',
            ]
        );
        $this->add_control(
            'info',
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
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content p',
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => __( 'Button Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get Started Now', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_url', [
                'label' => __( 'Button Link', 'appilo' ),
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
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(1)' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(1)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465454',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(1)',
            ]
        );
        $this->add_control(
            'btn_h_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(1):hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg6465',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(1):hover',
            ]
        );
        $this->add_control(
            'btn2',
            [
                'label' => __( 'Button 2 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn2_url', [
                'label' => __( 'Button 2 Link', 'appilo' ),
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
            'btn2_color',
            [
                'label' => __( 'Button 2 Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(2)' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn2_fonts',
                'label' => __( 'Button 2 Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(2)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn2_bg6465454',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(2)',
            ]
        );
        $this->add_control(
            'btn2_h_color',
            [
                'label' => __( 'Button 2 Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(2):hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn2_bg64651',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper .pm-call-action-content .pm-call-action-btn a:nth-child(2):hover',
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
            'pattern_bg_1', [
                'label' => __( 'Shape Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/shape/csh1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Shape Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/shape/csh2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Shape Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/shape/csh3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Shape Background 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/hrm/shape/csh4.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_main',
                'label' => __( 'Slider Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pm-call-to-action-section .call-to-action-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $target1 = $settings['btn_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow1 = $settings['btn_url']['nofollow'] ? ' rel="nofollow"' : '';
        $target2 = $settings['btn2_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow2 = $settings['btn2_url']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<!-- Start of call to action  section
        ============================================= --> 
        <section  class="pm-call-to-action-section position-relative">
            <div class="container">
                <div class="call-to-action-wrapper position-relative">
                    <span class="pm-banner-shape1 position-absolute"><img src="'.$settings['pattern_bg_1']['url'].'" alt></span>
                    <span class="pm-banner-shape2 position-absolute"><img src="'.$settings['pattern_bg_2']['url'].'" alt></span>
                    <span class="pm-banner-shape3 position-absolute"><img src="'.$settings['pattern_bg_3']['url'].'" alt></span>
                    <span class="pm-banner-shape4 position-absolute"><img src="'.$settings['pattern_bg_4']['url'].'" alt></span>
                    <div class="pm-call-action-content pm-headline position-relative text-center pera-content">
                        <div class="pm-section-title text-center pm-headline">
                            <span class="pm-title-tag">'.$settings['title'].'</span>
                            <h2>'.$settings['heading'].'</h2>
                        </div>
                        <p>'.$settings['info'].'</p>
                        <div class="pm-call-action-btn text-capitalize">';

                        if($settings['btn_url']['url']) {
                            echo ' <a href="' . $settings['btn_url']['url'] . '" ' . $target1 . $nofollow1 . '>' . $settings['btn'] . '</a>';
                        }if($settings['btn2_url']['url']) {
                            echo ' <a href="' . $settings['btn2_url']['url'] . '" ' . $target2 . $nofollow2 . '>' . $settings['btn2'] . '</a>';
                        }

                       echo' </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of call to action  section
        ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hrm_call_action );
?>