<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class demo_3_video extends Widget_Base {

   public function get_name() {
      return 'demo_3_video';
   }

   public function get_title() {
      return __( 'Demo Page Video', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-tools';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'video_top_content',
            [
                'label' => __('Content', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Short Video Tutorial' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Video will help you to learn much better!' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'tab_button',
            [
                'label' => __( 'Tab Button', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'show_button_1',
            [
                'label' => esc_html__( 'Show Button 1', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'btn_text_1', [
                'label' => esc_html__( 'Button Text 1', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'One Click Demo Install' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'show_button_2',
            [
                'label' => esc_html__( 'Show Button 2', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'your-plugin' ),
                'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'btn_text_2', [
                'label' => esc_html__( 'Button Text 2', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Elementor Page Builder' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Video_Content_1',
            [
                'label' => __( 'Video Content', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'video_bg_img',
            [
                'label' => __('Video BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'video_link',
            [
                'label' => esc_html__( 'Video Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'video_content_1',
            [
                'label' => esc_html__( 'Video Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => esc_html__( 'Added Slider Revolution', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Tutor LMS Plugin', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Elementor Page builder', 'appilo' ),
                    ],
                ],

            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'Video_contetn_2',
            [
                'label' => __( 'Video Content 2', 'appilo' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'video_bg_img',
            [
                'label' => __('Video BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'video_link',
            [
                'label' => esc_html__( 'Video Link', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'video_content_2',
            [
                'label' => esc_html__( 'Video Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_text' => esc_html__( 'Added Slider Revolution', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Tutor LMS Plugin', 'appilo' ),
                    ],
                    [
                        'feature_text' => esc_html__( 'Elementor Page builder', 'appilo' ),
                    ],
                ],

            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'buttons_style',
            [
                'label' => __('Feature Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__( 'Container Width', 'appilo' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 1200,
                ],
                'selectors' => [
                    '{{WRAPPER}} .container-1200' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();



?>

        <!-- Start of Video learning section
            ============================================= -->
        <div id="thx-video-learning" class="thx-video-learning-section position-relative">
            <div class="container container-1200">
                <div class="thx-section-title text-center headline">
                    <div class="sub-title">
                        <?php echo $settings['info']; ?>
                    </div>
                    <h2><?php echo $settings['title']; ?></h2>
                </div>

                <div class="thx-video-learning-content">
                    <div class="thx-video-learning-btn ul-li text-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php if ('yes' == $settings['show_button_1']):; ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?php echo $settings['btn_text_1']; ?></button>
                            </li>
                            <?php endif; ?>
                            <?php if ('yes' == $settings['show_button_2']):; ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php if ('' == $settings['show_button_1']){ echo 'active';} ?>" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?php echo $settings['btn_text_2']; ?></button>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <div class="thx-video-learning-tab-inner-content">
                        <div class="tab-content" id="myTabContent">

                            <?php if ('yes' == $settings['show_button_1']):; ?>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="thx-video-item-slider-wrapper position-relative">
                                    <div class="thx-video-item-slider">

                                    <?php foreach ($settings['video_content_1'] as $content_1): ?>
                                        <div class="thx-video-item position-relative">
                                            <img src="<?php echo $content_1['video_bg_img']['url']; ?>" alt="">
                                            <div class="video-play-btn">
                                                <a class="thx_video_box d-flex align-items-center justify-content-center" href="<?php echo $content_1['video_link']['url']; ?>">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if ('yes' == $settings['show_button_2']):; ?>
                            <div class="tab-pane fade <?php if ('' == $settings['show_button_1']){ echo 'show active';} ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="thx-video-item-slider-wrapper position-relative">
                                    <div class="thx-video-item-slider">

                                        <?php foreach ($settings['video_content_2'] as $content_2): ?>
                                            <div class="thx-video-item position-relative">
                                                <img src="<?php echo $content_2['video_bg_img']['url']; ?>" alt="">
                                                <div class="video-play-btn">
                                                    <a class="thx_video_box d-flex align-items-center justify-content-center" href="<?php echo $content_2['video_link']['url']; ?>">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Video learning section
            ============================================= -->




<?php

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new demo_3_video() );
?>