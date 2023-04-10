<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class dia_newsletter extends Widget_Base {

    public function get_name() {
        return 'dia-newsletter';
    }

    public function get_title() {
        return __( 'Digital Agency Newsletter', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-click';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content Section', 'appilo' ),
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Like our service? Subscribe us', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-text p',
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'As a app web crawler expert, I help organizations adjust to the expanding significance of internet promoting.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-text p',
            ]
        );
        $this->add_control(
            'section_form',
            [
                'label' => __( 'Section Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[contact-form-7 id="59" title="Dia Newsletter"]', 'appilo' ),
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
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-form .nws-button button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-form .nws-button button',
            ]
        );
        $this->add_control(
            'btn_color_hover',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-form .nws-button button:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_hover',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content .dia-newslatter-form .nws-button button:before',
            ]
        );
        $this->add_control(
            'shape_1', [
                'label' => __( 'Shape Image 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv1.png',
                ],
            ]
        );
        $this->add_control(
            'shape_2', [
                'label' => __( 'Shape Image 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv2.png',
                ],
            ]
        );
        $this->add_control(
            'shape_3', [
                'label' => __( 'Shape Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv3.png',
                ],
            ]
        );
        $this->add_control(
            'shape_4', [
                'label' => __( 'Shape Image 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv4.png',
                ],
            ]
        );
        $this->add_control(
            'shape_5', [
                'label' => __( 'Shape Image 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv5.png',
                ],
            ]
        );
        $this->add_control(
            'shape_6', [
                'label' => __( 'Shape Image 6', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/digital-agency/newslatter/nv6.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_content_bg',
                'label' => __( 'Section Content Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-newslatter-section .dia-newslatter-content',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg',
                'label' => __( 'Section Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .dia-newslatter-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .dia-newslatter-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

   echo '<!-- Start of newslatter section
        ============================================= -->                  
        <section  class="dia-newslatter-section position-relative">';?>

            <div class="newslatter-shape position-absolute n-shape1" data-parallax='{"x" : 30}'><img src="<?php echo esc_url($settings['shape_1']['url'])?>" alt></div>
            <div class="newslatter-shape position-absolute n-shape2" data-parallax='{"x" : -30}'><img src="<?php echo esc_url($settings['shape_2']['url'])?>" alt></div>
            <div class="newslatter-shape position-absolute n-shape3" data-parallax='{"x" : -30}'><img src="<?php echo esc_url($settings['shape_3']['url'])?>" alt></div>
            <div class="newslatter-shape position-absolute n-shape4" data-parallax='{"y" : 30}'><img src="<?php echo esc_url($settings['shape_4']['url'])?>" alt></div>
            <div class="newslatter-shape position-absolute n-shape5" data-parallax='{"y" : 30}'><img src="<?php echo esc_url($settings['shape_5']['url'])?>" alt></div>
            <div class="newslatter-shape position-absolute n-shape6" data-parallax='{"x" : -30}'><img src="<?php echo esc_url($settings['shape_6']['url'])?>" alt></div>

           <?php
        echo'<div class="container">
                <div class="dia-newslatter-content">
                    <div class="row '.$settings['style_switcher'].'">
                        <div class="col-lg-6">
                            <div class="dia-newslatter-text dia-headline pera-content">
                                <h3>'.$settings['section_title'].'</h3>
                                <p>'.$settings['section_info'].'</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dia-newslatter-form  relative-position">
                                '.do_shortcode($settings['section_form']).'
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End of newslatter section
        ============================================= --> ';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new dia_newsletter );
?>