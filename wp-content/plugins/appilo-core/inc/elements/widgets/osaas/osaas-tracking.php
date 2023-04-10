<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_tracking extends Widget_Base {

    public function get_name() {
        return 'osaas-tracking';
    }

    public function get_title() {
        return __( 'Osaas Tracking', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function register_controls() {

             $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Tracking', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Time & Tracking System', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
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
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'appilo' ),
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
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Facilities List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Time & Tracking System', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Time & Tracking System', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Time & Tracking System', 'appilo' ),
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
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box h4 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'titleh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box:hover h4 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box h4 a',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'infoh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box:hover .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box .text',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icohn_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block-six .inner-box:hover .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow_h',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box:hover',
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
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bgaa',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-osaas-feature-block-six .inner-box:before',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

      echo '	<!-- Tracking Section -->
	<section class="app-osaas-tracking-section">';

        $index = 0;
        if ($settings['service_list']) {
            foreach ($settings['service_list'] as $service) {
                $index++;
                if ($index == 2){
                    $class= 'active';
                }else{
                    $class= '';
                }

      echo '<div class="app-osaas-feature-block-six '.$class.' wow fadeInUp" data-wow-delay="' . appilo_animate('50') . '" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="big-icon">';
                                  \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                              echo '</div>
                        <div class="content">
                            <div class="icon-box">
                                <div class="icon">';
                                  \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                              echo '</div>
                            </div>
                            <h4><a ' . get_that_link($service['link']) . '>' . $service['title'] . '</a></h4>
                            <div class="text">' . $service['info'] . '</div>
                        </div>
                    </div>
                </div>';
          }
      }
      echo '								
	</section>
	<!-- End Tracking Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_tracking );
?>