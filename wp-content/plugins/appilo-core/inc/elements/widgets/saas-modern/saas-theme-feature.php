<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_theme_feature extends Widget_Base {

    public function get_name() {
        return 'saas-theme-feature';
    }

    public function get_title() {
        return __( 'SaaS Theme Feature', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-posts-ticker';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'theme_feature', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'left_feature',
            [
                'label' => __( 'Left Feature', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_heading_left',
            [
                'label' => __( 'Section Heading Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Appilo theme for SAAS', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info_left',
            [
                'label' => __( 'Section Content Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'See which features and content are driving your site’s conversions.', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_list_left',
            [
                'label' => __( 'Section List Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li> Convert more trials into paying customers</li>
                                    <li> Reduce churn</li>
                                    <li> Generate more revenue per customer</li>
                                    <li> Measure monthly recurring revenue by cohort</li>
                                    <li> Lifetime value by customer type</li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_left',
            [
                'label' => __( 'Section Button Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read more', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url_left', [
                'label' => __( 'Feature Button Link Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'right_feature',
            [
                'label' => __( 'Right Feature', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_heading_right',
            [
                'label' => __( 'Section Heading Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Appilo theme for SAAS', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info_right',
            [
                'label' => __( 'Section Content Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'See which features and content are driving your site’s conversions.', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_list_right',
            [
                'label' => __( 'Section List Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li> Easily integrate with Shopify</li>
                                <li> Optimize your checkout funnel</li>
                                <li> Increase new and repeat purchases</li>
                                <li> See lifetime value by category</li>
                                <li> Report on subscription revenue</li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_right',
            [
                'label' => __( 'Section Button Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Read more', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url_right', [
                'label' => __( 'Feature Button Link Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
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
            'button_style_left',
            [
                'label' => __( 'Style Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'left_text_color',
            [
                'label' => __( 'Left Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_feature_area .theme_feature_content h3, 
                    {{WRAPPER}} .theme_feature_area .theme_feature_content p, 
                    {{WRAPPER}} .theme_feature_area .theme_feature_content .theme_feature_list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'left_background',
                'label' => __( 'Left Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .theme_feature_area .features_one',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_left',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .theme_feature_area .read_btn:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background_left',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic' ,'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .theme_feature_area .read_btn',
            ]
        );
        $this->add_control(
            'button_color_left',
            [
                'label' => __( 'Button Color Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_feature_area .read_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_style_right',
            [
                'label' => __( 'Style Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'right_text_color',
            [
                'label' => __( 'Right Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_feature_area .features_two.theme_feature_content h3, 
                    {{WRAPPER}} .theme_feature_area .features_two.theme_feature_content p, 
                    {{WRAPPER}} .theme_feature_area .features_two.theme_feature_content .theme_feature_list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'right_background',
                'label' => __( 'Right Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .theme_feature_area .features_two',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_right',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .theme_feature_area .features_two .read_btn:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background_right',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .theme_feature_area .features_two .read_btn',
            ]
        );
        $this->add_control(
            'button_color_right',
            [
                'label' => __( 'Button Color Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_feature_area .features_two .read_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '<section id="theme_feature" class="theme_feature_section">
    <div class="container">
        <div class="theme_feature_area">
            <div class="row">
                <div class="col-md-6 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="theme_feature_content features_one headline pera-content">
                        <h3>'.$settings['section_heading_left'].'</h3>
                        <p>'.$settings['section_info_left'].'</p>
                        <div class="theme_feature_list ul-li">
                            <ul>
                                '.$settings['section_list_left'].'
                            </ul>
                        </div>
                        <div class="read_btn text-center">
                            <a href="'.$settings['section_btn_url_left']['url'].'">'.$settings['section_btn_left'].'</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="theme_feature_content features_two headline pera-content">
                        <h3>'.$settings['section_heading_right'].'</h3>
                        <p>'.$settings['section_info_right'].'</p>
                        <div class="theme_feature_list ul-li">
                            <ul>
                                '.$settings['section_list_right'].'
                            </ul>
                        </div>
                        <div class="read_btn text-center">
                            <a href="'.$settings['section_btn_url_right']['url'].'">'.$settings['section_btn_right'].'</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_theme_feature );
?>