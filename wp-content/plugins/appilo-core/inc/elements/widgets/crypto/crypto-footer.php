<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class crypto_footer extends Widget_Base {

   public function get_name() {
      return 'crypto_footer';
   }

   public function get_title() {
      return __( 'Crypto Footer', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'crypto_footer_content',
            [
                'label' => __('Footer Background Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'footer_bg',
            [
                'label' => __('Footer Background', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_logo_section',
            [
                'label' => __( 'Logo Section', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'footer_logo',
            [
                'label' => __('Footer Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
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
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

        $this->add_control(
            'logo_text',
            [
                'label' => esc_html__( 'Logo Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.', 'appilo' ),
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'footer_menu_section',
            [
                'label' => __( 'Footer Menu Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'widget_title',
            [
                'label' => esc_html__( 'Item Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Useful links', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'widget_menu',
            [
                'label' => esc_html__( 'Widget Menu', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( '<ul>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Service</a></li>
                                                <li><a href="#">Disclamier</a></li>
                                                <li><a href="#">Credits</a></li>
                                                <li><a href="#">Faq</a></li>
                                            </ul>', 'appilo' ),
            ]
        );
        $this->add_control(
            'menu_widgets',
            [
                'label' => esc_html__( 'Item List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'widget_title' => esc_html__( 'Useful links', 'appilo' ),
                    ],
                    [
                        'widget_title' => esc_html__( 'Quick Links', 'appilo' ),
                    ],
                    [
                        'widget_title' => esc_html__( 'Office Address', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ widget_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_newsletter_content',
            [
                'label' => __( 'Newsletter Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'newsletter_title',
            [
                'label' => esc_html__( 'Newsletter Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Newsletter', 'appilo' ),
            ]
        );

        $this->add_control(
            'newsletter_info',
            [
                'label' => esc_html__( 'Newsletter Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Readable content of a page when looking at its layout. The point of usingis that.', 'appilo' ),
            ]
        );

        $this->add_control(
            'newsletter_form',
            [
                'label' => esc_html__( 'Newsletter Form Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'footer_social_content',
            [
                'label' => __( 'Social Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'social_icon_title',
            [
                'label' => esc_html__( 'Social Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Join the Conversation', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_link',
            [
                'label' => esc_html__( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'social_icon_list',
            [
                'label' => esc_html__( 'Repeater List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                ],

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_copyright_area',
            [
                'label' => __( 'Copyright Area', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'copyright_text',
            [
                'label' => esc_html__( 'Copyright Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Copyright@Glow 2022. All rights reserved.', 'appilo' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'copyright_menu_name',
            [
                'label' => esc_html__( 'Menu Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Support', 'appilo' ),
            ]
        );

        $repeater->add_control(
            'copyright_menu_link',
            [
                'label' => esc_html__( 'Copyright Menu Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'copyright_menu',
            [
                'label' => esc_html__( 'Copyright Menu List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'copyright_menu_name' => esc_html__( 'Support', 'appilo' ),
                    ],
                    [
                        'copyright_menu_name' => esc_html__( 'Privacy Policy', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ copyright_menu_name }}}',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'footer_container_style',
            [
                'label' => __('Footer Container Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    '{{WRAPPER}} .crypto-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_logo_content_style',
            [
                'label' => __( 'Logo Section Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'logo_sub_title_color',
            [
                'label' =>   esc_html__( 'Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .logo-widget .logo-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Info Typo', 'appilo' ),
                'name' => 'logo_info_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .logo-widget .logo-text',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_menu_style',
            [
                'label' => __( 'Menu Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'menu_title_color',
            [
                'label' =>   esc_html__( 'Menu Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Menu Title Typo', 'appilo' ),
                'name' => 'Menu_title_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .widget-title',
            ]
        );

        $this->add_control(
            'footer_menu_info_color',
            [
                'label' =>   esc_html__( 'Menu Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .menu-widget li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Menu Typo', 'appilo' ),
                'name' => 'footer_menu_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .menu-widget li',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'newsletter_content_style',
            [
                'label' => __( 'Newsletter Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'newsletter_title_color',
            [
                'label' =>   esc_html__( 'Newsletter Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .widget-title.cr-footer-widget .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Newsletter Title Typo', 'appilo' ),
                'name' => 'newsletter_title_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .widget-title',
            ]
        );
        $this->add_control(
            'Newsletter_Info_color',
            [
                'label' =>   esc_html__( 'Newsletter Info Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .newslatter-widget p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Newsletter Info Typo', 'appilo' ),
                'name' => 'Newsletter_Info_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .newslatter-widget p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_social_content_style',
            [
                'label' => __( 'Social Content Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'social_title_color',
            [
                'label' =>   esc_html__( 'Social Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Social Title Typo', 'appilo' ),
                'name' => 'Social_Title_typography',
                'selector' => '{{WRAPPER}} .cr-footer-widget .widget-title',
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'tp1',
            [
                'label' => esc_html__( 'Normal', 'appilo' ),
            ]
        );

        $this->add_control(
            'social_Icon_color',
            [
                'label' =>   esc_html__( 'Social Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .social-widget a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'social_Icon_BG_color',
            [
                'label' =>   esc_html__( 'Social Icon BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .social-widget a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'tp2',
            [
                'label' => esc_html__( 'Hover', 'appilo' ),
            ]
        );
        $this->add_control(
            'social_Icon_hover_color',
            [
                'label' =>   esc_html__( 'Social Icon Hover Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .social-widget a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'social_Icon_Hover_BG_color',
            [
                'label' =>   esc_html__( 'Social Icon Hover BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-widget .social-widget a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'copyright_style',
            [
                'label' => __( 'Copyright Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'copyright_color',
            [
                'label' =>   esc_html__( 'Copyright Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-copyright-content .copyright-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Copyright Typo', 'appilo' ),
                'name' => 'Copyright_typography',
                'selector' => '{{WRAPPER}} .cr-footer-copyright-content .copyright-text',
            ]
        );
        $this->add_control(
            'copyright_menu_color',
            [
                'label' =>   esc_html__( 'Copyright Menu Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-footer-copyright-content .copyright-menu li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Copyright Menu Typo', 'appilo' ),
                'name' => 'Copyright_Menu_typography',
                'selector' => '{{WRAPPER}} .cr-footer-copyright-content .copyright-menu li',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of Footer  section
    ============================================= -->
        <div id="cr-footer" class="cr-footer-section position-relative">
            <span class="cr-shape1 position-absolute"><img src="<?php echo $settings['footer_bg']['url']; ?>" alt=""></span>
            <div class="container crypto-container-1200">
                <div class="cr-footer-content d-flex">
                    <div class="cr-footer-widget-left">
                        <div class="cr-footer-widget">
                            <div class="logo-widget d-flex align-items-center">
                                <div class="footer-logo">
                                    <a href="<?php echo $settings['footer_logo_link']['url']; ?>"><img src="<?php echo $settings['footer_logo']['url']; ?>" alt=""></a>
                                </div>
                                <div class="logo-text">
                                    <?php echo $settings['logo_text']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="cr-footer-widget-area d-flex justify-content-between">

                            <?php foreach ($settings['menu_widgets'] as $widget_list): ?>

                            <div class="cr-footer-widget cr-headline pera-content ul-li-block">
                                <div class="menu-widget">
                                    <h3 class="widget-title"><?php echo $widget_list['widget_title']; ?></h3>
                                    <?php echo $widget_list['widget_menu']; ?>
                                </div>
                            </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="cr-footer-widget-right">
                        <div class="cr-footer-widget cr-headline pera-content ul-li-block">
                            <div class="newslatter-widget">
                                <h3 class="widget-title"><?php echo $settings['newsletter_title']; ?></h3>
                                <p><?php echo $settings['newsletter_info']; ?></p>
                                <?php echo do_shortcode($settings['newsletter_form']); ?>
                            </div>
                        </div>
                        <div class="cr-footer-widget cr-headline pera-content ul-li-block">
                            <div class="social-widget">
                                <h3 class="widget-title"><?php echo $settings['social_icon_title']; ?></h3>

                                <?php foreach ($settings['social_icon_list'] as $social_icon): ?>

                                <a href="<?php echo $social_icon['social_link']['url']; ?>">
                                    <?php \Elementor\Icons_Manager::render_icon( $social_icon['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                </a>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cr-footer-copyright">
                <div class="container">
                    <div class="cr-footer-copyright-content d-flex justify-content-between">
                        <div class="cr-copyright-text">
                            <?php echo $settings['copyright_text']; ?>
                        </div>
                        <div class="copyright-menu ul-li">
                            <ul>
                                <?php foreach ($settings['copyright_menu'] as $copyrights): ?>
                                <li><a href="<?php echo $copyrights['copyright_menu_link']['url']; ?>"><?php echo $copyrights['copyright_menu_name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Footer  section
            ============================================= -->


        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new crypto_footer() );
?>