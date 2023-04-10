<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class multi_menu_list extends Widget_Base {

    public function get_name() {
        return 'applo-menu-list';
    }

    public function get_title() {
        return __( 'Menu Lists', 'appilo' );
    }
    public function get_categories() {
        return [ 'basic' ];
    }
    public function get_icon() {
        return 'eicon-radio';
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Menu Lists', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Menu Item', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'img', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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
                'label' => __( 'Menu Item List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Menu Item', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Menu Item', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Menu Item', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Menu Item', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Menu Item', 'appilo' ),
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
                    '{{WRAPPER}} .appilo-mega-menu-lists .mega-menu-list-item .mega-menu-item a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'titleh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appilo-mega-menu-lists .mega-menu-list-item .mega-menu-item a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appilo-mega-menu-lists .mega-menu-list-item .mega-menu-item a',
            ]
        );
        $this->add_responsive_control(
            'padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appilo-mega-menu-lists .mega-menu-list-item .mega-menu-item a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
      echo ' <div class="appilo-mega-menu-lists">         
                <ul class="mega-menu-list-item">';
              if ($settings['service_list']) {
                  foreach ($settings['service_list'] as $service) {
                    echo '<li class="mega-menu-item">
                            <a href="' . $service['link']['url'] . '">' . $service['title'] . '
                                '.wp_get_attachment_image($service['img']['id'], 'full').'
                            </a>
                          </li>';
              }
          }
          echo '</ul>
            </div>';
    }

    protected function _content_template() {
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new multi_menu_list );
?>