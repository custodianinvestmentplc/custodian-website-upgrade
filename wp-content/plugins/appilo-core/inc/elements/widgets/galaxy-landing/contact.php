<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class galaxy_contact extends Widget_Base {

    public function get_name() {
        return 'galaxy-contact';
    }

    public function get_title() {
        return __( 'Contact Us', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-headphones';
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
                'default' => __( 'contact', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => __( 'Contact Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Contact our support guys or make appointment with our consultants', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Contact Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-contact-section .contact-block .contact-info li .i:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'address_text',
            [
                'label' => __( 'Address', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '131 Dartmouth Street <br> Boston, Massachusetts 02116 <br> United States', 'appilo' ),
            ]
        );
        $this->add_control(
            'address_icon',
            [
                'label' => __( 'Address Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-home',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'contact_text',
            [
                'label' => __( 'Contact', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '+1 617 572 2000', 'appilo' ),
            ]
        );
        $this->add_control(
            'contact_icon',
            [
                'label' => __( 'Contact Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-phone',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'mail_text',
            [
                'label' => __( 'Mail', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'support@consult.com', 'appilo' ),
            ]
        );
        $this->add_control(
            'mail_icon',
            [
                'label' => __( 'Mail Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-envelope',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'map_text',
            [
                'label' => __( 'Map Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'View on map', 'appilo' ),
            ]
        );
        $this->add_control(
            'map_icon', [
                'label' => __( 'Map Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/galaxy/view-map.png',
                ],
            ]
        );
        $this->add_control(
            'map_url', [
                'label' => __( 'Map Url', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.7898246149844!2d89.5601340147084!3d22.810250485060976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901d89110f01%3A0x8dbefa2e360efc60!2z4Kaw4Kef4KeH4KayIOCmruCni-CnnA!5e0!3m2!1sbn!2sbd!4v1486012212575',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'form_shortcode',
            [
                'label' => __( 'Form ShortCode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="223" title="Contact Us"]', 'appilo' ),
            ]
        );
        $this->add_control(
            'privacy',
            [
                'label' => __( 'Privacy Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '** We dont share your personal info with anyone. Check out our <a href="#">Privacy Policy</a> for more information.', 'appilo' ),
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- start contact-section -->
                <section class="app-contact-section" >
                    <div class="contact-block">
                                <h2>'.$settings['heading'].'</h2>
                                <div class="contact-info">
                                    <p>'.$settings['info'].'</p>
                                    <ul>
                                        <li>
                                            <span class="icon">';
                                                \Elementor\Icons_Manager::render_icon( $settings['address_icon'], [ 'aria-hidden' => 'true' ] );
                                            echo'</span>
                                            '.$settings['address_text'].'
                                            <div class="view-map">
                                                <a href="'.$settings['map_url']['url'].'" class="view-map-btn map-link"><img src="'.$settings['map_icon']['url'].'" alt>'.$settings['map_text'].'</a>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon">';
                                                \Elementor\Icons_Manager::render_icon( $settings['contact_icon'], [ 'aria-hidden' => 'true' ] );
                                            echo'</span>
                                            '.$settings['contact_text'].'
                                        </li>
                                        <li>
                                            <span class="icon">';
                                                \Elementor\Icons_Manager::render_icon( $settings['mail_icon'], [ 'aria-hidden' => 'true' ] );
                                            echo'</span>
                                            '.$settings['mail_text'].'
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-form">
                                    '.do_shortcode($settings['form_shortcode']).'
                                </div>
                                <p class="privacy">'.$settings['privacy'].'</p>
                            </div>
                </section>
            <!-- end contact-section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new galaxy_contact );
?>