<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class itsource_header_2 extends Widget_Base {

    public function get_name() {
        return 'itsource_header_2';
    }

    public function get_title() {
        return __( 'ItSource Header 2', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-scroll';
    }

    protected function register_controls() {
        $this->start_controls_section(
            'header_style_content',
            [
                'label' => __( 'Header Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'header_style',
            [
                'label' => esc_html__( 'Header Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1'  => esc_html__( 'Style 1', 'appilo' ),
                    'style_2' => esc_html__( 'Style 2', 'appilo' ),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'top_Header_content',
            [
                'label' => __('Header Contact Info', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'left_icon',
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
            'left_content', [
                'label' => esc_html__( 'Content Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'info@webmail.com' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'top_left_info',
            [
                'label' => esc_html__( 'Contact Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'left_content' => esc_html__( 'info@webmail.com', 'appilo' ),
                    ],
                    [
                        'left_content' => esc_html__( '+987 876 765 65 5', 'appilo' ),
                    ],
                    [
                        'left_content' => esc_html__( '14/A, Brown City, NYC', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ left_content }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'social_info_content',
            [
                'label' => __( 'Social Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'social_link',
            [
                'label' => esc_html__( 'Social Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
            'social_info',
            [
                'label' => esc_html__( 'Social Info', 'appilo' ),
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
            'top_right_info_content',
            [
                'label' => __( 'Top Right Info', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'right_content', [
                'label' => esc_html__( 'Right Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Terms & Conditions' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'right_content_link',
            [
                'label' => esc_html__( 'Right Content Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
            'top_right_info',
            [
                'label' => esc_html__( 'Right Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'right_content' => esc_html__( 'Terms & Conditions', 'appilo' ),
                    ],
                    [
                        'right_content' => esc_html__( 'Job Alert', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ right_content }}}',
            ]
        );
        $this->add_control(
            'language', [
                'label' => esc_html__( 'Language', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<select>
                                    <option>Language</option>
                                    <option>ENG</option>
                                    <option>ARB</option>
                                    <option>SPN</option>
                                </select>' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'main_header_content',
            [
                'label' => __( 'Main Header', 'appilo' ),
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
            'sticky_logo',
            [
                'label' => __('Sticky Logo', 'appilo'),
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

        $this->add_control(
            'show_search',
            [
                'label' => esc_html__( 'Show Search Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'mail',
            [
                'label' => esc_html__( 'Mail', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '<span>Quote:</span> info@webmail.com' , 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'header_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'sidebar_content',
            [
                'label' => __( 'Sidebar Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'show_sidebar',
            [
                'label' => esc_html__( 'Show Sidebar', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'sidebar_logo',
            [
                'label' => __('Choose Sidebar Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'sidebar_info',
            [
                'label' => esc_html__( 'Sidebar Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'BDLP is one of the leading multi-disciplinary law firms in Dhaka, Bangladesh managed by lawyers in and around Dhaka. The law firm is one of the top law firms in Dhaka and represents both foreign and local clients.' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sidebar_copyright_text',
            [
                'label' => esc_html__( 'Sidebar Copyright Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Copyright By @ Themexriver' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'top_header_style',
            [
                'label' => __('Top Header Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Contact_Icon_Color',
            [
                'label' => esc_html__( 'Contact Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-top-left li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Contact_Info_Color',
            [
                'label' => esc_html__( 'Contact Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-top-left li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Contact Info Typo', 'appilo' ),
                'name' => 'Contact_Info_typo',
                'selector' => '{{WRAPPER}} .header-style-one .header-top-left li',
            ]
        );
        $this->add_control(
            'Social_Icon_Color',
            [
                'label' => esc_html__( 'Social Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-social li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'right_info_color',
            [
                'label' => esc_html__( 'Right Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-top-cta a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Right Info Typo', 'appilo' ),
                'name' => 'Right_Info_Typo',
                'selector' => '{{WRAPPER}} .header-style-one .header-top-cta a',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Main_Nav_Style',
            [
                'label' => __( 'Main Nav Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'main_nav_color',
            [
                'label' => esc_html__( 'Main Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .main-navigation li a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .header-style-two .it-menu-itemlist .main-navigation li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Main Nav Typo', 'appilo' ),
                'name' => 'main_nav_Typo',
                'selector' => '{{WRAPPER}} .header-style-one .main-navigation li a,
                {{WRAPPER}} .header-style-two .it-menu-itemlist .main-navigation li a',
            ]
        );
        $this->add_control(
            'main_nav_Icon_color',
            [
                'label' => esc_html__( 'Main Nav Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-menu-itemlist .dropdown:before' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .header-style-two .it-menu-itemlist .dropdown:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dropdown_nav_color_',
            [
                'label' => esc_html__( 'Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-menu-itemlist .dropdown-menu a' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
            'dropdown_border_top_color_',
            [
                'label' => esc_html__( 'Dropdown Border Top Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-menu-itemlist .dropdown-menu' => 'border-top-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'dropdown_border_bottom_color_',
            [
                'label' => esc_html__( 'Dropdown Border Bottom Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-menu-itemlist .dropdown-menu' => 'border-bottom-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Search_Icon_color_',
            [
                'label' => esc_html__( 'Search Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-main-option .option-btn' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sidebar_Nav_color_',
            [
                'label' => esc_html__( 'Sidebar Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-one .header-main-option .option-btn.open_side_area' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sidebar_Back_Button_color_',
            [
                'label' => esc_html__( 'Sidebar Back Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .side_inner_content .close_btn' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sidebar_Info_color_',
            [
                'label' => esc_html__( 'Sidebar Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .side_inner_content p' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Sidebar Info Typo', 'appilo' ),
                'name' => 'Sidebar_Info_Typo',
                'selector' => '{{WRAPPER}} .side_inner_content p',
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sidebar_Social_Icon_color_',
            [
                'label' => esc_html__( 'Sidebar Social Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social_widget li' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Sidebar_Social_Icon_bG_color_',
            [
                'label' => esc_html__( 'Sidebar Social Icon BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social_widget li' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'Copyright_Text_Color',
            [
                'label' => esc_html__( 'Copyright Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .side_inner_content .side_copywright' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Copyright Text Typo', 'appilo' ),
                'name' => 'Copyright_Text_Typo',
                'selector' => '{{WRAPPER}} .side_inner_content .side_copywright',
                'condition' => [
                    'header_style' => 'style_1',
                ],
            ]
        );
        $this->add_control(
            'mail_bg_Color',
            [
                'label' => esc_html__( 'Mail BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-two .quote-area' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'mail_Color',
            [
                'label' => esc_html__( 'Mail Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .header-style-two .quote-area' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'header_style' => 'style_2',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Mail Typo', 'appilo' ),
                'name' => 'mail_Typo',
                'selector' => '{{WRAPPER}} .header-style-two .quote-area',
                'condition' => [
                    'header_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            '__mobile_menus_style',
            [
                'label' => __( 'Mobile Menu Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Mobile_Nav_button_color',
            [
                'label' => esc_html__( 'Mobile Nav Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu_button_it_s_2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_BG_color',
            [
                'label' => esc_html__( 'Mobile Nav BG Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu_content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_Close_BTN_color',
            [
                'label' => esc_html__( 'Nav Close Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu .mobile_menu_close' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_color_',
            [
                'label' => esc_html__( 'Mobile Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu_content .main-navigation .navbar-nav li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_dropdown_color',
            [
                'label' => esc_html__( 'Mobile Dropdown Nav Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu .mobile_menu_content .main-navigation .navbar-nav .dropdown-menu li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Mobile_Nav_Nav_Info_color',
            [
                'label' => esc_html__( 'Mobile Nav Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mobile_menu .mobile-menu-contact-info li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();



    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        ?>
        <?php
            if ("style_1" == $settings['header_style']){
        ?>
        <!-- Start of header section
            ============================================= -->
        <header id="thx-it-header" class="thx-it-header-area header-style-one">
            <div class="header-top clearfix ">
                <div class="header-top-left float-left ul-li">
                    <ul>
                        <?php foreach ($settings['top_left_info'] as $top_left_info):; ?>
                            <li>
                                <?php \Elementor\Icons_Manager::render_icon( $top_left_info['left_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo $top_left_info['left_content']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="header-top-right float-right">
                    <div class="header-social ul-li">
                        <ul>
                            <?php foreach ($settings['social_info'] as $social_info):; ?>
                                <li>
                                    <a href="<?php echo $social_info['social_link']['url']; ?>">
                                        <?php \Elementor\Icons_Manager::render_icon( $social_info['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="header-top-cta">
                        <?php foreach ($settings['top_right_info'] as $top_right_info):; ?>
                            <a href="<?php echo $top_right_info['right_content_link']['url']; ?>">
                                <?php echo $top_right_info['right_content']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="header-top-cta">
                        <?php echo $settings['language']; ?>
                    </div>
                </div>
            </div>
            <!-- /header Top -->
            <div class="header-main-menu clearfix">
                <div class="brand-logo float-left">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo $settings['logo']['url']; ?>" alt="">
                    </a>
                </div>
                <div class="it-menu-itemlist float-right">
                    <nav class="main-navigation ul-li">
                        <?php
                        echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                            'echo' => false,
                            'menu' => $settings['main_nav'],
                            'walker'  => new \WP_Bootstrap_Navwalker(),
                            'items_wrap' =>'<ul>%3$s</ul>'
                        ) ));
                        ?>
                    </nav>
                    <div class="header-main-option">
                    <?php
                    if ( 'yes' === $settings['show_search'] ) {
                    ?>
                        <div class="main-option-list search-option">
                            <a class="option-btn search-btn" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                        </div>
                    <?php
                    }
                    ?>
                        <?php
                            if ( 'yes' === $settings['show_sidebar'] ) {
                        ?>
                            <div class="main-option-list sidebar-option">
                                <a class="option-btn open_side_area" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="wide_side_inner">
                <div class="side_overlay open_side_area"></div>
                <div class="side_inner_content text-center">
                    <div class="close_btn open_side_area"><?php _e('Back', 'appilo'); ?> <i class="fas fa-arrow-right"></i></div>
                    <div class="side_inner_logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo $settings['sidebar_logo']['url']; ?>" alt="">
                        </a>
                    </div>
                    <p>
                        <?php echo $settings['sidebar_info']; ?>
                    </p>
                    <div class="side_contact">
                        <div class="social_widget ul-li headline relative-position">
                            <h3> <?php _e('Follow Us On:', 'appilo'); ?></h3>
                            <ul>
                                <?php foreach ($settings['social_info'] as $social_info):; ?>
                                    <li>
                                        <a href="<?php echo $social_info['social_link']['url']; ?>">
                                            <?php \Elementor\Icons_Manager::render_icon( $social_info['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="side_copywright">
                        <?php echo $settings['sidebar_copyright_text']; ?>
                    </div>
                </div>
            </div>
            <div class="mobile_menu relative-position">
                <div class="mobile_menu_button_it_s_2 open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="mobile_menu_wrap">
                    <div class="thx_mobile_menu_overlay open_mobile_menu"></div>
                    <div class="mobile_menu_content">
                        <div class="mobile_menu_close open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <img src="<?php echo $settings['sidebar_logo']['url']; ?>" alt="">
                        </div>
                        <nav class="main-navigation mobile_menu-dropdown  clearfix ul-li">
                            <?php
                            echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                                'echo' => false,
                                'menu' => $settings['main_m_nav'],
                                'walker'  => new \WP_Bootstrap_Navwalker(),
                                'items_wrap' =>'<ul id="main-nav" class="navbar-nav text-capitalize clearfix">%3$s</ul>'
                            ) ));
                            ?>
                        </nav>
                        <div class="mobile-menu-contact-info ul-li-block">
                            <ul>
                                <?php foreach ($settings['top_left_info'] as $top_left_info):; ?>
                                    <li>
                                        <?php \Elementor\Icons_Manager::render_icon( $top_left_info['left_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        <?php echo $top_left_info['left_content']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- search filed -->
        <div class="search-body">
            <div class="search-form">
                <?php get_search_form(); ?>
                <div class="outer-close text-center search-btn">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <!-- End of header section
            ============================================= -->
<?php
    }else {
        ?>
    <!-- Start of header section
        ============================================= -->
    <header id="thx-it-header" class="thx-it-header-area header-style-two">
        <div class="header-main-menu clearfix">
            <div class="brand-logo float-left">
                <a class="logo-top" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $settings['logo']['url']; ?>" alt=""></a>
                <a class="logo-sticky" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $settings['sticky_logo']['url']; ?>" alt=""></a>
            </div>
            <div class="it-menu-itemlist float-right">
                <nav class="main-navigation ul-li">
                    <?php
                    echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                        'echo' => false,
                        'menu' => $settings['main_nav'],
                        'walker'  => new \WP_Bootstrap_Navwalker(),
                        'items_wrap' =>'<ul>%3$s</ul>'
                    ) ));
                    ?>
                </nav>
                <div class="quote-area float-right">
                    <?php if ($settings['mail']):; ?>
                        <?php echo $settings['mail']; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="mobile_menu relative-position">
            <div class="mobile_menu_button_it_s_2 open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="mobile_menu_wrap">
                <div class="thx_mobile_menu_overlay open_mobile_menu"></div>
                <div class="mobile_menu_content">
                    <div class="mobile_menu_close open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <img src="<?php echo $settings['sticky_logo']['url']; ?>" alt="">
                    </div>

                    <nav class="main-navigation mobile_menu-dropdown  clearfix ul-li">
                        <?php
                        echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                            'echo' => false,
                            'menu' => $settings['main_m_nav'],
                            'walker'  => new \WP_Bootstrap_Navwalker(),
                            'items_wrap' =>'<ul id="main-nav" class="navbar-nav text-capitalize clearfix">%3$s</ul>'
                        ) ));
                        ?>
                    </nav>
                    <div class="mobile-menu-contact-info ul-li-block">
                        <ul>
                            <?php foreach ($settings['top_left_info'] as $top_left_info):; ?>
                                <li>
                                    <?php \Elementor\Icons_Manager::render_icon( $top_left_info['left_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    <?php echo $top_left_info['left_content']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of header section
        ============================================= -->
        <?php

    }
    }
    protected function content_template() {

    }

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new itsource_header_2() );
?>