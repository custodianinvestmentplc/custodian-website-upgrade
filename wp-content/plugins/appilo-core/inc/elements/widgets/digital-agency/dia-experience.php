<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_experience extends Widget_Base {

    public function get_name() {
        return 'dia-experience';
    }

    public function get_title() {
        return __( 'Digital Agency Experience', 'appilo' );
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
                'default' => __( 'Our Experiences', 'appilo' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .dia-section-title span',
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
                'selector' => '{{WRAPPER}} .dia-exp-section .dia-section-title span',
            ]
        );
        $this->add_control(
            'heading_txt',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Leading Online Market Development Company', 'appilo' ),
            ]
        );
        $this->add_control(
            'headline_color',
            [
                'label' => __( 'Headline Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .dia-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'headline_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .dia-section-title h2',
            ]
        );
        $this->add_control(
            'info_txt',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-about-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Headline Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-about-text',
            ]
        );
        $this->add_control(
            'btn_txt',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Our Team', 'appilo' ),
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => __( 'Button Link', 'appilo' ),
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
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-exp-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-exp-btn a',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-exp-btn',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-exp-btn:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg12',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-exp-section .dio-exp-text-area .dia-exp-btn:before',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'about_img',
            [
                'label' => __( 'Experience Images', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'exp_img_1', [
                'label' => __( 'Experience Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/about/ab2.png',
                ],
            ]
        );
        $this->add_control(
            'exp_img_2', [
                'label' => __( 'Experience Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/as1.png',
                ],
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
            'exp_img_3', [
                'label' => __( 'Experience Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/digital-agency/shape/as1.png',
                ],
            ]
        );
        $this->add_control(
            'z_index_2',
            [
                'label' => __( 'Z-Index', 'appilo' ),
                'description' => __( 'To bring the backward and forward', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'  => __( 'None ', 'appilo' ),
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
                'default' => __( 'UI/UX Design', 'appilo' ),
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
                        'experience_heading' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'experience_heading' => __( 'UI/UX Design', 'appilo' ),
                    ],
                    [
                        'experience_heading' => __( 'UI/UX Design', 'appilo' ),
                    ],

                ],
                'title_field' => '{{{ experience_heading }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'experiences_style',
            [
                'label' => __( 'Experiences Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'e_title_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'e_title_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent h4',
            ]
        );
        $this->add_control(
            'e_info_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent .progress span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'e_info_fonts',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent .progress span',
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
                'selector' => '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent .progress',
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
                'selector' => '{{WRAPPER}} .dia-exp-section .skill-progress-bar .skill-set-percent .progress-bar',
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
                'selector' => '{{WRAPPER}} .dia-exp-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-exp-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo ' <!-- Start of Experience section
        ============================================= -->
        <section  class="dia-exp-section">
            <div class="container">
                <div class="dia-exp-content">
                    <div class="row ' . $settings['style_switcher'] . '">
                        <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="dia-exp-img text-center position-relative">
                                <img src="'.$settings['exp_img_1']['url'].'" alt>';?>
                                <div class="ab-shape1 position-absolute <?php echo $settings['z_index_1'] ?>" data-parallax='{"x" : -30}'> <img src="<?php echo esc_url($settings['exp_img_2']['url'])?>" alt></div>
                                <div class="ab-shape2 position-absolute <?php echo $settings['z_index_2'] ?>" data-parallax='{"x" : 30}'> <img src="<?php echo esc_url($settings['exp_img_2']['url'])?>" alt></div>
                            <?php echo'</div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="dio-exp-text-area">
                                <div class="dia-exp-text">
                                    <div class="dia-about-title-text">
                                        <div class="dia-section-title text-left text-capitalize dia-headline">
                                            <span>' . $settings['title_txt'] . '</span>
                                            <h2>' . $settings['heading_txt'] . '</h2>
                                        </div>
                                        <div class="dia-about-text">
                                            ' . $settings['info_txt'] . '
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-progress-bar">';
                            if ( $settings['experience_list'] ) {
                                foreach ($settings['experience_list'] as $experience) {
                                    echo '<div class="skill-set-percent dio-headline">
                                        <h4>'.$experience['experience_heading'].'</h4>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="'.$experience['progress_number'].'"></div>
                                        </div>
                                    </div>';
                                }
                            }
                                echo '</div>
                                <div class="dia-exp-btn text-center">
                                    <a href="'.$settings['btn_link']['url'].'">'.$settings['btn_txt'].'</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of Experience section
        ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_experience );
?>