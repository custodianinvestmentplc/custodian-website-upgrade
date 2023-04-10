<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_faq extends Widget_Base {

    public function get_name() {
        return 'app-showcase-faq';
    }

    public function get_title() {
        return __( 'App Showcase Faq', 'appilo' );
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
            'headline',
            [
                'label' => __( 'Headline', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Frequently asked Question', 'appilo' ),
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
                'default' => __( 'Learn about features', 'appilo' ),
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
                'default' => __( 'from FAQ!', 'appilo' ),
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
                'default' => __( 'As a SAAS web crawler expert, I help organizations  to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_txt_color',
            [
                'label' => __( 'Info Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section .ei-faq-content .ei-title-faq p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt_fonts',
                'label' => __( 'Info Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-faq-section .ei-faq-content .ei-title-faq p',
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
                'default' => __( 'What should I include in App?' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'faq_content', [
                'label' => __( 'FAQ Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.' , 'appilo' ),
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
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.', 'appilo' ),
                    ],
                    [
                        'faq_title' => __( 'What should I include in App?', 'appilo' ),
                        'faq_content' => __( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed <a href="#">eiusmod tempor incididunt</a> ut labore. In order to design a mobile app that is going to be module downloaded.', 'appilo' ),
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
            'faq_title',
            [
                'label' => __( 'Faq Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq-header button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'faq_title_fonts',
                'label' => __( 'Faq Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq-header button',
            ]
        );
        $this->add_control(
            'faq_content',
            [
                'label' => __( 'Faq Content Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq .ei-faq-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'faq_content_fonts',
                'label' => __( 'Faq Content Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq .ei-faq-body',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'faq_bg',
                'label' => __( 'Faq BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq.faq_bg',
            ]
        );
        $this->add_control(
            'faq_before',
            [
                'label' => __( 'Faq Before Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section .ei-faq-queans .ei-faq-header button:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __( 'Section Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern Background 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape4.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_5', [
                'label' => __( 'Pattern Background 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape5.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_6', [
                'label' => __( 'Pattern Background 6', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape6.png',
                ],
            ]
        );
        $this->add_control(
            'patter_img_6_opacity',
            [
                'label' => __( 'Opacity', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section .fq-shape-style6' => 'opacity: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_7', [
                'label' => __( 'Pattern Background 7', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape7.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_8', [
                'label' => __( 'Pattern Background 8', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/fq-shape8.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-faq-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg',
                'label' => __( 'Faq Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-faq-section',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $margin_left = '';
        if ($settings['shape_display'] == 'd-none'){
            $margin_left = 'inherit';
        }

        echo '<!-- Start of Faq section
    ============================================= -->
<section  class="ei-faq-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ei-faq-content">
                    <div class="ei-title-faq pera-content">
                        <div class="row '.$settings['style_switcher'].'">
                            <div class="col-md-6">
                                <div class="eight-section-title appeight-headline pera-content">
    										<span class="eg-title-tag shape'.$settings['shape_display'].'" style="margin-left: '. $margin_left .';">
    											'.$settings['headline'].'<i class="square-shape '.$settings['shape_display'].'"><i></i><i></i> <i></i><i></i></i>
    										</span>
                                    <h2>'.$settings['headline_txt'].'
                                        <span>'.$settings['subhead_txt'].'</span></h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>'.$settings['info_txt'].'</p>
                            </div>
                        </div>
                    </div>
                    <!-- /title -->
                    <div class="ei-faq-queans">
                        <div class="accordion" id="accordionExample">';
                    if ( $settings['faq_list'] ) {
                        $index = 0;
                        $index2 = 1;
                        foreach ($settings['faq_list'] as $faq_item) {
                            $index++;
                            if ($index == 1){
                                $class = 'show';
                                $class2 = '';
                                $class3 = 'faq_bg';
                            }else{
                                $class = '';
                                $class2 = 'collapsed';
                                $class3 = '';
                            }
                            echo '<div class="ei-faq '.$class3.'">
                                <div class="ei-faq-header" id="heading'.$index2++.'">
                                    <button class="'.$class2.'" data-toggle="collapse" data-target="#collapse'.$faq_item['_id'].'" aria-controls="collapse'.$faq_item['_id'].'">
                                        '.$faq_item['faq_title'].'
                                    </button>
                                </div>
                                <div id="collapse'.$faq_item['_id'].'" class="collapse '.$class.'" data-parent="#accordionExample">
                                    <div class="ei-faq-body">
                                        '.$faq_item['faq_content'].'
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                        echo'</div>
                    </div>
                </div>
            </div>
        </div>
    </div>';?>
    <span class="ei-faq-shape fq-shape-style1" data-parallax='{"x" : 50}'><img src="<?php echo $settings['pattern_bg_1']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style2"><img src="<?php echo $settings['pattern_bg_2']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style3"><img src="<?php echo $settings['pattern_bg_3']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style4" data-parallax='{"y" : 60}'><img src="<?php echo $settings['pattern_bg_4']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style5"><img src="<?php echo $settings['pattern_bg_5']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style6"><img src="<?php echo $settings['pattern_bg_6']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style8"><img src="<?php echo $settings['pattern_bg_8']['url']?>" alt></span>
    <span class="ei-faq-shape fq-shape-style7"><img src="<?php echo $settings['pattern_bg_7']['url']?>" alt><img src="<?php echo $settings['pattern_bg_7']['url']?>" alt>
    <img src="<?php echo $settings['pattern_bg_7']['url']?>" alt></span>
<?php echo'</section>
<!-- End of Faq section
    ============================================= -->';
    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_faq );
?>