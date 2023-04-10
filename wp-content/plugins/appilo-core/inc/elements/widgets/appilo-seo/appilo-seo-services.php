<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_seo_services extends Widget_Base {

    public function get_name() {
        return 'appilo-seo-services';
    }

    public function get_title() {
        return __( 'Appilo SEO Services', 'appilo' );
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
            'services',
            [
                'label' => __( 'Services', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Content Marketing', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'appilo-icon-phone-call',
                    'library' => 'appilo-icons-2',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum indolor st amet lie etctetur adipis locing elit sedieie m indolor st  ilmes.', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Content Marketing', 'appilo' ),
                        'info' => __( 'Lorem ipsum indolor st amet lie etctetur adipis locing elit sedieie m indolor st  ilmes.', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Content Marketing', 'appilo' ),
                        'info' => __( 'Lorem ipsum indolor st amet lie etctetur adipis locing elit sedieie m indolor st  ilmes.', 'appilo' ),
                    ],
                    [
                        'title' => __( 'Content Marketing', 'appilo' ),
                        'info' => __( 'Lorem ipsum indolor st amet lie etctetur adipis locing elit sedieie m indolor st  ilmes.', 'appilo' ),
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
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_before',
                'label' => __( 'Icon Before', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_after',
                'label' => __( 'Icon after', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'icon_box_shadow',
                'label' => __( 'Icon Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text .appseo-service-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'top_right_bg',
                'label' => __( 'Service Box BG', 'appilo' ),
                'types' => [ 'classic' ,'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text:before',
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
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bottom_bg',
                'label' => __( 'Item Bottom Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-content .appseo-service-box:after',
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-content .appseo-service-icon-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .appseo-service-section',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-seo/shape/st.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .appseo-service-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of service section
        ============================================= -->
        <section  class="appseo-service-section position-relative">
            <div class="container">
                <div class="appseo-service-content">
                    <div class="row justify-content-center">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
                    echo ' <div class="col-lg-4 wow fadeFromUp ' . $service['_id'] . '" data-wow-delay="' . $service['animate_delay'] . '" data-wow-duration="1500ms">
                            <div class="appseo-service-box position-relative">
                                <div class="appseo-service-icon-text position-relative">
                                    <div class="appseo-service-icon position-relative text-center">';
                                        \Elementor\Icons_Manager::render_icon( $service['icon'], [ 'aria-hidden' => 'true' ] );
                            echo '</div>
                                    <div class="appseo-service-text appseo-headline pera-content text-center">
                                        <h3>' . $service['title'] . '</h3>
                                        <p>' . $service['info'] . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                            }
                        }
                                echo'</div>
                            </div>
                        </div>';?>
                        <div class="appseo-service-vector" data-parallax='{"y" : 100, "rotateY":500}'>
                            <img src="<?php echo esc_url($settings['pattern_bg_1']['url']) ?>" alt>
                        </div>
                  <?php  echo'</section>
    <!-- End of service section
        ============================================= --> ';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_seo_services );
?>