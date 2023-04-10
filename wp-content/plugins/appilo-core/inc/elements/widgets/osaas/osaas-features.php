<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_features extends Widget_Base {

    public function get_name() {
        return 'osaas-features';
    }

    public function get_title() {
        return __( 'Osaas Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
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
            'features_tab',
            [
                'label' => __( 'Features', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Instant Sent Email', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'link', [
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
            'icon',
            [
                'label' => __( 'Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'arrow',
            [
                'label' => __( 'Arrow Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our attentive customer support is always', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Instant Sent Email', 'appilo' ),
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
                    '{{WRAPPER}} .app-osaas-feature-block-two .inner-box .upper-box h5 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'titleh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-two .inner-box:hover .upper-box h5 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box .upper-box h5 a',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-two .inner-box .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'infoh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-two .inner-box:hover .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box .text',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-two .inner-box .upper-box .icon, 
                    {{WRAPPER}} .app-osaas-feature-block-two .inner-box .arrow' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow_h',
                'label' => __( 'Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_b',
                'label' => __( 'Box Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_bh',
                'label' => __( 'Box Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bga',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => ['gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-two .inner-box:before',
            ]
        );

        $this->add_responsive_control(
            'content_m',
            [
                'label' => __( 'Content Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
      echo '	<!-- Featured Section Two -->
    <section class="app-osaas-featured-section-two">
			<div class="inner-container">
				<div class="row clearfix">';
      if ($settings['service_list']) {
          foreach ($settings['service_list'] as $service) {
              $feature_url = get_that_link($service['link']);

              echo '<div class="app-osaas-feature-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="upper-box">
								<div class="icon">';
                  \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);

              echo '</div>
								<h5><a ' . get_that_link($service['link']) . '>' . $service['title'] . '</a></h5>
								<div class="arrow">';
              \Elementor\Icons_Manager::render_icon($service['arrow'], ['aria-hidden' => 'true']);
              echo '</div>
							</div>
							<div class="text"> ' . $service['info'] . '</div>
							<div class="big-icon">';
                  \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
              echo '</div>
						</div>
					</div>';
          }
      }
      echo ' </div>
			</div>
	</section>
	<!-- End Featured Section Two -->';
  }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_features );
?>