<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class gym_services extends Widget_Base {

    public function get_name() {
        return 'gym-services';
    }

    public function get_title() {
        return __( 'Gym Services', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-sitemap';
    }

    protected function register_controls() {


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
                'default' => __( 'Awesome Routine', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'appilo' ),
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
                'label' => __( 'Service List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Awesome Routine',
                    ],
                    [
                        'title' => 'Awesome Routine',
                    ],
                    [
                        'title' => 'Awesome Routine',
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
                    '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-text p',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-icon i' => 'color: {{VALUE}}',
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
                'selectors' => [
                    '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'arrow_color',
            [
                'label' => __( 'Arrow Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'sbg',
            [
                'label' => __( 'Shape Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'sbgbackground',
                'label' => __( 'Background', 'plugin-domain' ),
                'types' => [ 'classic','gradient' ],
                'selector' =>
                    '{{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-icon:before, {{WRAPPER}} .app-gym-intro-innerbox .app-gym-intro-icon:after',

            ]
        );
        $this->add_control(
            'sbgqweq',
            [
                'label' => __( 'Shape Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'sbgbackgrounderfe',
                'label' => __( 'Background', 'plugin-domain' ),
                'types' => [ 'classic','gradient' ],
                'selector' =>
                    '{{WRAPPER}} .app-gym-intro-innerbox:hover .app-gym-intro-icon:before, {{WRAPPER}} .app-gym-intro-innerbox:hover .app-gym-intro-icon:after',

            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

echo '    <!-- Start of intro section
        ============================================= -->

                <div class="app-gym-intro-content">
                    <div class="row justify-content-center">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
                    echo '<div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="app-gym-intro-innerbox text-center">
                                <div class="app-gym-intro-icon position-relative">';

                    \Elementor\Icons_Manager::render_icon( $service['icon'], [ 'aria-hidden' => 'true' ] );

                               echo '</div>
                                <div class="app-gym-intro-text app-gym-headline pera-content">
                                    <h3><a '.get_that_link($service['link']).'>' . $service['title'] . '</a></h3>
                                    <p>' . $service['info'] . '</p>
                                    <div class="app-gym-arrow">
                                        <a '.get_that_link($service['link']).'><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                          </div>';
                            }
                        }
                    echo'</div>
                </div>
    <!-- End of intro section
        ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new gym_services );
?>