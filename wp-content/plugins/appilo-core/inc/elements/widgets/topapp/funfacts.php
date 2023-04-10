<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_funfacts extends Widget_Base {

    public function get_name() {
        return 'topapp-funfacts';
    }

    public function get_title() {
        return __( 'Fun Facts', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fab fa-free-code-camp';
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Fu</span>nfacts', 'appilo' ),
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-sec-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .topapp-sec-title .title',
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We have a g<span>reat funfact</span> which <br> we want to show you!', 'appilo' ),
            ]
        );
        $this->add_control(
            'heading_color',
            [
                'label' => __( 'Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topapp-sec-title h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'heading_fonts',
                'label' => __( 'Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .topapp-sec-title h2',
            ]
        );
        $this->add_control(
            'section_info',
            [
                'label' => __( 'Section Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industrys stan dard dummy text ever since the 1500s.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section .content-column .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .counter-section .content-column .text',
            ]
        );
        $this->add_control(
            'btn_content',
            [
                'label' => __( 'Button Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Download a trial version to make life easy!', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_1',
            [
                'label' => __( 'Play Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/google.png',
                ],
            ]
        );
        $this->add_control(
            'section_btn_1_url', [
                'label' => __( 'Play Button Link', 'appilo' ),
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
            'section_btn_2',
            [
                'label' => __( 'App Store Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/icons/app.png',
                ],
            ]
        );
        $this->add_control(
            'section_btn_2_url', [
                'label' => __( 'App Store Button Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
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
            'section_style',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'btn_content_color',
            [
                'label' => __( 'Button Content Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section .content-column .download' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_content_fonts',
                'label' => __( 'Button Content Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .counter-section .content-column .download',
            ]
        );
        $this->add_control(
            'section_gradient',
            [
                'label' => __( 'Section Gradient', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Gradient', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .counter-section .topapp-sec-title.style-three .title:before, 
                {{WRAPPER}} .counter-section .topapp-sec-title.style-three h2 span:before',
            ]
        );
        $this->add_control(
            'icon_bg_style',
            [
                'label' => __( 'Icons Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .fact-counter .column .inner .content .icon, 
                {{WRAPPER}} .fact-counter .column:nth-child(2) .inner .content .icon, 
                {{WRAPPER}} .fact-counter .column:nth-child(3) .inner .content .icon, 
                {{WRAPPER}} .fact-counter .column:nth-child(4) .inner .content .icon',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .fact-counter .column:nth-child(4) .inner .content .icon, {{WRAPPER}} .fact-counter .column:nth-child(4) .inner .count-outer, 
                    {{WRAPPER}} .fact-counter .column:nth-child(3) .inner .count-outer, {{WRAPPER}} .fact-counter .column:nth-child(3) .inner .content .icon, 
                    {{WRAPPER}} .fact-counter .column:nth-child(2) .inner .count-outer, {{WRAPPER}} .fact-counter .column:nth-child(2) .inner .content .icon, 
                    {{WRAPPER}} .fact-counter .column .inner .count-outer, {{WRAPPER}} .fact-counter .column .inner .content .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'count_number',
            [
                'label' => __( 'Count Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .fact-counter .column .inner .count-outer' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'count_fonts',
                'label' => __( 'Count Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .fact-counter .column .inner .count-outer',
            ]
        );
        $this->add_control(
            'count_title',
            [
                'label' => __( 'Count Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .fact-counter .column .inner .counter-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'count_title_fonts',
                'label' => __( 'Count Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .fact-counter .column .inner .counter-title',
            ]
        );
        $this->add_control(
            'section_patternt_bg',
            [
                'label' => __( 'Pattern Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'pattern_bg_1', [
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-5.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-6.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-7.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern Background 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-8.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_5', [
                'label' => __( 'Pattern Background 5', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/flower.png',
                ],
            ]
        );


        $this->end_controls_section();
        // Icon Box 1
        $this->start_controls_section(
            'content_icon_box_one',
            [
                'label' => __( 'Fun Facts One', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_one',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Satisfied Clients', 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_number_one',
            [
                'label' => __( 'Counter Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1250', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_one',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

        // Icon Box 2
        $this->start_controls_section(
            'content_icon_box_two',
            [
                'label' => __( 'Fun Facts Two', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_two',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Agents Team', 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_number_two',
            [
                'label' => __( 'Counter Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '850', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_two',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

//        Icon Box 3
        $this->start_controls_section(
            'content_icon_box_three',
            [
                'label' => __( 'Fun Facts Three', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_three',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Success Mission', 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_number_three',
            [
                'label' => __( 'Counter Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '151', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_three',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

        //        Icon Box 4
        $this->start_controls_section(
            'content_icon_box_four',
            [
                'label' => __( 'Fun Facts Four', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_four',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Awards', 'appilo' ),
            ]
        );
        $this->add_control(
            'counter_number_four',
            [
                'label' => __( 'Counter Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1350', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_four',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Counter Section -->
                <section class="counter-section" >
                    <div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
                    <div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
                    <div class="patern-layer-three" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
                    <div class="patern-layer-four" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
                    <!-- Flower Image -->
                    <div class="flower-image">
                        <!-- Image One -->
                        <div class="image paroller" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal" style="background-image:url('.$settings['pattern_bg_5']['url'].')"></div>
                    </div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            
                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="topapp-sec-title style-three">
                                        <div class="title">'.$settings['section_title'].'</div>
                                        <h2>'.$settings['section_heading'].'</h2>
                                    </div>
                                    <div class="text">'.$settings['section_info'].'</div>
                                    <div class="download">'.$settings['btn_content'].'</div>
                                    <div class="google-btns">';
                                        if (!empty($settings['section_btn_1_url']['url'])) {
                                           echo' <a href="'.$settings['section_btn_1_url']['url'].'"><img src="'.$settings['section_btn_1']['url'].'" alt="Play Button" /></a>';
                                        }
                                        if (!empty($settings['section_btn_2_url']['url'])) {
                                            echo ' <a href="' . $settings['section_btn_2_url']['url'] . '"><img src="' . $settings['section_btn_2']['url'] . '" alt="Appstore Button" /></a>';
                                        }
                                   echo' </div>
                                </div>
                            </div>
                            
                            <!-- Counter Column -->
                            <div class="counter-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    
                                    <!-- Fact Counter -->
                                    <div class="fact-counter">
                                        <div class="row clearfix">
            
                                            <!--Column-->
                                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                    <div class="content">
                                                        <div class="icon-box">';

                                                       echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['icon_one'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                                       echo'</div>
                                                        <div class="count-outer count-box">
                                                            <span class="topapp-count-text">'.$settings['counter_number_one'].'</span>+
                                                        </div>
                                                        <h5 class="counter-title">'.$settings['icon_title_one'].'</h5>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <!--Column-->
                                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                    <div class="content">
                                                        <div class="icon-box">';

                                                                echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['icon_two'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                                      echo' </div>
                                                        <div class="count-outer count-box alternate">
                                                            <span class="topapp-count-text">'.$settings['counter_number_two'].'</span>+
                                                        </div>
                                                        <h5 class="counter-title">'.$settings['icon_title_two'].'</h5>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <!--Column-->
                                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                                    <div class="content">
                                                        <div class="icon-box">';

                                                                echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['icon_three'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                                       echo'</div>
                                                        <div class="count-outer count-box">
                                                            <span class="topapp-count-text">'.$settings['counter_number_three'].'</span>+
                                                        </div>
                                                        <h5 class="counter-title">'.$settings['icon_title_three'].'</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--Column-->
                                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                                    <div class="content">
                                                        <div class="icon-box">';

                                                                echo'<span class="icon">';\Elementor\Icons_Manager::render_icon( $settings['icon_four'], [ 'aria-hidden' => 'true' ] ); echo'</span>';

                                                        echo' </div>
                                                        <div class="count-outer count-box">
                                                            <span class="topapp-count-text">'.$settings['counter_number_four'].'</span>+
                                                        </div>
                                                        <h5 class="counter-title">'.$settings['icon_title_four'].'</h5>
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
	<!-- End Counter Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_funfacts );
?>