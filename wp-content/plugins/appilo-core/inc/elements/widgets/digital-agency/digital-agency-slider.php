<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class digital_agency_slider extends Widget_Base {

    public function get_name() {
        return 'digital-agency-slider';
    }

    public function get_title() {
        return __( 'Digital Agency Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-image-rollover';
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
            'slider_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are Appilo', 'appilo' ),
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_color',
                'label' => __( 'Title Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-tag',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-tag',
            ]
        );
        $this->add_control(
            'slider_heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We help to solve clients', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content h1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content h1',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Want' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'visible_txt',
            [
                'label' => __( 'Visible Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'is-not-visible',
                'options' => [
                    'is-visible'  => __( 'Visible', 'appilo' ),
                    'is-not-visible'  => __( 'Not Visible', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __( 'Animate List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Problem', 'appilo' ),
                    ], [
                        'list_title' => __( 'Issue', 'appilo' ),
                    ], [
                        'list_title' => __( 'Want', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );
        $this->add_control(
            'animate_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .cd-headline.clip .cd-words-wrapper' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'animate_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-banner-section .cd-headline.clip .cd-words-wrapper',
            ]
        );
        $this->add_control(
            'slider_info',
            [
                'label' => __( 'Info Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our Activate suite of business apps gives your Lorem ipsum dolor sit amet, consectetur.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content p',
            ]
        );
        $this->add_control(
            'slider_btn_1',
            [
                'label' => __( 'Slider Button 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'About Our Company', 'appilo' ),
            ]
        );
//        section control

        $this->add_control(
            'slider_btn_url_1', [
                'label' => __( 'Slider Button One Link', 'appilo' ),
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
            'btn_1_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-abt-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_1_txt',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-abt-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_bg',
                'label' => __( 'Button 1 BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-abt-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_1_hover_bg',
                'label' => __( 'Button 1 Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-abt-btn:before',
            ]
        );
        $this->add_control(
            'slider_btn_icon',
            [
                'label' => __( 'Video Play Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'slider_btn_url_2', [
                'label' => __( 'Slider Button Two Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'button_color_2',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-play-btn a i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_bg',
                'label' => __( 'Button 2 BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-play-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_2_round_bg',
                'label' => __( 'Button 2 Round BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content .dia-banner-btn .dia-play-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'banner_info_height',
            [
                'label' => __( 'Banner Info Height', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content h1' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'banner_image', [
                'label' => __( 'Banner Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/banner/ns1.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'banner_move_control2',
            [
                'label' => __( 'Banner Move Control', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .banner-side-img.banner-img2.view-on' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'z_index_1',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'dia-zindex-0',
                'options' => [
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
            'banner_bg', [
                'label' => __( 'Banner Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/banner/ns2.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'banner_move_control1',
            [
                'label' => __( 'Banner Move Control', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .banner-side-img.banner-img1.view-on' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'z_index_2',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'dia-zindex-0',
                'options' => [
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
        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/pls2.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_3',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'dia-zindex-0',
                'options' => [
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
            'pattern_bg_2', [
                'label' => __( 'Pattern BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/shp1.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern BG 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/bsi2.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern BG 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/bsi1.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'slider_main_bg',
                'label' => __( 'Slider Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section .dia-banner-content',
            ]
        );
        $this->add_responsive_control(
            'slider_content_width',
            [
                'label' => __( 'Slider Content Width', 'appilo' ),
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
                    'size' => 460,
                ],
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dia_main_bg',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .dia-banner-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-banner-section .dia-banner-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ($settings['slider_btn_url_1']['is_external']){
            $target = '_blank';
        }else{
            $target = '';
        }

    echo '<!-- Start of Banner section
        ============================================= -->
        <section  class="dia-banner-section position-relative">
            <div class="banner-side-img banner-img1 position-absolute '.$settings['z_index_1'].'"><img src="'.$settings['banner_bg']['url'].'" alt></div>
            <div class="banner-side-img banner-img2 position-absolute '.$settings['z_index_2'].'"><img src="'.$settings['banner_image']['url'].'" alt></div>
            <div class="container">
                <div class="dia-banner-content dia-headline pera-content">
                    <span class="dia-banner-tag">'.$settings['slider_title'].'</span>
                    <h1 class="cd-headline clip is-full-width">
                            '.$settings['slider_heading'].'
                        <span class="cd-words-wrapper">';
                            if ( $settings['list'] ) {
                                foreach ($settings['list'] as $list) {
                                    echo '<b class="'.$list['visible_txt'].'">'.$list['list_title'].'</b>';
                                }
                            }
                        echo'</span>
                    </h1>
                    <p>'.$settings['slider_info'].'</p>
                    <div class="dia-banner-btn d-flex">';
                            if ($settings['slider_btn_url_2']['url']) {
                                echo '<div class="dia-play-btn text-center d-inline-block">
                                    <a href="' . $settings['slider_btn_url_2']['url'] . '" class="lightbox-image overlay-box">';
                                \Elementor\Icons_Manager::render_icon($settings['slider_btn_icon'], ['aria-hidden' => 'true']);
                                echo '</a>
                        </div>';
                            } if ($settings['slider_btn_url_1']['url']) {
                            echo '<div class="dia-abt-btn text-center d-inline-block">
                                <a href="' . $settings['slider_btn_url_1']['url'] . '" target="'. $target .'">' . $settings['slider_btn_1'] . '</a>
                            </div>';
                            }
                    echo'</div>
                </div>
            </div>
            <div class="banner-shape1 position-absolute '.$settings['z_index_3'].'"><img src="'.$settings['pattern_bg_1']['url'].'" alt></div>';?>
            <div class="banner-shape2 position-absolute"><img src="<?php echo esc_url($settings['pattern_bg_2']['url'])?>" alt></div>
            <div class="banner-side-shape2 position-absolute" ><img src="<?php echo esc_url($settings['pattern_bg_3']['url'])?>" alt></div>
            <div class="banner-side-shape1 position-absolute"><img src="<?php echo esc_url($settings['pattern_bg_4']['url'])?>" alt></div>
        </section>
        <!-- End of Banner section
        ============================================= -->
<?php
    }





    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new digital_agency_slider );
?>