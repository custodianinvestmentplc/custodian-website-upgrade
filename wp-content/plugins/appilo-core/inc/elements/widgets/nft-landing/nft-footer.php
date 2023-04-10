<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class nft_footer extends Widget_Base {

   public function get_name() {
      return 'nft_footer';
   }

   public function get_title() {
      return __( 'NFT Footer', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-post';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'widget_content_1',
            [
                'label' => __('Widget Content 1', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'widget_1',
            [
                'label' => esc_html__( 'Show Widget 1', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'logo_img',
            [
                'label' => __('Footer Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'logo_link',
            [
                'label' => esc_html__( 'Logo Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'subscribe_title',
            [
                'label' => esc_html__( 'Subscribe Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get the Latest Glow Updates', 'appilo' ),
            ]
        );
        $this->add_control(
            'subscribe_form_shortcode',
            [
                'label' => esc_html__( 'Subscribe Shortcode', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'before_social_title',
            [
                'label' => esc_html__( 'Before Social Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Join the Conversation', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__( 'Social Icon', 'plugin-name' ),
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
                'label' => esc_html__( 'Social Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'social_icon',
            [
                'label' => esc_html__( 'Social Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'social_icon' => esc_html__( '', 'appilo' ),
                    ],
                    [
                        'social_icon' => esc_html__( '', 'appilo' ),
                    ],
                    [
                        'social_icon' => esc_html__( '', 'appilo' ),
                    ],


                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'widget_content_2',
            [
                'label' => __( 'Widget Content 2', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'widget_2',
            [
                'label' => esc_html__( 'Show Widget 2', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_2',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Useful LInks', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'nav_name',
            [
                'label' => esc_html__( 'Nav Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'nav_link',
            [
                'label' => esc_html__( 'Nav Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'widget_2_nav',
            [
                'label' => esc_html__( 'Nav List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'nav_name' => esc_html__( 'Explore', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Help Center', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Jobs', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Become a Partner', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Bug Bounty', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ nav_name }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'widget_content_3',
            [
                'label' => __( 'Widget Content 3', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'widget_3',
            [
                'label' => esc_html__( 'Show Widget 3', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_3',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Community', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'nav_name',
            [
                'label' => esc_html__( 'Nav Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'nav_link',
            [
                'label' => esc_html__( 'Nav Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'widget_3_nav',
            [
                'label' => esc_html__( 'Nav List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'nav_name' => esc_html__( 'Explore', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Help Center', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Jobs', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Become a Partner', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Bug Bounty', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ nav_name }}}',
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'widget_content_4',
            [
                'label' => __( 'Widget Content 4', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'widget_4',
            [
                'label' => esc_html__( 'Show Widget 4', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_4',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Language', 'appilo' ),
            ]
        );
        $this->add_control(
            'main_flag',
            [
                'label' => __('Main Flag', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'main_lang',
            [
                'label' => esc_html__( 'Main Language', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'English', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'lang_flag',
            [
                'label' => __('Language Flag', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'lang_name',
            [
                'label' => esc_html__( 'Language Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Spanish', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'lang_link',
            [
                'label' => esc_html__( 'Language Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'language_list',
            [
                'label' => esc_html__( 'Language List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'lang_name' => esc_html__( 'Spanish', 'appilo' ),
                    ],
                    [
                        'lang_name' => esc_html__( 'Freanch', 'appilo' ),
                    ],
                    [
                        'lang_name' => esc_html__( 'Arabia', 'appilo' ),
                    ],
                ],

                'title_field' => '{{{ lang_name }}}',
            ]
        );
        $this->add_control(
            'certifide_img_1',
            [
                'label' => __('Certifide Image 1', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'certifide_img_2',
            [
                'label' => __('Certifide Image 2', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'certifide_text',
            [
                'label' => esc_html__( 'Certifide Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Certified Infrastructure', 'appilo' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footer_copyright_content',
            [
                'label' => __( 'Copyright Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'copyright_section',
            [
                'label' => esc_html__( 'Copyright Section', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
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
            'nav_text',
            [
                'label' => esc_html__( 'Nav Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Support', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'nav_link',
            [
                'label' => esc_html__( 'Nav Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );
        $this->add_control(
            'copyright_nav',
            [
                'label' => esc_html__( 'Copyright Nav', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'nav_text' => esc_html__( 'Support', 'appilo' ),
                    ],
                    [
                        'nav_text' => esc_html__( 'Privacy Policy', 'appilo' ),
                    ],
                ],

                'title_field' => '{{{ nav_text }}}',
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
                    '{{WRAPPER}} .nft-container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'footer_heading_color',
            [
                'label' =>   esc_html__( 'Footer Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-footer-widget .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Footer Heading Typo', 'appilo' ),
                'name' => 'footer_heading_typography',
                'selector' => '{{WRAPPER}} .nft-footer-widget .widget-title',
            ]
        );
        $this->add_control(
            'footer_content_color',
            [
                'label' =>   esc_html__( 'Footer Content Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-footer-widget .menu-widget li a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Footer Content Typo', 'appilo' ),
                'name' => 'footer_Content_typography',
                'selector' => '{{WRAPPER}} .nft-footer-widget .menu-widget li a',
            ]
        );
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Start of Footer section
            ============================================= -->
        <div id="nft-footer" class="nft-footer-section">
            <div class="nft-footer-content">
                <div class="container nft-container-1200">
                    <div class="nft-footer-widget-wrapper">
                        <div class="row">

                            <?php if ( 'yes' === $settings['widget_1'] ) : ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="nft-footer-widget nft-headline pera-content ul-li">
                                    <div class="logo-widget">
                                        <div class="site-logo">
                                            <a href="<?php echo $settings['logo_link']['url']; ?>"><img src="<?php echo $settings['logo_img']['url']; ?>" alt=""></a>
                                        </div>
                                        <div class="nft-newslatter-widget">
                                            <p><?php echo $settings['subscribe_title']; ?></p>
                                            <?php echo do_shortcode($settings['subscribe_form_shortcode']); ?>
                                        </div>
                                        <div class="nft-footer-social">
                                            <p><?php echo $settings['before_social_title'] ?></p>
                                            <?php foreach ($settings['social_icon'] as $social_icon_list): ?>
                                            <a href="<?php echo $social_icon_list['social_profile_link']['url']; ?>"><?php \Elementor\Icons_Manager::render_icon( $social_icon_list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ( 'yes' === $settings['widget_2'] ) : ?>
                            <div class="col-lg-2 col-md-3">
                                <div class="nft-footer-widget nft-headline pera-content ul-li">
                                    <div class="menu-widget">
                                        <h3 class="widget-title"><?php echo $settings['widget_title_2']; ?></h3>
                                        <ul>
                                            <?php foreach ($settings['widget_2_nav'] as $widget_2_nav): ?>
                                            <li><a href="<?php echo $widget_2_nav['nav_link']['url']; ?>"><?php echo $widget_2_nav['nav_name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ( 'yes' === $settings['widget_3'] ) : ?>
                            <div class="col-lg-2 col-md-3">
                                <div class="nft-footer-widget nft-headline pera-content ul-li">
                                    <div class="menu-widget">
                                        <h3 class="widget-title"><?php echo $settings['widget_title_3']; ?></h3>
                                        <ul>
                                            <?php foreach ($settings['widget_3_nav'] as $widget_3_nav): ?>
                                            <li><a href="<?php echo $widget_3_nav['nav_link']['url']; ?>"><?php echo $widget_3_nav['nav_name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ( 'yes' === $settings['widget_4'] ) : ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="nft-footer-widget nft-headline pera-content ul-li">
                                    <div class="language-widget">
                                        <h3 class="widget-title"><?php echo $settings['widget_title_4']; ?></h3>
                                        <div class="language-select position-relative">
                                            <div class="language-item d-flex align-items-center position-relative">
                                                <div class="lang-flag">
                                                    <img src="<?php echo $settings['main_flag']['url']; ?>" alt="">
                                                </div>
                                                <div class="lang-text">
                                                    <?php echo $settings['main_lang']; ?>
                                                </div>
                                            </div>
                                            <div class="lang-option ul-li-block">
                                                <ul>

                                                    <?php foreach ($settings['language_list'] as $lang_list): ?>
                                                    <li><a href="<?php echo $lang_list['lang_link']['url']; ?>"><img src="<?php echo $lang_list['lang_flag']['url']; ?>" alt=""><?php echo $lang_list['lang_name']; ?></a></li>
                                                    <?php endforeach; ?>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="lang-certificate d-flex align-items-center">
                                            <div class="lng-cer-icon">
                                                <img src="<?php echo $settings['certifide_img_1']['url']; ?>" alt="">
                                            </div>
                                            <div class="lng-cer-text">
                                                <img src="<?php echo $settings['certifide_img_2']['url']; ?>" alt="">
                                                <p><?php echo $settings['certifide_text']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

        <?php if ( 'yes' === $settings['copyright_section'] ) : ?>
            <div class="nft-footer-copyright">
                <div class="container">
                    <div class="nft-footer-copyright-content  d-flex justify-content-between">
                        <div class="nft-copyright-text">
                            <?php echo $settings['copyright_text']; ?>
                        </div>
                        <div class="copyright-menu ul-li">
                            <ul>
                                <?php foreach ($settings['copyright_nav'] as $copyright_nav): ?>
                                <li><a href="<?php echo $copyright_nav['nav_link']['url']; ?>"><?php echo $copyright_nav['nav_text']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
        <!-- End of Footer section
            ============================================= -->


        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new nft_footer() );
?>