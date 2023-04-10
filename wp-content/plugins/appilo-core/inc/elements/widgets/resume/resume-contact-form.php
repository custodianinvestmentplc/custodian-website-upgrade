<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class resume_contact_form extends Widget_Base
{

    public function get_name()
    {
        return 'resume_contact_form';
    }

    public function get_title()
    {
        return __('Resume/CV Contact Form', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'testimonial_texts',
            [
                'label' => __( 'Text Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Me', 'appilo' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get in Touch With Me
', 'appilo' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Information', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'appilo' ),
            ]
        );
        $this->add_control(
            'contact_form_shortcode',
            [
                'label' => __( 'Form Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'language' => 'html',
                'rows' => 5,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-conversation',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'number',
            [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+974784895', 'appilo' ),
            ]
        );
        $this->add_control(
            'email',
            [
                'label' => __( 'Email', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'admin@example.com', 'appilo' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_bg_style',
            [
                'label' => __('Section Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bg',
            [
                'label' => __('Section Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-area' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'section_padding',
            [
                'label' => __( 'Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'bottom_border_color',
            [
                'label' => __('Bottom Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-area:after' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Content Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label' => __('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => __( 'Sub Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-subtitle',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-title',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-section-heading .apihu-port-section-text',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-icon-box i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'number_color',
            [
                'label' => __('Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-text .apihu-port-contact-number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'number_fonts',
                'label' => __('Number Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-contact-text .apihu-port-contact-number',
            ]
        );
        $this->add_control(
            'email_color',
            [
                'label' => __('Email Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apihu-port-contact-text .apihu-port-contact-email' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'email_fonts',
                'label' => __('Email Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apihu-port-contact-text .apihu-port-contact-email',
            ]
        );
        $this->add_control(
            '__contact_meta_bg_heading',
            [
                'label' => __( 'Contact Info Bg', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'contact_info_bg',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .apihu-port-contact-area .apihu-port-contact-right .apihu-port-contact-right-content',
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $sub_title = $settings['sub_title'];
        $title = $settings['title'];
        $info = $settings['info'];
        $contact_form_shortcode = $settings['contact_form_shortcode'];
        $image = $settings['image']['url'];
        $icon = $settings['icon'];
        $number = $settings['number'];
        $email = $settings['email'];
        ?>

        <!-- Contact Start -->
        <div class="apihu-port-contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-left">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-subtitle"><?php echo $sub_title; ?></p>
                            <h2 class="apihu-port-section-title"><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="apihu-port-section-heading">
                            <p class="apihu-port-section-text">
                                <?php echo $info; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apihu-port-contact-left">
                            <form>
                                <?php echo $contact_form_shortcode; ?>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apihu-port-contact-right">
                            <div class="apihu-port-contact-right-img">
                                <img src="<?php echo $image; ?>" alt="Contact Right">
                            </div>
                            <div class="apihu-port-contact-right-content">
                                <div class="apihu-port-contact-icon-box">
                                    <?php \Elementor\Icons_Manager::render_icon( $icon, [ 'aria-hidden' => 'true' ] ); ?>
                                </div>
                                <div class="apihu-port-contact-text">
                                    <span class="apihu-port-contact-number"><?php echo $number; ?></span>
                                    <span class="apihu-port-contact-email"><?php echo $email; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


<?php

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new resume_contact_form());
