<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_features extends Widget_Base {

    public function get_name() {
        return 'saas-features';
    }

    public function get_title() {
        return __( 'SaaS Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-push';
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
                'default' => __( 'featured_service', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_title',
            [
                'label' => __( 'Feature Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Easy to edit', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_info',
            [
                'label' => __( 'Feature Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-cog',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'feature_btn',
            [
                'label' => __( 'Feature Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Us', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_link',
            [
                'label' => __( 'Feature Link', 'appilo' ),
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
            'features_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => __('Easy to edit', 'appilo'),
                        'feature_info' => __('Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo'),
                        'feature_link' => __('#', 'appilo'),
                        'feature_btn' => __('Contact Us', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Easy to edit', 'appilo'),
                        'feature_info' => __('Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo'),
                        'feature_link' => __('#', 'appilo'),
                        'feature_btn' => __('Contact Us', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Easy to edit', 'appilo'),
                        'feature_info' => __('Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo'),
                        'feature_link' => __('#', 'appilo'),
                        'feature_btn' => __('Contact Us', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Easy to edit', 'appilo'),
                        'feature_info' => __('Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo'),
                        'feature_link' => __('#', 'appilo'),
                        'feature_btn' => __('Contact Us', 'appilo'),
                    ],
                    [
                        'feature_title' => __('Easy to edit', 'appilo'),
                        'feature_info' => __('Google Ad campaigns are an effective  target receptive audience they get you.', 'appilo'),
                        'feature_link' => __('#', 'appilo'),
                        'feature_btn' => __('Contact Us', 'appilo'),
                    ],

                ],
                'title_field' => '{{{ feature_title }}}',
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
            'dot_animation',
            [
                'label' => __( 'Dot Animation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Deactivate', 'appilo' ),
                'return_value' => '<div class="line_animation">
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                    </div>',
                'default' => '<div class="line_animation">
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                        <div class="line_area"></div>
                                    </div>',
            ]
        );
        $this->add_control(
            'feature_bg',
            [
                'label' => __( 'Feature Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_main_bg',
                'label' => __( 'Feature Hover BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .featured_content .featured_icon_text:before',
            ]
        );
        $this->add_control(
            'feature_icon_bg',
            [
                'label' => __( 'Feature Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_bg',
                'label' => __( 'Feature Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .featured_content .featured_icon_text .featured_icon',
            ]
        );
        $this->add_control(
            'scroll_bg',
            [
                'label' => __( 'Scroll BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'scroll_bar_bg',
                'label' => __( 'Scroll BG', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'selector' => '{{WRAPPER}} #featured_scroll .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar',
            ]
        );
        $this->add_control(
            'animate_dot',
            [
                'label' => __( 'Animation Dot Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'animate_dot_color',
                'label' => __( 'Animation Dot Color', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .line_animation .line_area:before, {{WRAPPER}} .line_animation:before',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .featured_content .featured_icon_text .featured_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'svg_bg',
            [
                'label' => __( 'Svg Color Should Change By Custom', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<section  class="featured_service_section relative-position">
    <div class="container">
        <div id="featured_scroll" class="featured_content clearfix">
            <ul>';
        if ( $settings['features_list'] ) {
            foreach ($settings['features_list'] as $features) {
                echo'<li>
                    <div class="featured_icon_text text-center relative-position">
                        <div class="featured_icon relative-position text-center">';
                            \Elementor\Icons_Manager::render_icon( $features['feature_icon'], [ 'aria-hidden' => 'true' ] );
                        echo'</div>
                        <div class="featured_text headline">
                            <h3>'.$features['feature_title'].'</h3>
                            <p>'.$features['feature_info'].'</p>
                        </div>
                        <div class="feature_btn">
                            <a href="'.$features['feature_link']['url'].'">'.$features['feature_btn'].'</a>
                        </div>
                    </div>
                </li>';
                }
            }
            echo'</ul>
        </div>
    </div>
    '.$settings['dot_animation'].'
</section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_features );
?>