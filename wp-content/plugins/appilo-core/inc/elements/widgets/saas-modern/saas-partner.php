<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_partner extends Widget_Base {

    public function get_name() {
        return 'saas-partner';
    }

    public function get_title() {
        return __( 'SaaS Partner', 'appilo' );
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
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'trusted_user', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title_icon',
            [
                'label' => __( 'Section Title Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-link',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our partners', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_headline',
            [
                'label' => __( 'Section Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Trusted By 25,000+ Users <span>looks so awesome!', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Try with your favorite tool and save yourself from manually managing bugs and tasks. Also fits with your theme. <br> Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic web designs. The passage to an unknown typesetter.', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'partner_photo', [
                'label' => __( 'Partner Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/saas/user/us1.png',
                ],
            ]
        );
        $this->add_control(
            'partner_list',
            [
                'label' => __( 'Partner List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                    [
                        'partner_photo' => get_template_directory_uri(). '/img/saas/user/us1.png',
                    ],
                ],
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
            'title_icon_bg',
            [
                'label' => __( 'Partner Title Icon BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'partner_title_icon_bg',
                'label' => __( 'Partner Title Icon BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .section_title .title_tag .tag_icon',
            ]
        );
        $this->add_control(
            'title_bg',
            [
                'label' => __( 'Partner Title BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'partner_title_bg',
                'label' => __( 'Partner Title BG', 'appilo' ),
                'types' => [ 'gradient', 'classic' ],
                'selector' => '{{WRAPPER}} .section_title .title_tag',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
echo '<section  class="trusted_user_section">
    <div class="container">
        <div class="trusted_content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="trusted_content_img ul-li">
                        <ul>';
                    if ( $settings['partner_list'] ) {
                        foreach ($settings['partner_list'] as $partners) {
                            echo'<li><img src="'.$partners['partner_photo']['url'].'" alt></li>';
                        }
                    }
                        echo'</ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="user_content">
                        <div class="section_title">
                            <div class="title_tag">
                                <div class="tag_icon text-center float-left">';
                                \Elementor\Icons_Manager::render_icon( $settings['section_title_icon'], [ 'aria-hidden' => 'true' ] );
                                echo'</div>
                               '.$settings['section_title'].'
                            </div>
                            <div class="section_title_text headline pera-content">
                                <h2>'.$settings['section_headline'].'</h2>
                                <p>'.$settings['section_info'].'</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';

    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_partner );
?>