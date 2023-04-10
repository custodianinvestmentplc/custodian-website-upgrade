<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class hero_slider_four extends Widget_Base {

    public function get_name() {
        return 'galaxy-hero-slider-four';
    }

    public function get_title() {
        return __( 'Hero Slider Four', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-slider-device';
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
                'default' => __( 'home', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_heading',
            [
                'label' => __( 'Slider Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get <span>galaxy</span> <br> For Good Service', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Slider Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industrys.', 'appilo' ),
            ]
        );
        $this->add_control(
            'slider_btn_one',
            [
                'label' => __( 'Slider Button One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Order now', 'appilo' ),
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-btn-s1',
            ]
        );
        $this->add_control(
            'slider_btn_one_icon',
            [
                'label' => __( 'Slider Button One Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_one_url', [
                'label' => __( 'Slider Button One Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .agency-btn-s1:before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'product_details',
            [
                'label' => __( 'Product Details', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'product_name',
            [
                'label' => __( 'Product Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Watch6  <span>New</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'product_info',
            [
                'label' => __( 'Product Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Built-in GPS and GLONASS', 'appilo' ),
            ]
        );
        $this->add_control(
            'product_price',
            [
                'label' => __( 'Product Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$1,299.00', 'appilo' ),
            ]
        );
        $this->add_control(
            'product_photo', [
                'label' => __( 'Product Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/product-landing/hero-watch.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start of hero -->
                <section class="hero product-landing-hero">
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-sm-8 hero-info">
                                <h1 class="title">'.$settings['slider_heading'].'</h1>
                                <p>'.$settings['slider_info'].'</p>
                                <div class="product-info">
                                    <h5>'.$settings['product_name'].'</h5>
                                    <p>'.$settings['product_info'].'</p>
                                    <h5 class="price">'.$settings['product_price'].'</h5>
                                </div>
                                <a href="'.$settings['slider_btn_one_url']['url'].'" class="agency-btn-s1">'.$settings['slider_btn_one'].' <span><i class="fas fa-angle-down"></i></span></a>
                            </div>
                            <div class="hero-watch">
                                <img src="'.$settings['product_photo']['url'].'" alt="Hero Watch" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </section>
             <!-- end of hero slider -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new hero_slider_four );
?>