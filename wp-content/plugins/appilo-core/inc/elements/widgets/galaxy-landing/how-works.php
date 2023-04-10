<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_how_works extends Widget_Base {

    public function get_name() {
        return 'galaxy-how-works';
    }

    public function get_title() {
        return __( 'How Works', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-time-line';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .how-app-works .box .icon i',
            ]
        );
        $this->add_control(
            'mobile_holder', [
                'label' => __( 'Mobile Holder', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/app-landing/how-app-works-mobile.png',
                ],
            ]
        );
		$this->add_control(
			'mobile_image_bottom',
			[
				'label' => esc_html__( 'Mobile Image Bottom', 'appilo' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .how-app-works .how-appworks-phone-animation' => 'bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
        // Left Features
        $this->add_control(
            'left_features',
            [
                'label' => __( 'Left Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon_left',
            [
                'label' => __( 'Left Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'custom_icon_left',
            [
                'label' => __( 'Custom SVG Path', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'heading_left',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'First Install the App', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info_left',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_list_left',
            [
                'label' => __( 'Left Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_icon_left' => __( 'fas fa-user', 'appilo' ),
                        'heading_left' => __( 'First Install the App', 'appilo' ),
                        'info_left' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading_left }}}',
            ]
        );

        // Right Features
        $this->add_control(
            'right_features',
            [
                'label' => __( 'Right Features', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_icon_right',
            [
                'label' => __( 'Right Feature Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'custom_icon_right',
            [
                'label' => __( 'Custom SVG Path', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $repeater->add_control(
            'heading_right',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'First Install the App', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info_right',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
            ]
        );
        $this->add_control(
            'feature_list_right',
            [
                'label' => __( 'Right Feature List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_icon_right' => __( 'fas fa-user', 'appilo' ),
                        'heading_right' => __( 'First Install the App', 'appilo' ),
                        'info_right' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ heading_right }}}',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start how-app-works -->
            <section class="how-app-works section-padding" >
                <div class="app-mobile">
                    <img src="'.$settings['mobile_holder']['url'].'" alt="Work Mobile">
                </div>
                <div class="container">
                    <div class="row content">
                        <div class="middle-col">
                            <div class="round-inner"></div>
                            <div class="dot dot-1"></div>
                            <div class="dot dot-2"></div>
                            <div class="dot dot-3"></div>
                            <div class="dot dot-4"></div>
                        </div>
                        <div class="col col-md-4 left-col">';

                    if ( $settings['feature_list_left'] ) {
                        foreach ($settings['feature_list_left'] as $left_feature) {
                        echo '<div class="box">
                                        <div class="icon">';
                                            echo''.$left_feature['custom_icon_left'].'';
                                            \Elementor\Icons_Manager::render_icon( $left_feature['feature_icon_left'], [ 'aria-hidden' => 'true' ] );
                                        echo'</div>
                                        <div class="work-details">
                                            <h3>'.$left_feature['heading_left'].'</h3>
                                            <p>'.$left_feature['info_left'].'</p>
                                        </div>
                                    </div>';
                                            }
                                        }
                               echo'</div>
                        <div class="col col-md-4 offset-md-4 right-col">';

                            if ( $settings['feature_list_right'] ) {
                                foreach ($settings['feature_list_right'] as $right_feature) {
                                    echo '<div class="box">
                                            <div class="icon">';
                                            echo''.$right_feature['custom_icon_right'].'';
                                            \Elementor\Icons_Manager::render_icon( $right_feature['feature_icon_right'], [ 'aria-hidden' => 'true' ] );
                                            echo'</div>
                                            <div class="work-details">
                                                <h3>'.$right_feature['heading_right'].'</h3>
                                                <p>'.$right_feature['info_right'].'</p>
                                            </div>
                                          </div>';
                                            }
                                        }
                        echo'</div>
                    </div>
                </div>
            </section>
        <!-- end how-app-works -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_how_works );
?>