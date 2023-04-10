<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class itsource_footer_2 extends Widget_Base
{

    public function get_name()
    {
        return 'itsource_footer_2';
    }

    public function get_title()
    {
        return __('ItSource Footer 2', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-scroll';
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'itsource_Footer_top_content',
            [
                'label' => __('ITsource Top Footer Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'Footer_style',
            [
                'label' => esc_html__( 'Footer Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1'  => esc_html__( 'Style 1', 'appilo' ),
                    'style_2' => esc_html__( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->add_control(
            'footer_logo',
            [
                'label' => esc_html__( 'logo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'footer_logo_link',
            [
                'label' => esc_html__( 'Logo Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__('Social Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_profile_link',
            [
                'label' => esc_html__( 'Social Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'social_icons',
            [
                'label' => esc_html__('Social List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [

                    ],[

                    ],[

                    ],
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'menu-item',
            [
                'label' => esc_html__('Menu Item', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('How it Work', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'menu-url',
            [
                'label' => esc_html__( 'Menu Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'top-menus',
            [
                'label' => esc_html__('Menu List', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'menu-item' => esc_html__( 'How It Works', 'appilo' ),
                    ],
                    [
                        'menu-item' => esc_html__( 'Support', 'appilo' ),
                    ],
                    [
                        'menu-item' => esc_html__( 'Terms & Conditions', 'appilo' ),
                    ],
                    [
                        'menu-item' => esc_html__( 'Faq', 'appilo' ),
                    ],
                ],
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );


        $this->add_control(
            'language',
            [
                'label' => esc_html__('Language', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('<select>
									<option>ENG</option>
									<option>ARB</option>
									<option>SPN</option>
								</select>', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'it_footer_bottom_content',
            [
                'label' => __( 'Footer About Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
        'show_about',
            [
                'label' => esc_html__( 'Is Show About?', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'about_title',
            [
                'label' => esc_html__('About Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About Us', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'show_about' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'about_info',
            [
                'label' => esc_html__('About Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('The ‘Lighthouse Projects’ are in the clinical with disciplines of the chronic diseases Epilepsy, Haemophilia and Bipolar Disorder. The epilepsy Lighthouse between a number of organisations – RSCI, HSE, eHealth Ireland, Epilepsy Ireland, beaumont.', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'show_about' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'get_in_touch',
            [
                'label' => esc_html__('About Button', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get In Touch', 'appilo'),
                'label_block' => true,
                'condition' => [
                    'show_about' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'get_in_touch_link',
            [
                'label' => esc_html__( 'Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
                'condition' => [
                    'show_about' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_menus_content',
            [
                'label' => __( 'Footer Menus Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'show_menus',
            [
                'label' => esc_html__( 'Is Show Menu?', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'widget_title',
            [
                'label' => esc_html__('Widget Title', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('IT Services', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'widget_menus',
            [
                'label' => esc_html__('Widget Menus', 'appilo'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('<ul>
								<li><a href="#">Managed IT</a></li>
								<li><a href="#">IT Support</a></li>
								<li><a href="#">IT Consultancy</a></li>
								<li><a href="#">Cloud Computing</a></li>
								<li><a href="#">Cyber Security</a></li>
								<li><a href="#">Custom Software</a></li>
							</ul>', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'menus',
            [
                'label' => esc_html__('Widgets Menus', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'widget_title' => __('IT Services', 'appilo'),
                    ],
                    [
                        'widget_title' => __('Industries', 'appilo'),
                    ],
                    [
                        'widget_title' => __('Company', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ widget_title }}}',
                'condition' => [
                    'show_menus' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_content',
            [
                'label' => __( 'Footer Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'copyright_text', [
                'label' => esc_html__('Copyright Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Copyright By@ Themexriver - 2022', 'appilo'),
                'show_label' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_top_footer',
            [
                'label' => __('Top Footer Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Width', 'appilo'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'top_footer_bg',
            [
                'label' => esc_html__('Top Footer Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-social' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'social_icon_color',
            [
                'label' => esc_html__('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-social .thx-it-footer-social-content .thx-it-footer-social-icon li a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'social_icon_bg_color',
            [
                'label' => esc_html__('Social Icon BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-social .thx-it-footer-social-content .thx-it-footer-social-icon li a' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            '_footer_bg_image_1',
            [
                'label' => esc_html__( 'Footer BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bg_1',
                'label' => esc_html__( 'Background 1', 'appilo' ),
                'types' => [ 'classic' ],
                'exclude' => ['color', 'position', 'attachment', 'repeat', 'size'],
                'selector' => '{{WRAPPER}} .thx-it-footer-2:before',
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            '_footer_bg_image_2',
            [
                'label' => esc_html__( 'Footer BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bg_2',
                'label' => esc_html__( 'Background 2', 'appilo' ),
                'types' => [ 'classic' ],
                'exclude' => ['color', 'position', 'attachment', 'repeat', 'size'],
                'selector' => '{{WRAPPER}} .thx-it-footer-2:after',
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'top_menu_color',
            [
                'label' => esc_html__('Top Menu Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-menu-list li a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'top_menu_typo',
                'label' => esc_html__('Top Menu Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-menu-list li a',
                'condition' => [
                    'Footer_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_widgets_style',
            [
                'label' => __( 'Widgets Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'widget_section_BG',
            [
                'label' => esc_html__('Widget Section BG', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-area-one' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'shape_1_heading',
            [
                'label' => esc_html__('Shape 1', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'shape_1',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-footer-area-one:before',
                'exclude' => ['color'],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'shape_2_heading',
            [
                'label' => esc_html__('Shape 2', 'appilo'),
                'type' => Controls_Manager::HEADING,
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'shape_2',
                'label' => esc_html__( 'Background', 'appilo' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .thx-it-footer-area-one:after',
                'exclude' => ['color'],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'widget_title',
            [
                'label' => esc_html__('Widget Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-widget .widget-title' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-footer-widget .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'widget_title_border',
            [
                'label' => esc_html__('Widget Title Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-widget .widget-title:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'widget_title_typo',
                'label' => esc_html__('Widget Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-widget .widget-title,
                    {{WRAPPER}} .thx-it-footer-widget .widget-title',
            ]
        );
        $this->add_control(
            'about_info_color',
            [
                'label' => esc_html__('About Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-content .thx-it-footer-about p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'About_Info_typo',
                'label' => esc_html__('About Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-content .thx-it-footer-about p',
            ]
        );
        $this->add_control(
            'get_in_touch_color',
            [
                'label' => esc_html__('Get In Touch Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-content .thx-it-footer-about a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-footer-content .thx-it-footer-about a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'get_in_touch_typo',
                'label' => esc_html__('Get In Touch Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-content .thx-it-footer-about a, 
                    {{WRAPPER}} .thx-it-footer-content .thx-it-footer-about a',
            ]
        );
        $this->add_control(
            'menus_color',
            [
                'label' => esc_html__('Menus Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-content .thx-it-footer-menu li a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-footer-content .thx-it-footer-menu li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'menus__typo',
                'label' => esc_html__('Menus Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-content .thx-it-footer-menu li a,
                    {{WRAPPER}} .thx-it-footer-content .thx-it-footer-menu li a',
            ]
        );
        $this->add_control(
            'Copyright_color',
            [
                'label' => esc_html__('Copyright Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-copyright p' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Copyright_typo',
                'label' => esc_html__('Copyright Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-footer-area-one .thx-it-footer-copyright p',
                'condition' => [
                    'Footer_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        ?>

        <?php
            if ( "style_1" == $settings['Footer_style'] ){
         ?>
        <!-- Start of footer section
            ============================================= -->
        <footer>
            <div class="thx-it-footer-social clearfix">
                <div class="container container-1200">
                    <div class="thx-it-footer-social-content clearfix">
                        <div class="thx-it-footer-logo float-left">
                            <a href="<?php echo $settings['footer_logo_link']['url']; ?>"><img src="<?php echo $settings['footer_logo']['url']; ?>" alt=""></a>
                        </div>
                        <div class="thx-it-footer-social-icon clearfix ul-li float-right">
                            <ul>
                                <?php foreach ($settings['social_icons'] as $icon):; ?>
                                <li>
                                    <a href="<?php echo $icon['social_profile_link']['url']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon( $icon['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thx-it-footer-area-one position-relative">
                <div class="container container-1200">
                    <div class="thx-it-footer-content  relative-position">
                    <?php if ('yes' === $settings['show_about']):; ?>
                        <div class="thx-it-footer-widget">
                            <div class="thx-it-footer-about headline-2 pera-content">
                                <h3 class="widget-title"><?php echo $settings['about_title']; ?></h3>
                                <p><?php echo $settings['about_info']; ?></p>
                                <a href="<?php echo $settings['get_in_touch_link']['url']; ?>"><?php echo $settings['get_in_touch']; ?> <i class="flaticon-right-arrow-2"></i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ('yes' === $settings['show_menus']):; ?>
                    <?php foreach ($settings['menus'] as $menu):; ?>
                        <div class="thx-it-footer-widget">
                            <div class="thx-it-footer-menu text-center headline-2 ul-li-block">
                                <h3 class="widget-title"><?php echo $menu['widget_title']; ?></h3>
                                <?php echo $menu['widget_menus']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                    <div class="thx-it-footer-copyright text-center pera-content">
                        <p><?php echo $settings['copyright_text']; ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of footer section
            ============================================= -->
        <?php }else{ ?>
    <!-- Start of footer section
        ============================================= -->
    <footer class="thx-it-footer-2 relative-position">
        <div class="thx-it-footer-logo-memu">
            <div class="container container-1200">
                <div class="thx-it-footer-menu-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="thx-it-footer-logo">
                                <a href="<?php echo $settings['footer_logo_link']['url']; ?>"><img src="<?php echo $settings['footer_logo']['url']; ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="thx-it-footer-menu-list ul-li clearfix text-capitalize">
                                <ul>
                                    <?php if (isset($settings['top-menus'])){; ?>
                                    <?php foreach ($settings['top-menus'] as $top_menu):; ?>
                                    <li><a href="<?php echo $top_menu['menu-url']['url']; ?>"><?php echo $top_menu['menu-item']; ?></a></li>
                                    <?php endforeach; ?>
                                    <?php }; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="thx-it-footer-select clearfix">
                                <?php echo $settings['language']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-1200">
            <div class="thx-it-footer-content  relative-position">
                <?php if ('yes' === $settings['show_about']):; ?>
                <div class="thx-it-footer-widget">
                    <div class="thx-it-footer-about headline-2 pera-content">
                        <h3 class="widget-title"><?php echo $settings['about_title']; ?></h3>
                        <p>
                            <?php echo $settings['about_info']; ?>
                        </p>
                        <a href="<?php echo $settings['get_in_touch_link']['url']; ?>">
                            <?php echo $settings['get_in_touch']; ?> <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ('yes' === $settings['show_menus']):; ?>
                <?php foreach ($settings['menus'] as $menu):; ?>
                <div class="thx-it-footer-widget">
                    <div class="thx-it-footer-menu text-center headline-2 ul-li-block">
                        <h3 class="widget-title"><?php echo $menu['widget_title']; ?></h3>
                        <?php echo $menu['widget_menus']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                
            </div>
        </div>
    </footer>
    <!-- End of footer section
        ============================================= -->
        <?php
        }
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new itsource_footer_2());
?>