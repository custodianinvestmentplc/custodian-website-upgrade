<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class saas_classic_team extends Widget_Base {

    public function get_name() {
        return 'saas-classic-team-members';
    }

    public function get_title() {
        return __( 'SaaS Classic Team', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-person';
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'saas_two_team', 'appilo' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Liona Venchi', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'UI/UX designer', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_phn_icon',
            [
                'label' => __( 'Phone Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-phone',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'member_phn',
            [
                'label' => __( 'Member Phone', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '121-3245-214', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_mail',
            [
                'label' => __( 'Member Mail', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'sample@mail.com', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_mail_icon',
            [
                'label' => __( 'Mail Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-envelope',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_photo', [
                'label' => __( 'Member Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/saas-classic/team/tm.jpg',
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_1',
            [
                'label' => __( 'Social Icon 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_1', [
                'label' => __( 'Social Link 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_2',
            [
                'label' => __( 'Social Icon 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-behance',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_2', [
                'label' => __( 'Social Link 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_3',
            [
                'label' => __( 'Social Icon 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-apple',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_3', [
                'label' => __( 'Social Link 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'social_icon_4',
            [
                'label' => __( 'Social Icon 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'social_link_4', [
                'label' => __( 'Social Link 4', 'appilo' ),
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
            'member_list',
            [
                'label' => __( 'Member List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                        'animate_delay' => __( '0ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                        'animate_delay' => __( '300ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                        'animate_delay' => __( '600ms', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Liona Venchi', 'appilo' ),
                        'member_designation' => __( 'UI/UX designer', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
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
            'style_switcher',
            [
                'label' => __( 'Style Switcher', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'multiple' => true,
                'options' => [
                    'style1'  => __( 'Style 1', 'appilo' ),
                    'style2' => __( 'Style 2', 'appilo' ),
                ],
                'default' => 'style1',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2-mem_social .s2-share_btn i, 
                    {{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2-mem_social li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_color1',
            [
                'label' => __( 'Share Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2-mem_social .s2-share_btn i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'border_color',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_tean_img:before' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info .s2-designation' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info .s2-designation',
            ]
        );
        $this->add_control(
            'contact_txt_color',
            [
                'label' => __( 'Contact Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info .s2_mem_contact span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'contact_fonts',
                'label' => __( 'Contact Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info .s2_mem_contact span',
            ]
        );
        $this->add_control(
            'contact_icon_color',
            [
                'label' => __( 'Contact Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2_name_info .s2_mem_contact span i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'share_bg',
            [
                'label' => __( 'Team Share BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_share_bg',
                'label' => __( 'Team Share BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2-mem_social .s2-share_btn',
            ]
        );
        $this->add_control(
            'social_bg',
            [
                'label' => __( 'Team Social BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_social_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text .s2-mem_social:after',
            ]
        );
        $this->add_control(
            'main_bg',
            [
                'label' => __( 'Team Box BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_bg',
                'label' => __( 'Team Box BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text',
            ]
        );
        $this->add_control(
            'margin',
            [
                'label' => __( 'Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .saas_two_team_section .s2-team_img_text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_hover_bg',
                'label' => __( 'Team Box Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .saas_two_team_section .s2-team_img_text:hover',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $style = $settings['style_switcher'];

if  ($style == 'style1') {
    echo '<section  class="saas_two_team_section">
    <div class="container">
        <div id="s2_team_slide" class="s2-team_membar owl-carousel">';
    if ($settings['member_list']) {
        foreach ($settings['member_list'] as $members) {
            echo '<div class="s2-team_img_text  relative-position wow fadeFromLeft" data-wow-delay="' . $members['animate_delay'] . '" data-wow-duration="1500ms">
                <div class="s2_tean_img">
                    <img src="' . $members['member_photo']['url'] . '" alt>
                </div>
                <div class="s2_tean_text">
                    <div class="s2_name_info saas2-headline">
                        <h3>' . $members['member_name'] . '</h3>
                        <span class="s2-designation">' . $members['member_designation'] . '</span>
                        <div class="s2_mem_contact">
                            <span>';
            \Elementor\Icons_Manager::render_icon($members['member_phn_icon'], ['aria-hidden' => 'true']);
            echo '' . $members['member_phn'] . '</span>
                            <span>';
            \Elementor\Icons_Manager::render_icon($members['member_mail_icon'], ['aria-hidden' => 'true']);
            echo '' . $members['member_mail'] . '</span>
                        </div>
                    </div>
                </div>
                <div class="s2-mem_social ul-li-block">
                    <ul>';
            echo '<li><a href="' . $members['social_link_1']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_1'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_2']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_2'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_3']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_3'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_4']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_4'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '</ul>
                    <div class="s2-share_btn text-center"><i class="fas fa-share-alt"></i></div>
                </div>
            </div>';
        }
    }
    echo '</div>
    </div>
</section>';
}else {
    echo '<section class="saas_two_team_section">
    <div class="container">
        <div class="s2-team_membar-single">
        <div class="row">';
    if ($settings['member_list']) {
        foreach ($settings['member_list'] as $members) {
            echo '<div class="col-md-3"><div class="s2-team_img_text relative-position wow fadeFromLeft" data-wow-delay="' . $members['animate_delay'] . '" data-wow-duration="1500ms">
                <div class="s2_tean_img">
                    <img src="' . $members['member_photo']['url'] . '" alt>
                </div>
                <div class="s2_tean_text">
                    <div class="s2_name_info saas2-headline">
                        <h3>' . $members['member_name'] . '</h3>
                        <span class="s2-designation">' . $members['member_designation'] . '</span>
                        <div class="s2_mem_contact">
                            <span>';
            \Elementor\Icons_Manager::render_icon($members['member_phn_icon'], ['aria-hidden' => 'true']);
            echo '' . $members['member_phn'] . '</span>
                            <span>';
            \Elementor\Icons_Manager::render_icon($members['member_mail_icon'], ['aria-hidden' => 'true']);
            echo '' . $members['member_mail'] . '</span>
                        </div>
                    </div>
                </div>
                <div class="s2-mem_social ul-li-block">
                    <ul>';
            echo '<li><a href="' . $members['social_link_1']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_1'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_2']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_2'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_3']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_3'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '<li><a href="' . $members['social_link_4']['url'] . '">';
            \Elementor\Icons_Manager::render_icon($members['social_icon_4'], ['aria-hidden' => 'true']);
            echo '</a></li>';
            echo '</ul>
                    <div class="s2-share_btn text-center"><i class="fas fa-share-alt"></i></div>
                </div>
            </div></div>';
        }
    }
    echo '</div>
    </div>
    </div>
</section>';
}
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new saas_classic_team );
?>