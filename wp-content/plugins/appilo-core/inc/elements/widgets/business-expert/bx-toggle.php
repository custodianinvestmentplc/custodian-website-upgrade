<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_toggle extends Widget_Base
{

    public function get_name()
    {
        return 'bx-toggle';
    }

    public function get_title()
    {
        return __('Business Expert Toggle', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-menu-bar';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Toggle Open & Close', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'toggle_open',
            [
                'label' => __('Toggle Open Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-bars',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'toggle_close',
            [
                'label' => __('Toggle Close Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-times',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'logo_upload',
            [
                'label' => __( 'Logo', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'logo', [
                'label' => __('Upload Logo', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'logo_link', [
                'label' => __('Logo Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'infoUpload',
            [
                'label' => __( 'Information', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyert et eirmod tempor invidunt ut labore et ert dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et cer justo duo dolores et berr ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor.', 'appilo'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'image_lists',
            [
                'label' => __('Image List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image', [
                'label' => __('Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'image_list',
            [
                'label' => __('Image Gallery', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],
                    [
                        'link' => '#',
                    ],

                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footerText',
            [
                'label' => __( 'Footer Text', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'bottom_txt',
            [
                'label' => __('Bottom Text', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Copyright By @ ThemeXriver', 'appilo'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'social_lists',
            [
                'label' => __('Social List', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'social_title',
            [
                'label' => __('Social List Title', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Follow Us On:', 'appilo'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            's_icon',
            [
                'label' => __('Social Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            's_link', [
                'label' => __('Social Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'social_list',
            [
                'label' => __('Social List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],
                    [
                        's_link' => '#',
                    ],

                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Toggle Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
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
            'toggle_open_color',
            [
                'label' => __('Toggle Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'toggle_open_font',
                'label' => __('Toggle Font', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-sidebar-btn a',
            ]
        );
        $this->add_control(
            'toggle_open_bg_color',
            [
                'label' => __('Toggle Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'toggle_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc-sidebar-btn a',
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
            'toggle_hover_open_color',
            [
                'label' => __('Toggle Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'toggle_open_hover_bg_color',
            [
                'label' => __('Toggle Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'toggle_hover_border',
                'label' => __( 'Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc-sidebar-btn a:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'toogleCloseBtn',
            [
                'label' => __( 'Toggle Close Button', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'toggle_close_color',
            [
                'label' => __('Toggle Close Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc_sidebar_info_content.apbc-sidebar-on .close-menu i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'infoStyle',
            [
                'label' => __( 'Info Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_typography',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'socialStyle',
            [
                'label' => __( 'Social Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'socialTitleColor',
            [
                'label' => __('Social Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-social .apbc-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'socialTitle_typography',
                'label' => __( 'Social Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc-sidebar-social .apbc-headline h5',
            ]
        );
        $this->add_control(
            'socialiconColor',
            [
                'label' => __('Social Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-social .apbc-social-links a ' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'footerStyle',
            [
                'label' => __( 'Footer Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'footer_text_color',
            [
                'label' => __('Footer Text Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc_sidebar_info_content .apbc-sidebar-copyright p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'FooterTitle_typography',
                'label' => __( 'Footer Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .apbc_sidebar_info_content .apbc-sidebar-copyright p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'sidebar_style',
            [
                'label' => __('Sidebar Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sidebarBG',
            [
                'label' => __('Sidebar Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-sidebar-info .apbc_sidebar_info_content' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="apbc-body-overlay"></div>
            <div class="apbc-sidebar-btn">
        <a href="#"> ';
        Icons_Manager::render_icon($settings['toggle_open'], ['aria-hidden' => 'true']);
        echo ' </a>
            </div>';

        echo '<!-- Hader Sidebar Info -->
            <div class="apbc-sidebar-info">
                <div class="apbc_sidebar_info_content">
                    <span class="close-menu">';
            Icons_Manager::render_icon($settings['toggle_close'], ['aria-hidden' => 'true']);
            echo '</span>
                    <div class="apbc_sidebar_logo">
                        <a ' . get_that_link($settings['logo_link']) . '><img src="' . $settings['logo']['url'] . '" alt=""></a>
                    </div>
                    <div class="apbc-pera-txt">
                        <p>' . $settings['info'] . '</p>
                    </div>
                    <div class="apbc-sidebar-gallery">
                        <ul>';
            if ($settings['image_list']) {
                foreach ($settings['image_list'] as $image) {
                    $image_link = get_that_link($image['link']);
                    echo '<li><a ' . $image_link . '><img src="' . $image['image']['url'] . '" alt></a></li>';
                }
            }
            echo '</ul>
                    </div>
                    <div class="apbc-sidebar-social">
                        <div class="apbc-headline">
                            <h5>' . $settings['social_title'] . '</h5>
                        </div>
                        <div class="apbc-social-links">';
                        if ($settings['social_list']) {
                            foreach ($settings['social_list'] as $social) {
                                $social_link = get_that_link($social['s_link']);
                                echo '<a ' . $social_link . '>';
                                Icons_Manager::render_icon($social['s_icon'], ['aria-hidden' => 'true']);
                                echo '</a>';
                            }
                        }
                        echo '
                        </div>
                    </div>
                    <div class="apbc-sidebar-copyright">
                        <p>' . $settings['bottom_txt'] . '</p>
                    </div>
                </div>  
            </div>
            <!-- Header Sidebar Info End -->';

    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new bx_toggle());
?>