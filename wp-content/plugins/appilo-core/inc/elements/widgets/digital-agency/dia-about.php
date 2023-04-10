<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_about extends Widget_Base {

    public function get_name() {
        return 'dia-about';
    }

    public function get_title() {
        return __( 'Digital Agency About', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-info-box';
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
                'default' => __( 'We are a Digital Agency', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-about-section .dia-section-title span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_color',
                'label' => __( 'Title Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-about-section .dia-section-title span',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Experts Services To Change  Business', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-about-section .dia-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-about-section .dia-section-title h2',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-about-content .dia-about-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-about-content .dia-about-text',
            ]
        );
        $this->add_control(
            'about_us',
            [
                'label' => __( 'About us', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( ' <li>We Are Result Oriented</li>
                                    <li>We Make To Execute</li>
                                    <li>Our experts works harder</li>
                                    <li>We Resolve The Problem</li>
                                    <li>Integrated Model </li>
                                    <li>Integrated Model & Methodology </li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'abt_color1',
            [
                'label' => __( 'About Before Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-about-content .dia-about-list li:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'abt_color',
            [
                'label' => __( 'About Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-about-content .dia-about-list li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'abt_fonts',
                'label' => __( 'About Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-about-content .dia-about-list li',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'about_img',
            [
                'label' => __( 'About Images', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'abt_img_1', [
                'label' => __( 'About Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/about/ab1.png',
                ],
            ]
        );
        $this->add_control(
            'abt_img_2', [
                'label' => __( 'About Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/as1.png',
                ],
            ]
        );
        $this->add_control(
            'abt_img_3', [
                'label' => __( 'About Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/as1.png',
                ],
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
                'label' => __( 'Section Background Color', 'appilo' ),
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
                'selector' => '{{WRAPPER}} .dia-about-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo ' <!-- Start of about section
        ============================================= -->
        <section  class="dia-about-section">
            <div class="container">
                <div class="dia-about-content">
                    <div class="row ' . $settings['style_switcher'] . '">
                        <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="dia-about-text-area">
                                <div class="dia-about-title-text">
                                    <div class="dia-section-title text-left text-capitalize dia-headline">
                                        <span>' . $settings['title_txt'] . '</span>
                                        <h2>' . $settings['heading_txt'] . '</h2>
                                    </div>
                                    <div class="dia-about-text">
                                        ' . $settings['info_txt'] . '
                                    </div>
                                </div>
                                <div class="dia-about-list ul-li-block">
                                    <ul>
                                        ' . $settings['about_us'] . '
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="dia-about-img position-relative">
                                <img src="'.$settings['abt_img_1']['url'].'" alt>';?>
                                <div class="ab-shape1 position-absolute" data-parallax='{"x" : -30}'> <img src="<?php echo esc_url($settings['abt_img_2']['url'])?>" alt></div>
                                <div class="ab-shape2 position-absolute" data-parallax='{"x" : 30}'> <img src="<?php echo esc_url($settings['abt_img_3']['url'])?>" alt></div>
                           <?php echo'</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of About section
        ============================================= -->  ';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_about );
?>