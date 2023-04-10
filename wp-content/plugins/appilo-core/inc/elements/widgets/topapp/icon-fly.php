<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class topapp_icon_fly extends Widget_Base {

    public function get_name() {
        return 'topapp-icon-fly';
    }

    public function get_title() {
        return __( 'Icon Fly', 'appilo' );
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
                'label' => __( 'Content Section', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<span>In</span>tegrations', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_heading',
            [
                'label' => __( 'Section Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We use some plugins to do premium <br> quality <span>inte</span>g<span>rations</span>', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn',
            [
                'label' => __( 'Section Button', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'All Integretions', 'appilo' ),
            ]
        );
        $this->add_control(
            'section_btn_url', [
                'label' => __( 'Button Link', 'appilo' ),
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
            'icon_items',
            [
                'label' => __( 'Icon Items', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon_title', [
                'label' => __( 'Icon Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Elementor' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'icon_image', [
                'label' => __( 'Icon Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/resource/Integrations-3.jpg',
                ],
            ]
        );

        $this->add_control(
            'icon_list',
            [
                'label' => __( 'Icon List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-1.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-2.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-3.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-4.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-5.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-6.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-7.jpg',
                    ],
                    [
                        'icon_title' => __( 'Elementor', 'appilo' ),
                        'icon_image' => get_template_directory_uri(). '/img/topapp/resource/Integrations-8.jpg',
                    ],
                ],
                'title_field' => '{{{ icon_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => __( 'Background', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
                'selector' => '{{WRAPPER}} .integration-section .topapp-sec-title .title:before, 
                {{WRAPPER}} .integration-section .topapp-sec-title h2 span:before',
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __( 'Button Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => __( 'Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .btn-style-five',
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
                'selector' => '{{WRAPPER}} .btn-style-five:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_background_2',
                'label' => __( 'Button Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .btn-style-five:after',
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
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-10.png',
                ],
            ]
        );
        $this->add_control(
            'pattern_bg_4', [
                'label' => __( 'Pattern Background 4', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri(). '/img/topapp/background/pattern-11.png',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        echo '	<!-- Integration Section -->
                <section class="integration-section">
                    <div class="patern-layer-one" style="background-image: url('.$settings['pattern_bg_1']['url'].')"></div>
                    <div class="patern-layer-two" style="background-image: url('.$settings['pattern_bg_2']['url'].')"></div>
                    <div class="patern-layer-three" style="background-image: url('.$settings['pattern_bg_3']['url'].')"></div>
                    <div class="patern-layer-four" style="background-image: url('.$settings['pattern_bg_4']['url'].')"></div>
                    <div class="auto-container">
                        <div class="topapp-sec-title centered">
                            <div class="title">'.$settings['section_title'].'</div>
                            <h2>'.$settings['section_heading'].'</h2>
                        </div>
                    </div>
                    
                    <!-- Outer Container -->
                    <div class="outer-container">
                        
                        <div class="bubbles-wrapper">
                            <div class="animations m-0">';
                                 if ( $settings['icon_list'] ) {
                                     foreach (  $settings['icon_list'] as $icon_item ) {
                                         echo '<div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-md dynamic-faq-'.$icon_item['_id'].'">
                                                <img src="'.$icon_item['icon_image']['url'].'" alt="" class="img-responsive">
                                                <span class="badge badge-contrast shadow-box">'.$icon_item['icon_title'].'</span>
                                            </div>';
                                     }
                                 }
                             
                          echo'  </div>
                        </div>
                        
                    </div>';
                    if (!empty($settings['section_btn_url']['url'])){
                        echo '<div class="btn-box text-center">
                                <a href="'.$settings['section_btn_url']['url'].'" class="topapp-theme-btn btn-style-five"><span class="txt">'.$settings['section_btn'].'</span></a>
                            </div>';
                    }
               echo' </section>
	<!-- End Integration Section -->';
    }



    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new topapp_icon_fly );
?>