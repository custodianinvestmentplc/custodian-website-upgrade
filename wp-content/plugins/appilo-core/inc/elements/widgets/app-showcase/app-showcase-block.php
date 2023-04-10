<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_block extends Widget_Base {

    public function get_name() {
        return 'app-showcase-block';
    }

    public function get_title() {
        return __( 'App Showcase Block', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-th-large';
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
                'default' => __( 'App Download', 'appilo' ),
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
                'default' => __( 'This app is available for', 'appilo' ),
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
                'default' => __( 'your smart phone.', 'appilo' ),
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
        $this->add_control(
            'patter_img_opacity',
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
                    '{{WRAPPER}} .ei-appdownload-section .ei-appdownloaad-shape' => 'opacity: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_lib',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-idea',
                    'library' => 'appilo-icons-1',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-appdownload-section .ei-download-btn .download-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .ei-appdownload-section .ei-download-btn .download-icon',
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Learn More', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Section Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'btn_img_1', [
                'label' => __( 'Button One', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/shape/btn1.png',
                ],
            ]
        );
        $this->add_control(
            'btn_img_url_1', [
                'label' => __( 'Button Image Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'btn_img_2', [
                'label' => __( 'Button Two', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/shape/btn2.png',
                ],
            ]
        );
        $this->add_control(
            'btn_img_url_2', [
                'label' => __( 'Button Image Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'section_image_1', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/mockup/amu1.png',
                ],
            ]
        );
        $this->add_control(
            'action_text',
            [
                'label' => __( 'Call Action Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Are you interested for this app?', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'action_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-appdownload-section .ei-download-btn p',
            ]
        );
        $this->add_control(
            'action_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-appdownload-section .ei-download-btn p' => 'color: {{VALUE}}',
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
            'button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-appdownload-section .ei-download-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-appdownload-section .ei-download-btn a',
            ]
        );
        $this->add_control(
            'button_hover_style',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'button_hover_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-appdownload-section .ei-download-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_1',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-appdownload-section .ei-download-btn a:hover',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/background/appbg1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/background/apps1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/background/apps2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern BG 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/app-showcase/background/apps3.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .ei-appdownload-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Start of App Download  section
    ============================================= -->
<section  class="ei-appdownload-section position-relative" data-background="'.$settings['pattern_bg_1']['url'].'">
    <div class="container">
        <div class="ei-appdownload-content">
            <div class="row '.$settings['style_switcher'].'">
            
                <div class="col-lg-6">
                    <div class="ei-app-mockup-img  wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src=" '.$settings['section_image_1']['url'].'" alt>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ei-app-down-text wow fadeFromLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <div class="eight-section-title appeight-headline pera-content">
                            <span class="eg-title-tag shape'.$settings['shape_display'].'">
                                '.$settings['headline'].' <i class="square-shape '.$settings['shape_display'].'"><i></i><i></i> <i></i> <i></i> </i>
                            </span>
                        <h2>'.$settings['headline_txt'].'
                            <span>'.$settings['subhead_txt'].'</span></h2>
                        <p>'.$settings['info_txt'].'</p>
                    </div>
                        <!-- /title -->
                        <div class="app-down-btn">
                            <a href="'.$settings['btn_img_url_1']['url'].'"><img src="'.$settings['btn_img_1']['url'].'" alt></a>
                            <a href="'.$settings['btn_img_url_2']['url'].'"><img src="'.$settings['btn_img_2']['url'].'" alt></a>
                        </div>
                        <div class="ei-download-btn pera-content">
                            <div class="download-icon float-left">';\Elementor\Icons_Manager::render_icon( $settings['icon_lib'], [ 'aria-hidden' => 'true' ] );echo'</div>
                            <p>'.$settings['action_text'].'</p>
                            <a href="'.$settings['section_btn_url']['url'].'">'.$settings['section_btn'].' </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>';?>
    <div class="ei-appdownloaad-shape app-shape1" data-parallax='{"y" : -100}'><img src="<?php echo $settings['pattern_bg_2']['url']?>" alt></div>
    <div class="ei-appdownloaad-shape app-shape2" data-parallax='{"x" : -120}'><img src="<?php echo $settings['pattern_bg_3']['url']?>" alt></div>
    <div class="ei-appdownloaad-shape app-shape3" data-parallax='{"y" : -100}'><img src="<?php echo $settings['pattern_bg_4']['url']?>" alt></div>
<?php echo'</section>
<!-- End of App Download section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_block );
?>