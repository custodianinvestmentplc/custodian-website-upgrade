<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class itsource_slider_2 extends Widget_Base {

   public function get_name() {
      return 'itsource_slider_2';
   }

   public function get_title() {
      return __( 'ItSource Slider 2', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() { 
        return 'eicon-scroll';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'itsource_Slider',
            [
                'label' => __('ItSource Slider', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'select_banner_style',
            [
                'label' => esc_html__( 'Banner Style', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1'  => esc_html__( 'Style 1', 'plugin-name' ),
                    'style_2' => esc_html__( 'Style 2', 'plugin-name' ),
                ],
            ]
        );
        $this->add_control(
            'banner_img',
            [
                'label' => __('Slider BG Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'tag', [
                'label' => esc_html__( 'Tag', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Focuc On Business' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'title', [
                'label' => esc_html__( 'Heading', 'appilo' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<span>&</span> It Services' , 'appilo' ),
                'show_label' => false,
            ]
        );
        $repeater->add_control(
            'info', [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Your business goal is not only profit but growth also.' , 'appilo' ),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'btn_1_title', [
                'label' => esc_html__( 'Button 1 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started Now' , 'appilo' ),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'btn_1_url',
            [
                'label' => esc_html__( 'Button 1 Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'btn_2_url',
            [
                'label' => esc_html__( 'Video Button URL', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
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
            'list',
            [
                'label' => esc_html__( 'Slider Content', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( '<span>&</span> It Services', 'appilo' ),
                    ],
                    [
                        'title' => __( '<span>&</span> It Services', 'appilo' ),
                    ],
                    [
                        'title' => __( '<span>&</span> It Services', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
                'condition' => [
                    'select_banner_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'mockup_img',
            [
                'label' => __('Slider Mockup Image', 'appilo'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'select_banner_style' => 'style_1',
                ],
            ]
        );

//        Slider style 2 controls
        $this->add_control(
            'tag_2', [
                'label' => esc_html__( 'Tag', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Focuc On Business' , 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'before_title', [
                'label' => esc_html__( 'Before Title Tag', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '&' , 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'type_text', [
                'label' => esc_html__( 'Typer Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'It Services' , 'appilo' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'typer_text',
            [
                'label' => esc_html__( 'Typer List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'type_text' => esc_html__( 'It Services', 'appilo' ),
                    ],
                    [
                        'type_text' => esc_html__( 'It Solution', 'appilo' ),
                    ],
                    [
                        'type_text' => esc_html__( 'Support', 'appilo' ),
                    ],
                ],
                'title_field' => '{{{ type_text }}}',
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__( 'Info', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Your business goal is not only profit but growth also.' , 'appilo' ),
                'label_block' => true,
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'btn_1_title', [
                'label' => esc_html__( 'Button 1 Text', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started Now' , 'appilo' ),
                'show_label' => true,
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'btn_1_url',
            [
                'label' => esc_html__( 'Button 1 Link', 'appilo' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'appilo' ),
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'style_banner',
            [
                'label' => __('Slider Style', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'background_overlay_color',
            [
                'label' =>   esc_html__( 'Background Overlay Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-item .background_overlay' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'select_banner_style' => 'style_2',
                ],
            ]
        );
        $this->add_control(
            'tag_color',
            [
                'label' =>   esc_html__( 'Tag Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #thx-it-slider-id .owl-item.active .thx-it-slider-content-box .slide-tag' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Tag_typo',
                'label' =>   esc_html__( 'Tag Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} #thx-it-slider-id .owl-item.active .thx-it-slider-content-box .slide-tag, 
                {{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box span',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_before_typo',
                'label' =>   esc_html__( 'Heading Before Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box h1 span',
            ]
        );
        $this->add_control(
            'Heading_color',
            [
                'label' =>   esc_html__( 'Heading Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content h1' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'Heading_special_color',
            [
                'label' =>   esc_html__( 'Heading Special Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content h1 span' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_banner_style' => 'style_1',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'Heading_typo',
                'label' =>   esc_html__( 'Heading Typography', 'appilo' ),
                'selector' =>
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content h1, 
                    {{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content h1 span,
                    {{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box h1,
                    {{WRAPPER}} strong.cd-words-wrapper b',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' =>   esc_html__( 'Information Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_typo',
                'label' =>   esc_html__( 'Information Typography', 'appilo' ),
                'selector' =>
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content p,
                    {{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'banner_btn_style',
            [
                'label' => __( 'Button Style', 'appilo' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_text_color',
            [
                'label' =>   esc_html__( 'Button Text Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content .thx-it-slider-btn .s-more-btn' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box .thx-it-slider-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typo',
                'label' =>   esc_html__( 'Button Typography', 'appilo' ),
                'selector' =>
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content .thx-it-slider-btn .s-more-btn,
                    {{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box .thx-it-slider-btn',
            ]
        );

        $this->add_control(
            'button_bg_circle_color',
            [
                'label' =>   esc_html__( 'Button BG Circle Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content .thx-it-slider-btn .s-more-btn:before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .thx-it-slider-style-two .thx-it-slider-content-box .thx-it-slider-btn a:before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'video_button_icon_color',
            [
                'label' =>   esc_html__( 'Video Button Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content .thx-it-slider-btn .s-video-btn i' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'select_banner_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'video_button_bg_color',
            [
                'label' =>   esc_html__( 'Video Button BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thx-it-slider-style-one .thx-it-slider-home-one .thx-it-slider-text-content .thx-it-slider-btn .s-video-btn' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'select_banner_style' => 'style_1',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
?>

        <?php
        if ($settings['select_banner_style'] == "style_1"){
        ?>
        <!-- Start of slider  section
	============================================= -->
        <div id="slider" class="thx-it-slider-section thx-it-slider-style-one relative-position" data-background="<?php echo $settings['banner_img']['url']; ?>">
            <div class="background-overlay"></div>
            <div id="thx-it-slider-id" class="thx-it-slider-home-one owl-carousel">
        <?php foreach ($settings['list'] as $item): ?>
                <div class="thx-it-slider-content-box">
                    <div class="thx-it-slider-text-content headline-1 pera-content">
                        <span class="slide-tag"><?php echo $item['tag']; ?></span>
                        <h1><?php echo $item['title']; ?></h1>
                        <p><?php echo $item['info']; ?></p>
                        <div class="thx-it-slider-btn">
                            <?php

                            if ($item['btn_1_url']['is_external']){
                                $target = '_blank';
                            }else{
                                $target = '';
                            }

                            if ($item['btn_1_url']['url']):

                                ?>
                                <a class="s-more-btn" href="<?php echo $item['btn_1_url']['url']; ?>" target="<?php echo $target; ?>"><?php echo $item['btn_1_title']; ?></a>
                            <?php endif; ?>
                            <?php
                            if ($item['btn_2_url']['url']):
                                ?>
                                <a class="s-video-btn d-inline-block text-center video_lightbox" href="<?php echo $item['btn_2_url']['url']; ?>"> <i class="fas fa-play"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
            </div>
            <div class="banner-mockup" data-parallax='{"x" : -70}'>
                <img src="<?php echo $settings['mockup_img']['url']; ?>" alt="">
            </div>
        </div>
        <!-- End of slider  section
            ============================================= -->
        <?php
        }else{
            ?>
            <!-- Start of slider section 2
	============================================= -->
            <div id="slider" class="thx-it-slider-area thx-it-slider-style-two">
                <div  class="thx-it-slider-preview-two">
                    <div class="thx-it-slider-content-item relative-position" data-background="<?php echo $settings['banner_img']['url']; ?>">
                        <div class="background_overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="thx-it-slider-content-box">
                                        <div class="thx-it-slider-text-content headline-2 pera-content">
                                            <span><?php echo $settings['tag_2']; ?></span>
                                            <h1 class="cd-headline push">
                                                <span><?php echo $settings['before_title']; ?></span>
                                                <strong class="cd-words-wrapper">
                                                    <?php
                                                    $i = 0;
                                                    foreach ($settings['typer_text'] as $typer):;
                                                    $i++;
                                                    if ($i == 1){
                                                        $is_visible = "is-visible";
                                                    }else{
                                                        $is_visible = "";
                                                    }

                                                    ?>
                                                    <b class="<?php echo $is_visible; ?>"><?php echo esc_html($typer['type_text']); ?></b>
                                                    <?php endforeach; ?>
                                                </strong>
                                            </h1>
                                            <p><?php echo $settings['info']; ?></p>
                                            <div class="thx-it-slider-btn">
                                                <?php
                                                if ($settings['btn_1_url']['is_external']){
                                                    $target = '_blank';
                                                }else{
                                                    $target = '';
                                                }

                                                if ($settings['btn_1_url']['url']):
                                                ?>
                                                <a href="<?php echo $settings['btn_1_url']['url']; ?>" target="<?php echo $target; ?>"><?php echo $settings['btn_1_title']; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of slider section
                ============================================= -->
            <?php
        }
        ?>


<?php

    }

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new itsource_slider_2() );
?>