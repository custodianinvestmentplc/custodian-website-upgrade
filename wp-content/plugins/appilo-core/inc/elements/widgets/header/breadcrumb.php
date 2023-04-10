<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_breadcrumb extends Widget_Base {

   public function get_name() {
      return 'appilo-breadcrumb';
   }

   public function get_title() {
      return __( 'Appilo Breadcrumb', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-header' ];
	}
   public function get_icon() { 
        return 'eicon-nav-menu';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Main Nav', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-angle-double-right',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_responsive_control(
            'menu_align',
            [
                'label' => __( 'Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .appilo-breadcrumb-inner' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'h_label',
            [
                'label' => __( 'Home Label', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Home', 'appilo' ),
            ]
        );
        $this->add_control(
            'url', [
                'label' => __( 'Home Link', 'appilo' ),
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
            'menu_style',
            [
                'label' => __( 'Color & Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'anav_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ap-bc-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'anav_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ap-bc-title',
            ]
        );
        $this->add_responsive_control(
            'tmenu_align',
            [
                'label' => __( 'Titl Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ap-bc-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'nav_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appilo-breadcrumb-inner' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appilo-breadcrumb-inner',
            ]
        );
        $this->add_control(
            'nav_margin',
            [
                'label' => __( 'Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appilo-breadcrumb-inner i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $home = $settings['url']['url'] ? '<a '.get_that_link($settings['url']).'>'.$settings['h_label'].'</a>' : '<a href="'.home_url().'" rel="nofollow">'.$settings['h_label'].'</a>';

        echo '<div class="appilo-breadcrumb-elements">
                    <h2 class="ap-bc-title">'.wp_title('', '', '').'</h2>
                <div class="appilo-breadcrumb-inner">';
        echo $home;
        if (is_category() || is_single()) {
            \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
            the_category(' &bull; ');
            if (is_single()) {
                \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
                the_title();
            }
        } elseif (is_page()) {
            \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
            echo the_title();
        } elseif (is_search()) {
            \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); echo 'Search Results for...';
            echo '"<em>';
            echo the_search_query();
            echo '</em>"';
        }
        echo '</div></div>';
   }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_breadcrumb );
?>