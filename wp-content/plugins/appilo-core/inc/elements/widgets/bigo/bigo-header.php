<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bigo_header extends Widget_Base
{

    public function get_name()
    {
        return 'bigo-header';
    }

    public function get_title()
    {
        return __('Bigo Header', 'appilo');
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
            'top_header_content',
            [
                'label' => __('Top Header Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'topbar_switch',
            [
                'label' => esc_html__( 'Top Header Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'contact_info_text', [
                'label' => esc_html__('Contact Info Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('support@bigoh.com', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'contact_info',
            [
                'label' => esc_html__('Contact Info', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'contact_info_text' => __('support@bigoh.com', 'appilo'),
                    ],
                    [
                        'contact_info_text' => __('support@bigoh.com', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ contact_info_text }}}',
                'prevent_empty' => false
            ]
        );
        $this->add_control(
            '--language-switcher-heading--',
            [
                'label' => esc_html__( 'Language Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'language_switcher',
            [
                'label' => esc_html__( 'Language Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'country_name', [
                'label' => esc_html__('Country Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('ENG', 'appilo'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'language',
            [
                'label' => esc_html__('Language Name', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'country_name' => __('ENG', 'appilo'),
                    ],
                    [
                        'country_name' => __('USA', 'appilo'),
                    ],
                    [
                        'country_name' => __('IND', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ country_name }}}',
                'prevent_empty' => false
            ]
        );
        $this->add_control(
            '--search-form--',
            [
                'label' => esc_html__( 'Search Form', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'search_form',
            [
                'label' => esc_html__( 'Searchbar Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'main_header_content',
            [
                'label' => __('Main Header Content', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'logo',
            [
                'label' => __('Choose Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'main_nav',
            [
                'label' => __('Main Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'main_m_nav',
            [
                'label' => __('Mobile Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'about_counter_content',
            [
                'label' => __( 'About Counter Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'counter_bg',
            [
                'label' => esc_html__('Counter BG', 'appilo'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}'
                ],
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => esc_html__('Counter Number', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('25', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_heading', [
                'label' => esc_html__('Counter Heading', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Years Of Experiences', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_read_more', [
                'label' => esc_html__('Button Text', 'appilo'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Read More', 'appilo'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_read_more_url',
            [
                'label' => esc_html__('Button URL', 'appilo'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'appilo'),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_icon',
            [
                'label' => esc_html__('Icon', 'appilo'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'about_counter',
            [
                'label' => esc_html__('About Counter', 'appilo'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_heading' => __('Years Of Experience', 'appilo'),
                    ],
                    [
                        'counter_heading' => __('Country Coverage', 'appilo'),
                    ],
                    [
                        'counter_heading' => __('Team Members', 'appilo'),
                    ],
                ],
                'title_field' => '{{{ counter_heading }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_about',
            [
                'label' => __('About Style', 'appilo'),
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
            'tag_color',
            [
                'label' => esc_html__('Tag Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .site-tag' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two .site-tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' => esc_html__('Tag Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title .site-tag , {{WRAPPER}} .title-style-two .site-tag',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' => esc_html__('Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' => esc_html__('Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .section-title h2 , {{WRAPPER}} .thx-it-about-section-2 .section-title h2',
            ]
        );
        $this->add_control(
            'Sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title-style-two .sub-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Sub_title_left_border_color',
            [
                'label' => esc_html__('Sub Title Left Border Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-text:before' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Sub_title_typo',
                'label' => esc_html__('Sub Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .title-style-two .sub-text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => esc_html__('Information Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' => esc_html__('Information Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .thx-it-about-text-item-1 .thx-it-about-text p',
            ]
        );
        $this->add_control(
            'Feature_title_color',
            [
                'label' => esc_html__('Feature Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_title_typo',
                'label' => esc_html__('Feature Title Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4 , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text h4',
            ]
        );
        $this->add_control(
            'Feature_Info_color',
            [
                'label' => esc_html__('Feature Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Feature_Info_typo',
                'label' => esc_html__('Feature Info Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-feature .thx-it-about-thx-it-feature-item .thx-it-about-thx-it-feature-text p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'btn_style',
            [
                'label' => __('Button Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Button Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' => esc_html__('Button Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child , {{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child',
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__('Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:first-child' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'second_btn_color',
            [
                'label' => esc_html__('Second Button Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-text-item-1 .ab-btn a:last-child' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'second_btn_circle_color',
            [
                'label' => esc_html__('Second Button BG Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-text-item-1 .ab-btn a:last-child:before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'about_counter_style',
            [
                'label' => __( 'About Counter Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'select_About_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'counter_number_color',
            [
                'label' => esc_html__('Counter Number Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_number_typo',
                'label' => esc_html__('Counter Number Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .it-location-counter h3',
            ]
        );
        $this->add_control(
            'counter_Heading_color',
            [
                'label' => esc_html__('Counter Heading Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_Heading_typo',
                'label' => esc_html__('Counter Heading Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item p',
            ]
        );
        $this->add_control(
            'counter_Read_more_color',
            [
                'label' => esc_html__('Read More Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_Read_More_typo',
                'label' => esc_html__('Read More Typography', 'appilo'),
                'selector' =>
                    '{{WRAPPER}} .thx-it-about-section-2 .thx-it-about-counter .thx-it-about-counter-item .thx-it-about-counter-hover a',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

    $settings = $this->get_settings_for_display();
    ?>

    <header class="bigo-header-section">
        <?php if ('yes' === $settings['topbar_switch']): ?>
        <div class="top-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xs-12">
                        <div class="bigo-header-left-bar">
                            <ul class="bigo-contact-wrapper">
                                <?php foreach ($settings['contact_info'] as $contact_info): ?>
                                <li>
                                    <?php \Elementor\Icons_Manager::render_icon( $contact_info['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    <?php echo esc_html($contact_info['contact_info_text']); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div> <!-- bigo-header-left-bar -->
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="header-right-bar text-right">
                            <?php if ('yes' === $settings['language_switcher']): ?>
                            <div class="country dropdown inline-block">
                                <i class="fas fa-globe" aria-hidden="true"></i>

                                <select name="one" class="dropdown-select">
                                    <?php foreach ($settings['language'] as $lang): ?>
                                        <option value="<?php echo esc_attr($lang['country_name']); ?>"><?php echo esc_html($lang['country_name']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endif; ?>
                            <?php if ('yes' === $settings['search_form']): ?>
                            <div class="bigo-search-form">
                                <?php bigo_header_search_form(); ?>
                            </div>
                            <?php endif; ?>
                        </div> <!-- header-right-bar -->
                    </div>
                </div> <!-- top-bar -->
            </div>
        </div>
        <?php endif; ?>
        <div class="bigo_nav_wrap">
            <div class="container">
                <div class="bigo_nav ul_li_between">
                    <div class="bigo_header_logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $settings['logo']['url']; ?>" alt=""></a>
                    </div>
                    <div class="bigo-main-menu navbar navbar-expand-lg">
                        <nav class="bigo-main-menu__nav collapse navbar-collapse">
                            <?php
                            echo  str_replace( 'dropdown-menu', 'submenu' ,wp_nav_menu( array(
                                'echo' => false,
                                'menu' => $settings['main_nav'],
                                'walker'  => new \WP_Bootstrap_Navwalker(),
                                'items_wrap' =>'<ul>%3$s</ul>'
                            ) ));
                            ?>
                        </nav>
                    </div>
                    <div class="hamburger_menu d-lg-none">
                        <a href="javascript:void(0);" class="active">
                            <div class="icon">
                                <i class="fas fa-bars"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <div class="header-mobile-search">
                <?php echo get_search_form(); ?>
            </div>
            <?php
            echo  str_replace( 'dropdown-menu', 'sub-menu' ,wp_nav_menu( array(
                'echo' => false,
                'menu' => $settings['main_m_nav'],
                'walker'  => new \WP_Bootstrap_Navwalker(),
                'items_wrap' =>'<ul id="mobile-menu-active">%3$s</ul>'
            ) ));
            ?>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->

    <?php
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register(new bigo_header());
?>