<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_faq extends Widget_Base {

    public function get_name() {
        return 'topapp-faq';
    }

    public function get_title() {
        return __( 'FAQ', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-post-list';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'FAQ', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>FA</span>Q', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Learn about new features from <br> <span>fre</span>q<span>uentl</span>y asked question', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_contact',
            [
                'label' => __( 'Section Contact', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Still have a question? <a href="#">Contact us:</a> <strong>appilo@info.com</strong>', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'faq_items',
            [
                'label' => __( 'FAQ Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'faq_title', [
                'label' => __( 'FAQ Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Frequently Asked Question' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'faq_content', [
                'label' => __( 'FAQ Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Frequently Asked Question Answer' , 'appilo' ),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'faq_list',
            [
                'label' => __( 'FAQ List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'Can users choose to install the app?', 'appilo' ),
                        'faq_content' => __( 'We’re a company built on open source. It all began with Ionic Framework - the worlds most popular open source for building cross-platform mobile and Progressive Web Apps.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'How does the Moodle app work?', 'appilo' ),
                        'faq_content' => __( 'The apps you build with Ionic leverage the power and stability of the open web - the most time-tested universal runtime in the world. The web has been around over two decades.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'Can users choose to install the app?', 'appilo' ),
                        'faq_content' => __( 'We’re a company built on open source. It all began with Ionic Framework - the worlds most popular open source for building cross-platform mobile and Progressive Web Apps.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'How does the Moodle app work?', 'appilo' ),
                        'faq_content' => __( 'The apps you build with Ionic leverage the power and stability of the open web - the most time-tested universal runtime in the world. The web has been around over two decades.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ faq_title }}}',
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
                'selector' => '{{WRAPPER}} .faq-section .topapp-sec-title.style-four .title:before, 
                {{WRAPPER}} .faq-section .topapp-sec-title.style-four h2 span:before',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-section .faq-column h3:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '<!-- Faq Section -->
                <section class="faq-section" >
                    <div class="auto-container">
                        <div class="topapp-sec-title centered style-four">
                            <div class="title">'.$settings['section_title'].'</div>
                            <h2>'.$settings['section_heading'].'</h2>
                        </div>
                        <div class="inner-container">
                            <div class="row clearfix">';

                                if ( $settings['faq_list'] ) {
                                    foreach (  $settings['faq_list'] as $faq_item ) {
                                       echo ' <!-- Faq Column -->
                                                <div class="faq-column col-lg-6 col-md-12 col-sm-12 dynamic-faq-'.$faq_item['_id'].'">
                                                    <h3>'.$faq_item['faq_title'].'</h3>
                                                    <div class="text">'.$faq_item['faq_content'].'</div>
                                                </div>';
                                    }
                                }

                                
                          echo'  </div>
                            <!-- Question -->
                            <div class="question">'.$settings['section_contact'].'</div>
                            
                        </div>
                    </div>
                </section>
	<!-- End Faq Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_faq );
?>