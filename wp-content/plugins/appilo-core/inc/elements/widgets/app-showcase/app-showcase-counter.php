<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_counter extends Widget_Base {

    public function get_name() {
        return 'app-showcase-counter';
    }

    public function get_title() {
        return __( 'App Showcase Counter', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-number-field';
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
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Fun facts', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title .eg-title-tag' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag',
            ]
        );
        $this->add_control(
            'headline_txt',
            [
                'label' => __( 'Headline Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We have some awesome', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_txt_color',
            [
                'label' => __( 'Headline Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_txt_fonts',
                'label' => __( 'Headline Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2',
            ]
        );
        $this->add_control(
            'subhead_txt',
            [
                'label' => __( 'Subhead Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'funfacts for clients.', 'appilo' ),
            ]
        );
        $this->add_control(
            'subhead_txt_color',
            [
                'label' => __( 'Subhead Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title h2 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subhead_txt_fonts',
                'label' => __( 'Subhead Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title h2 span',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a SAAS web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_txt_color',
            [
                'label' => __( 'Info Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-section-title p',
            ]
        );
        $this->add_responsive_control(
            'headline_margin',
            [
                'label' => __( 'Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'headline_width',
            [
                'label' => __( 'Headline Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 490,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'headline_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'align_title5',
            [
                'label' => __( 'Title Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],

                ],
                'selectors' => [
                    '{{WRAPPER}} .eight-section-title.appeight-headline' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'shape_display',
            [
                'label' => __( 'Shape Display', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'd-block',
                'options' => [
                    'd-none'  => __( 'Hide', 'appilo' ),
                    'd-block' => __( 'Show', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'before_bg',
            [
                'label' => __( 'Text Before', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg1',
                'label' => __( 'Style BG 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(1)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg2',
                'label' => __( 'Style BG 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(2)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg3',
                'label' => __( 'Style BG 3', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(3)',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'before_bg4',
                'label' => __( 'Style BG 4', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eight-section-title .eg-title-tag i:nth-child(4)',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'counter_section',
            [
                'label' => __( 'Counters', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '20' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'd_counter_number', [
                'label' => __( 'Default Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'counter_ex', [
                'label' => __( 'Counter Extention', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00' , 'appilo' ),
            ]
        );
        $repeater->add_control(
            'counter_text', [
                'label' => __( 'Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Awesome Integratios' , 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_list',
            [
                'label' => __( 'Counter List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_number' => __( '20', 'appilo' ),
                        'counter_text' => __( 'Awesome Integratios', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '20', 'appilo' ),
                        'counter_text' => __( 'Awesome Integratios', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '20', 'appilo' ),
                        'counter_text' => __( 'Awesome Integratios', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '20', 'appilo' ),
                        'counter_text' => __( 'Awesome Integratios', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ counter_text }}}',
            ]
        );
        $this->add_control(
            'mockup_img', [
                'label' => __( 'Mockup Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/mockup/fmu1.png',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'count_number_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number .odometer, 
                    {{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number .odometer, 
                {{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number strong',
            ]
        );
        $this->add_control(
            'count_txt_color',
            [
                'label' => __( 'Count Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'txt_fonts',
                'label' => __( 'Count Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number p',
            ]
        );
        $this->add_control(
            'counter_padding',
            [
                'label' => __( 'Counter Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter .eg-counter-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'counter_border_width',
            [
                'label' => __( 'Border Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after, 
                    {{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'counter_border_height',
            [
                'label' => __( 'Border Height', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 85,
                ],
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after, 
                    {{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'counter_border',
                'label' => __( 'Counter Border', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after, 
                {{WRAPPER}} .eg-fun-fact-section .eg-funfact-text .fun-fact-counter:after',
            ]
        );
        $this->add_control(
            'z_index_1',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
                    'dia-zindex--4'  => __( 'z-index--4', 'appilo' ),
                    'dia-zindex--3'  => __( 'z-index--3', 'appilo' ),
                    'dia-zindex--2'  => __( 'z-index--2', 'appilo' ),
                    'dia-zindex--1'  => __( 'z-index--1', 'appilo' ),
                    'dia-zindex-0'  => __( 'z-index-0', 'appilo' ),
                    'dia-zindex-auto'  => __( 'z-index-auto', 'appilo' ),
                    'dia-zindex-1'  => __( 'z-index-1', 'appilo' ),
                    'dia-zindex-2'  => __( 'z-index-2', 'appilo' ),
                    'dia-zindex-3'  => __( 'z-index-3', 'appilo' ),
                    'dia-zindex-4'  => __( 'z-index-4', 'appilo' ),
                    'dia-zindex-5'  => __( 'z-index-5', 'appilo' ),
                    'dia-zindex-6'  => __( 'z-index-6', 'appilo' ),
                    'dia-zindex-7'  => __( 'z-index-7', 'appilo' ),
                    'dia-zindex-8'  => __( 'z-index-8', 'appilo' ),
                    'dia-zindex-9'  => __( 'z-index-9', 'appilo' ),
                    'dia-zindex-10'  => __( 'z-index-10', 'appilo' ),
                    'dia-zindex-11'  => __( 'z-index-11', 'appilo' ),
                    'dia-zindex-22'  => __( 'z-index-22', 'appilo' ),
                    'dia-zindex-33'  => __( 'z-index-33', 'appilo' ),
                    'dia-zindex-44'  => __( 'z-index-44', 'appilo' ),
                    'dia-zindex-55'  => __( 'z-index-55', 'appilo' ),
                    'dia-zindex-66'  => __( 'z-index-66', 'appilo' ),
                    'dia-zindex-77'  => __( 'z-index-77', 'appilo' ),
                    'dia-zindex-88'  => __( 'z-index-88', 'appilo' ),
                    'dia-zindex-99'  => __( 'z-index-99', 'appilo' ),
                    'dia-zindex-111'  => __( 'z-index-111', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/mockup/fmu2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/mockup/fmu3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fc1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern BG 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fc2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_5', [
                'label' => __( 'Pattern BG 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fns1.png',
                ],
            ]
        );

        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eg-fun-fact-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_main_bg',
                'label' => __( 'Section Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .eg-fun-fact-section',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of Fun fact   section
    ============================================= -->
<section  class="eg-fun-fact-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="eg-funfact-content clearfix position-relative">
                    <div class="eg-fun-fact-mockup wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="main-mockup">
                            <img src="'.$settings['mockup_img']['url'].'">
                        </div>';?>
                        <div class="fn-shape fn-shape-item1" data-parallax='{"y" : 50}'><img src="<?php echo $settings['pattern_bg_1']['url']?>" alt></div>
                        <div class="fn-shape fn-shape-item2" data-parallax='{"y" : 60}'><img src="<?php echo $settings['pattern_bg_2']['url']?>" alt></div>
                        <div class="fn-shape fn-shape-item3" data-parallax='{"x" : -50}'><img src="<?php echo $settings['pattern_bg_3']['url']?>" alt></div>
                        <div class="fn-shape fn-shape-item4" data-parallax='{"x" : -40}'><img src="<?php echo $settings['pattern_bg_4']['url']?>" alt></div>
                    <?php echo'</div>
                    <div class="eg-funfact-text float-right wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="eight-section-title appeight-headline pera-content">
                                    <span class="eg-title-tag shape'.$settings['shape_display'].'">
                                        '.$settings['headline'].' <i class="square-shape '.$settings['shape_display'].'"><i></i><i></i> <i></i> <i></i> </i>
                                    </span>
                            <h2>'.$settings['headline_txt'].'
                                <span>'.$settings['subhead_txt'].'</span></h2>
                            <p>'.$settings['info_txt'].'</p>
                        </div>
                        <!-- /title -->
                        <div class="fun-fact-counter '.$settings['z_index_1'].' position-relative clearfix">';
                    if ( $settings['counter_list'] ) {
                        foreach ($settings['counter_list'] as $counter) {
                            echo '<div class="eg-counter-number pera-content text-center '.$counter['_id'].'">
                                        <span class="odometer" data-count="'.$counter['counter_number'].'">'.$counter['d_counter_number'].'</span><strong>'.$counter['counter_ex'].'</strong>
                                        <p>'.$counter['counter_text'].'</p>
                                    </div>';
                            }
                        }
                        echo'</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fn-bg-shape position-absolute"><img src="'.$settings['pattern_bg_5']['url'].'" alt></div>
</section>
<!-- End of Fun fact  section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_counter );
?>