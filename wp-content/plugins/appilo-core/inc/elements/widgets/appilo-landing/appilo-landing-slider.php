<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_landing_slider extends Widget_Base {

    public function get_name() {
        return 'appilo-landing-slider';
    }

    public function get_title() {
        return __( 'Appilo Landing Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-banner';
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
            'banner_info',
            [
                'label' => __( 'Banner Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( ' <span>Build</span> your successful website by our
                                    <strong>Appil</strong><span>o</span> Word Press Theme.', 'appilo' ),
            ]
        );
        $this->add_control(
            'banner_info_color',
            [
                'label' => __( 'Banner Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .appl-banner-content .banner-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'banner_info_fonts',
                'label' => __( 'Banner Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .appl-banner-content .banner-text',
            ]
        );
        $this->add_control(
            'demo_number', [
                'label' => __( 'Demo Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/dn.png',
                ],
            ]
        );
        $this->add_control(
            'element_number', [
                'label' => __( 'Elements Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/el.png',
                ],
            ]
        );
        $this->add_control(
            'feature_image', [
                'label' => __( 'Features Images', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/wp.png',
                ],
            ]
        );
        $this->add_control(
            'banner_logo', [
                'label' => __( 'Logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/b-logo.png',
                ],
            ]
        );
        $this->add_control(
            'logo_link', [
                'label' => __( 'Logo Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '/',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Slider BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/bn1.png',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'left_demo',
            [
                'label' => __( 'Left Demo List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'demo_left_img', [
                'label' => __( 'Demo Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/demo/d1.png',
                ],
            ]
        );
        $this->add_control(
            'demo_list_left',
            [
                'label' => __( 'Demo List Left', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],[
                        'demo_left_img' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'right_demo',
            [
                'label' => __( 'Right Demo List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'demo_right_img', [
                'label' => __( 'Demo Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/demo/d1.png',
                ],
            ]
        );
        $this->add_control(
            'demo_list_right',
            [
                'label' => __( 'Demo List Right', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],[
                        'demo_right_img' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'responsive_demo',
            [
                'label' => __( 'Responsive Demo List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'demo_responsive_img', [
                'label' => __( 'Demo Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/appilo-landing/demo/d1.png',
                ],
            ]
        );
        $this->add_control(
            'demo_list_responsive',
            [
                'label' => __( 'Demo List Responsive', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'demo_responsive_img' => '',
                    ],[
                        'demo_responsive_img' => '',
                    ],[
                        'demo_responsive_img' => '',
                    ],[
                        'demo_responsive_img' => '',
                    ],[
                        'demo_responsive_img' => '',
                    ],[
                        'demo_responsive_img' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Banner section
    ============================================= -->
<section  class="appl-banner-section position-relative" data-background="'.$settings['pattern_bg_1']['url'].'">
    <div class="demo-number position-absolute wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
        <img src="'.$settings['demo_number']['url'].'" alt>
    </div>
    <div class="element-number position-absolute wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
        <img src="'.$settings['element_number']['url'].'" alt>
    </div>
    <div class="appl-banner-content text-center">
        <div class="banner-logo">
            <a href="'.$settings['logo_link']['url'].'"><img src="'.$settings['banner_logo']['url'].'" alt></a>
        </div>
        <div class="banner-text">
           '.$settings['banner_info'].'
        </div>
        <div class="el-ft-img wow fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
            <img src="'.$settings['feature_image']['url'].'" alt>
        </div>
    </div>
    <div class="tm-banners">';
        if ( $settings['demo_list_left'] ) {
            foreach ($settings['demo_list_left'] as $demo_left) {
                echo '<div class="single-img '.$demo_left['_id'].'">
                            <img src="'.$demo_left['demo_left_img']['url'].'" alt>
                      </div>';
            }
        }
    echo'</div>
    <div class="tm-banners-right-side">';
        if ( $settings['demo_list_right'] ) {
            foreach ($settings['demo_list_right'] as $demo_right) {
                echo '<div class="single-img '.$demo_right['_id'].'">
                        <img src="'.$demo_right['demo_right_img']['url'].'" alt>
                    </div>';
            }
        }
    echo'</div>

    <div class="responsive-demo">';

        if ( $settings['demo_list_responsive'] ) {
            foreach ($settings['demo_list_responsive'] as $demo_responsive) {
                echo '<div class="single-img '.$demo_responsive['_id'].'">
                        <img src="'.$demo_responsive['demo_responsive_img']['url'].'" alt>
                    </div>';
            }
        }

    echo'</div>
</section>
<!-- End of Banner section
    ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_landing_slider );
?>