<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_features2 extends Widget_Base {

    public function get_name() {
        return 'osaas-features2';
    }

    public function get_title() {
        return __( 'Osaas Features 2', 'appilo' );
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
                'default' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
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
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The contributors to the Data Transfer Project believe portability and interoperability are central to innovation.', 'appilo' ),
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
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
                    ],
                     [
                        'title' => __( 'Year Calculation <span> & Profit / Share</span>', 'appilo' ),
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
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box h2 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'titleh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover h2 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box h2 a',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'infoh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box .text',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box .icon-box' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icohn_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover .icon-box' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Icon Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box .icon-box',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'iteam_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover .icon-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow_h',
                'label' => __( 'Box Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover',
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
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box:hover',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bgaa',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-osaas-feature-block .inner-box .icon-box:before',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '	<!-- Featured Section -->
	<section class="app-osaas-featured-section">
			<div class="app-osaas-featured-carousel owl-carousel owl-theme">';
              $index = 0;
              if ($settings['service_list']) {
                  foreach ($settings['service_list'] as $service) {
                      $index++;
                      if ($index == 1){
                          $class= '';
                      }elseif ($index == 2){
                          $class= 'color-two';
                      }elseif ($index == 3){
                          $class= 'color-three';
                      }elseif ($index == 4){
                          $class= 'color-four';
                      }elseif ($index == 5){
                          $class= 'color-five';
                      }else{
                          $class= 'color-six';
                      }
      echo '<div class="app-osaas-feature-block '.$class.'">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon">';
                  \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
              echo '</span>
						</div>
						<h2><a ' . get_that_link($service['link']) . '>' . $service['title'] . '</span></a></h2>
						<div class="text">' . $service['info'] . '</div>
					</div>
				</div>	';
          }
      }
      echo '</div>
	</section>
	<!-- End Featured Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_features2 );
?>