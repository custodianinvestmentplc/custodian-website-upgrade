<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_featured_block extends Widget_Base {

    public function get_name() {
        return 'appilo-features';
    }

    public function get_title() {
        return __( 'Features', 'appilo' );
    }
    public function get_categories() {
        return [ 'appilo-core' ];
    }
    public function get_icon() {
        return 'fas fa-suitcase';
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
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'featured', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>Fe</span>atures', 'appilo' ),
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
                'default' => __( 'Learn the features of new Beautiful <span>lifest</span>y<span>le</span> app!', 'appilo' ),
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
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industrys stan dard dummy text ever since the 1500s.
                                    <br/><br/> The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts.', 'appilo' ),
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .featured-section .content-column .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __( 'Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .featured-section .content-column .text',
            ]
        );
        $this->add_control(
            'list_content',
            [
                'label' => __( 'List Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li>Identfy the most trending sessions & exibitors.</li>
                                        <li>24 hours customer supports facilites.</li>
                                        <li>Take action to improve your event value.</li>', 'appilo' ),
            ]
        );
        $this->add_control(
            'list_color',
            [
                'label' => __( 'List Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .list-style-one li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'list_fonts',
                'label' => __( 'List Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .list-style-one li',
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Contact Us', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Feature Button Link', 'appilo' ),
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
            'btn_color',
            [
                'label' => __( 'Button Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .btn-style-three' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_fonts',
                'label' => __( 'Button Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .btn-style-three',
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
            'box_title_color',
            [
                'label' => __( 'Box Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .featured-block .inner-box h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'box_title_fonts',
                'label' => __( 'Box Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .featured-block .inner-box h3',
            ]
        );
        $this->add_control(
            'box_info_color',
            [
                'label' => __( 'Box Info Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .featured-block .inner-box .text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'box_info_fonts',
                'label' => __( 'Box Info Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .featured-block .inner-box .text',
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
                'selector' => '{{WRAPPER}} .featured-section .topapp-sec-title .title:before, 
                {{WRAPPER}} .featured-section .topapp-sec-title h2 span:before',
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
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .featured-block .inner-box .icon-box,
                 {{WRAPPER}} .topapp-main .featured-block.style-three .inner-box .icon-box, 
                                {{WRAPPER}} .featured-block.style-two .inner-box .icon-box, 
                                {{WRAPPER}} .featured-block.style-four .inner-box .icon-box',
            ]
        );
        $this->add_control(
            'icon_before_bg',
            [
                'label' => __( 'Icon Hover BG 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_before_background',
                'label' => __( 'Icon Before Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .featured-block .inner-box .icon-box:before, 
                {{WRAPPER}} .featured-block.style-two .inner-box .icon-box:before, 
                {{WRAPPER}} .featured-block.style-three .inner-box .icon-box:before, 
                {{WRAPPER}} .featured-block.style-four .inner-box .icon-box:before',
            ]
        );
        $this->add_control(
            'icon_after_bg',
            [
                'label' => __( 'Icon Hover BG 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_after_background',
                'label' => __( 'Icon After Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .featured-block .inner-box .icon-box:after,
                 {{WRAPPER}} .featured-block.style-two .inner-box .icon-box:after,
                  {{WRAPPER}} .featured-block.style-three .inner-box .icon-box:after,
                 {{WRAPPER}} .featured-block.style-four .inner-box .icon-box:after',
            ]
        );
        $this->add_control(
            'icon_one_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .featured-block .inner-box .icon-box .icon,
                     {{WRAPPER}} .feature_icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Button Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-three',
            ]
        );
        $this->add_control(
            'button_hover_style',
            [
                'label' => __( 'Button Hover Style', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_1',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-three:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_2',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-three:after',
            ]
        );
        $this->add_control(
            'pattern_bg_style',
            [
                'label' => __( 'Background Elements', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'section_image_1', [
                'label' => __( 'Section Image Element 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/topapp/icons/cloud-icon.png',
                ],
            ]
        );
        $this->add_control(
            'section_image_2', [
                'label' => __( 'Section Image Element 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/girl-icon.png',
                ],
            ]
        );

        $this->end_controls_section();
        // Icon Box 1
        $this->start_controls_section(
            'content_icon_box_one',
            [
                'label' => __( 'Icon Box One', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_one',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Easy to edit', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_content_one',
            [
                'label' => __( 'Icon Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Save time and edit like a pro! Yes! you will be able to edit your application on the easy way.', 'appilo' ),
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
                'label' => __( 'Icon Box Two', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_two',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Full protection', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_content_two',
            [
                'label' => __( 'Icon Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'The app needs to be running in the background, as it tracks BLE regions. ', 'appilo' ),
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
                'label' => __( 'Icon Box Three', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_three',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Hi speedy app', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_content_three',
            [
                'label' => __( 'Icon Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Speedy App provides instant information on thousands of hire and buy products.', 'appilo' ),
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
                'label' => __( 'Icon Box Four', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_title_four',
            [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Easy to edit', 'appilo' ),
            ]
        );
        $this->add_control(
            'icon_content_four',
            [
                'label' => __( 'Icon Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Save time and edit like a pro! Yes! you will be able to edit your application on the easy way.', 'appilo' ),
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
        echo '<!-- Featured Section -->
                <section class="featured-section" >
                    <div class="auto-container">
                        <div class="row clearfix">
                            
                            <!-- Content Column -->
                            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                                <div class="iner-column">
                                    <div class="topapp-sec-title">
                                        <div class="title">'.$settings['section_title'].'</div>
                                        <h2>'.$settings['section_heading'].'</h2>
                                    </div>
                                    <div class="text">
                                        <p>'.$settings['section_info'].'</p>
                                    </div>
                                    <ul class="list-style-one">
                                       '.$settings['list_content'].'
                                    </ul>';
                                         if (!empty($settings['section_btn_url']['url'])) {
                                             echo ' <a href="' . $settings['section_btn_url']['url'] . '" class="topapp-theme-btn btn-style-three"><span class="txt">' . $settings['section_btn'] . '</span></a>';
                                         }
                                  echo' </div>
                            </div>
                            
                            <!-- Blocks Column -->
                            <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <!-- Cloud Icon -->
                                    <div class="cloud-icon">
                                        <img src="'.$settings['section_image_1']['url'].'" alt="Cloud" />
                                    </div>
                                    <div class="row clearfix">
                                        
                                        <!-- Featured Block -->
                                        <div class="featured-block titlt col-lg-6 col-md-6 col-sm-12" data-tilt data-tilt-max="8">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                 
                                                    <span class="feature_icon">';
                                                        \Elementor\Icons_Manager::render_icon( $settings['icon_one'], [ 'aria-hidden' => 'true' ] );
                                                    echo'</span>
                                                </div>
                                                <h3>'.$settings['icon_title_one'].'</h3>
                                                <div class="text">'.$settings['icon_content_one'].'</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Featured Block -->
                                        <div class="featured-block titlt style-two col-lg-6 col-md-6 col-sm-12" data-tilt data-tilt-max="6">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    
                                                     <span class="feature_icon">';
                                                        \Elementor\Icons_Manager::render_icon( $settings['icon_two'], [ 'aria-hidden' => 'true' ] );
                                                 echo'</span>
                                                </div>
                                                <h3>'.$settings['icon_title_two'].'</h3>
                                                <div class="text">'.$settings['icon_content_two'].'</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Featured Block -->
                                        <div class="featured-block titlt style-three col-lg-6 col-md-6 col-sm-12" data-tilt data-tilt-max="10">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    
                                                     <span class="feature_icon">';
                                                        \Elementor\Icons_Manager::render_icon( $settings['icon_three'], [ 'aria-hidden' => 'true' ] );
                                                    echo'</span>
                                                </div>
                                                <h3>'.$settings['icon_title_three'].'</h3>
                                                <div class="text">'.$settings['icon_content_three'].'</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Featured Block -->
                                        <div class="featured-block style-four col-lg-6 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                   
                                                    <span class="feature_icon">';
                                                        \Elementor\Icons_Manager::render_icon( $settings['icon_four'], [ 'aria-hidden' => 'true' ] );
                                                    echo'</span>
                                                </div>
                                                <h3>'.$settings['icon_title_four'].'</h3>
                                                <div class="text">'.$settings['icon_content_four'].'</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Side Image -->
                                    <div class="side-image">
                                        <img src="'.$settings['section_image_2']['url'].'" alt="Girl" />
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
	<!-- End Featured Section -->';
    }

    



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_featured_block );
?>