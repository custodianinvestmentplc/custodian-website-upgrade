<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_contact_block extends Widget_Base {

    public function get_name() {
        return 'topapp-contact-block';
    }

    public function get_title() {
        return __( 'Contact Us', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-envelope';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'contact', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Co</span>ntact', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contact with our support <br> during <span>emer</span>g<span>enc</span>y!', 'appilo' ),
            ]
        );
        $this->add_control(
            'contact_form_section',
            [
                'label' => __( 'Contact Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'section_form',
            [
                'label' => __( 'Form Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="652" title="Contact Us"]', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'address_content',
            [
                'label' => __( 'Address Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'lib_address_icon',
            [
                'label' => __( 'Address Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'address_title',
            [
                'label' => __( 'Address Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our head office address:', 'appilo' ),
            ]
        );
        $this->add_control(
            'address_info',
            [
                'label' => __( 'Address Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '3556 Hartford Way Vlg, Mount Pleasant, SC, <br> 29466, Australia.', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'call_content',
            [
                'label' => __( 'Call Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'lib_call_icon',
            [
                'label' => __( 'Call Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'call_title',
            [
                'label' => __( 'Call Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Call for help:', 'appilo' ),
            ]
        );
        $this->add_control(
            'number_one',
            [
                'label' => __( 'Number One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '734-697-2907', 'appilo' ),
            ]
        );
        $this->add_control(
            'number_two',
            [
                'label' => __( 'Number Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '843-971-1906', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'email_content',
            [
                'label' => __( 'Mail Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'lib_email_icon',
            [
                'label' => __( 'Mail Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'email_title',
            [
                'label' => __( 'Mail Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Mail us:', 'appilo' ),
            ]
        );
        $this->add_control(
            'email_one',
            [
                'label' => __( 'Email One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'noreply@envato.com', 'appilo' ),
            ]
        );
        $this->add_control(
            'email_two',
            [
                'label' => __( 'Email Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'noreply@envato.com', 'appilo' ),
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
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .contact-section .topapp-sec-title.style-three .title:before, 
                {{WRAPPER}} .contact-section .topapp-sec-title.style-three h2 span:before',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .contact-section .info-column .info-list li .icon, 
                {{WRAPPER}} .contact-section .info-column .info-list li:nth-child(2) .icon, 
                {{WRAPPER}} .contact-section .info-column .info-list li:nth-child(3) .icon',
            ]
        );

        $this->add_control(
            'btn_bg121',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg448',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .default-form .topapp-submit-btn',
            ]
        );
        $this->add_control(
            'section_patternt_bg',
            [
                'label' => __( 'Pattern Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-12.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-13.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-14.png',
                ],
            ]
        );


        $this->end_controls_section();


    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '	<!-- Contact Section -->
                    <section class="contact-section" >
                        <div class="auto-container">
                            <div class="row clearfix">
                                
                                <!-- Info Column -->
                                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
                                        <div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
                                        <div class="patern-layer-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="0.08" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
                                        <ul class="info-list">
                                            <li>';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['lib_address_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                               echo' <strong>'.$settings['address_title'].'</strong>
                                                '.$settings['address_info'].'
                                            </li>
                                            <li>';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['lib_call_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                                echo'<strong>'.$settings['call_title'].'</strong>
                                                <a href="tel:'.$settings['number_one'].'">'.$settings['number_one'].'</a><br>
                                                <a href="tel:'.$settings['number_two'].'">'.$settings['number_two'].'</a>
                                            </li>
                                            <li>';

                                                    echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['lib_email_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                               echo' <strong>'.$settings['email_title'].'</strong>
                                                <a href="mailto:'.$settings['email_one'].'">'.$settings['email_one'].'</a><br>
                                                <a href="mailto:'.$settings['email_two'].'">'.$settings['email_two'].'</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Form Column -->
                                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="topapp-sec-title style-three">
                                            <div class="title">'.$settings['section_title'].'</div>
                                            <h2>'.$settings['section_heading'].'</h2>
                                        </div>
                                        
                                        <!-- Default Form -->
                                        <div class="default-form">
                                        
                                           '.do_shortcode($settings['section_form']).'
                                              
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
	<!-- End Contact Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_contact_block );
?>