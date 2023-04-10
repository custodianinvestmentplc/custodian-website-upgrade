<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ch1_slider extends Widget_Base {

    public function get_name() {
        return 'cloud-hosting-slider';
    }

    public function get_title() {
        return __( 'Cloud Hosting Slider', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'eicon-banner';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'slide_1',
            [
                'label' => __( 'Slide 1', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's1_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are Hosting', 'appilo' ),
            ]
        ); 
        $this->add_control(
            's1_heading1',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Welcome to the world’s best <br> hosting company', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_heading2',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Totam rem aperiam, eaque ipsa quae ab illo inventore verita tis et quasi <br> architecto beata.', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_pricing_starting',
            [
                'label' => __( 'Pricing Starting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starting at $2.99', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$2.95', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_period',
            [
                'label' => __( 'Price Period', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '/month*', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            's1_btn_link',
            [
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
        $this->add_control(
            's1_slide_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/slider/slider-1.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'slide_2',
            [
                'label' => __( 'Slide 2', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            's2_title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are Hosting', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_heading1',
            [
                'label' => __( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Welcome to the world’s best <br> hosting company', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_heading2',
            [
                'label' => __( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Totam rem aperiam, eaque ipsa quae ab illo inventore verita tis et quasi <br> architecto beata.', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_pricing_starting',
            [
                'label' => __( 'Pricing Starting', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starting at $7.99', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_price',
            [
                'label' => __( 'Price', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '$7.95', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_period',
            [
                'label' => __( 'Price Period', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '/month*', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_btn',
            [
                'label' => __( 'Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Get Started', 'appilo' ),
            ]
        );
        $this->add_control(
            's2_btn_link',
            [
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
        $this->add_control(
            's2_slide_image', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/cloud-hosting/slider/slider-2.jpg',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .large-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .large-text',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .small-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .small-text',
            ]
        );
        $this->add_control(
            'medium_color',
            [
                'label' => __( 'Medium Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'medium_fonts',
                'label' => __( 'Medium Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .medium-text',
            ]
        );
        $this->add_control(
            'price_color',
            [
                'label' => __( 'Price Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text .big-text .theme-color' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'price_fonts',
                'label' => __( 'Price Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .medium-text .big-text .theme-color',
            ]
        );
        $this->add_control(
            'period_color',
            [
                'label' => __( 'Time Period Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .medium-text .big-text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'period_fonts',
                'label' => __( 'Time Period Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .medium-text .big-text',
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => __( 'Button BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => __( 'Button Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary',
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __( 'Button Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_hover_fonts',
                'label' => __( 'Button Hover Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_control(
            'btn_h',
            [
                'label' => __( 'Button Hover Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_h_bg',
                'label' => __( 'Button Hover BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_h_shadow',
                'label' => __( 'Button Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .host-app-slider-section .link-button .btn-primary:hover',
            ]
        );
        $this->add_control(
            'nav_t',
            [
                'label' => __( 'Nav Text Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tparrows.preview2 .tp-arr-titleholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_t_fonts',
                'label' => __( 'Nav Text Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .tparrows.preview2 .tp-arr-titleholder',
            ]
        );
        $this->add_control(
            'nav',
            [
                'label' => __( 'Navigation Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'nav_ma_bg',
                'label' => __( 'Navigation BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .tparrows.preview2',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $target1 = $settings['s1_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow1 = $settings['s1_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        $target2 = $settings['s2_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow2 = $settings['s2_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        echo    '<!-- Start of banner section
            ============================================= -->
            <section  class="host-app-slider-section">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb="'.$settings['s1_slide_image']['url'].'" data-delay="11000" data-title="'.$settings['s1_title'].'" >
                    <!-- MAIN IMAGE -->
                    <img src="'.$settings['s1_slide_image']['url'].'"  alt  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large-text text-left customin customout"
                         data-x="70"
                         data-y="100"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Power3.easeInOut"
                         data-splitin="chars"
                         data-splitout="chars"
                         data-elementdelay="0.08"
                         data-endelementdelay="0.08"
                         data-end="8000"
                         data-endspeed="500"
                         style="z-index: 2;"> '.$settings['s1_heading1'].'
                    </div>


                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption small-text text-left css-slide-subtitle sfl"
                         data-x="70"
                         data-y="240"
                         data-speed="500"
                         data-start="4000"
                         data-easing="Back.easeOut"
                         data-end="11500"
                         data-endspeed="700"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 5;">'.$settings['s1_heading2'].'
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium-text text-left customin customout rs-parallaxlevel-0"
                         data-x="70"
                         data-y="320"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1500"
                         data-start="4000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-end="12200"
                         data-endspeed="2000"
                         data-linktoslide="next"
                         style="z-index: 8;"> '.$settings['s1_pricing_starting'].'<br> <span class="big-text"><span class="theme-color">'.$settings['s1_price'].'</span>'.$settings['s1_period'].'</span>

                    </div>


                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb ltt"
                         data-x="70"
                         data-y="410"
                         data-speed="1800"
                         data-start="4600"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-end="13500"
                         data-endspeed="1800"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <div class="link-button hidden-xs">
                            <a '.$target1 . $nofollow1.' href="'.$settings['s1_btn_link']['url'].'" class="btn btn-primary">'.$settings['s1_btn'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>


                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-thumb="'.$settings['s2_slide_image']['url'].'" data-delay="11000" data-title="'.$settings['s2_title'].'" >
                    <!-- MAIN IMAGE -->
                    <img src="'.$settings['s2_slide_image']['url'].'"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large-text text-left customin customout"
                         data-x="70"
                         data-y="100"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="500"
                         data-easing="Power3.easeInOut"
                         data-splitin="chars"
                         data-splitout="chars"
                         data-elementdelay="0.08"
                         data-endelementdelay="0.08"
                         data-end="8000"
                         data-endspeed="500"
                         style="z-index: 2;">  '.$settings['s2_heading1'].'
                    </div>


                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption small-text text-left css-slide-subtitle sfl"
                         data-x="70"
                         data-y="240"
                         data-speed="500"
                         data-start="4000"
                         data-easing="Back.easeOut"
                         data-end="11500"
                         data-endspeed="700"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 5;"> '.$settings['s2_heading2'].'
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium-text text-left customin customout rs-parallaxlevel-0"
                         data-x="70"
                         data-y="320"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1500"
                         data-start="4000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-end="12200"
                         data-endspeed="2000"
                         data-linktoslide="next"
                         style="z-index: 8;"> '.$settings['s2_pricing_starting'].' <br> <span class="big-text"><span class="theme-color">'.$settings['s1_price'].'</span>'.$settings['s1_period'].'</span>

                    </div>


                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb ltt"
                         data-x="70"
                         data-y="410"
                         data-speed="1800"
                         data-start="4600"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-end="13500"
                         data-endspeed="1800"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3;">
                        <div class="link-button hidden-xs">
                            <a '.$target2 . $nofollow2.' href="'.$settings['s2_btn_link']['url'].'" class="btn btn-primary">'.$settings['s2_btn'].' <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

            <!-- End of banner section
    ============================================= -->';
    }

    

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new ch1_slider );
?>