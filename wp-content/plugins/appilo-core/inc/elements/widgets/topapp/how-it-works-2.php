<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_how_it_works extends Widget_Base {

    public function get_name() {
        return 'topapp-how-it-works';
    }

    public function get_title() {
        return __( 'How It Works', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-briefcase';
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
                'default' => __( '<span>St</span>eps', 'appilo' ),
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
                'default' => __( 'We have some <span> eas</span>y <span>ste</span>p<span>s</span>! ', 'appilo' ),
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
        $this->end_controls_section();

        $this->start_controls_section(
            'slider_section',
            [
                'label' => __( 'Slider Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'slider_mob_bg', [
                'label' => __( 'Slider Mobile Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/mobile.png',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'active_slide',
            [
                'label' => __( 'Active Slide', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Active', 'appilo' ),
                'label_off' => __( 'Inactive', 'appilo' ),
                'return_value' => 'active',
                'default' => '',
            ]
        );
        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Make Profile' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'list_id', [
                'label' => __( 'ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '0' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'list_icon',
            [
                'label' => __( 'Icon Library', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'list_content', [
                'label' => __( 'Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing setting industry. Lorem Ipsum has been industrys dard dummy text ever since the 1500s.' , 'appilo' ),
                'show_label' => false,
            ]
        );
        $repeater->add_control(
            'item_screenshots', [
                'label' => __( 'Screenshots', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/mokeup-1.jpg',
                ],
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => __( 'Slider Items', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Download as a free trial!', 'appilo' ),
                        'list_icon' => __( '', 'appilo' ),
                        'custom_icon' => __( 'flaticon-logout', 'appilo' ),
                        'active_slide' => __( 'active', 'appilo' ),
                        'list_id' => __( '0', 'appilo' ),
                        'list_content' => __( 'Lorem Ipsum is simply dummy text of the printing setting industry. Lorem Ipsum has been industrys dard dummy text ever since the 1500s.', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Download as a free trial!', 'appilo' ),
                        'list_id' => __( '1', 'appilo' ),
                        'list_content' => __( 'Lorem Ipsum is simply dummy text of the printing setting industry. Lorem Ipsum has been industrys dard dummy text ever since the 1500s.', 'appilo' ),
                    ],
                    [
                        'list_title' => __( 'Download as a free trial!', 'appilo' ),
                        'list_id' => __( '2', 'appilo' ),
                        'list_content' => __( 'Lorem Ipsum is simply dummy text of the printing setting industry. Lorem Ipsum has been industrys dard dummy text ever since the 1500s.', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
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
            'item_heading_color',
            [
                'label' => __( 'Item Heading Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'item_heading_fonts',
                'label' => __( 'Item Heading Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li strong',
            ]
        );
        $this->add_control(
            'item_info_color',
            [
                'label' => __( 'Item Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'item_info_fonts',
                'label' => __( 'Item Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li',
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
                'selector' => '{{WRAPPER}} .steps-section .topapp-sec-title.style-two .title:before, 
                {{WRAPPER}} .steps-section .topapp-sec-title.style-two h2 span:before',
            ]
        );
        $this->add_control(
            'icon_col',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_color_background',
                'label' => __( 'Icon Color', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label'=> true,
                'selector' => '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(3) .icon i, 
                    {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(2) .icon i, 
                    {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(1) .icon i',
            ]
        );

        $this->add_control(
            'icon_bg',
            [
                'label' => __( 'Icon Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'label' => __( 'Icon Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label'=> true,
                'selector' => '{{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(1):hover .icon, 
                {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(1).active .icon, 
                {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(2):hover .icon, 
                {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(2).active .icon, 
                {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(3):hover .icon, 
                {{WRAPPER}} .steps-section .blocks-column .inner-column .carousel-indicators li:nth-child(3).active .icon',
            ]
        );
        $this->add_control(
            'section_pattern_bg',
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
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-2.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_set_1',
                'label' => __( 'Pattern Background 1', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label'=> true,
                'selector' => '{{WRAPPER}} .steps-section .patern-layer-one',
            ]
        );
        $this->add_control(
            'pattern_bg_2', [
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-3.png',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_set_2',
                'label' => __( 'Pattern Background 2', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label'=> true,
                'selector' => '{{WRAPPER}} .steps-section .patern-layer-two',
            ]
        );
        $this->add_control(
            'pattern_bg_3', [
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-4.png',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pattern_bg_set_3',
                'label' => __( 'Pattern Background 3', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label'=> true,
                'selector' => '{{WRAPPER}} .steps-section .patern-layer-three',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<!-- Steps Section -->
                <section class="steps-section" >
                    <div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
                    <div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
                    <div class="patern-layer-three" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
                    <div class="auto-container">
                        
                        <!-- Carousel Wrapper -->
                        <div id="steps-thumb" class="carousel slide carousel-thumbnails" data-ride="carousel">
                            <div class="row clearfix">
                            
                                <!-- Carousel Column -->
                                <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
                                    <!-- Slides -->
                                    <div class="carousel-inner" role="listbox" style="background-image: url('.$settings['slider_mob_bg']['url'].')">';

                                            if ( $settings['list'] ) {
                                                echo '<div class="slides">';
                                                foreach (  $settings['list'] as $item ) {
                                                    echo '<div class="carousel-item '.$item['active_slide'].' dynamic-screenshots-'.$item['_id'].'">
                                                            <div class="content">
                                                                <div class="image">
                                                                    <a href="'.$item['item_screenshots']['url'].'" data-fancybox="steps" data-caption="" class="image-link lightbox-image"><img src="'.$item['item_screenshots']['url'].'" alt="Screenshots" /></a>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                }
                                                echo '</div>';
                                            }
                                  echo'  </div>
                                </div>
                                
                                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                    
                                        <!-- Sec Title -->
                                        <div class="topapp-sec-title style-two">
                                            <div class="title">'.$settings['section_title'].'</div>
                                            <h2>'.$settings['section_heading'].'</h2>
                                        </div>';

                                            if ( $settings['list'] ) {
                                                echo ' <!-- Controls-->
                                                        <ul class="carousel-indicators">';
                                                foreach (  $settings['list'] as $item ) {
                                                    echo ' <li data-target="#steps-thumb" data-slide-to="'.--$item['list_id'].'" class="tab-btn '.$item['active_slide'].' wow dynamic-list-'.$item['_id'].'" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <span class="number">'.++$item['list_id'].'</span>
                                                <span class="icon">';\Elementor\Icons_Manager::render_icon( $item['list_icon'], [ 'aria-hidden' => 'true' ] ); echo'</span>
                                                <strong>'.$item['list_title'].'</strong>
                                                        '.$item['list_content'].'
                                                    </li >';
                                                }
                                                echo '</ul>';
                                            }
                                    
                                    echo '</div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </section>
	<!-- End Steps Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_how_it_works );
?>