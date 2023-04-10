<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class landing3_footer extends Widget_Base {

   public function get_name() {
      return 'landing3_footer';
   }

   public function get_title() {
      return __( 'Landing 3 Footer', 'appilo' );
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
            'widget_title_1',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Contact Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'address_info',
            [
                'label' => esc_html__( 'Address', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'contact_info',
            [
                'label' => esc_html__( 'Contact Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
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
                'label' => esc_html__( 'Show Widget 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_2',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Useful Link', 'appilo' ),
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
            'widget_2_nav',
            [
                'label' => esc_html__( 'Nav List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'nav_name' => esc_html__( 'About Us', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Carrier', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Pricing', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Faq', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Privacy & policy', 'appilo' ),
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
                'label' => esc_html__( 'Show Widget 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_3',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Our Services', 'appilo' ),
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
            'widget_3_nav',
            [
                'label' => esc_html__( 'Nav List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'nav_name' => esc_html__( 'Designing', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Branding', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Marketing', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'SEO', 'appilo' ),
                    ],
                    [
                        'nav_name' => esc_html__( 'Business Strategy', 'appilo' ),
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
                'label' => esc_html__( 'Show Widget 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'widget_title_4',
            [
                'label' => esc_html__( 'Widget Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Opening Time', 'appilo' ),
            ]
        );
        $this->add_control(
            'time_info',
            [
                'label' => esc_html__( 'Titme Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        
        $this->add_control(
            'w4_btn_txt',
            [
                'label' => esc_html__( 'Link Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'w4_btn_link',
            [
                'label' => esc_html__( 'Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
                'label' => esc_html__( 'Copyright Section', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'appilo' ),
                'label_off' => esc_html__( 'Hide', 'appilo' ),
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
            'subscribe_title',
            [
                'label' => esc_html__( 'Subscribe Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get the Latest Glow Updates', 'appilo' ),
            ]
        );
        
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__( 'Social Icon', 'appilo' ),
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
            'footer_container_style',
            [
                'label' => __('Footer Container Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'footer_heading_color',
            [
                'label' =>   esc_html__( 'Footer Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apl3-main-footer .apl3-footer-widget h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Footer Heading Typo', 'appilo' ),
                'name' => 'footer_heading_typography',
                'selector' => '{{WRAPPER}} .apl3-main-footer .apl3-footer-widget h4',
            ]
        );
        $this->add_control(
            'footer_content_color',
            [
                'label' =>   esc_html__( 'Footer Content Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-apl3-footer-widget .menu-widget li a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' =>   esc_html__( 'Footer Content Typo', 'appilo' ),
                'name' => 'footer_Content_typography',
                'selector' => '{{WRAPPER}} .apl3-main-footer .contact-widget .text, .apl3-main-footer a, .apl3-main-footer .apl3-footer-bottom .copyright',
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btbackground',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .apl3-main-footer .timing-widget .contact-btn',
			]
		);
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();

?>
        <!-- Main Footer -->
        <footer class="apl3-main-footer">
            <div class="auto-container">
                <!-- Widgets Section -->
                <div class="apl3-widgets-section">
                    <div class="row clearfix">
                        
                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                            
                                <!-- Footer Column -->
                                <div class="apl3-footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="apl3-footer-widget contact-widget">
                                        <h4><?php echo esc_html($settings['widget_title_1']);?></h4>
                                        <div class="text"><?php echo __($settings['address_info']);?></div>
                                        <div class="phone">
                                            <?php echo __($settings['contact_info']);?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ( 'yes' === $settings['widget_2'] ) : ?>
                                <!-- Footer Column -->
                                <div class="apl3-footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="apl3-footer-widget links-widget">
                                        <h4><?php echo $settings['widget_title_2']; ?></h4>

                                        <ul class="footer-links">
                                            <?php foreach ($settings['widget_2_nav'] as $widget_2_nav): ?>
                                                <li><a href="<?php echo $widget_2_nav['nav_link']['url']; ?>"><?php echo $widget_2_nav['nav_name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                        
                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                            <?php if ( 'yes' === $settings['widget_3'] ) : ?>
                                <!-- Footer Column -->
                                <div class="apl3-footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="apl3-footer-widget links-widget">
                                        <h4><?php echo $settings['widget_title_3']; ?></h4>
                                        <ul class="footer-links">
                                            <?php foreach ($settings['widget_3_nav'] as $widget_3_nav): ?>
                                                <li><a href="<?php echo $widget_3_nav['nav_link']['url']; ?>"><?php echo $widget_3_nav['nav_name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php endif;?>
                                <!-- Footer Column -->
                                <?php if ( 'yes' === $settings['widget_4'] ) : ?>
                                    <div class="apl3-footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="apl3-footer-widget timing-widget">
                                            <h4><?php echo $settings['widget_title_4']; ?></h4>
                                            <div class="time"><?php echo esc_html($settings['time_info']);?></div>
                                            <a href="<?php echo esc_url($settings['w4_btn_link']['url']);?>" class="theme-btn contact-btn"><?php echo esc_html($settings['w4_btn_txt']);?> <span class="flaticon-blogging"></span></a>
                                        </div>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Footer Bottom -->
                <div class="apl3-footer-bottom">
                    <div class="row clearfix">
                        <!-- Logo Column -->
                        <div class="logo-column col-lg-3 col-md-12 col-sm-12">
                            <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($settings['logo_img']['url']);?>" alt="" title=""></a></div>
                        </div>
                        <!-- Copyright Column -->
                        <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright"> <?php echo $settings['copyright_text']; ?></div>
                        </div>
                        <!-- Social Column -->
                        <div class="social-column col-lg-3 col-md-6 col-sm-12">
                            <div class="social-nav">
                                <?php foreach ($settings['social_icon'] as $social_icon_list): ?>
                                    <a href="<?php echo $social_icon_list['social_profile_link']['url']; ?>"><?php \Elementor\Icons_Manager::render_icon( $social_icon_list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
        <!-- End Main Footer -->


        <?php

    }
    protected function content_template() {

    }




   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new landing3_footer() );
?>