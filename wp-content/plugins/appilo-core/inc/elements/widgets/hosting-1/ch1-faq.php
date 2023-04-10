<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_faq extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-faq';
    }

    public function get_title() {
        return __( 'Cloud Hosting Faq', 'appilo' );
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
        $this->add_control(
            'section_id', [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '' , 'appilo' ),
            ]
        );
        $this->add_control(
            'title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'We Answer All' , 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper .small-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper .small-text',
            ]
        );
        $this->add_control(
            'heading', [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Frequently Asked Question' , 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper h3',
            ]
        );
        $this->add_control(
            'info', [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con sequuntur magni.' , 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper > p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper > p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'faqs',
            [
                'label' => __( 'Faq List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '1. It is a long established fact' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'faq_text', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip.' , 'appilo' ),
            ]
        );
        $this->add_control(
            'faq_list',
            [
                'label' => __( 'Faq List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __( '1. It is a long established fact', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( '1. It is a long established fact', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( '1. It is a long established fact', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'faq_style',
            [
                'label' => __( 'Faq Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'ftitle_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-heading a.collapsed' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'fibsdaassd',
            [
                'label' => __( 'Title BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_h_abg',
                'label' => __( 'Title BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-heading a.collapsed',
            ]
        );
        $this->add_control(
            'ftitlea_color',
            [
                'label' => __( 'Title Active Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-heading a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'fibsdaas',
            [
                'label' => __( 'Title Active BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_h_bg',
                'label' => __( 'Title BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-heading a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ftitle_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-heading a.collapsed',
            ]
        );
        $this->add_control(
            'finfo_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-body p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'finfo_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-body p',
            ]
        );
        $this->add_control(
            'fibssadaassd',
            [
                'label' => __( 'Info BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_h_abag',
                'label' => __( 'Info BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-faq-section .faq-wrapper #promote-accordion .panel-default .panel-body',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .host-app-faq-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'secbg',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-faq-section',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $uniqueid = uniqid();
echo '<section  class="host-app-faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="faq-wrapper">
                    <span class="small-text">'.$settings['title'].'</span>
                    <h3>'.$settings['heading'].'</h3>
                    <p>'.$settings['info'].'</p>

            <div class="panel-group" id="'.$uniqueid.'promote-accordion">';
                if ( $settings['faq_list'] ) {
                    $index = 0;
                    foreach ($settings['faq_list'] as $faq) {
                        $index++;
                        if ($index == 1){
                            $class = 'show';
                            $class2 = '';
                        }else{
                            $class = '';
                            $class2 = 'collapsed';
                        }
                        echo '<div class="panel panel-default">
                                    <div class="panel-heading"  id="heading'.$faq['_id'].'">
                                        <h4 class="panel-title">
                                            <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse'.$faq['_id'].'" aria-controls="collapse'.$faq['_id'].'">
                                                '.$faq['faq_title'].'
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapse'.$faq['_id'].'" class="collapse '.$class.'" data-parent="#'.$uniqueid.'promote-accordion">
                                        <div class="panel-body">
                                            <p>'.$faq['faq_text'].'</p>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                    echo'</div> <!-- promote-accordion -->
                </div>
            </div>
        </div>
    </div>
</section> <!-- faq-section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_faq );
?>