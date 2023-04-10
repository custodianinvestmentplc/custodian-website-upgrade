<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class medi_team extends Widget_Base {

    public function get_name() {
        return 'medi-members';
    }

    public function get_title() {
        return __( 'Medical Team', 'appilo' );
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
        
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'member_name',
            [
                'label' => __( 'Member Name', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Alex D. Darilin', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __( 'Member Designation', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Founder', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'team_url',
            [
                'label' => __( 'Team Link', 'appilo' ),
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
            'member_photo', [
                'label' => __( 'Member Photo', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/medical/tm1.jpg',
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
                        'member_name' => __( 'Alex D. Darilin', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Alex D. Darilin', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Alex D. Darilin', 'appilo' ),
                    ],
                    [
                        'member_name' => __( 'Alex D. Darilin', 'appilo' ),
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
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox:hover .app-medi-text-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text h3',
            ]
        );
        $this->add_control(
            'des_color',
            [
                'label' => __( 'Designation Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'des_h_color',
            [
                'label' => __( 'Designation Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox:hover .app-medi-text-text span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'des_fonts',
                'label' => __( 'Designation Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text span',
            ]
        );
        $this->add_control(
            'contact_icon_color',
            [
                'label' => __( 'Contact Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox .app-medi-team-social a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'contact_icon_h_color',
            [
                'label' => __( 'Hover Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-innerbox .app-medi-team-social a:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .app-medi-team-innerbox .app-medi-team-icon svg' => 'fill: {{VALUE}}',
                ],
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
                'name' => 'team_socials_bg',
                'label' => __( 'Team Social BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox .app-medi-team-img:before, 
                {{WRAPPER}} .app-medi-team-innerbox .app-medi-team-social',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text',
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
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox .app-medi-text-text',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team_main_hover_bg',
                'label' => __( 'Team Box Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .app-medi-team-innerbox:hover .app-medi-text-text',
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
                'selector' => '{{WRAPPER}} .medi-app-team-content',
            ]
        );
        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label' => __( 'Wrapper Margin', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .medi-app-team-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .app-medi-team-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of Team section
    ============================================= --> 
    <section id="app-medi-team" class="app-medi-team-section">
            <div class="medi-app-team-content">
                <div class="row justify-content-center">';
            if ( $settings['member_list'] ) {
                foreach ($settings['member_list'] as $members) {

                    $team_url = get_that_link($members['team_url']);
                    $social_url_1 = get_that_link($members['social_link_1']);
                    $social_url_2 = get_that_link($members['social_link_2']);
                    $social_url_3 = get_that_link($members['social_link_3']);
                    $social_url_4 = get_that_link($members['social_link_4']);

            echo'<div class="col-lg-3 col-md-6">
                        <div class="app-medi-team-innerbox wow fadeFromUp" data-wow-delay="'.appilo_animate('100').'" data-wow-duration="1000ms">
                            <div class="app-medi-team-img position-relative">
                                <img src="'.$members['member_photo']['url'].'" alt>
                                <div class="app-medi-team-social text-center">';
                        echo'<a '. $social_url_1 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_1'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_2 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_2'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_3 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_3'], [ 'aria-hidden' => 'true' ] );echo'</a>';
                        echo'<a '. $social_url_4 .'>';\Elementor\Icons_Manager::render_icon( $members['social_icon_4'], [ 'aria-hidden' => 'true' ] );echo'</a>';

                        echo'</div>
                                <div class="app-medi-team-icon">
                                    <?xml version="1.0" encoding="UTF-8"?>
                                    <svg enable-background="new 0 0 480.007 480.007" version="1.1" viewBox="0 0 480.01 480.01" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m479.43 267.58c-3.547-24.574-22.852-43.879-47.426-47.426v-14.544c0-40.128-30.504-72.8-68-72.8-36.416 0-66.904 31.68-68 70.624h0.464l-0.464 0.08v157.66c0 50.4-37.68 91.328-84 91.328s-84-40.984-84-91.328v-13.656c11.6 0 24-8.408 24-32v-20.12c51.344-13.128 88-57.216 88-107.2v-16.68h-16l-0.336-104.12c-0.116-19.273-13.946-35.729-32.912-39.16-4.091-12.533-17.568-19.377-30.102-15.285-12.533 4.091-19.377 17.568-15.285 30.102 4.091 12.533 17.568 19.377 30.102 15.285 6.711-2.191 12.108-7.24 14.741-13.79 10.249 2.916 17.349 12.24 17.432 22.896l0.36 104.07h-16v16.912c-0.638 27.827-19.294 52.009-46.048 59.688-14.315 4.542-29.685 4.542-44 0-26.723-7.705-45.337-31.883-45.952-59.688v-16.912h-24v-104c0.046-10.813 7.318-20.261 17.76-23.072 4.869 12.395 18.864 18.495 31.259 13.626s18.495-18.865 13.626-31.259-18.865-18.495-31.259-13.626c-6.716 2.639-11.898 8.146-14.122 15.011-19.173 3.276-33.211 19.869-33.264 39.32v104h-16v16.64c0 50.04 36.68 94.144 88 107.24v20.12c0 23.592 12.4 32 24 32v13.656c0 59.2 44.856 107.33 100 107.33s100-48.184 100-107.33v-157.27c0.8-30.36 24.144-55.064 52-55.064 28.672 0 52 25.472 52 56.8v14.52c-30.611 4.418-51.844 32.815-47.426 63.426s32.815 51.844 63.426 47.426 51.844-32.816 47.426-63.426zm-311.43-224.07c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm-96-16c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm-56 160.64v-0.64h24v0.912c0.6 34.771 23.733 65.116 57.104 74.904 17.487 5.537 36.257 5.537 53.744 0 33.387-9.775 56.541-40.121 57.152-74.904v-0.912h16v0.64c0 44.504-34.304 83.664-81.6 93.136-11.106 2.224-22.482 2.782-33.752 1.656-3.71-0.36-7.398-0.918-11.048-1.672-47.296-9.456-81.6-48.616-81.6-93.12zm96 143.36c-7.2 0-8-11.2-8-16v-16.976c0.64 0.08 1.296 0.112 1.944 0.176 0.8 0.088 1.6 0.152 2.4 0.224 3.784 0.336 7.6 0.56 11.448 0.568h0.4c3.84 0 7.648-0.232 11.408-0.568 0.8-0.072 1.648-0.136 2.472-0.224 0.632-0.072 1.288-0.096 1.92-0.176v16.976c0 4.8-0.8 16-8 16h-15.992zm312-16c-22.091 0-40-17.909-40-40s17.909-40 40-40 40 17.909 40 40c-0.026 22.081-17.92 39.974-40 40z"/>
                                        <path d="m424 251.52c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm0 32c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="app-medi-text-text app-medi-headline">
                                <span>'.$members['member_designation'].'</span>
                                <h3><a '.$team_url.'>'.$members['member_name'].'</a></h3>
                            </div>
                        </div>
                    </div>';
                    }
                }
                echo'</div>
            </div>
    </section>
<!-- End of Team section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new medi_team );
?>