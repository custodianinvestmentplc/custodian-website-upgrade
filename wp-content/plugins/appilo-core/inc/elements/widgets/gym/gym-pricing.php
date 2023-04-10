<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class gym_pricing extends Widget_Base {

    public function get_name() {
        return 'gym-pricing';
    }

    public function get_title() {
        return __( 'Gym Pricing', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-price-table';
    }

    protected function register_controls() {


        $this->start_controls_section(
            'pricing_sec',
            [
                'label' => __( 'Pricing Table', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'table_img', [
                'label' => __( 'Table Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri().'/img/combine/gym-pricing.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '600ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'before_price',
            [
                'label' => __( 'Before Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Starts From
', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'currency',
            [
                'label' => __( 'Currency', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '120.99', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'time',
            [
                'label' => __( 'Pricing Time', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'mo', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Vumdatat non proident culpa qui officia', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'pricing_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'SIGN UP', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'pricing_btn_link',
            [
                'label' => __( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'pricing_list',
            [
                'label' => __( 'Pricing List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Wieght Lifting', 'appilo' ),
                        'price' => __( '80', 'appilo' ),

                    ],
                    [
                        'title' => __( 'Cardio Workout', 'appilo' ),
                        'price' => __( '120', 'appilo' ),

                    ],
                    [
                        'title' => __( 'Body Building', 'appilo' ),
                        'price' => __( '169', 'appilo' ),

                    ],
                    [
                        'title' => __( 'Karate & Boxing', 'appilo' ),
                        'price' => __( '169', 'appilo' ),

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
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text h3 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text h3',
            ]
        );

        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text p',
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .app-gym-price-value h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_fonts',
                'label' => __( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .app-gym-price-value h3',
            ]
        );
        $this->add_control(
            'mo_color',
            [
                'label' => __( 'Month Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .app-gym-price-value h3 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'mo_fonts',
                'label' => __( 'Month Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .app-gym-price-value h3 span',
            ]
        );
        $this->add_control(
            'bfclr_color',
            [
                'label' => __( 'Before Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-price-value span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'brgtrt_fonts',
                'label' => __( 'Before Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-gym-price-value span',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pricing_bg',
                'label' => __( 'Pricing BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .app-gym-price-value',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .pricing-more-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'p_btn_icolor',
            [
                'label' => __( 'Button Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-gym-pricing-innerbox .app-gym-pricing-text .pricing-more-btn i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'border_options',
            [
                'label' => __( 'Border', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'border_background',
                'label' => __( 'Border Background', 'plugin-domain' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'plugin-domain' ),
                'selector' => '{{WRAPPER}} .app-gym-pricing-innerbox',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        echo '<div class="app-gym-pricing-content">
                    <div class="row">';
        if ( $settings['pricing_list'] ) {
            foreach ($settings['pricing_list'] as $table) {
                echo '  <div class="col-lg-6 wow fadeFromUp" data-wow-delay="'.$table['animate_delay'].'" data-wow-duration="1500ms">
                            <div class="app-gym-pricing-innerbox position-relative clearfix">
                                <div class="app-gym-pricing-img float-left">
                                    <img src="'.$table['table_img']['url'].'" alt="">
                                </div>
                                <div class="app-gym-pricing-text app-gym-headline pera-content  position-relative">
                                    <h3><a href="#">'.$table['title'].'</a></h3>
                                    <p>'.$table['info'].'</p>
                                    <div class="app-gym-price-value d-flex">
                                        <span>'.$table['before_price'].'</span>
                                        <h3>'.$table['currency'] . $table['price'].'<span>/'.$table['time'].'</span></h3>
                                    </div>
                                    <a class="pricing-more-btn float-right text-uppercase" href="'.$table['pricing_btn_link']['url'].'">'.$table['pricing_btn'].' <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>';
            }
        }
                    echo'</div>
                </div>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new gym_pricing );
?>