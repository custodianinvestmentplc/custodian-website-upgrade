<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_pricing extends Widget_Base {

   public function get_name() {
      return 'saas-classic-pricing';
   }

   public function get_title() {
      return __( 'SaaS Classic Pricing', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-price-list';
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
                'default' => __( 's2-pricing', 'appilo' ),
            ]
        );
        // Monthly Pricing One
        $this->add_control(
            'pricing_table',
            [
                'label' => __( 'Pricing Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'pricing_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Basic', 'appilo' ),
            ]
        );
        $this->add_control(
            'pricing_table_icon',
            [
                'label' => __( 'Pricing Table Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-assistive-listening-systems',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'pricing_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$00', 'appilo' ),
            ]
        );
        $this->add_control(
            'pricing_btn_icon',
            [
                'label' => __( 'Buy Button Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-cloud-download-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'pricing_btn',
            [
                'label' => __( 'Buy Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Try it now', 'appilo' ),
            ]
        );
        $this->add_control(
            'pricing_btn_url',
            [
                'label' => __( 'Buy Button URL', 'appilo' ),
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
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '300ms', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'feature_icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'pricing_feature', [
                'label' => __( 'Feature', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Up to 5 Web Pages' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'features_list',
            [
                'label' => __( 'Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_icon' => __( 'fas fa-check', 'appilo' ),
                        'pricing_feature' => __( 'Up to 5 Web Pages', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fas fa-check', 'appilo' ),
                        'pricing_feature' => __( 'Up to 5 Web Pages', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fas fa-check', 'appilo' ),
                        'pricing_feature' => __( 'Up to 5 Web Pages', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fas fa-check', 'appilo' ),
                        'pricing_feature' => __( 'Up to 5 Web Pages', 'appilo' ),
                    ],
                    [
                        'feature_icon' => __( 'fas fa-check', 'appilo' ),
                        'pricing_features' => __( 'Up to 5 Web Pages', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ pricing_feature }}}',
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
        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'header_bg',
            [
                'label' => __( 'Header Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'header_main_bg',
                'label' => __( 'Header Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price',
            ]
        );
        $this->add_control(
            'box_bg',
            [
                'label' => __( 'Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_box_bg',
                'label' => __( 'Box Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item',
            ]
        );
        $this->add_control(
            'main_icon_color',
            [
                'label' => __( 'Main Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .pricing_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'main_icon_hover_color',
            [
                'label' => __( 'Main Hover Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item:hover .pricing_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'hover_icon_color',
            [
                'label' => __( 'Hover Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .s2-icon_bg i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .s2-pricing_text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .s2-pricing_text strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_color',
            [
                'label' => __( 'Feature Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_icon_color',
            [
                'label' => __( 'Feature Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_list .s2-checked i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'feature_border_color',
            [
                'label' => __( 'Feature Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_list li' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'feature_icon_bg',
            [
                'label' => __( 'Feature Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature_icon_main_bg',
                'label' => __( 'Feature Icon Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_list .s2-checked',
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __( 'Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_icon_bg',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .pricing_icon',
            ]
        );
        $this->add_control(
            'hover_icon_bg',
            [
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_icon_hover_bg',
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_price .pricing_icon:after',
            ]
        );
        $this->add_control(
            'btn_icon_colors',
            [
                'label' => __( 'Button Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_icon_color',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_btn a i',
            ]
        );
        $this->add_control(
            'btn_hover_bg',
            [
                'label' => __( 'Button Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bgs',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_btn a:after',
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_hover_text',
            [
                'label' => __( 'Button Hover Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_border_color',
            [
                'label' => __( 'Button Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .s2-pricing_section .s2-pricing_item .s2-pricing_btn a' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section  class="s2-pricing_section">
        <div class="s2-pricing_content">
                <div class="wow fadeFromLeft" data-wow-delay="'.$settings['animate_delay'].'" data-wow-duration="1500ms">
                    <div class="s2-pricing_item">
                        <div class="s2-pricing_price relative-position clearfix">
                            <div class="pricing_icon  float-left text-center">';
                                \Elementor\Icons_Manager::render_icon($settings['pricing_table_icon'], ['aria-hidden' => 'true']);
                            echo'</div>
                            <div class="s2-pricing_text">
                                <span>'.$settings['pricing_title'].'</span>
                                <strong>'.$settings['pricing_price'].'</strong>
                            </div>
                            <div class="s2-icon_bg">';
                                \Elementor\Icons_Manager::render_icon($settings['pricing_table_icon'], ['aria-hidden' => 'true']);
                            echo'</div>
                        </div>
                        <div class="s2-pricing_list ul-li-block">
                            <ul>';
                        if ( $settings['features_list'] ) {
                            foreach ($settings['features_list'] as $pricing_features) {
                            echo '<li id="dynamic_pricing_features_'.$pricing_features['_id'].'">
                                    <div class="s2-pricing_list_icon s2-checked float-left text-center">';
                                    \Elementor\Icons_Manager::render_icon($pricing_features['feature_icon'], ['aria-hidden' => 'true']);
                                    echo '</div>
                                    '.$pricing_features['pricing_feature'].'
                                </li>';
                        }
                    }
                            echo'</ul>
                        </div>
                        <div class="s2-pricing_btn">
                            <a href="'.$settings['pricing_btn_url']['url'].'">'; \Elementor\Icons_Manager::render_icon($settings['pricing_btn_icon'], ['aria-hidden' => 'true']); echo''.$settings['pricing_btn'].'</a>
                        </div>
                    </div>
                </div>
        </div>
</section>';
    }

    



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_pricing );
?>