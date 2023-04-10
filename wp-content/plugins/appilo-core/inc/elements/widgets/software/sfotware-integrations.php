<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class soft_integration extends Widget_Base {

    public function get_name() {
        return 'soft-integration';
    }

    public function get_title() {
        return __( 'Software Integration', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-radio';
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
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Integrations', 'appilo' ),
            ]
        );
        $this->add_control(
            'sec_title_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intregration-section .soft-m-section-title span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sec_title_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intregration-section .soft-m-section-title span',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Why Choose Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'sec_heading_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intregration-section .soft-m-section-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sec_heading_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intregration-section .soft-m-section-title h2',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'features_tab',
            [
                'label' => __( 'Integration', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Cloud Storage & Server', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'appilo' ),
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
            'animate_delay',
            [
                'label' => __( 'Animate Delay', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '00ms', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'feature_icon', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/software/vector/sin1.png',
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Service Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Collaborate and edit in real-time, assign and create and link tasks in Docs.', 'appilo' ),
            ]
        );
        $repeater->add_control(
            'read_more',
            [
                'label' => __( 'Read More Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __( 'Integration List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Cloud Storage & Server', 'appilo' ),
                    ],[
                        'title' => __( 'Cloud Storage & Server', 'appilo' ),
                    ],[
                        'title' => __( 'Cloud Storage & Server', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'title_h_color',
            [
                'label' => __( 'Title Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text h3',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'info_h_color',
            [
                'label' => __( 'Info Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text p',
            ]
        );
        $this->add_responsive_control(
            'image_size',
            [
                'label' => __( 'Image Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img svg' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_h_color',
            [
                'label' => __( 'Icon Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-img i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-img svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'icon_box_shadow',
                'label' => __( 'Icon Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow_h',
                'label' => __( 'Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox:hover',
            ]
        );
        $this->add_control(
            'read_m_icon',
            [
                'label' => __( 'Read More Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text .soft-in-more i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text .soft-in-more svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'read_m_h_icon',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text .soft-in-more i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text .soft-in-more svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'readnmm',
            [
                'label' => __( 'Read More Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'read_moaswn',
                'label' => __( 'Read More Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text .soft-in-more',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'read_hmoaswn',
                'label' => __( 'Read More Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text .soft-in-more',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'read_border',
                'label' => __( 'Read More Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text .soft-in-more',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'read_h_border',
                'label' => __( 'Hover Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox:hover .soft-m-intre-text .soft-in-more',
            ]
        );
        $this->add_responsive_control(
            'read_border_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox .soft-m-intre-text .soft-in-more' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'asdas',
            [
                'label' => __( 'Item Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_bottom_bg',
                'label' => __( 'Item Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_h_bg',
                'label' => __( 'Item Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __( 'Item Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .soft-m-intre-innerbox',
            ]
        );
        $this->add_responsive_control(
            'item_b_radius',
            [
                'label' => __( 'Border Radius', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intre-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'selector' => '{{WRAPPER}} .soft-m-intregration-section',
            ]
        );
        $this->add_control(
            'section_image', [
                'label' => __( 'Section Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/software/vector/in-vector1.png',
                ],
            ]
        );
        $this->add_responsive_control(
            'item_wrapper_padding',
            [
                'label' => __( 'Wrapper Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .soft-m-intregration-section .soft-m-intregration-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .soft-m-intregration-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
    echo '<!-- Start of intregrations section
    ============================================= -->
    <section  class="soft-m-intregration-section">
        <div class="container">
        <div class="soft-m-section-title text-center soft-m-headline">
             <span>'.$settings['section_title'].'</span>
             <h2>'.$settings['section_heading'].'</h2>
         </div>
         <div class="soft-m-intregration-content">
            <div class="row justify-content-center">';

            if ( $settings['service_list'] ) {
                foreach ($settings['service_list'] as $service) {
                   $feature_url = get_that_link($service['link']);

             echo '<div id="' . $service['_id'] . '" class="col-lg-4 col-md-6">
                    <div class="soft-m-intre-innerbox text-center wow fadeFromUp" data-wow-delay="' . $service['animate_delay'] . '" data-wow-duration="1500ms">
                        <div class="soft-m-intre-img">';
                                if($service['icon']) {
                                    \Elementor\Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                                } if ($service['feature_icon']['url']) {
                                    echo '<img src="' . $service['feature_icon']['url'] . '" alt>';
                                }
                            echo'</div>
                        <div class="soft-m-intre-text soft-m-headline pera-content">
                            <h3><a ' . $feature_url . '>' . $service['title'] . '</a></h3>
                            <p>' . $service['info'] . '</p>
                            <a class="soft-in-more" ' . $feature_url . '>';\Elementor\Icons_Manager::render_icon($service['read_more'], ['aria-hidden' => 'true']);echo'</a>
                        </div>
                    </div>
                </div>';
                }
            }
               echo'</div>
        </div>
    </div>  
    <div class="soft-intre-bottom-img text-center">
        <img src="' . $settings['section_image']['url'] . '" alt>
    </div>
</section>
<!-- End of intregrations section
    ============================================= -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new soft_integration );
?>