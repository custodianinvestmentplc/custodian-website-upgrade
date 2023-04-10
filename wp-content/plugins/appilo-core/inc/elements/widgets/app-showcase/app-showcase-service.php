<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_showcase_service extends Widget_Base {

    public function get_name() {
        return 'app-showcase-service';
    }

    public function get_title() {
        return __( 'App Showcase Service', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fab fa-free-code-camp';
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
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Why will you choose our app?', 'appilo' ),
            ]
        );
        $this->add_responsive_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eight-service-section .eight-service-text h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_color_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .eight-service-section .eight-service-text h2',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'service_slider',
            [
                'label' => __( 'Services Slider', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'service_slider_image', [
                'label' => __( 'Slider Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/screenshoot/slider-01.jpg',
                ],
            ]
        );
        $this->add_control(
            'service_slider_list',
            [
                'label' => __( 'Slider List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_slider_image' =>  '',
                    ], [
                        'service_slider_image' =>  '',
                    ], [
                        'service_slider_image' =>  '',
                    ], [
                        'service_slider_image' =>  '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        // Service Box 1
        $this->start_controls_section(
            'content_service_box_one',
            [
                'label' => __( 'Service One', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'service_title_one',
            [
                'label' => __( 'Service Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Bug free', 'appilo' ),
            ]
        );

        $this->add_control(
            'custom_icon_img_one', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );
        $this->add_control(
            'service_info_one',
            [
                'label' => __( 'Service Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_icon_one',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-bug',
                    'library' => 'appilo-icons-1',
                ],
            ]
        );
        $this->end_controls_section();


        // Service Box 2
        $this->start_controls_section(
            'content_service_box_two',
            [
                'label' => __( 'Service Two', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'service_title_two',
            [
                'label' => __( 'Service Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Bug free', 'appilo' ),
            ]
        );
        $this->add_control(
            'custom_icon_img_two', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );
        $this->add_control(
            'service_info_two',
            [
                'label' => __( 'Service Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_icon_two',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-bug',
                    'library' => 'appilo-icons-1',
                ],
            ]
        );
        $this->end_controls_section();

        // Service Box 2
        $this->start_controls_section(
            'content_service_box_three',
            [
                'label' => __( 'Service Three', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'service_title_three',
            [
                'label' => __( 'Service Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Bug free', 'appilo' ),
            ]
        );
        $this->add_control(
            'custom_icon_img_three', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );
        $this->add_control(
            'service_info_three',
            [
                'label' => __( 'Service Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'service_icon_three',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-bug',
                    'library' => 'appilo-icons-1',
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-service-icon-text .ei-service-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-service-icon-text .ei-service-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ei-service-icon-text .ei-service-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .ei-service-icon-text .ei-service-text p',
            ]
        );
        $this->add_control(
            'icon_bg_style',
            [
                'label' => __( 'Icons Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-service-icon-text .ei-service-icon',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_hover_background',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-service-icon-text .ei-service-icon:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-service-icon-text .ei-service-icon i',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_hover_color',
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .ei-service-icon-text:hover .ei-service-icon i',
            ]
        );
        $this->add_control(
            'section_pattern_bg',
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
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/s-shape3.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/shape/s-shape4.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/app-showcase/mockup/smu1.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_4',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .eight-service-section:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_5',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .eight-service-section:after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_6',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .eight-service-section .eight-service-text:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_main_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .eight-service-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eight-service-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();


    echo '<!-- Start of service  section
    ============================================= -->
<section  class="eight-service-section position-relative">
    <div class="container">
        <div class="eight-service-slide   clearfix wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="ei-service-slide-btn ul-li-block clearfix">
                <div class="banner-pager clearfix" id="banner-pager">
                    <a class="pager" data-slide-index="0">
                        <div class="ei-service-icon-text text-right appeight-headline pera-content">
                            <div class="ei-service-icon float-right text-center">';
                            if (!empty($settings['custom_icon_img_one']['url'])) {
                                echo '<img src="' . $settings['custom_icon_img_one']['url'] . '" class="m-auto" alt>';
                            }
                            \Elementor\Icons_Manager::render_icon($settings['service_icon_one'], ['aria-hidden' => 'true']);

                            echo'</div>
                            <div class="ei-service-text">
                                <h3>'.$settings['service_title_one'].'</h3>
                                <p>'.$settings['service_info_one'].'</p>
                            </div>
                        </div>
                    </a>

                    <a class="pager" data-slide-index="1">
                        <div class="ei-service-icon-text text-right appeight-headline pera-content">
                            <div class="ei-service-icon float-right text-center">';
                                if (!empty($settings['custom_icon_img_two']['url'])) {
                                    echo '<img src="' . $settings['custom_icon_img_two']['url'] . '" class="m-auto" alt>';
                                }
                                \Elementor\Icons_Manager::render_icon($settings['service_icon_two'], ['aria-hidden' => 'true']);

                                echo'</div>
                            <div class="ei-service-text">
                                <h3>'.$settings['service_title_two'].'</h3>
                                <p>'.$settings['service_info_two'].'</p>
                            </div>
                        </div>
                    </a>

                    <a class="pager" data-slide-index="2">
                        <div class="ei-service-icon-text text-right appeight-headline pera-content">
                            <div class="ei-service-icon float-right text-center">';
                            if (!empty($settings['custom_icon_img_three']['url'])) {
                                echo '<img src="' . $settings['custom_icon_img_three']['url'] . '" class="m-auto" alt>';
                            }
                            \Elementor\Icons_Manager::render_icon($settings['service_icon_three'], ['aria-hidden' => 'true']);

                            echo'</div>
                            <div class="ei-service-text">
                                <h3>'.$settings['service_title_three'].'</h3>
                                <p>'.$settings['service_info_three'].'</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="eight-service-text position-relative appeight-headline wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="ei-service-slide-mbl" data-background="'.$settings['pattern_bg_3']['url'].'">
                <div class="slide-inner">
                    <div class="ei-service-slide">';

                    if ( $settings['service_slider_list'] ) {
                        foreach ($settings['service_slider_list'] as $slider) {
                            echo '<div class="slide-item dynamic-slider' . $slider['_id'] . '">
                            <div class="image">
                                <img src="' . $slider['service_slider_image']['url'] . '" alt />
                            </div>
                        </div>';
                        }
                    }

                    echo'</div>
                </div>
            </div>
            <h2>' . $settings['section_heading'] . '</h2>
        </div>
    </div>';?>
    <div class="s-shape-bg1" data-parallax='{"x" : -70}'><img src="<?php echo $settings['pattern_bg_1']['url']?>"></div>
    <div class="s-shape-bg2 text-center"><img src="<?php echo $settings['pattern_bg_2']['url']?>"></div>
<?php echo'</section>';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new app_showcase_service );
?>