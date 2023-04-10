<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class smm_progress extends Widget_Base {

    public function get_name() {
        return 'smm-progress';
    }

    public function get_title() {
        return __( 'SMM Progress', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-inner-section';
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
                'default' => __( 'Skills', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .smm-section-title span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'title_color',
                'label' => __( 'Title Color', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .smm-section-title span',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our Team Have Enough Stamina For Work.', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-wrapper .smm-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .smm-section-title h2',
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __( 'Play Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $this->add_control(
            'video_link', [
                'label' => __( 'Video Link', 'appilo' ),
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
            'btn_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-section .smm-skill-img .smm-skill-play a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .smm-skill-section .smm-skill-img .smm-skill-play a svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
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
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-section .smm-skill-img .smm-skill-play a' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .smm-skill-section .smm-skill-img .smm-skill-play a svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'exp_img_1', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/smm/sm-sbg.jpg',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_width',
            [
                'label' => __( 'Content Width', 'appilo' ),
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
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-wrapper' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'experience_box',
            [
                'label' => __( 'Experience Counter', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'experience_heading',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Design Solutions', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'progress_number',
            [
                'label' => __( 'Progress Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '92', 'appilo' ),
            ]
        );
        $this->add_control(
            'experience_list',
            [
                'label' => __( 'Experiences List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'experience_heading' => __( 'Web Development', 'appilo' ),
                    ],
                    [
                        'experience_heading' => __( 'Web Development', 'appilo' ),
                    ],
                    [
                        'experience_heading' => __( 'Web Development', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ experience_heading }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'experiences_style',
            [
                'label' => __( 'Progress Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'e_title_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'e_title_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent h4',
            ]
        );
        $this->add_control(
            'e_info_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent .progress span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'e_info_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent .progress span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'progress_numberbg',
                'label' => __( 'Number BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent .progress span',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'progress_bg_color1',
                'label' => __( 'Progress BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}}.smm-skill-wrapper .skill-set-percent .progress-bar',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'progress_bg_color',
                'label' => __( 'Progress BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .smm-skill-wrapper .skill-set-percent .progress',
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
                'selector' => '{{WRAPPER}} .smm-skill-section',
            ]
        );
        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __( 'Content Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .smm-skill-section .smm-skill-section-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .smm-skill-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $video_link = get_that_link($settings['video_link']);
    echo '<!-- Start of Skill section
    ============================================= -->          
    <section  class="smm-skill-section">
        <div class="smm-skill-section-wrapper  position-relative">
            <div class="smm-skill-img">
                <img src="'.$settings['exp_img_1']['url'].'" alt>
                <div class="smm-skill-play position-absolute">
                    <a class="smm-video-box" '.$video_link.'>'; \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);echo'</a>
                </div>
            </div>
            <div class="container">
                <div class="smm-skill-wrapper">
                    <div class="smm-section-title  smm-headline">
                        <span>' . $settings['title_txt'] . '</span>
                        <h2>' . $settings['heading_txt'] . '</h2>
                    </div>
                    <div class="skill-progress-bar">';
                    if ( $settings['experience_list'] ) {
                        foreach ($settings['experience_list'] as $experience) {
                            echo '<div class="skill-set-percent headline">
                                    <h4>'.$experience['experience_heading'].'</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="'.$experience['progress_number'].'"></div>
                                    </div>
                                </div>';
                                }
                            }
                    echo '</div>
                </div>
            </div>
        </div>
    </section>
<!-- End of Skill section
    ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new smm_progress );
?>