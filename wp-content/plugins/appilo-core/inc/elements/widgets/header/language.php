<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class osaas_language extends Widget_Base {

    public function get_name() {
        return 'osaas-language';
    }

    public function get_title() {
        return __( 'Osaas Language', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-header' ];
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
        $this->add_control(
            'dfeature_icon', [
                'label' => __( 'Default Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/combine/usa-flag.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Language', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'USA', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/combine/usa.jpg',
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
                'label' => __( 'Language List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'USA', 'appilo' ),
                    ],
                    [
                        'title' => __( 'USA', 'appilo' ),
                    ],
                    [
                        'title' => __( 'USA', 'appilo' ),
                    ],
                    [
                        'title' => __( 'USA', 'appilo' ),
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
                    '{{WRAPPER}} .appilo-language-elements .language .dropdown-menu > li > a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'titleh_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appilo-language-elements .language .dropdown-menu > li > a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appilo-language-elements .language .dropdown-menu > li > a',
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
                'selector' => '{{WRAPPER}} .appilo-language-elements .language .dropdown-menu > li > a:hover',
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
                'selector' => '{{WRAPPER}} .appilo-language-elements .language .dropdown-menu',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
      echo ' <div class="appilo-language-elements">
 <!-- Language -->
            <div class="language dropdown">
                <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
                <span class="flag-icon">'.get_that_image($settings['dfeature_icon']).'</span>
            </a>
                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">';
              if ($settings['service_list']) {
                  foreach ($settings['service_list'] as $service) {
      echo '<li><a ' . get_that_link($service['link']) . '><span class="flag">
                      '.get_that_image($service['feature_icon']).'
                      </span> ' . $service['title'] . '</a>
                    </li>';
              }
          }
          echo '</ul>
            </div></div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new osaas_language );
?>