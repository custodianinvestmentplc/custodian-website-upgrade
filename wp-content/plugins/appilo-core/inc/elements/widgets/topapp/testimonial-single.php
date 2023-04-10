<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_testimonial_single extends Widget_Base {

    public function get_name() {
        return 'topapp-testimonial-single';
    }

    public function get_title() {
        return __( 'Testimonial Single', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-comments';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'section_icon',
            [
                'label' => __( 'Testimonials', 'appilo' ),
            ]
        );
        $this->add_control(
            'client_image', [
                'label' => __( 'Client Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri().'/img/topapp/resource/author-thumb-2.jpg',
                ],
            ]
        );
        $this->add_control(
            'client_title', [
                'label' => __( 'Client Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Jhon Abraham' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'client_designation', [
                'label' => __( 'Client Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'CEO' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'client_icons',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-square',
                    'library' => 'brand',
                ],
            ]
        );
        $this->add_control(
            'client_comment', [
                'label' => __( 'Client Comments', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '“ Lorem Ipsum is simply dummy text of the printing and type <br> setting industry. Lorem Ipsum has been the industrys stan  <br> dard dummy text ever since. ”' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Background', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'partner_icon', [
                'label' => __( 'Partner Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/g-icon.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<style>
                .testimonial-block .inner-box .slide-info:before {
                    background: url('.$settings['partner_icon']['url'].') right center no-repeat;
                }
            </style>';
        echo '<!-- Testimonials Section -->
        <div class="carousel-column">
            <!-- Slides -->
            <div class="carousel-inner" role="listbox">';
                        echo'<div class="carousel-item active">
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="author-image">
                                            <span class="social-icon">';\Elementor\Icons_Manager::render_icon( $settings['client_icons'], [ 'aria-hidden' => 'true' ] );echo'</span>
                                            <img src="'.$settings['client_image']['url'].'" alt="Client Image" />
                                        </div>
                                        <div class="quote-icon fas fa-quote-right"></div>
                                        <div class="slide-text single-testimonial">'.$settings['client_comment'].'</div>
                                        <div class="slide-info">
                                            <h4 class="author-title">'.$settings['client_title'].'</h4>
                                            <div class="designation">'.$settings['client_designation'].'</div>
                                        </div>
                                    </div>
                                </div>
                            </div>					
                        </div>
                    </div>
	<!-- End Testimonials Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_testimonial_single );
?>