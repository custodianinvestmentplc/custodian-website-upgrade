<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_app_feature extends Widget_Base {

   public function get_name() {
      return 'appilo-app-features';
   }

   public function get_title() {
      return __( 'App Awesome Features', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'fab fa-autoprefixer';
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
                'default' => __( 'features', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_font',
                'label' => __( 'Title Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-features .single-app-features h3',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-features .single-app-features h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_font',
                'label' => __( 'Info Fonts', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-features .single-app-features p',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-features .single-app-features p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .center .single-app-features i, 
                {{WRAPPER}} .app-features .single-app-features:hover i'
            ]
        );
        $this->add_control(
            'after_color',
            [
                'label' => __( 'After Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'after_color_bg',
                'label' => __( 'After Bg', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .single-app-features .line',
            ]
        );
        $this->add_control(
            'nav_colors',
            [
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_icon_color',
                'label' => __( 'Nav Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .owl-theme .owl-nav [class*=owl-] i',
            ]
        );
        $this->add_control(
            'nav_asd_bg',
            [
                'label' => __( 'Nav Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg_color',
                'label' => __( 'Nav BG Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .owl-theme .owl-nav [class*=owl-]',
            ]
        );
        $this->add_control(
            'nav_colors_hover',
            [
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_icon_hover_color',
                'label' => __( 'Nav Icon Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .owl-theme .owl-nav [class*=owl-]:hover i',
            ]
        );
        $this->add_control(
            'nav_as5dw_bg',
            [
                'label' => __( 'Nav Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_bg_hover_color',
                'label' => __( 'Nav Hover BG Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-features .owl-theme .owl-nav [class*=owl-]:hover',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_icon', [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'List Title' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_content', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'List Content' , 'appilo' ),
                'show_label' => false,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __( 'Features List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Design & Branding', 'appilo' ),
                        'list_content' => __( 'We use a customized application <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Design & Branding', 'appilo' ),
                        'list_content' => __( 'We use a customized application <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Design & Branding', 'appilo' ),
                        'list_content' => __( 'We use a customized application <br> specifically designed a testing gnose <br> to keep away for people.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<section class="app-features" > <div class="container"><div class="appilo-sec-title text-center">
        </div>';

        echo '<div id="app-features-carousel-slider" class="app-features-carousel owl-theme owl-carousel">';
        if ( $settings['list'] ) {
            foreach (  $settings['list'] as $item ) {
                echo '<div class="item"><div class="single-app-features text-center">';

                \Elementor\Icons_Manager::render_icon( $item['list_icon'], [ 'aria-hidden' => 'true' ] );

                echo'<h3 class="app-feature-item' . $item['_id'] . '">' . $item['list_title'] . '</h3>
                <p>' . $item['list_content'] . '</p>
                <div class="line"></div>
                </div></div>';
            }
        }
        echo '</div></div></section>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_app_feature );
?>