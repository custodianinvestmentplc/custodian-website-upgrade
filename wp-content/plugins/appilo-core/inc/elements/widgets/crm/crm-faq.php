<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crm_faq extends Widget_Base {

    public function get_name() {
        return 'crm-faq';
    }

    public function get_title() {
        return __( 'CRM Faq', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-bullet-list';
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
            'title_txt',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'FAQ', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-section-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-section-title span',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Keep Your Data Protected. Our Platform is certified', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-section-title h2',
            ]
        );
        $this->add_control(
            'section_image', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/crm/shape/f-vector.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'faq_lists',
            [
                'label' => __( 'Faq List', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'How can i install this theme? ', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our optimized configuration process saves your team time when running and scaling distributed applications, AI & machine learning workloads, hosted services', 'appilo' ),
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
                        'title' => __( 'How can i install this theme? ', 'appilo' ),
                    ],
                    [
                        'title' => __( 'How can i install this theme? ', 'appilo' ),
                    ],
                    [
                        'title' => __( 'How can i install this theme? ', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'faq_styles',
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
                    '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-header button.collapsed' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ftitle_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-header button.collapsed',
            ]
        );
        $this->add_control(
            'finfo_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'finfo_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-body',
            ]
        );
        $this->add_control(
            'mbcasdnys',
            [
                'label' => __( 'Title Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-header button.collapsed',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg1',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-header button',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'number_bg2',
                'label' => __( 'BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-faq-ques-ans .crm-faq-body',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'style_switcher',
            [
                'label' => __( 'Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style2',
                'options' => [
                    'flex-row-reverse'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .crm-faq-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .crm-faq-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $uniqueid = uniqid();

    echo '<!-- Start of FAQ section
    ============================================= -->                
    <section  class="crm-faq-section">
        <div class="container">
            <div class="crm-faq-content">
                <div class="row ' . $settings['style_switcher'] . '">
                    <div class="col-lg-6">
                        <div class="crm-faq-ques-ans">
                            <div class="crm-section-title crm-headline">
                                <span>' . $settings['title_txt'] . '</span>
                                <h2>' . $settings['heading_txt'] . '</h2>
                            </div>
                            <div class="crm-faq-wrapper">
                                <div class="accordion" id="'.$uniqueid.'accordionExample">';

                            if ( $settings['faq_list'] ) {
                                $index = 0;
                                $index2 = 1;
                                foreach ($settings['faq_list'] as $faq) {
                                    $index++;
                                    if ($index == 1){
                                        $class = 'show';
                                        $class2 = '';
                                    }else{
                                        $class = '';
                                        $class2 = 'collapsed';
                                    }
                                    echo '<div class="crm-faq">
                                            <div class="crm-faq-header" id="heading'.$index2++.'">
                                                <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse'.$faq['_id'].'" aria-controls="collapse'.$faq['_id'].'"> '.$faq['title'].' </button>
                                            </div> 
                                            <div id="collapse'.$faq['_id'].'" class="collapse '.$class.'" data-parent="#'.$uniqueid.'accordionExample">
                                                <div class="crm-faq-body">
                                                   '.$faq['info'].'
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }

                                echo'</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crm-faq-img position-relative">
                            <img src="' . $settings['section_image']['url'] . '" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End of FAQ section
    ============================================= -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crm_faq );
?>